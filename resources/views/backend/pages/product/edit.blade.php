
@extends('backend.layouts.master')

@section('title')
Product Edit - Admin Panel
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
                <h4 class="page-title pull-left">Product Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.product.index') }}">All Products</a></li>
                    <li><span>Edit Product - {{ $product->title }}</span></li>
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
                    <h4 class="header-title">Edit Product - {{ $product->name }}</h4>
                    @include('backend.layouts.partials.messages')

                    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $product->name }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="product_id">Product ID</label>
                                <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Product ID" value="{{ $product->product_id }}">
                            </div>
                        </div>

                        <div class="form-row" enctype="multipart/form-data">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category" value="{{ $product->category }}" required>
                                                <option>Select</option>
                                                <option>Diamond</option>
                                                <option>Gold</option>
                                                <option>Silver</option>
                                            </select>                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="available">Available </label>
                                <select class="form-control" id="available" name="available"  value="{{ $product->available }}" required>
                                                <option>Select</option>
                                                <option>In Stock</option>
                                                <option>Out of Stock</option>
                                                       </select>     
                               </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="tags">Tags</label>
                                <input type="text" class="form-control" id="tags" name="tags" placeholder="Product Tags "  value="{{ $product->tags }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="descriptions">Descriptions </label>
                                <input type="text" class="form-control" id="descriptions" name="descriptions" placeholder="descriptions"  value="{{ $product->descriptions }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="weight">Weight</label>
                                <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Weight"  value="{{ $product->weight }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" placeholder="Choose image"  value="{{ asset('uploads/products_image/'.$product->image) }}">
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                                <label for="thumbnail_1">Thumbnail_1</label>
                                <input type="file" class="form-control" id="thumbnail_1" name="thumbnail_1" placeholder="Choose thumbnail_1"  value="{{ $product->thumbnail_1 }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="thumbnail_1">Thumbnail_2</label>
                                <input type="file" class="form-control" id="thumbnail_2" name="thumbnail_2" placeholder="Choose thumbnail_2"  value="{{ $product->thumbnail_2 }}">
                            </div>
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                                <label for="thumbnail_3">Thumbnail_3</label>
                                <input type="file" class="form-control" id="thumbnail_3" name="thumbnail_3" placeholder="Choose thumbnail_3"  value="{{ $product->thumbnail_3 }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="thumbnail_4">Thumbnail_4</label>
                                <input type="file" class="form-control" id="thumbnail_4" name="thumbnail_4" placeholder="Choose thumbnail_4"  value="{{ $product->thumbnail_4 }}">
                            </div>
                        </div>

                        <div class="form-row">
                        
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="thumbnail_4">Thumbnail_5</label>
                                <input type="file" class="form-control" id="thumbnail_5" name="thumbnail_5" placeholder="Choose thumbnail_5"  value="{{ $product->thumbnail_5 }}">
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Product</button>
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