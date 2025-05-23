<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WCCController extends Controller
{
    // WCC DASHBOARD
    public function index(Request $request)
    {
        $search = $request->input('search');
        $limit = $request->input('limit', 10);
        $limit = ($limit === 'All') ? 100000 : $limit;

        $query = DB::table('wccsqft')->orderBy('wcc_id', 'desc');
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('client_name', 'like', "%{$search}%")
                    ->orWhere('client_po_no', 'like', "%{$search}%")
                    ->orWhere('project_id', 'like', "%{$search}%");
            });
        }

        $totalWCC = $query->paginate($limit)->appends([
            'search' => $search,
            'limit' => $limit,
        ]);

        if ($request->ajax()) {
            return view('include.13sqft-wcc-table', compact('totalWCC'))->render();
        }

        return view('13sqft-wcc', compact('totalWCC'));
    }


    // ADD ITEMS
    public function addItems(Request $request)
    {

        DB::beginTransaction();

        try {
            $wcc_u_id = uniqid();
            $wcc_status = 1;
            $wcc_date = date("Y-m-d");
            $time = date("h:i:sa");
            DB::table('wccsqft')->insert([
                'client_name' => $request->client_name,
                'client_date' => $request->client_date,
                'project_id' => $request->project_id,
                'serial_no' => $request->serial_no,
                'client_po_no' => $request->client_po_no,
                'location_code' => $request->location_code,
                'location_name' => $request->location_name,
                'address' => $request->address,
                'contact_name' => $request->contact_name,
                'contact_no' => $request->contact_no,
                'wcc_status' => $wcc_status,
                'wcc_u_id' => $wcc_u_id,
                'wcc_date' => $wcc_date,
                'terms_and_condition' => '',
                'requiredvaluablefeedback' => '',
                'feedback' => '',
                'login_id' => '18',
                'login_name' => 'Rudraa',
                'login_emailid' => 'rohitsir1999@gmail.com'
            ]);

            $count = count($request->item);

            for ($i = 0; $i < $count; $i++) {
                DB::table('wccsqft_items')->insert([
                    'project_id' => $request->project_id,
                    'serial_no' => $request->serial_no,
                    'wcc_u_id' => $wcc_u_id,
                    'sno' => $i + 1,
                    'client_po_no' => $request->client_po_no,
                    'item' => addslashes($request->item[$i]),
                    'qty' => addslashes($request->qty[$i]),
                    'si' => addslashes($request->si[$i]),
                    'unit' => addslashes($request->unit[$i]),
                    'date' => $wcc_date,
                    'time' => $time,
                    'login_name' => 'Rudraa',
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'WCC data saved successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->back()->with('error', 'Failed to save data: ' . $e->getMessage());
        }
    }


    public function edit($id)
    {
        $fetch = DB::table('mdcsqft')->where('mdc_id', $id)->first();

        $mdc_u_id = $fetch->mdc_u_id;

        $mdc_items = DB::table('mdcsqft_items')->where('mdc_u_id', $mdc_u_id)->get();


        return view('13sqft-mdc-edit', compact('fetch', 'mdc_items'));
    }
    public function deleteitem($id)
    {
        DB::beginTransaction();
        try {
            $mdc_items_id = $id;

            DB::table('mdcsqft_items')->where('mdc_items_id', $mdc_items_id)->delete();
            DB::commit();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function delete($id)
    {
        DB::beginTransaction();

        try {
            $fetch = DB::table('mdcsqft')->where('mdc_id', $id)->first();

            if (!$fetch) {
                return response()->json(['error' => 'MDC not found.'], 404);
            }

            $mdc_u_id = $fetch->mdc_u_id;

            DB::table('mdcsqft_items')->where('mdc_u_id', $mdc_u_id)->delete();
            DB::table('mdcsqft')->where('mdc_id', $id)->delete();

            DB::commit();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function updateItems(Request $request)
    {
        $mdc_id = $request->mdc_id;
        $project_id = $request->project_id;
        $serial_no = $request->serial_no;
        $mdc_u_id = $request->mdc_u_id;
        $client_po_no = $request->client_po_no;

        $client_name = addslashes($request->client_name);
        $client_date = addslashes($request->client_date);
        $location_code = addslashes($request->location_code);
        $location_name = addslashes($request->location_name);
        $contact_name = addslashes($request->contact_name);
        $contact_no = addslashes($request->contact_no);
        $address = addslashes($request->address);
        DB::table('mdcsqft')
            ->where('mdc_id', $mdc_id)
            ->update([
                'client_name' => $client_name,
                'client_date' => $client_date,
                'project_id' => $project_id,
                'serial_no' => $serial_no,
                'client_po_no' => $client_po_no,
                'location_code' => $location_code,
                'location_name' => $location_name,
                'contact_name' => $contact_name,
                'contact_no' => $contact_no,
                'address' => $address,
            ]);
        foreach ($request->item as $index => $item) {
            $item = addslashes($request->item[$index]);
            $qty = addslashes($request->qty[$index]);
            $unit = addslashes($request->unit[$index]);
            $mdc_items_id = $request->mdc_items_id[$index];
            DB::table('mdcsqft_items')
                ->where('mdc_items_id', $mdc_items_id)
                ->update([
                    'item' => $item,
                    'qty' => $qty,
                    'unit' => $unit,
                ]);
        }

        return redirect()->route('13sqft-mdc-edit', ['id' => $mdc_id])->with('success', 'MDC and items updated successfully!');
    }

    public function mdcPdfView($id)
    {
        DB::beginTransaction();

        $fetch = DB::table('mdcsqft')->where('mdc_id', $id)->first();

        $mdc_u_id = $fetch->mdc_u_id;

        $mdc_items = DB::table('mdcsqft_items')->where('mdc_u_id', $mdc_u_id)->get();


        return view('13sqft-mdc-pdf', compact('fetch', 'mdc_items'));
    }

}
