@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Product Create Page</h1>
                <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="form-horizontal mt-4">
                    @csrf
                    <div class="form-group" style="width: 50%">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name" />
                    </div>

                    <div class="form-group" style="width: 50%">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="5" name="product_description"></textarea>
                    </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select class="form-control custom-select" name="category_id" data-placeholder="Choose a Category" tabindex="1">
                                    <option selected disabled>Choose</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="custom-file" style="width: 50%">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>

                    <div class="form-group" style="width: 50%; padding-top: 20px">
                        <label>Product Price</label>
                        <input type="number" class="form-control" name="product_price" />
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" class="custom-control-input" name="is_new" id="is_new">
                                <label class="custom-control-label" for="is_new">New Product</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" class="custom-control-input" name="is_bestseller" id="is_bestseller">
                                <label class="custom-control-label" for="is_bestseller">BestSeller Product</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" class="custom-control-input" name="is_onsale" id="is_onsale">
                                <label class="custom-control-label" for="is_onsale">OnSale Product</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" value="1" class="custom-control-input" name="is_chance" id="is_chance">
                                <label class="custom-control-label" for="is_chance">Chance Product</label>
                            </div>
                        </div>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Add Product</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

