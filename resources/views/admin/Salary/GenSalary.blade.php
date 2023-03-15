@extends('admin.index')
@section('main_section')
<div class="main-content">
    <div class="page-content">
        <section class="content content-custom no-print">
            <div class=" content-wrapper " style="min-height: 306px;">
                <!-- empty div for vuejs -->
                <!-- End of currency related field-->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Employee <small>Manage Salary</small>
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content2">
                    <div class="box box-primary">
                        <div class="box-header">

                            <h3 class="box-title">Employee Salary Generate</h3>
                            <div class="box-tools">
                                <a type="button" class="btn btn-block btn-primary "
                                    href="{{ route('admin.Employee.create') }}"
                                    data-container=".contact_modal">
                                    <i class="fa fa-plus"></i> Add</a>
                            </div>
                        </div>

                        <div class="box-body">

                            <div id="contact_table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                                <div class="row margin-bottom-20 text-center">
                                    <form action="" method="POST">
                                    <div>


                                        @csrf
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-3">
                                        @php
                                            $month="";
                                            if(isset($data['month']))
                                                 $month=$data['month'];
                                            $year="";
                                            if(isset($data['year']))
                                                    $year=$data['year'];
                                        @endphp


                                    </div>
                                    <div class="col-sm-3">


                                    </div>
                                    {{-- <div class="col-sm-1">
                                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-sm">

                                    </div> --}}

                                    <!-- <div id="contact_table_processing"
                                        class="dataTables_processing panel panel-default"
                                        style="display: none;">Processing...</div> -->
                                    </form>
                                </div>


                                    <div class="col-sm-1">
                                        <input type="submit" name="save" value="SAVE" class="btn btn-primary btn-sm" onclick="gen_sal.submit();">
                                    </div>

                                </div>

                                <div class="container-fluid px-0">
                                    <form action="{{ route('admin.gensalary'); }}" method="POST" name="gen_sal">
                                    <div class="scrollable">
                                        <div>
                                            @php
                                                $a_head=DB::table('allowances')->where('status','1')->get();
                                                $d_head=DB::table('deductions')->where('status','1')->get();
                                            @endphp
                                                @csrf
                                            <table cellpadding="0" cellspacing="0" style="width: 100%; max-width: 100%;">
                                                <tr class="thh_padding" >
                                                    <th colspan="2" style="vertical-align: middle; text-align:center">EMP Details</th>
                                                    <th colspan="{{ $a_head->count() }}" style="vertical-align: middle;  text-align:center">Allowance</th>
                                                    <th rowspan="2" style="vertical-align: middle;  text-align:center">Total Allowance</th>
                                                    <th colspan="{{ $d_head->count() }}" style=" text-align:center">Deduction</th>
                                                    <th rowspan="2" style="vertical-align: middle;  text-align:center">Total Deduction</th>
                                                    <th rowspan="2" style="vertical-align: middle;  text-align:center">Net Salary</th>
                                                </tr>
                                                <tr class="thh_padding">
                                                    <th>EMP ID</th>
                                                    <th>EMP Name</th>

                                                    @foreach ($a_head as $head_id=>$h_name)
                                                        <th>{{ ucfirst(strtolower($h_name->allowance_head)); }}</th>
                                                    @endforeach
                                                    @foreach ($d_head as $d_head_id=>$d_h_name)
                                                        <th>{{ ucfirst(strtolower($d_h_name->deduction_head)) }}</th>
                                                    @endforeach

                                                </tr>
                                                @php
                                                    $i=1;
                                                @endphp
                                                @foreach ($data as $key=>$val)
                                                    <tr>
                                                        <td>{{ $val->emp_id }}</td>
                                                        <td>{{ $val->user->name }}</td>
                                                        @php
                                                            $total_allowance=0;
                                                            $total_deduction=0;
                                                        @endphp
                                                        @foreach ($val->emp_allowance as $emp_a_head=>$emp_a_h_name)
                                                           @if($a_head[$emp_a_head]->id==$emp_a_h_name->head_id)
                                                             <td>
                                                                {{ $all_amt=$emp_a_h_name->amount; }}
                                                                @php
                                                                   $total_allowance=$total_allowance+$all_amt;
                                                                @endphp
                                                            </td>
                                                           @else
                                                            <td></td>
                                                           @endif
                                                        @endforeach
                                                        <td style="text-align: right">{{ number_format($total_allowance,'2'); }}</td>
                                                        @foreach ($val->emp_deduction as $emp_d_head=>$emp_d_h_name)
                                                           @if($d_head[$emp_d_head]->id==$emp_d_h_name->head_id)
                                                             <td>{{ $ded_amt=$emp_d_h_name->amount; }}
                                                            @php
                                                                $total_deduction=$total_deduction+$ded_amt;
                                                            @endphp
                                                            </td>
                                                           @else
                                                            <td>0.00</td>
                                                           @endif
                                                        @endforeach
                                                        <td style="text-align: right">{{ number_format($total_deduction,'2'); }}</td>
                                                        <td style="text-align: right">{{ number_format($total_allowance-$total_deduction,'2'); }}</td>
                                                    </tr>
                                                @endforeach






                                            </table>
                                        </div><!-- END inner div -->
                                    </div><!-- END scrollable -->

                                </form>
                                </div>

                                <div class="dataTables_info" id="contact_table_info" role="status"
                                    aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers"
                                    id="contact_table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled"
                                            id="contact_table_previous"><a href="#"
                                                aria-controls="contact_table" data-dt-idx="0"
                                                tabindex="0">Previous</a></li>
                                        <li class="paginate_button active"><a href="#"
                                                aria-controls="contact_table" data-dt-idx="1" tabindex="0">1</a>
                                        </li>
                                        <li class="paginate_button next disabled" id="contact_table_next"><a
                                                href="#" aria-controls="contact_table" data-dt-idx="2"
                                                tabindex="0">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="modal fade contact_modal" tabindex="-1" role="dialog"
                        aria-labelledby="gridSystemModalLabel">
                    </div>
                    <div class="modal fade pay_contact_due_modal" tabindex="-1" role="dialog"
                        aria-labelledby="gridSystemModalLabel">
                    </div>

                </section>
                <!-- /.content -->

                <div class="scrolltop no-print" style="display: none;">
                    <div class="scroll icon"><i class="fas fa-angle-up"></i></div>
                </div>


                <!-- This will be printed -->
                <section class="invoice print_section" id="receipt_section">
                </section>

            </div>

        </section>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Skote.
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
