<?php

namespace App\Http\Controllers;

use App\Models\MutualFund;
use App\Models\MutualFundDetails;
use App\Models\MutualFundProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutualFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.MutualFund.mutualFund_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.MutualFund.AddMutualFund');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $mutualFund = new MutualFund();
            $mutualFund->division_name = $request->division_name;
            $mutualFund->branch_name = $request->branch_name;
            $mutualFund->manager_code = $request->manager_code;
            $mutualFund->staff_code = $request->staff_code;
            $mutualFund->telecallar_code = $request->telecallar_code;
            $mutualFund->ins_date = $request->ins_date;
            $mutualFund->ack_no = 'ACK-1';
            $mutualFund->name = $request->name;
            $mutualFund->address = $request->address;
            $mutualFund->tel_no = $request->tel_no;
            $mutualFund->mob_no = $request->mob_no;
            $mutualFund->email = $request->email;
            $mutualFund->sub_broker_name = $request->sub_broker_name;
            $mutualFund->pan_card_no = $request->pan_card_no;
            $mutualFund->kyc_form = $request->kyc_form;
            $mutualFund->other = $request->other;
            $mutualFund->client_signature = $request->client_signature;
            $mutualFund->stuff_signature = $request->stuff_signature;
            $mutualFund->mutual_date = $request->mutual_date;
            $mutualFund->save();

            $lastMutualId = 'ACK-' . $mutualFund->id;
            $upmutualFund = MutualFund::where('id', $mutualFund->id)->first();
            $upmutualFund->ack_no = $lastMutualId;
            $upmutualFund->save();

            $mutualFundDetail = new MutualFundDetails();
            $mutualFundDetail->mutual_fund_id = $mutualFund->id;
            $mutualFundDetail->types = $request->mutual_fund;
            $mutualFundDetail->scheme_name = $request->scheme_name;
            $mutualFundDetail->option = $request->option;
            $mutualFundDetail->amount = $request->amount;
            $mutualFundDetail->follo_no = $request->follo_no;
            $mutualFundDetail->application_no = $request->application_no;
            $mutualFundDetail->no_of_units = $request->no_of_units;
            $mutualFundDetail->sip_start_date = $request->sip_start_date;
            $mutualFundDetail->sip_end_date = $request->sip_end_date;
            $mutualFundDetail->switch_from = $request->switch_from;
            $mutualFundDetail->switch_to = $request->switch_to;
            $mutualFundDetail->save();

            $mutualFundProduct = new MutualFundProduct();
            $mutualFundProduct->mutual_fund_id = $mutualFund->id;
            $mutualFundProduct->types = $request->other_product;
            $mutualFundProduct->company_name = $request->company_name;
            $mutualFundProduct->pro_amount = $request->pro_amount;
            $mutualFundProduct->cheque_date = $request->cheque_date;
            $mutualFundProduct->pdct_application_no = $request->pdct_application_no;
            $mutualFundProduct->cheque_no = $request->cheque_no;
            $mutualFundProduct->pay_cheque_date = $request->pay_cheque_date;
            $mutualFundProduct->maturity_date = $request->maturity_date;
            $mutualFundProduct->bank_name = $request->bank_name;
            $mutualFundProduct->bank_branch = $request->bank_branch;
            $mutualFundProduct->fdr_no = $request->fdr_no;
            $mutualFundProduct->save();

            DB::commit();
            return redirect()->back()->with('message', 'Add Mutual Fund Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function show(MutualFund $mutualFund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function edit(MutualFund $mutualFund)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MutualFund $mutualFund)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MutualFund  $mutualFund
     * @return \Illuminate\Http\Response
     */
    public function destroy(MutualFund $mutualFund)
    {
        //
    }
}
