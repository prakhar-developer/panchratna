
@extends('backend.layouts.master')

@section('title')
Rate Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Add Rate</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.banner.index') }}">Today Rate</a></li>
                    <li><span>Add Rate</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add New Rate</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.rate.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="gold1">Gold 24K</label>
                                <input type="text" class="form-control" id="gold1" name="gold1" placeholder="Enter Rate" require>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="gold2">Gold 22K</label>
                                <input type="text" class="form-control" id="gold2" name="gold2" placeholder="Enter Rate" require>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="gold3">Gold 18K</label>
                                <input type="text" class="form-control" id="gold" name="gold3" placeholder="Enter Rate" require>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="silver">Silver</label>
                                <input type="text" class="form-control" id="silver" name="silver" placeholder="Enter Rate">
                            </div>
                        </div>
                        <h4 class="header-title">Till Valid</h4>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="from1">From </label>
                                <input type="datetime-local" class="form-control" id="from1" name="from1" placeholder="Enter Date & Time">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="to1">To </label>
                                <input type="datetime-local" class="form-control" id="to1" name="to1" placeholder="Enter Date & Time">
                            </div>
                        </div>

                        

                        
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Rate</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection