@extends('admin.index')
@section('main_section')
    <div class="main-content">
        <div class="page-content">
            <section class="content content-custom no-print">

                <div class="content-wrapper" style="min-height: 306px;">
                    <h2>Welcome to <span>{{ Auth::user()->name }}</span></h2>
                </div>

            </section>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection
