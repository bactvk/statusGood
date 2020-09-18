<!DOCTYPE html>
<html lang="en">
<head>
	<title>Adding caption</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main_2.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('/assets/images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form" method="POST">
					@csrf
					<span class="contact3-form-title">
						Adding caption
					</span>

					
					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type="text" name="name" placeholder="Name of crush" required="">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						{{-- <textarea id="editor1" class="input3" name="content" placeholder="Flirt caption" required=""></textarea> --}}
						<textarea  class="input3" name="content" placeholder="Flirt caption" required=""></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn float-right">
						<button class="contact3-form-btn" type="submit">
							Save
						</button>
					</div>
					<div class="mt-5 ">
						<a href="{{route('status-home')}}" class="btn btn-warning pt-2 pb-2 go_back"><i class="fa fa-arrow-left mr-2"></i>Go back</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	{{-- <script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script> --}}
	<script src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
	<script>
	    CKEDITOR.replace('editor1', {
	       extraPlugins: 'editorplaceholder',
	      editorplaceholder: 'Enter flirt caption'
	    });
	  </script>

</body>
</html>
