@extends('layouts.master')
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
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Tabel Students</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Tabel Students</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

    <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Tabel Student</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="{{ route('AddStudents') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>StudentID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>DateofBirth</th>
                                    <th>Gender</th>
                                    <th>PhoneNumber</th>
                                    <th>ClassID</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->StudentID }}</td>
                                        <td>{{ $student->FirstName }}</td>
                                        <td>{{ $student->LastName }}</td>
                                        <td>{{ $student->DateofBirth }}</td>
                                        <td>{{ $student->Gender }}</td>
                                        <td>{{ $student->PhoneNumber }}</td>
                                        <td>{{ $student->ClassID }}</td>
                                        <td class="text-end">
                                            <div class="actions">
                                                <a href="{{route('EditStudents', ['id' => $student->StudentID])}}" class="btn btn-sm bg-danger-light me-2">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a onclick="confirmDelete(this)" data-url="{{ route('DeleteStudents', ['id' => $student->StudentID]) }}" class="btn btn-sm bg-success-light">
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

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection