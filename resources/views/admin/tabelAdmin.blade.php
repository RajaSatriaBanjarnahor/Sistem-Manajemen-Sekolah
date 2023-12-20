@extends('layouts.master')

@section('addCss')
    <link rel="stylesheet" href="{{ asset('plugins/datatables/datatables.min.css') }}">
    
@endsection

@section('addJavascript')
    <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        });
    </script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        confirmDelete = function(button) {
            var url = $(button).data('url');
            swal({
                'title': 'Konfirmasi Hapus',
                'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                'dangermode': true,
                'buttons': true
            }).then(function(value) {
                if (value) {
                    window.location = url;
                }
            })
        }
    </script>
@endsection

@section('content')
<div class="content container-fluid">


    <!-- Content Header (Page header) -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-sub-header">
                    <h3 class="page-title">Admin/Staf</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('tabelAdmins')}}">Admin/Staf</a></li>
                        <li class="breadcrumb-item active">Admin/Staf List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table comman-shadow">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Tabel Admin/Staf</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <a href="{{route('AddAdmins')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                                <tr>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>DateofBirth</th>
                                    <th>Gender</th>
                                    <th>PhoneNumber</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                                <tr>
                                    <td>{{ $admin->FirstName }}</td>
                                    <td>{{ $admin->LastName }}</td>
                                    <td>{{ $admin->DateofBirth }}</td>
                                    <td>{{ $admin->Gender }}</td>
                                    <td>{{ $admin->PhoneNumber }}</td>
                                    <td class="text-end">
                                    <div class="actions">
                                            <a href="{{ route('EditAdmins', ['AdminID' => $admin->AdminID]) }}" class="btn btn-sm bg-danger-light me-2">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a onclick="confirmDelete(this)" data-url="{{ route('DeleteAdmins', ['AdminID' => $admin->AdminID]) }}" class="btn btn-sm bg-success-light">
                                                <i class="feather-trash"></i>
                                            </a>
                                        </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

    <!-- /.content -->
    @endsection

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif