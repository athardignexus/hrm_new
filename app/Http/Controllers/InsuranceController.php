<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\InsuranceDocument;
use App\Models\InsurancePolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Insurance::with('insPolicy', 'insDocument')->get();
        // return $data;
        return view('admin.Insurance.insurance_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Insurance.add_insurance');
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
            $insurance = new Insurance();
            $insurance->division_name = $request->division_name;
            $insurance->branch_name = $request->branch_name;
            $insurance->manager_code = $request->manager_code;
            $insurance->staff_code = $request->staff_code;
            $insurance->telecallar_code = $request->telecallar_code;
            $insurance->ins_date = $request->ins_date;

            $insurance->ack_no = 'ACK-1';

            $insurance->address = $request->address;
            $insurance->pincode = $request->pincode;
            $insurance->email = $request->email;
            $insurance->tel_no = $request->tel_no;
            $insurance->mob_no = $request->mob_no;

            $insurance->other_document = $request->other_document;
            $insurance->total_document = $request->total_document;
            $insurance->client_signature = $request->client_signature;
            $insurance->stuff_signature = $request->stuff_signature;
            $insurance->aadhar_date = $request->aadhar_date;
            $insurance->save();

            // $lastInsuranceId = Insurance::select('ack_no')->latest()->limit(1)->first();
            // $lastInsuranceId = preg_replace('/[^0-9]/', '', $lastInsuranceId);
            // if (isset($lastInsuranceId) && !empty($lastInsuranceId)) {
            //     $lastInsuranceId = 'Ack-' . $lastInsuranceId + 1;
            // } else {
            //     $lastInsuranceId = 'Ack-1';
            // }

            $lastInsuranceId = 'ACK-' . $insurance->id;
            $upInsurance = Insurance::where('id', $insurance->id)->first();
            $upInsurance->ack_no = $lastInsuranceId;
            $upInsurance->save();

            $insPolicy = new InsurancePolicy();
            $insPolicy->insurance_id = $insurance->id;
            $insPolicy->company_name = $request->company_name;
            $insPolicy->policy_name = $request->policy_name;
            $insPolicy->fund_option = $request->fund_option;
            $insPolicy->life_assured_name = $request->life_assured_name;
            $insPolicy->proposer_name = $request->proposer_name;
            $insPolicy->nominee_name = $request->nominee_name;
            $insPolicy->sum_assured = $request->sum_assured;
            $insPolicy->policy_term = $request->policy_term;
            $insPolicy->ppt = $request->ppt;
            $insPolicy->premium_mode = $request->premium_mode;
            $insPolicy->cheque_date = $request->cheque_date;
            $insPolicy->applicatio_no = $request->applicatio_no;
            $insPolicy->premium_amount = $request->premium_amount;
            $insPolicy->cheque_amount = $request->cheque_amount;
            $insPolicy->cheque_no = $request->cheque_no;
            $insPolicy->drown_on = $request->drown_on;
            $insPolicy->save();

            $insDocument = new InsuranceDocument();
            $insDocument->insurance_id = $insurance->id;
            $insDocument->age_proof = $request->age_proof;
            $insDocument->address_proof = $request->address_proof;
            $insDocument->income_proof = $request->income_proof;
            $insDocument->age_proof = $request->age_proof;
            $insDocument->address_proof = $request->address_proof;
            $insDocument->income_proof = $request->income_proof;

            $picture = array();
            $iCount = 0;
            if ($request->hasFile('document_files')) :
                $images = $request->file('document_files');
                $arr = array();
                foreach ($images as $item) :
                    $extension = $item->getClientOriginalExtension();
                    $name = time() . $iCount . '.' . $extension;
                    $item->move('uploads/documents/', $name);
                    $arr[] = $name;
                    $iCount++;
                endforeach;

                $picture = implode(",", $arr);
            else :
                $picture = '';
            endif;

            $insDocument->document_files = $picture;

            $insDocument->ins_doc_date = $request->ins_doc_date;
            $insDocument->save();

            DB::commit();
            return redirect()->back()->with('message', 'Add Insurance Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Insurance $insurance)
    {
        return "hhh";
        return view('admin.Insurance.edit_insurance');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurance $insurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insurance $insurance)
    {
        //
    }
}
