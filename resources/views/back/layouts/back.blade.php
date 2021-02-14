<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/joblly-admin-template-dashboard/images/favicon.ico">

    <title>BGI ATTENDANCE SYSTEM</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href={{ asset("back/css/vendors_css.css")}}>
	  
	<!-- Style-->  
	<link rel="stylesheet" href={{ asset("back/css/style.css")}}>
	<link rel="stylesheet" href={{ asset("back/css/skin_color.css")}}>
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
	
<div class="wrapper">
	<div id="loader"></div>
	
 @include('back.parts.nav')
  
  @include('back.parts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		@yield('main')
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  @include('back.parts.footer')

	
	<!-- Vendor JS -->
	<script src={{ asset("back/js/vendors.min.js") }}></script>
	<script src={{ asset("back/js/pages/chat-popup.js") }}></script>
    <script src={{ asset("back/assets/icons/feather-icons/feather.min.js") }}></script>	

	<script src={{ asset("back/assets/vendor_components/datatable/datatables.min.js") }} ></script>
	<script src={{ asset("back/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js") }}></script>
	<script src={{ asset("back/assets/vendor_components/moment/min/moment.min.js") }}></script>
	<script src={{ asset("back/assets/vendor_components/fullcalendar/fullcalendar.js") }}></script>
	
	<!-- Joblly App -->
	<script src={{ asset("back/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js") }}></script>
    <script src={{ asset("back/assets/vendor_components/datatable/datatables.min.js") }}></script>
	<script src={{ asset("back/js/pages/toastr.js") }}></script>
    <script src={{ asset("back/js/pages/notification.js") }}></script>
	<script src={{ asset("back/js/template.js") }}></script>
	<script src={{ asset("back/js/pages/data-table.js") }}></script>
	<script src={{ asset("back/js/pages/dashboard.js") }}></script>
	<script src={{ asset("back/js/pages/calendar-dash.js") }}></script>
	
	@if(Session::has('success'))
	<input type="hidden" id="hidnnnn" value="{{ Session::get('success') }}">
	<script>
		let val = document.getElementById('hidnnnn').value;
		console.log(val);
		     $.toast({
            heading: 'Sucess',
            text: val,
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 5000,
            stack: 6
        });
	</script>
	@endif

	@if(Session::has('error'))
	<input type="hidden" id="hidnnnn2" value="{{ Session::get('error') }}">
	<script>
		let val = document.getElementById('hidnnnn2').value;
		console.log(val);
		     $.toast({
            heading: 'Error',
            text: val,
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 5000,
            stack: 6
        });
	</script>
	@endif
</body>

<!-- Mirrored from www.multipurposethemes.com/admin/joblly-admin-template-dashboard/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 13:36:20 GMT -->
</html> 

