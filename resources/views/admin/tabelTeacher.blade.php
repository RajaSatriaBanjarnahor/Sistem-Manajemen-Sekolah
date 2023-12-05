@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Tabel Teacher</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Tabel Teacher</li>
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
                        <h5 class="card-title">Tabel Teacher</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>TeacherID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>DateofBirth</th>
                                    <th>Gender</th>
                                    <th>PhoneNumber</th>
                                    <th>SubjectTaught</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->TeacherID }}</td>
                                        <td>{{ $teacher->FirstName }}</td>
                                        <td>{{ $teacher->LastName }}</td>
                                        <td>{{ $teacher->DateofBirth }}</td>
                                        <td>{{ $teacher->Gender }}</td>
                                        <td>{{ $teacher->PhoneNumber }}</td>
                                        <td>{{ $teacher->SubjectTaught }}</td>
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