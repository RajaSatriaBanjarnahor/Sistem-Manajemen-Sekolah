<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Font Awesome Icons -->
	
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	@yield('addCss')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="main-wrapper">

		@include('layouts.navbar')
		@include('layouts.sidebar')

		<!-- Content Wrapper. Contains page content -->
		<div class="page-wrapper">
			@yield('content')
		</div>
		<!-- /.content-wrapper -->

		@include('layouts.footer')
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
	
	@yield('addJavascript')
</body>

</html>