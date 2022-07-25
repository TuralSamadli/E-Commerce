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
                <h1>Category Create Page</h1>
                <form enctype="multipart/form-data" method="POST" action="{{ route('category.store') }}" class="form-horizontal mt-4">
                    @csrf
                    <div class="form-group" style="width: 50%">
                        <label>Category Name</label>
                        <input type="text" class="form-control"  name="category_name">
                    </div>

                    <div class="custom-file" style="width: 50%">
{{--                        <label class="custom-file-label" for="inputGroupFile01">Choose files</label>--}}
{{--                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="category_icon" value="">--}}
                        <input type="file" name="category_icon">
                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Add Category</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
