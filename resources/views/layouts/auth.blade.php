<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{config('app.name')}}</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('master/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('master/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('master/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('master/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('master/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('master/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('master/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('master/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('master/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('master/assets/js/app.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>
	<div class="page-content">
		<div class="content-wrapper">

            @yield('content')

		</div>
	</div>
    @yield('script')
</body>
</html>
