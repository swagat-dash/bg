<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../assets/images/favicon.ico">
<title>Password Reset | BG Techno</title>
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="../assets/ser/css/master_style.css">
<link rel="stylesheet" href="../assets/ser/css/skins/_all-skins.css">
<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->

</head>

<body class="hold-transition skin-blue">
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>Account Recovery</h1>
</section>
<!-- Main content -->
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title">Recover your account</h3>
	<h6 class="box-subtitle">Fill the below form according to get back access to your account.</h6>
</div>
<!-- /.box-header -->
<div class="box-body">
	<div class="row">
		<div class="col">
			<form novalidate>
				<div class="form-group">
					<h5>Full Name <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="name" class="form-control" required data-validation-required-message="Enter your full name"> </div>
					<div class="form-control-feedback"><small>The name should match your account.</small></div>
				</div>
				<div class="form-group">
					<h5>Email <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="email" name="email" class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="Enter your email">
					</div>
					<div class="form-control-feedback"><small>This email should match your account's email.</small></div>
				</div>
				<div class="form-group">
					<h5>Security Answer <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="answer" class="form-control" required data-validation-required-message="Enter your answer"> </div>
					<div class="form-control-feedback"><small>Email the admin if you forget your security question's answer.</small></div>
				</div>
				<div class="form-group">
                <h5>Date of Birth <span class="text-danger">*</span></h5>
                <div class="input-group date">
           <input type="text" class="form-control" id="datepicker" required data-validation-required-message="Enter your birth date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
					<span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
              </div>
				<div class="form-group">
					<h5>New Password <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="password" name="password" class="form-control" required data-validation-required-message="Enter a secure password" pattern="^(?=[\040-\176]*?[A-Z])(?=[\040-\176]*?[a-z])(?=[\040-\176]*?[0-9])(?=[\040-\176]*?[#?!@$%^&*-])[\040-\176]{8,72}$"></div>
						<div class="form-control-feedback"><small>Password should contain atleast one uppercase letter, one lowercase letter, one number, one symbol and should be 8 - 72 characters long.</small></div>
				</div>
				<div class="form-group">
					<h5>Confirm Password <span class="text-danger">*</span></h5>
					<div class="controls">
<input type="password" name="password2" data-validation-match-match="password" required data-validation-required-message="Please enter your password again for confirmation" class="form-control"> </div>
				</div>
				<div class="text-xs-right">
					<button type="submit" class="btn btn-info">Submit</button>
				</div>
			</form>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="pull-right d-none d-sm-inline-block">
<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
<li class="nav-item"> <a class="nav-link" href="https://www.swagatdash.com/" target="_blank" style="display:none;">♥</a> </li>
<li class="nav-item"> <a class="nav-link" href="javascript:void(0)">FAQ</a> </li>
</ul>
</div> &copy; 2019 BG Techno. All Rights Reserved.
</footer>
</div>
<!-- ./wrapper -->
<script src="../assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>
<script src="../assets/assets/vendor_components/popper/dist/popper.min.js"></script>
<script src="../assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
<script src="../assets/ser/js/template.js"></script>
<script src="../assets/ser/js/demo.js"></script>
<script src="../assets/ser/js/pages/validation.js"></script>
 <script>
    ! function(window, document, $) {
        "use strict";
			$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
		}(window, document, jQuery);
    </script>
	<script>
    $(function () {
    "use strict";
    $('#datepicker').datepicker({
    autoclose: true,
    todayHighlight: true
    });
  });</script>
</body>

</html>
