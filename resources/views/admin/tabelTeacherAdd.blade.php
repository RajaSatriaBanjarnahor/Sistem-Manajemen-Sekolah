@extends('layouts.master')

@section('addCss')
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('addJavascript')
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection

@section('content')
<div class="content container-fluid">

<!-- Content Header (Page header) -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-sub-header">
                <h3 class="page-title">Teacher Add</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('TabelUsers')}}">Account</a></li>
                    <li class="breadcrumb-item active">Teacher Add Add</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                            <form action="{{ route('StoreTeacher') }}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Basic Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Teacher ID <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Teacher ID">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>FirstName <span class="login-danger">*</span></label>
                                            <input type="text" name="FirstName" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>LastName <span class="login-danger">*</span></label>
                                            <input type="text" name="LastName" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms ">
                                            <label>DateOfBirt <span class="login-danger">*</span></label>
                                            <input type="date" name="DateofBirth" class="form-control" placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Gender <span class="login-danger">*</span></label>
                                            <select class="form-control" name="Gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>   
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>PhoneNumber <span class="login-danger">*</span></label>
                                            <input type="text" name="PhoneNumber" class="form-control" placeholder="Enter PhoneNumber">
                                        </div>
                                    </div>      
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>SubjectTaught <span class="login-danger">*</span></label>
                                            <input type="text" name="SubjectTaught" class="form-control" placeholder="Enter SubjectTaught">
                                        </div>
                                    </div>                               
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection