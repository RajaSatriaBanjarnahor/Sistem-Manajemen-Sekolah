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
                <h3 class="page-title">Tabel Subject</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('TabelSubjects')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Subject List</li>
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
                            <h3 class="page-title">Tabel Subject</h3>
                        </div>
                        <div class="col-auto text-end float-end ms-auto download-grp">
                            <a href="{{route('AddSubjects')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                        <thead class="student-thread">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subject as $subjects)
                                <tr>
                                    
                                    <td>{{ $subjects->id }}</td>
                                    <td>{{ $subjects->name }}</td>
                                    <td>{{ $subjects->class }}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('EditSubjects', ['id' => $subjects->id])}}" class="btn btn-sm bg-danger-light me-2">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a onclick="confirmDelete(this)" data-url="{{ route('DeleteSubjects', ['id' => $subjects->id]) }}" class="btn btn-sm bg-success-light">
                                                <i class="feather-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
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