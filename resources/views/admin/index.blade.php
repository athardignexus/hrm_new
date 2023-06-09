<!doctype html>
<html lang="en">

<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 05:22:49 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Customers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/table_style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    @stack('styles')

</head>

<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar" class="nav_clr">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box nav_clr">
                        <!-- <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a> -->

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-lg">
                                <h5>HRM</h5>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>



                <div class="nav_menu">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="plus_func">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                            viewBox="0 0 448 512">
                            <path
                                d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3  32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z" />
                        </svg>
                    </div>



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                            <div class="plus_func">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                                    viewBox="0 0 384 512">
                                    <path
                                        d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z" />
                                </svg>
                            </div>

                        </button>
                        <div class="dropdown-menu dropdown-menu2 dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="calculator">
                                <div class="input" id="input"></div>
                                <div class="buttons">
                                    <div class="operators">
                                        <div>+</div>
                                        <div>-</div>
                                        <div>&times;</div>
                                        <div>&divide;</div>
                                    </div>
                                    <div class="leftPanel">
                                        <div class="numbers">
                                            <div>7</div>
                                            <div>8</div>
                                            <div>9</div>
                                        </div>
                                        <div class="numbers">
                                            <div>4</div>
                                            <div>5</div>
                                            <div>6</div>
                                        </div>
                                        <div class="numbers">
                                            <div>1</div>
                                            <div>2</div>
                                            <div>3</div>
                                        </div>
                                        <div class="numbers">
                                            <div>0</div>
                                            <div>.</div>
                                            <div id="clear">C</div>
                                        </div>
                                    </div>
                                    <div class="equal" id="result">=</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="plus_func">
                        <h5>POS</h5>
                    </div>

                    <div class="plus_func">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                            viewBox="0 0 576 512">
                            <path
                                d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM176 256a112 112 0 1 1 224 0 112 112 0 1 1 -224 0zm76-48c0 9.7 6.9 17.7 16 19.6V276h-4c-11 0-20 9-20 20s9 20 20 20h24 24c11 0 20-9 20-20s-9-20-20-20h-4V208c0-11-9-20-20-20H272c-11 0-20 9-20 20z" />
                        </svg>
                    </div>
                    <div class="date_part">
                        <h5>02/13/2023</h5>
                    </div>
                    <div class="notif_part">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                            viewBox="0 0 448 512">
                            <path
                                d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                        </svg>
                    </div>

                    <div class="date_part">
                        <h5>{{ getRole(Auth::user()->role) }}</h5>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100" style="background-color: #fff;">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="{{ auth()->user()->role == '0' ? route('admin.dashboard') : route('user.dashboard') }}"
                                class="waves-effect">
                                <i class="fa fas fa-tachometer-alt"></i>
                                <span key="t-dashboards">Home</span>
                            </a>
                        </li>

                        @if (auth()->user()->role == '0')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fas fa-address-book"></i>
                                    <span key="t-contacts">User Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" key="t-user-grid">Suppliers</a></li>
                                    <li><a href="contacts-list.html" key="t-user-list">Customers</a></li>
                                    <li><a href="contacts-profile.html" key="t-profile">Customer Groups</a></li>
                                </ul>
                            </li>
                        @endif


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa fas fa-address-book"></i>
                                <span key="t-contacts">Employee</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ auth()->user()->role == '0' ? route('admin.Employee.index') : route('user.Employee.index') }}"
                                        key="t-user-grid">Manage
                                        Employee</a></li>
                                <li><a href="#" key="t-profile">Manage Agent</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa fas fa-cubes"></i>
                                <span key="t-ecommerce">Products</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ auth()->user()->role == '0' ? route('admin.insurance.create') : route('user.insurance.create') }}"
                                        key="t-add-product">Insurance</a>
                                </li>
                                <li><a href="{{ auth()->user()->role == '0' ? route('admin.MutualFund.create') : route('user.MutualFund.create') }}"
                                        key="t-add-product">Mutual
                                        Fund</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="fa fas fa-cubes"></i>
                                <span key="t-ecommerce">Application</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#" key="t-add-product">Leave Application</a>
                                </li>
                            </ul>
                        </li>


                        @if (auth()->user()->role == '0')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fas fa-arrow-circle-up"></i>
                                    <span key="t-invoices">Sell</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-detail.html" key="t-invoice-detail">Add Quotation</a></li>
                                    <li><a href="invoices-detail.html" key="t-invoice-detail">List quotations</a></li>
                                </ul>
                            </li>
                        @endif
                        @if (auth()->user()->role == '0')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fas fa-minus-circle"></i>
                                    <span key="t-crypto">Expenses</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="crypto-wallet.html" key="t-wallet">List Expenses</a></li>
                                    <li><a href="crypto-buy-sell.html" key="t-buy">Add Expense</a></li>
                                    <li><a href="crypto-exchange.html" key="t-exchange">Add Expense</a></li>
                                </ul>
                            </li>
                        @endif
                        @if (auth()->user()->role == '0')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fas fa-money-check-alt"></i>
                                    <span key="t-projects">Payment Accounts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="projects-grid.html" key="t-p-grid">List Accounts</a></li>
                                    <li><a href="projects-list.html" key="t-p-list">Balance Sheet</a></li>
                                    <li><a href="projects-overview.html" key="t-p-overview">Trial Balance</a></li>
                                    <li><a href="projects-create.html" key="t-create-new">Cash Flow</a></li>
                                    <li><a href="projects-create.html" key="t-create-new">Payment Account Report</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (auth()->user()->role == '0')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fas fa-chart-bar"></i>
                                    <span key="t-tasks">Reports</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tasks-list.html" key="t-task-list">Profit / Loss Report</a></li>
                                    <li><a href="tasks-kanban.html" key="t-kanban-board">Product Purchase Report</a>
                                    </li>
                                    <li><a href="tasks-create.html" key="t-create-task">Register Report</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Expense Report</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Sell Payment Report</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Purchase Payment Report</a>
                                    </li>
                                    <li><a href="tasks-create.html" key="t-create-task">Product Sell Report</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Items Report</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Purchase &amp; Sale</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Trending Products</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Stock Adjustment Report</a>
                                    </li>
                                    <li><a href="tasks-create.html" key="t-create-task">Stock Report</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Customer Groups Report</a>
                                    </li>
                                    <li><a href="tasks-create.html" key="t-create-task">Supplier</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Tax Report</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Activity Log</a></li>
                                </ul>
                            </li>
                        @endif
                        @if (auth()->user()->role == '0')
                            <li>
                                <a href="https://pos.ultimatefosters.com/notification-templates">
                                    <i class="fa fas fa-envelope"></i>
                                    <span>Notification Templates</span>
                                </a>
                            </li>
                        @endif
                        @if (auth()->user()->role == '0')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fas fa-cog"></i>
                                    <span key="t-utility">Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="https://pos.ultimatefosters.com/business/settings" id="tour_step2"><i
                                                class="fa fas fa-cogs"></i>
                                            <span>Business Settings</span></a></li>
                                    <li><a href="https://pos.ultimatefosters.com/business-location"><i
                                                class="fa fas fa-map-marker"></i>
                                            <span>Business Locations</span></a></li>
                                    <li><a href="https://pos.ultimatefosters.com/invoice-schemes"><i
                                                class="fa fas fa-file"></i> <span>Invoice
                                                Settings</span></a></li>
                                    <li><a href="https://pos.ultimatefosters.com/barcodes"><i
                                                class="fa fas fa-barcode"></i>
                                            <span>Barcode
                                                Settings</span></a></li>
                                    <li><a href="https://pos.ultimatefosters.com/printers"><i
                                                class="fa fas fa-share-alt"></i> <span>Receipt
                                                Printers</span></a></li>
                                    <li><a href="https://pos.ultimatefosters.com/tax-rates"><i
                                                class="fa fas fa-bolt"></i>
                                            <span>Tax
                                                Rates</span></a></li>
                                    <li><a href="https://pos.ultimatefosters.com/subscription"><i
                                                class="fa fas fa-sync"></i> <span>Package
                                                Subscription</span></a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            @include('admin.pageinclude.menu')

        </div>
        <!-- Left Sidebar End -->

        @yield('main_section')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/script2.js') }}"></script>
    <script src="{{ asset('assets/js/table_script.js') }}"></script>











    <!-----------raw js file---------->



    <script src="https://realableindia.com/public/js/vendor.js?v=48"></script>

    <script src="https://realableindia.com/public/js/lang/en.js?v=48"></script>

    <script>
        Dropzone.autoDiscover = false;
        moment.tz.setDefault('Asia/Kolkata');
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });

        var financial_year = {
            start: moment('2023-01-01'),
            end: moment('2023-12-31'),
        }

        var datepicker_date_format = "mm/dd/yyyy";
        var moment_date_format = "MM/DD/YYYY";
        var moment_time_format = "HH:mm";

        var app_locale = "en";

        var non_utf8_languages = [
            "ar",
            "hi",
            "ps",
        ];

        var __default_datatable_page_entries = "25";

        var __new_notification_count_interval = "60000";
    </script>

    <script src="https://realableindia.com/public/js/lang/en.js?v=48"></script>

    <script src="https://realableindia.com/public/js/functions.js?v=48"></script>
    <script src="https://realableindia.com/public/js/common.js?v=48"></script>
    <script src="https://realableindia.com/public/js/app.js?v=48"></script>
    <script src="https://realableindia.com/public/js/help-tour.js?v=48"></script>
    <script src="https://realableindia.com/public/js/documents_and_note.js?v=48"></script>

    <!-- TODO -->

    <script src="https://realableindia.com/public/js/home.js?v=48"></script>
    <script src="https://realableindia.com/public/js/payment.js?v=48"></script>
    @stack('scripts')

</body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 05:23:28 GMT -->

</html>
