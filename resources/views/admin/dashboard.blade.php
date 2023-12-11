@extends('layouts.master')

@section('content')
<div class="content container-fluid">

<!-- Content Header (Page header) -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-sub-header">
                <h3 class="page-title">Dashboard</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('TabelUsers')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Homepage</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

    @yield('content')

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->

</div>
@endsection