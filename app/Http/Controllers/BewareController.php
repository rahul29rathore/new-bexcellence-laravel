<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BewareController extends Controller
{
    public function index(Request $request)
    {
        $invoiceSums = DB::table('bewarepodatafile')
            ->select(
                DB::raw("SUM(CASE WHEN sale_type = 'Sale' AND payment_type = 'Invoice Value' AND account_approval_status = 1 THEN account_approval_invoice_total ELSE 0 END) AS sale_invoice_value"),
                DB::raw("SUM(CASE WHEN sale_type = 'Sale' AND payment_type = 'Debit Note' AND account_approval_status = 1 THEN account_approval_invoice_total ELSE 0 END) AS sale_debit_note"),
                DB::raw("SUM(CASE WHEN sale_type = 'Sale' AND payment_type = 'Credit Note' AND account_approval_status = 1 THEN account_approval_invoice_total ELSE 0 END) AS sale_credit_note"),
                DB::raw("SUM(CASE WHEN sale_type = 'Purchase' AND payment_type = 'Invoice Value' AND account_approval_status = 1 THEN account_approval_invoice_total ELSE 0 END) AS purchase_invoice_value"),
                DB::raw("SUM(CASE WHEN sale_type = 'Purchase' AND payment_type = 'Debit Note' AND account_approval_status = 1 THEN account_approval_invoice_total ELSE 0 END) AS purchase_debit_note"),
                DB::raw("SUM(CASE WHEN sale_type = 'Purchase' AND payment_type = 'Credit Note' AND account_approval_status = 1 THEN account_approval_invoice_total ELSE 0 END) AS purchase_credit_note")
            )
            ->first();

        $sale_invoice_value = $invoiceSums->sale_invoice_value ?? 0;
        $sale_debit_note = $invoiceSums->sale_debit_note ?? 0;
        $sale_credit_note = $invoiceSums->sale_credit_note ?? 0;
        $purchase_invoice_value = $invoiceSums->purchase_invoice_value ?? 0;
        $purchase_debit_note = $invoiceSums->purchase_debit_note ?? 0;
        $purchase_credit_note = $invoiceSums->purchase_credit_note ?? 0;

        $final_invoice_value_sale = round(($sale_invoice_value + $sale_debit_note) - $sale_credit_note, 2);
        $total_sale_amt_received = round(DB::table('bewarepodatapayment')->where('sale_type', 'Sale')->sum('adv_payment'), 2);
        $remaining_amount_sale = round($final_invoice_value_sale - $total_sale_amt_received, 2);

        $final_invoice_value_purchase = round(($purchase_invoice_value + $purchase_credit_note) - $purchase_debit_note, 2);
        $purchase_amount_paid = round(DB::table('bewarepodatapayment')->where('sale_type', 'Purchase')->sum('adv_payment'), 2);

        $total_expenses = round(DB::table('bewareexpenses')->where('approval_status', 1)->sum('total'), 2);
        $items = DB::table('procurementitemmasterdata')
            ->where('project_type', 'BEW')
            ->orderBy('procurementitemmasterdata_id', 'DESC')
            ->get();

        $total_stock_value = 0;
        foreach ($items as $item) {
            $counts = DB::table('bewareitemmasterdata_serial_no_data')
                ->where('procurementitemmasterdata_id', $item->procurementitemmasterdata_id)
                ->select(DB::raw("
                    SUM(CASE WHEN po_no_created_status = 1 THEN 1 ELSE 0 END) as num_rows_po,
                    SUM(CASE WHEN bp_no_created_status = 1 THEN 1 ELSE 0 END) as num_rows_bp,
                    SUM(CASE WHEN dp_no_created_status = 1 THEN 1 ELSE 0 END) as num_rows_dp,
                    SUM(CASE WHEN op_no_created_status = 1 THEN 1 ELSE 0 END) as num_rows_op
                "))
                ->first();

            $pending_qty = $item->qty - (
                ($counts->num_rows_po ?? 0) +
                ($counts->num_rows_bp ?? 0) +
                ($counts->num_rows_dp ?? 0) +
                ($counts->num_rows_op ?? 0)
            );

            $cost_unit_price = $item->cost_unit_price ?? 0;
            $total_stock_value += ($pending_qty * $cost_unit_price);
        }

        $final_stock = round($total_stock_value, 2);
        $total_delivery_challan = DB::table('bewaredeliverychallandata')->count();
        $total_distributors = DB::table('client_related_details')->count();
        $poData = DB::table('bewarepodata')->where('sale_type', '!=', 'Purchase')->count();
        $PurchaseData = DB::table('bewarepodata')->where('sale_type', 'Purchase')->count();

        $saleData = DB::table('bewarepodatafile')
            ->join('bewarepodata', 'bewarepodatafile.bewarepodata_id', '=', 'bewarepodata.bewarepodata_id')
            ->where('bewarepodatafile.sale_type', 'Sale')
            ->orderBy('bewarepodatafile.account_approval_invoice_date', 'ASC')
            ->select('bewarepodatafile.*', 'bewarepodata.*')
            ->get();

        $year = $request->get('year', date('Y') . '-' . (date('Y') + 1));
        $startYear = intval(explode('-', $year)[0]);
        $endYear = $startYear + 1;
        $serialNumber = 1;

        $monthNames = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];

        $months = array_merge(range(4, 12), range(1, 3));
        $rows = [];
        $totals = [
            'saleAmount_wog' => 0,
            'saleAmount' => 0,
            'saleAmount_Credit_Note' => 0,
            'saleAmountReceived' => 0,
            'saleAmountRemaining' => 0,
            'purchaseAmount' => 0,
            'purchaseamount_without_gst' => 0,
            'purchaseAmount_Debit_Note' => 0,
            'purchaseAmountPaid' => 0,
            'purchaseAmountRemaining' => 0,
            'totalExpenses' => 0,
            'totalStockValue' => 0,
        ];

        foreach ($months as $month) {
            $currentYear = $month >= 4 ? $startYear : $endYear;
            $monthData = $this->getMonthData($month, $currentYear, $serialNumber, $monthNames[$month]);
            $rows[] = $monthData;

            foreach ($totals as $key => $val) {
                $totals[$key] += $monthData[$key];
            }
            $serialNumber++;
        }

        return view('beware-dashboard', compact(
            'final_invoice_value_sale',
            'total_sale_amt_received',
            'remaining_amount_sale',
            'final_invoice_value_purchase',
            'purchase_amount_paid',
            'total_expenses',
            'final_stock',
            'total_delivery_challan',
            'total_distributors',
            'poData',
            'PurchaseData',
            'saleData',
            'year',
            'rows',
            'totals'
        ));
    }

    private function getMonthData($month, $year, $serialNumber, $monthName)
    {
        $startDate = Carbon::create($year, $month, 1)->startOfMonth();
        $endDate = Carbon::create($year, $month, 1)->endOfMonth();

        $invoice = round(DB::table('bewarepodatafile')
            ->where('payment_type', 'Invoice Value')
            ->where('sale_type', '!=', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_basic_amount'), 2);


        $debit = DB::table('bewarepodatafile')
            ->where('payment_type', 'Debit Note')
            ->where('sale_type', '!=', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_basic_amount');

        $credit = DB::table('bewarepodatafile')
            ->where('payment_type', 'Credit Note')
            ->where('sale_type', '!=', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_basic_amount');

        $v_wog = round(($invoice + $debit - $credit), 2);


        $invoice = DB::table('bewarepodatafile')
            ->where('payment_type', 'Invoice Value')
            ->where('sale_type', '!=', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_total');

        $debit = DB::table('bewarepodatafile')
            ->where('payment_type', 'Debit Note')
            ->where('sale_type', '!=', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_total');

        $credit = DB::table('bewarepodatafile')
            ->where('payment_type', 'Credit Note')
            ->where('sale_type', '!=', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_total');

        $saleAmount = round(($invoice + $debit - $credit), 2);



        $saleAmountCreditNote = round(DB::table('bewarepodatafile')
            ->where('payment_type', 'Credit Note')
            ->where('sale_type', '!=', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_total'), 2);

        $saleAmountReceived = round(DB::table('bewarepodatapayment')
            ->where('sale_type', 'Sale')
            ->whereBetween('adv_payment_date', [$startDate, $endDate])
            ->sum('adv_payment'), 2);

        $saleAmountRemaining = round($saleAmount - $saleAmountReceived, 2);

        $purchaseAmount = round(DB::table('bewarepodatafile')
            ->where('payment_type', 'Invoice Value')
            ->where('sale_type', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_total'), 2);

        $purchaseamount_without_gst = round(DB::table('bewarepodatafile')
            ->where('payment_type', 'Invoice Value')
            ->where('sale_type', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_basic_amount'), 2);

        $purchaseAmountDebitNote = round(DB::table('bewarepodatafile')
            ->where('payment_type', 'Debit Note')
            ->where('sale_type', 'Purchase')
            ->where('account_approval_status', 1)
            ->whereBetween('account_approval_invoice_date', [$startDate, $endDate])
            ->sum('account_approval_invoice_total'), 2);

        $purchaseAmountPaid = round(DB::table('bewarepodatapayment')
            ->where('sale_type', 'Purchase')
            ->whereBetween('adv_payment_date', [$startDate, $endDate])
            ->sum('adv_payment'), 2);

        $purchaseAmountRemaining = round($purchaseAmount - $purchaseAmountPaid, 2);

        // Total Expenses
        $res_total_expenses_show = round(DB::table('bewareexpenses')
            ->where('approval_status', 1)
            ->whereBetween('from_date', [$startDate, $endDate])
            ->sum('total'), 2);

        // Total Stock Value
        $result_total_stock_value_show = round(DB::table('bewareitemmasterdata')
            ->where('project_type', 'BEW')
            ->whereBetween('approval_date', [$startDate, $endDate])
            ->sum('unit_price'), 2);


        return [
            'serialNumber' => $serialNumber,
            'monthName' => $monthName,
            'year' => $year,
            'startDate' => $startDate, // Add this line
            'endDate' => $endDate,     // Add this line'
            'saleAmount_wog' => $v_wog,
            'saleAmount' => $saleAmount,
            'saleAmount_Credit_Note' => $saleAmountCreditNote,
            'saleAmountReceived' => $saleAmountReceived,
            'saleAmountRemaining' => $saleAmountRemaining,
            'purchaseAmount' => $purchaseAmount,
            'purchaseamount_without_gst' => $purchaseamount_without_gst,
            'purchaseAmount_Debit_Note' => $purchaseAmountDebitNote,
            'purchaseAmountPaid' => $purchaseAmountPaid,
            'purchaseAmountRemaining' => $purchaseAmountRemaining,
            'totalExpenses' => $res_total_expenses_show,
            'totalStockValue' => $result_total_stock_value_show,
        ];
    }
}
