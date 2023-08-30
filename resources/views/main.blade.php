

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="/css/inter.css" rel="stylesheet" type="text/css">
	<link href="/css/styles.min.css" rel="stylesheet" type="text/css">
	<link href="/css/all.min.css" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../assets/demo/demo_configurator.js"></script>
	<script src="../../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../../../assets/js/jquery/jquery.min.js"></script>
	<script src="../../../assets/js/vendor/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../assets/demo/pages/form_layouts.js"></script>
	<!-- /theme JS files -->

</head>

<body>

@include('main_nav_bar')


	<!-- Page content -->	
	<div class="page-content">

		@if($page != 'login' or $page != 'reg_form')
		@include('main_side_bar')
		@endif


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">
				@include('header')


				<!-- Content area -->
				<div class="content">
					@if($page == 'login')
					@include('login')
					@elseif($page == 'reg_form')
					@include('reg-form')
					@elseif($page == 'role_form')
					@include('role-form')
					@endif
				
				@include('footer')

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

@if($page != 'login' || $page != 'reg_form')
@include('notifications')
@endif

@if($page != 'login' || $page != 'reg_form')
@include('demo_config')
@endif

</body>
</html>
