@extends('admin.dashboard')

@section('addCss')
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
@endsection

@section('addJavascript')
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
@endsection

@section('content')
<div class="content container-fluid">


<!-- Content Header (Page header) -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-sub-header">
                <h3 class="page-title">Students</h3>
                <ul class="breadcrumb">
                    {{-- <li class="breadcrumb-item"><a href="{{route('tabelStudens')}}">Students</a></li> --}}
                    <li class="breadcrumb-item active">Students Edit</li>
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
                <form action="{{ route('UpdateStudents', ['id' => $Student->StudensID]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Students Information <span><a
                                        href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>firstName <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="FirstName" value="{{ $Student->FirstName }}" required autocomplete="name" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>LastName <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="LastName" value="{{ $Student->LastName }}" required autocomplete="name" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>DateofBirth <span class="login-danger">*</span></label>
                                <input class="form-control" type="date" name="DateofBirth" value="{{ $Student->DateofBirth }}" required autocomplete="name" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Gender <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="Gender" value="{{ $Student->Gender }}" required autocomplete="name" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>PhoneNumber <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="PhoneNumber" value="{{ $Student->PhoneNumber }}" required autocomplete="name" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>ClassID <span class="login-danger">*</span></label>
                                <input class="form-control" type="int" name="ClassID" value="{{ $Student->ClassID }}" required autocomplete="name" placeholder="Enter Full Name">
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
@endsection