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
                        <div class="box  box-solid " id="accordion">
                        </div>
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Mutual Fund Form</h3>
                            </div>
                            <div class="box-body">
                                <div class="form_info_structure">
                                    <div class="containers">
                                        <div class="upper_writing">
                                            <h1>Mutual Fund</h1>
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
                                            action="{{ auth()->user()->role == '0' ? route('admin.MutualFund.store') : route('user.MutualFund.store') }}"
                                            method="POST">
                                            @csrf
                                            <div class="maneger_total">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Division
                                                                Name</strong></label>
                                                        <input type="text" class="form-control" name="division_name"
                                                            id="name" value="{{ old('division_name') }}" placeholder=""
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Branch
                                                                Name</strong></label>
                                                        <input type="text" class="form-control" name="branch_name"
                                                            id="name" value="{{ old('branch_name') }}" placeholder=""
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Manager
                                                                Code</strong></label>
                                                        <input type="text" class="form-control" name="manager_code"
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
                                                        <input type="text" class="form-control" name="staff_code"
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
                                                        <input type="text" class="form-control" name="telecallar_code"
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
                                                        <input type="date" class="form-control" name="ins_date"
                                                            id="name" value="{{ old('ins_date') }}" placeholder=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    Ack No. <strong>IB</strong> (Auto Generate)
                                                </div>
                                            </div>

                                            <div class="total_manage_tool">
                                                <h5><strong>Acknoledgement</strong> (Subject and Terms & Conditions Printed
                                                    Overleaf)</h5>
                                                <div class="maneger_total">
                                                    <div class="left_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>
                                                                    Name</strong></label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" value="{{ old('name') }}" placeholder=""
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Address</strong></label>
                                                            <input type="text" class="form-control" name="address"
                                                                id="name" value="{{ old('address') }}"
                                                                placeholder="" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Tel
                                                                    No.</strong></label>
                                                            <input type="tel" class="form-control" name="tel_no"
                                                                id="name" value="{{ old('tel_no') }}"
                                                                placeholder="" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Mob
                                                                    No.</strong></label>
                                                            <input type="number" class="form-control" name="mob_no"
                                                                id="name" value="{{ old('mob_no') }}"
                                                                placeholder="" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>E-mail-ID</strong></label>
                                                            <input type="text" class="form-control" name="email"
                                                                id="name" value="{{ old('email') }}"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="right_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Sub
                                                                    Broker Name:</strong></label>
                                                            <input type="text" class="form-control"
                                                                name="sub_broker_name"
                                                                value="{{ old('sub_broker_name') }}" id="name"
                                                                placeholder="" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Code
                                                                    No.</strong></label>
                                                            <input type="text" class="form-control" name="code_no"
                                                                id="name" value="{{ old('code_no') }}"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="check_box_div">
                                                <p><strong>Mutual Funds</strong> <span><svg
                                                            xmlns="http://www.w3.org/2000/svg" height="15"
                                                            width="15" fill="#000" viewBox="0 0 448 512">
                                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                        </svg></span></p>
                                                <div class="total_check_div">
                                                    <ul>
                                                        <li>
                                                            <input type="radio" value="0"
                                                                name="mutual_fund"><span>Fresh</span>
                                                        </li>
                                                        <li>
                                                            <input type="radio" value="1"
                                                                name="mutual_fund"><span>Additional
                                                                Purchses</span>
                                                        </li>
                                                        <li>
                                                            <input type="radio" value="2"
                                                                name="mutual_fund"><span>SIP</span>
                                                        </li>
                                                        <li>
                                                            <input type="radio" value="3"
                                                                name="mutual_fund"><span>Switchover</span>
                                                        </li>
                                                        <li>
                                                            <input type="radio" value="4"
                                                                name="mutual_fund"><span>Redemption</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="other_main_div">
                                                <div class="two_main_div">
                                                    <div class="left_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Scheme
                                                                    Name</strong></label>
                                                            <input type="text" class="form-control" name="scheme_name"
                                                                id="name" value="{{ old('scheme_name') }}"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="right_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Option</strong></label>
                                                            <input type="text" class="form-control" name="option"
                                                                id="name" value="{{ old('option') }}"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment_div">
                                                    <div class="same_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Amount(Rs.)</strong></label>
                                                            <input type="text" class="form-control" name="amount"
                                                                id="name" value="{{ old('amount') }}"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="same_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>Follo
                                                                    No.</strong></label>
                                                            <input type="text" class="form-control" name="follo_no"
                                                                id="name" value="{{ old('follo_no') }}"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="same_div">
                                                        <div class="form-group">
                                                            <label for=""
                                                                style="padding-left: 5px;"><strong>Application
                                                                    No.</strong></label>
                                                            <input type="text" class="form-control"
                                                                name="application_no" value="{{ old('application_no') }}"
                                                                id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment_div">
                                                    <div class="same_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>No.
                                                                    of Units</strong></label>
                                                            <input type="text" class="form-control" name="no_of_units"
                                                                id="name" value="{{ old('no_of_units') }}"
                                                                placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="same_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>SIP
                                                                    Start Date</strong></label>
                                                            <input type="date" class="form-control"
                                                                name="sip_start_date" value="{{ old('sip_start_date') }}"
                                                                id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="same_div">
                                                        <div class="form-group">
                                                            <label for="" style="padding-left: 5px;"><strong>SIP
                                                                    End Date</strong></label>
                                                            <input type="date" class="form-control"
                                                                name="sip_end_date" value="{{ old('sip_end_date') }}"
                                                                id="name" placeholder="" required>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="two_main_div">
                                                <div class="left_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Switch
                                                                From</strong></label>
                                                        <input type="text" class="form-control" name="switch_from"
                                                            id="name" value="{{ old('switch_from') }}"
                                                            placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="right_div">
                                                    <div class="form-group">
                                                        <label for="" style="padding-left: 5px;"><strong>Switch
                                                                To</strong></label>
                                                        <input type="text" class="form-control" name="switch_to"
                                                            id="name" value="{{ old('switch_to') }}" placeholder=""
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="check_box_div">
                                        <p><strong>Other Products</strong> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                    height="15" width="15" fill="#000" viewBox="0 0 448 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                                </svg></span></p>
                                        <div class="total_check_div">
                                            <ul>
                                                <li>
                                                    <input type="radio" name="other_product"><span>FD
                                                        Fresh</span>
                                                </li>
                                                <li>
                                                    <input type="radio" value="0" name="other_product"><span>FD
                                                        Renewal</span>
                                                </li>
                                                <li>
                                                    <input type="radio" value="1" name="other_product"
                                                        name="other_product"><span>Bonds</span>
                                                </li>
                                                <li>
                                                    <input type="radio" value="2" name="other_product"
                                                        name="other_product"><span>Public
                                                        issue</span>
                                                </li>
                                                <li>
                                                    <input type="radio" value="3" name="other_product"><span>Post
                                                        Office</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <label for="" style="padding-left: 5px;"><strong>Company/Scheme
                                                    Name</strong></label>
                                            <input type="text" class="form-control" name="company_name"
                                                id="name" value="{{ old('company_name') }}" placeholder=""
                                                required>
                                        </div>
                                        <div class="three_div">
                                            <div class="same_div">
                                                <label for=""
                                                    style="padding-left: 5px;"><strong>Amount(Rs)</strong></label>
                                                <input type="text" class="form-control" name="pro_amount"
                                                    id="name" value="{{ old('pro_amount') }}" placeholder=""
                                                    required>
                                            </div>
                                            <div class="same_div">
                                                <label for="" style="padding-left: 5px;"><strong>Cheque
                                                        Date</strong></label>
                                                <input type="date" class="form-control" name="cheque_date"
                                                    id="name" value="{{ old('cheque_date') }}" placeholder=""
                                                    required>
                                            </div>
                                            <div class="same_div">
                                                <label for="" style="padding-left: 5px;"><strong>Application
                                                        No.</strong></label>
                                                <input type="text" class="form-control" name="pdct_application_no"
                                                    id="name" value="{{ old('pdct_application_no') }}"
                                                    placeholder="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="total_pay_div">
                                        <p><strong>Payment Details:</strong></p>
                                        <div class="payment_div">
                                            <div class="same_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Cheque
                                                            No.</strong></label>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="" name="cheque_no" value="{{ old('cheque_no') }}"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Bank
                                                            Name</strong></label>
                                                    <input type="date" class="form-control" name="bank_name"
                                                        id="name" placeholder="" value="{{ old('bank_name') }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="same_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Cheque
                                                            Date</strong></label>
                                                    <input type="date" class="form-control" name="pay_cheque_date"
                                                        id="name" placeholder=""
                                                        value="{{ old('pay_cheque_date') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Bank
                                                            Branch</strong></label>
                                                    <input type="text" class="form-control" name="bank_branch"
                                                        id="name" placeholder="" value="{{ old('bank_branch') }}"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="same_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Maturity
                                                            Date</strong></label>
                                                    <input type="date" class="form-control" name="maturity_date"
                                                        id="name" placeholder="" value="{{ old('maturity_date') }}"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>FDR
                                                            No.</strong></label>
                                                    <input type="text" class="form-control" name="fdr_no"
                                                        id="name" placeholder="" value="{{ old('fdr_no') }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="total_pay_div">
                                        <p><strong>Enclosures:</strong></p>
                                        <div class="payment_div">
                                            <div class="same_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>Pan
                                                            Card No.</strong></label>
                                                    <input type="text" class="form-control" name="pan_card_no"
                                                        id="name" value="{{ old('pan_card_no') }}" placeholder=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="same_div">
                                                <div class="form-group">
                                                    <label for="" style="padding-left: 5px;"><strong>KYC
                                                            From</strong></label>
                                                    <input type="text" class="form-control" name="kyc_form"
                                                        id="name" value="{{ old('kyc_form') }}" placeholder=""
                                                        required>
                                                </div>
                                            </div>
                                            <div class="same_div">
                                                <div class="form-group">
                                                    <label for=""
                                                        style="padding-left: 5px;"><strong>Others</strong></label>
                                                    <input type="text" class="form-control" name="other"
                                                        id="name" value="{{ old('other') }}" placeholder=""
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="client_sign">
                                        <div class="left_div">
                                            <div class="form-group">
                                                <label for="" style="padding-left: 5px;"><strong>Client
                                                        Signature</strong></label>
                                                <input type="text" class="form-control" name="client_signature"
                                                    id="name" placeholder="" value="{{ old('client_signature') }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="right_div">
                                            <div class="form-group">
                                                <label for="" style="padding-left: 5px;"><strong>Staff
                                                        Signature</strong></label>
                                                <input type="text" class="form-control" name="stuff_signature"
                                                    id="name" placeholder="" value="{{ old('stuff_signature') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="date_div">
                                        <div class="form-group">
                                            <label for=""
                                                style="padding-left: 5px; padding-right: 5px;"><strong>Date</strong></label>
                                            <input type="date" class="form-control" name="mutual_date"
                                                value="{{ old('mutual_date') }}" id="name" placeholder="" required>
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




    <!-- <footer class="footer">
                                                                                                                    <div class="container-fluid">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-6">
                                                                                                                                <script>
                                                                                                                                    document.write(new Date().getFullYear())
                                                                                                                                </script> © Skote.
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-6">
                                                                                                                                <div class="text-sm-end d-none d-sm-block">
                                                                                                                                    Design & Develop by Dignexus
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </footer> -->
    </div>
@endsection
