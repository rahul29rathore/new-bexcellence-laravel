<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $totalMDC = DB::table('mdcsqft')->count();

        $totalWCC = DB::table('wccsqft')->count();

        $totalPO = DB::table('posqftdata')->count();

        $totalPOAmount = DB::table('posqftdataitemdetails')->sum('total');

        $totalDC = DB::table('dcsqftdata')->count();

        $poData = [
            ['name' => 'MDC', 'po_count' => $totalMDC],
            ['name' => 'WCC', 'po_count' => $totalWCC],
            ['name' => 'PO', 'po_count' => $totalPO],
            ['name' => 'DC', 'po_count' => $totalDC],
        ];



        // $totalMDC = DB::table('mdcsqft')->count();
        // $totalWCC = DB::table('wcc')->count(); // Replace with actual table
        // $totalPO = DB::table('purchase_orders')->count();
        // $totalPOAmount = DB::table('purchase_orders')->sum('amount');
        // $totalDC = DB::table('dc')->count(); // Replace with actual table
        // $totalDCValue = DB::table('dc')->sum('amount');



        // $totalLeads = DB::table('leads')->count();
        // $totalBOQ = DB::table('boq_submissions')->count();
        // $boqByMukesh = DB::table('boq_submissions')->where('submitted_by', 'Mukesh')->count();
        // $boqByAnkush = DB::table('boq_submissions')->where('submitted_by', 'Ankush')->count();
        // $boqByRahul = DB::table('boq_submissions')->where('submitted_by', 'Rahul Raj')->count();

        return view('13sqft-dashboard', compact(
            'totalMDC',
            'totalWCC',
            'totalPO',
            'totalDC',
            'totalPOAmount',
            'poData'
        ));
    }
}
