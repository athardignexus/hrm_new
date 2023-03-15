@extends('admin.index')
@push('styles')
@endpush
@section('main_section')
    <div class="main-content">
        <div class="page-content">

            <section class="content">

                <div class="content-wrapper" style="min-height: 306px;">
                    {{-- <h2>Welcome to <span>{{ Auth::user()->name }}</span></h2> --}}



                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Check In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-primary">Check Out</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!-- container-fluid -->

        </div>
        <!-- End Page-content -->

    </div>
@endsection
