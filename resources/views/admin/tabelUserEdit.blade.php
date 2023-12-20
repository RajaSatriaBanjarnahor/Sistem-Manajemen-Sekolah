@extends('layouts.master')

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
                <h3 class="page-title">Account</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('TabelUsers')}}">Account</a></li>
                    <li class="breadcrumb-item active">Account Edit</li>
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
                <form action="{{ route('UpdateUser', ['id' => $user->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h5 class="form-title student-info">Account Information <span><a
                                        href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Full Name <span class="login-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}" required autocomplete="name" placeholder="Enter Full Name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Role <span class="login-danger">*</span></label>
                                <select id="role" name="role" class="form-control select">
                                    <optgroup label="Select Role">
                                        <option {{ ($user['role'] == 'siswa') ? "selected" : "" }} value="siswa">Siswa</option>
                                        <option {{ ($user['role'] == 'guru') ? "selected" : "" }} value="guru">Guru</option>
                                        <option {{ ($user['role'] == 'admin') ? "selected" : "" }} value="admin">Admin</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">   
                            <div class="form-group local-forms">
                                <label>Email <span class="login-danger">*</span></label>
                                <input class="form-control" type="email" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Enter Email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Siswa ID </label>
                                <input class="form-control" id="SiswaID" name="SiswaID" value="{{ $user->StudentID }}" type="text">
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Password </label>
                                <input class="form-control" type="password" name="password" value="{{ $user->password }}" required
                                    autocomplete="new-password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Guru ID </label>
                                <input class="form-control" id="GuruID" name="GuruID" value="{{ $user->TeacherID }}" type="text">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Confirm Password </label>
                                <input class="form-control" type="password"
                                    name="password_confirmation" value="{{ $user->password }}" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <label>Admin ID </label>
                                <input class="form-control" id="AdminID" name="AdminID" value="{{ $user->AdminID }}" type="text">
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