@extends('admin.dashboard')

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
                <h3 class="page-title">Teacher Edit</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('TabelUsers')}}">Account</a></li>
                    <li class="breadcrumb-item active">Teacher Edit</li>
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
                        <div class="card-body">
                            <form action="{{ route('UpdateTeacher', ['TeacherID' => $teacher->TeacherID]) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Teacher Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                        
                                    </div>
                                    {{-- <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Teacher ID <span class="login-danger">*</span></label>
                                            <input class="form-control" id="TeacherID" name="TeacherID" value="{{ $teacher->TeacherID }}" type="text">
                                        </div>
                                    </div> --}}
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>FirstName <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="FirstName" value="{{ $teacher->FirstName }}" required autocomplete="FirstName" placeholder="Enter First Name">
                                            @error('FirstName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>LastName <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="LastName" value="{{ $teacher->LastName }}" required autocomplete="LastName" placeholder="Enter Last Name">
                                            @error('LastName')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>DateofBirth <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="date" name="DateofBirth" value="{{ $teacher->DateofBirth }}" required autocomplete="DateofBirth" placeholder="dd/mm/yyyy">
                                            @error('DateofBirth')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Gender <span class="login-danger">*</span></label>
                                            <select id="role" name="role" class="form-control select">
                                                <optgroup label="Select Role">
                                                    <option {{ ($teacher['role'] == 'Male') ? "selected" : "" }} value="Male">Male</option>
                                                    <option {{ ($teacher['role'] == 'Female') ? "selected" : "" }} value="Female">Female</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>   
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>PhoneNumber <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="PhoneNumber" value="{{ $teacher->PhoneNumber }}" required autocomplete="PhoneNumber" placeholder="Enter Phone Number">
                                            @error('PhoneNumber')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>      
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>SubjectTaught <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="SubjectTaught" value="{{ $teacher->SubjectTaught }}" required autocomplete="SubjectTaught" placeholder="Enter Subject Taught">
                                            @error('SubjectTaught')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
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