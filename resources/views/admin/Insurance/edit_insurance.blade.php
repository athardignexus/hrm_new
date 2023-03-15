@extends('admin.index')
@section('main_section')
    <div class="main-content">

        <div class="page-content">
            <section class="content content-custom no-print">
                <div class=" content-wrapper " style="min-height: 306px;">
                    <!-- empty div for vuejs -->
                    <div id="app"></div>
                    <!-- Add currency related field-->
                    <input type="hidden" id="__code" value="356">
                    <input type="hidden" id="__symbol" value="₹">
                    <input type="hidden" id="__thousand" value="">
                    <input type="hidden" id="__decimal" value="">
                    <input type="hidden" id="__symbol_placement" value="before">
                    <input type="hidden" id="__precision" value="2">
                    <input type="hidden" id="__quantity_precision" value="2">
                    <!-- End of currency related field-->
                    <input type="hidden" id="view_export_buttons">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1> Customers <small>Manage your Customers</small>
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content2">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Insurance Form</h3>
                            </div>
                            <div class="box-body">
                                <div class="form_info_structure">
                                    <div class="containers">
                                        <div class="upper_writing">
                                            <h1>INSURANCE</h1>
                                            <h3>REALABLE FINANCIAL SERVICES PVT. LTD.</h3>
                                            <h4>MUTUAL FUND DISTRIBUTOR</h4>
                                            <P>Website: www.realableindia.co.in Email: realableindia.com</P>
                                            <p>Regd. Office: B-279 Survey Park, Santoshpur, W.B. Kolkata - 700075</p>
                                            <p style="margin-bottom: 20px !important;">Branch: 24, Raja Rammohon Roy Road,
                                                Hakimpara, Siliguri,
                                                Darjeeling Pin-734001, W.B.</p>
                                        </div>
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <form class="needs-validation"
                                            action="{{ auth()->user()->role == '0' ? route('admin.insurance.store') : route('user.insurance.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="maneger_total">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Division
                                                                Name</strong></label>
                                                        <input type="text" name="division_name" class="form-control"
                                                            id="name" value="{{ old('division_name') }}" placeholder=""
                                                            required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please add a Division Name.
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Branch
                                                                Name</strong></label>
                                                        <input type="text" name="branch_name" class="form-control"
                                                            id="name" value="{{ old('branch_name') }}" placeholder=""
                                                            required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please add a branch Name.
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Manager
                                                                Code</strong></label>
                                                        <input type="text" name="manager_code" class="form-control"
                                                            id="name" value="{{ old('manager_code') }}" placeholder=""
                                                            required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please add a manager code.
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Staff
                                                                Code</strong></label>
                                                        <input type="text" name="staff_code" class="form-control"
                                                            id="name" value="{{ old('staff_code') }}" placeholder=""
                                                            required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please add a staff code.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Telecallar
                                                                Code</strong></label>
                                                        <input type="text" name="telecallar_code" class="form-control"
                                                            id="name" value="{{ old('telecallar_code') }}"
                                                            placeholder="" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please add a telecaller code.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="date_all">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for=""
                                                            style="padding-left: 5px;"><strong>Date</strong></label>
                                                        <input type="date" name="ins_date" class="form-control"
                                                            id="name" value="{{ old('ins_date') }}" placeholder=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    Ack No. <strong>IB</strong> (Auto Generate)
                                                </div>
                                            </div>

                                            <div class="ackownaladge">
                                                <h5><strong>Acknoledgement</strong> (Subject and Terms & Conditions Printed
                                                    Overleaf)</h5>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Name &
                                                            Address</strong></label>
                                                    <input type="text" name="address" class="form-control"
                                                        id="name" value="{{ old('address') }}" placeholder=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a name & address.
                                                    </div>
                                                </div>
                                                <div class="total_acknow">
                                                    <div class="left_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>PinCode</strong></label>
                                                            <input type="text" name="pincode" class="form-control"
                                                                id="telephone" placeholder=""
                                                                value="{{ old('pincode') }}" required minlength="7"
                                                                maxlength="12">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please choose a valid telephone number (between 7 and 10
                                                                characters).
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Tel
                                                                    No.</strong></label>
                                                            <input type="number" name="tel_no" class="form-control"
                                                                id="telephone" value="{{ old('tel_no') }}"
                                                                placeholder="" required minlength="7" maxlength="12">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please choose a valid telephone number (between 7 and 10
                                                                characters).
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>E-mail</strong></label>
                                                            <input type="text" name="email" class="form-control"
                                                                id="email" value="{{ old('email') }}"
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add an email.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Mob
                                                                    No.</strong></label>
                                                            <input type="text" name="mob_no" class="form-control"
                                                                id="telephone" value="{{ old('mob_no') }}"
                                                                placeholder="" required minlength="7" maxlength="12">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please choose a valid telephone number (between 7 and 10
                                                                characters).
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ackownaladge">
                                                <h5><strong>Policy Details:</strong></h5>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Insurance
                                                            Company Name</strong></label>
                                                    <input type="text" name="company_name" class="form-control"
                                                        id="name" value="{{ old('company_name') }}" placeholder=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a insurance company name.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Policy
                                                            Name</strong></label>
                                                    <input type="text" name="policy_name" class="form-control"
                                                        id="name" value="{{ old('policy_name') }}" placeholder=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a policy name.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Fund
                                                            Option</strong></label>
                                                    <input type="text" name="fund_option" class="form-control"
                                                        id="name" value="{{ old('fund_option') }}" placeholder=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a fund option.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Life Assured
                                                            Name</strong></label>
                                                    <input type="text" name="life_assured_name" class="form-control"
                                                        id="name" value="{{ old('life_assured_name') }}"
                                                        placeholder="" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a life assured name.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Proposer
                                                            Name</strong></label>
                                                    <input type="text" name="proposer_name" class="form-control"
                                                        id="name" value="{{ old('proposer_name') }}" placeholder=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a proposer name.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Nominee
                                                            Name</strong></label>
                                                    <input type="text" name="nominee_name" class="form-control"
                                                        id="name" value="{{ old('nominee_name') }}" placeholder=""
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please add a nominee name.
                                                    </div>
                                                </div>
                                                <div class="total_acknow">
                                                    <div class="left_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Sum
                                                                    Assured</strong></label>
                                                            <input type="text" name="sum_assured" class="form-control"
                                                                id="name" value="{{ old('sum_assured') }}"
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a sum assured.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Policy
                                                                    Term</strong></label>
                                                            <input type="text" name="policy_term" class="form-control"
                                                                id="name" value="{{ old('policy_term') }}"
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a sum assured.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>P.P.T.</strong></label>
                                                            <input type="text" name="ppt" class="form-control"
                                                                id="name" value="{{ old('ppt') }}"
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a p.p.t.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Premium
                                                                    Mode</strong></label>
                                                            <input type="text" name="premium_mode"
                                                                class="form-control" value="{{ old('premium_mode') }}"
                                                                id="name" placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a premium mode.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Cheque Date ( dd-mm-yyyy
                                                                    )</strong></label>
                                                            <input type="date" name="cheque_date" class="form-control"
                                                                id="name" value="{{ old('cheque_date') }}"
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a cheque date.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Applicatio
                                                                    No.</strong></label>
                                                            <input type="text" name="applicatio_no"
                                                                class="form-control" value="{{ old('applicatio_no') }}"
                                                                id="name" placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a applicatio no.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Premium
                                                                    Amount</strong></label>
                                                            <input type="number" name="premium_amount"
                                                                class="form-control" value="{{ old('premium_amount') }}"
                                                                id="name" placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a premium amount.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Cheque
                                                                    Amount</strong></label>
                                                            <input type="number" name="cheque_amount"
                                                                class="form-control" value="{{ old('cheque_amount') }}"
                                                                id="name" placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a cheque amount.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Cheque
                                                                    No.</strong></label>
                                                            <input type="text" name="cheque_no" class="form-control"
                                                                id="name" value="{{ old('cheque_no') }}"
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a cheque no.
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Drown
                                                                    On ( dd-mm-yyyy )</strong></label>
                                                            <input type="date" name="drown_on" class="form-control"
                                                                id="name" value="{{ old('drown_on') }}"
                                                                placeholder="" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please add a drawn on.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="check_section">
                                                <h5><strong>Document Attached <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                height="15" width="15" fill="#000"
                                                                viewBox="0 0 448 512">
                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                <path
                                                                    d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                            </svg></span></strong></h5>
                                                <div class="check_total">
                                                    <div class="same_div">
                                                        <ul>
                                                            <li>
                                                                <p><strong>Age Proof</strong> <span><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            height="15" width="15" fill="#000"
                                                                            viewBox="0 0 448 512">
                                                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                            <path
                                                                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                                        </svg></span></p>
                                                            </li>

                                                            {{ getAgeProof('') }}

                                                            <li>
                                                                <input type="date" name="ins_doc_date"
                                                                    class="form-control" id="date" required>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="same_div">
                                                        <ul>
                                                            <li>
                                                                <p><strong>Address Proof</strong> <span><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            height="15" width="15" fill="#000"
                                                                            viewBox="0 0 448 512">
                                                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                            <path
                                                                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                                        </svg></span></p>
                                                            </li>
                                                            {{ getAddressProof('') }}
                                                            <li>
                                                                <label for=""
                                                                    style="padding-left: 5px;"><strong>Documents
                                                                        Uploads</strong></label>
                                                                <input type="file" name="document_files[]"
                                                                    class="form-control" accept="application/pdf"
                                                                    id="" multiple required>
                                                                <p class="text-danger"><strong>Pdf Only *</strong></p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="same_div">
                                                        <ul>
                                                            <li>
                                                                <p><strong>Income Proof</strong> <span><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            height="15" width="15" fill="#000"
                                                                            viewBox="0 0 448 512">
                                                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                            <path
                                                                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                                        </svg></span></p>
                                                            </li>
                                                            {{ getIncomeProof('') }}

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="total_che">
                                                    <div class="left_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Any
                                                                    Other Documents</strong></label>
                                                            <input type="text" name="other_document"
                                                                class="form-control" value="{{ old('other_document') }}"
                                                                id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="right_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Total
                                                                    No of Document Received</strong></label>
                                                            <input type="text" name="total_document"
                                                                class="form-control" value="{{ old('total_document') }}"
                                                                id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Adhaar">
                                                    <h4>
                                                        <strong>
                                                            <span><svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                    width="20" fill="#000" viewBox="0 0 576 512">
                                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                                </svg></span>
                                                            Adhar Card Mandetory
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="client_sign">
                                                    <div class="left_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Client
                                                                    Signature</strong></label>
                                                            <input type="text" name="client_signature"
                                                                class="form-control"
                                                                value="{{ old('client_signature') }}" id="name"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="right_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Staff
                                                                    Signature</strong></label>
                                                            <input type="text" name="stuff_signature"
                                                                class="form-control" value="{{ old('stuff_signature') }}"
                                                                id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="date_div">
                                                    <div class="form-group">
                                                        <label for=""
                                                            style="padding-left: 5px; padding-right: 5px;"><strong>Date</strong></label>
                                                        <input type="date" name="aadhar_date" class="form-control"
                                                            id="name" value="{{ old('aadhar_date') }}"
                                                            placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="submit_alls text-center">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    SUBMIT
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>


                    </section>
                    <!-- /.content -->




                    <!-- This will be printed -->


                </div>

            </section>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection
