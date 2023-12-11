@extends('admin.dashboard')

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
                <h3 class="page-title">Account</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('TabelUsers')}}">Account</a></li>
                    <li class="breadcrumb-item active">Account List</li>
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
                            <h3 class="page-title">Tabel Users</h3>
                        </div>
                        <div class="col-auto text-end float-end ms-auto download-grp">
                            <a href="TabelUserAdd" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                        <thead class="student-thread">
                            <tr>
                                
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="{{route('EditUser', ['id' => $user->id])}}" class="btn btn-sm bg-danger-light me-2">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a onclick="confirmDelete(this)" data-url="{{ route('DeleteUser', ['id' => $user->id]) }}" class="btn btn-sm bg-success-light">
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