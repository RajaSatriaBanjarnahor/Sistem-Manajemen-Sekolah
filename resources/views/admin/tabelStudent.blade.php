@extends('layouts.master')

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
                        <h5 class="card-title">Tabel Students</h5>
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