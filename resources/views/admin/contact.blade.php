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
            <h1>Contact Page</h1>
            <form method="POST" action=""{{ route('contact.index') }}" class="form-horizontal mt-4">
                @csrf
                <input type="hidden" value="{{ $users->id }}" name="id_category">
                <div class="form-group" style="width: 50%">
                    <label>User Name</label>
                    <input value="{{ $users->name }}" type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>User Surname</label>
                    <input value="{{ $users->surname }}" type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>User Email</label>
                    <input value="{{ $users->email }}" type="text" class="form-control" name="category_name">
                </div>
                <div class="form-group" style="width: 50%">
                    <label>User Address</label>
                    <input value="{{ $users->address }}" type="text" class="form-control" name="category_name">
                </div>
                    


                <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                    <button type="submit" class="btn waves-effect waves-light btn-success">Edit User Information</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection