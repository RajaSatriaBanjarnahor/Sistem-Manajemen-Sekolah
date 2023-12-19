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
                    <h3 class="page-title">Edit Admin/Staf</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('tabelAdmins')}}">Admin/Staf</a></li>
                        <li class="breadcrumb-item active">Admin/Staf Edit</li>
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
                    <form action="{{ route('UpdateAdmins', ['AdminID' => $admins->AdminID]) }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-12">
                            <h5 class="form-title student-info">Basic Details <span><a
                                        href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                            </h5>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>FirstName <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="FirstName" value="{{ $admins->FirstName }}"
                                        required autocomplete="FirstName" placeholder="Enter First Name">
                                    @error('FirstName')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>LastName <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="LastName" value="{{ $admins->LastName }}"
                                        required autocomplete="LastName" placeholder="Enter Last Name">
                                    @error('LastName')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Gender <span class="login-danger">*</span></label>
                                    <select id="role" name="Gender" class="form-control select">
                                    <optgroup label="Select Role">
                                        <option {{ ($admins['role'] == 'male') ? "selected" : "" }} value="male">Male</option>
                                        <option {{ ($admins['role'] == 'female') ? "selected" : "" }} value="female">Female</option>
                                        <option {{ ($admins['role'] == 'others') ? "selected" : "" }} value="others">Others</option>
                                    </optgroup>
                                </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms calendar-icon">
                                    <label>Date Of Birth <span class="login-danger">*</span></label>
                                    <input class="form-control datetimepicker" type="text" name="DateofBirth" value="{{ $admins->DateofBirth }}"
                                        required autocomplete="DateofBirth" placeholder="DD-MM-YYYY">
                                        @error('LastName')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms">
                                    <label>Mobile <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="PhoneNumber" value="{{ $admins->PhoneNumber }}"
                                        required autocomplete="PhoneNumber" placeholder="Enter Phone Number">
                                    @error('PhoneNumber')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group local-forms calendar-icon">
                                    <label>Joining Date <span class="login-danger">*</span></label>
                                    <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
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

<!-- /.container-fluid -->

<!-- /.content -->
@endsection