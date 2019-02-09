<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../assets/images/favicon.ico">
<title>e-KYC | BG Techno</title>
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="../assets/ser/css/master_style.css">
<link rel="stylesheet" href="../assets/ser/css/skins/_all-skins.css">
<link rel="stylesheet" href="../assets/assets/vendor_plugins/pace/pace.min.css">
<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
<script>
var random_images_array = ['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png', 'avatar12.png', 'avatar13.png', 'avatar14.png', 'avatar15.png', 'avatar16.png', 'avatar17.png', 'avatar18.png', 'avatar19.png', 'avatar20.png', 'avatar21.png', 'avatar22.png', 'avatar23.png', 'avatar24.png', 'avatar25.png', 'avatar26.png', 'avatar27.png', 'avatar28.png', 'avatar29.png', 'avatar30.png', 'avatar31.png', 'avatar32.png', 'avatar33.png', 'avatar34.png', 'avatar35.png', 'avatar36.png', 'avatar37.png', 'avatar38.png', 'avatar39.png', 'avatar40.png', 'avatar41.png', 'avatar42.png', 'avatar43.png', 'avatar44.png'];

function getRandomImage(imgAr, path) {
path = path || '../assets/images/avatar/';
var num = Math.floor(Math.random() * imgAr.length);
var img = imgAr[num];
var imgStr = '<img src="' + path + img + '" alt = "Profile Icon" class="user-image rounded-circle">';
document.write(imgStr);
document.close();
}

</script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
<!-- Logo -->
<a href="index.php" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels --><b class="logo-mini"> <span class="light-logo"><img src="../assets/images/aries-light.png" alt="logo"></span> <span class="dark-logo"><img src="../assets/images/aries-dark.png" alt="logo"></span> </b>
<!-- logo for regular state and mobile devices --><span class="logo-lg"> <img src="../assets/images/logo-light-text.png" alt="logo" class="light-logo"> <img src="../assets/images/logo-dark-text.png" alt="logo" class="dark-logo"> </span> </a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
	<li class="search-box"> <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
		<form class="app-search" style="display: none;">
			<input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
	</li>
	<li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <script type="text/javascript">getRandomImage(random_images_array, '../assets/images/avatar/')</script>
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <div class="col-12">
                <p>Admin</p>
                  <p>Dynamic email by php variable</p></div>
                  <div class="col-12">
                  <a href="wallet.php" class="btn btn-success btn-sm btn-rounded">Wallet : 0.00</a>
                </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                <div class="col-12 text-left">
                  <a href="tools.php"><i class="ion ion-person"></i> Tools</a>
                 </div>
                 <div class="col-12 text-left">
                  <a href="7f85nhd587344f3847err456e5764v.php"><i class="ion ion-person"></i>  Update Transactions</a>
                 </div>
        <div role="separator" class="divider col-12"></div>
        <div class="col-12 text-left">
                  <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                  </div>        
                </div>
            </li>
            </ul>
          </li>
       </ul>
      </div>
    </nav>
  </header>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
<ul class="sidebar-menu" data-widget="tree">
    <li class="user-profile treeview">
        <a href="services.html">
            <span>Services Basic Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
        </a>
    <ul class="treeview-menu">
            <li><a href="../pan.html" target="_blank">PAN card</a></li>
            <li><a href="../gst.html" target="_blank">GST</a></li>
            <li><a href="../aeps.html" target="_blank">AEPS</a></li>
            <li><a href="../itr.html" target="_blank">Income Tax Returns</a></li>
            <li><a href="../trademarks.html" target="_blank">ISO &amp; Trademarks</a></li>
            <li><a href="../irctc.html" target="_blank">Rail Ticket Booking</a></li>
            <li><a href="../web.html" target="_blank">Website Solutions</a></li>
            <li><a href="../business.html" target="_blank">Business Registration</a></li>
            <li><a href="../jharsewa.html" target="_blank">JHAR Sewa</a></li>
            <li><a href="../digital.html" target="_blank">Digital Signature</a></li>
            <li><a href="../software.html" target="_blank">Inventory Management</a></li>
            <li><a href="../bulksms.html" target="_blank">Bulk SMS</a></li>
        </ul>
    </li>
  <li class="nav-devider"></li>
    <li><a href="index.php"><i class="fa fa-credit-card"></i><span>Transactions</span></a></li>
    <li><a href="notification.php"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
    <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>User Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="distributor-data.php">Distributor</a></li>
            <li><a href="retailer-data.php">Retailer</a></li>
          </ul>
        </li>
        <li><a href="products.php"><i class="fa fa-shopping-cart"></i><span>Products</span></a></li>
        <li><a href="offers.php"><i class="fa fa-rupee"></i><span>Offers</span></a></li>
        <li><a href="tools.php"><i class="fa fa-wrench"></i><span>Tools</span></a></li>
    </ul>
    </section>
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>e-KYC</h1>
</section>
<!-- Main content -->
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border">
	<h3 class="box-title">Purchases made faster</h3>
	<h6 class="box-subtitle">Fill the below form according to the requirements of your services.</h6>
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
					<div class="form-control-feedback"><small>The name should match your legal identity proofs.</small></div>
				</div>
				<div class="form-group">
					<h5>Email <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="email" name="email" class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="Enter your email">
					</div>
					<div class="form-control-feedback"><small>This email should match your account's email.</small></div>
				</div>
				<div class="form-group">
					<h5>File Input Field <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="file" name="file" class="form-control" required> </div>
				</div>
				<div class="form-group">
					<h5>Input with Icon <span class="text-danger">*</span></h5>
					<div class="controls">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required"> <span class="input-group-addon" id="basic-addon1"><i class="fa fa-dollar"></i></span> </div>
					</div>
				</div>
				<div class="form-group">
					<h5>Maximum Character Length <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="maxChar" class="form-control" required data-validation-required-message="This field is required" maxlength="10"> </div>
					<div class="form-control-feedback"><small>Add <code>maxlength='10'</code> attribute for maximum number of characters to accept. </small></div>
				</div>
				<div class="form-group">
					<h5>Minimum Character Length <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required" minlength="6"> </div>
					<div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div>
				</div>
				<div class="form-group">
					<h5>Only Numbers <span class="text-danger">*</span></h5>
					<div class="input-group"> <span class="input-group-addon">$</span>
						<input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required"> <span class="input-group-addon">.00</span> </div>
				</div>
				<div class="form-group">
					<h5>Maximum Number <span class="text-danger">*</span></h5>
<input type="text" name="maxNum" class="form-control" required data-validation-required-message="This field is required" max="25">
					<div class="form-control-feedback"> <small><i>Must be lower than 25</i></small> - <small>Add <code>max</code> attribute for maximum number to accept. Also use <code>data-validation-max-message</code> attribute for max failure message</small> </div>
				</div>
				<div class="form-group">
					<h5>Minimum Number <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="minNum" class="form-control" required data-validation-required-message="This field is required" min="10"> </div>
					<div class="form-control-feedback"><small><i>Must be higher than 10</i></small> - <small>Add <code>min</code> attribute for minimum number to accept. Also use <code>data-validation-min-message</code> attribute for min failure message</small></div>
				</div>
				<div class="form-group">
					<h5>Text Input Range <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20"> </div>
				</div>
				<div class="form-group">
					<h5>Input with Button <span class="text-danger">*</span></h5>
					<div class="controls">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" required> <span class="input-group-btn"> <button class="btn btn-info" type="button">Go!</button> </span> </div>
					</div>
				</div>
				<div class="form-group">
					<h5>No Characters, Only Numbers <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> </div>
				</div>
				<div class="form-group">
					<h5>Pattern <span class="text-danger">*</span> <small><i>Must start with 'a' and end with 'z'</i></small></h5>
					<div class="controls">
						<input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'" class="form-control" required>
						<div class="form-control-feedback"><small>Add <code>pattern</code> attribute to set input pattern. Also use <code>data-validation-pattern-message</code> attribute for pattern failure message</small></div>
					</div>
				</div>
				<div class="form-group">
					<h5>Enter URL <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" class="form-control" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's">
						<div class="form-control-feedback"><small>Add <code>data-validation-regex-regex</code> attribute for regular expression. Also use <code>data-validation-regex-message</code> attribute for regex failure message</small></div>
					</div>
				</div>
				<div class="form-group">
					<h5>Enter Email Address <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
				</div>
				<div class="form-group">
					<h5>Enter Date <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>
					<div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
				</div>
				<div class="form-group">
					<h5>Basic Select <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="select" id="select" required class="form-control">
							<option value="">Select Your City</option>
							<option value="1">India</option>
							<option value="2">USA</option>
							<option value="3">UK</option>
							<option value="4">Canada</option>
							<option value="5">Dubai</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<h5>Textarea <span class="text-danger">*</span></h5>
					<div class="controls">
						<textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h5>Checkbox <span class="text-danger">*</span></h5>
							<div class="controls">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" required value="single" name="styled_single_checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Check this custom checkbox</span> </label>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<h5>Checkbox Group <span class="text-danger">*</span></h5>
							<div class="controls">
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" value="x" name="styled_checkbox" required class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">I am unchecked Checkbox</span> </label>
								</fieldset>
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" value="y" name="styled_checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">I am unchecked too</span> </label>
								</fieldset>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h5>Select Max 2 Checkbox<span class="text-danger">*</span></h5>
							<div class="controls">
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" name="styled_max_checkbox" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" required class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">I am unchecked Checkbox</span> </label>
								</fieldset>
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" name="styled_max_checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">I am unchecked too</span> </label>
								</fieldset>
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" name="styled_max_checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">You can check me</span> </label>
								</fieldset>
							</div> <small>Select any 2 options</small>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<h5>Minimum 2 Checkbox selection<span class="text-danger">*</span></h5>
							<div class="controls">
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox" required class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">I am unchecked Checkbox</span> </label>
								</fieldset>
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" value="2" name="styled_min_checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">I am unchecked too</span> </label>
								</fieldset>
								<fieldset>
									<label class="custom-control custom-checkbox">
										<input type="checkbox" value="3" name="styled_min_checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">You can check me</span> </label>
								</fieldset>
							</div> <small>Select any 2 options</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h5>Radio Buttons <span class="text-danger">*</span></h5>
							<fieldset class="controls">
								<label class="custom-control custom-radio">
									<input type="radio" value="1" name="styled_radio" required id="styled_radio1" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Check Me</span> </label>
							</fieldset>
							<fieldset>
								<label class="custom-control custom-radio">
									<input type="radio" value="2" name="styled_radio" id="styled_radio2" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Or Me</span> </label>
							</fieldset>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<h5>Inline Radio Buttons <span class="text-danger">*</span></h5>
							<div class="controls">
								<fieldset>
									<label class="custom-control custom-radio">
										<input type="radio" value="Yes" name="styled_inline_radio" required id="styled_radio_inline1" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Check Me</span> </label>
								</fieldset>
								<fieldset>
									<label class="custom-control custom-radio">
										<input type="radio" value="No" name="styled_inline_radio" id="styled_radio_inline2" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Or Me</span> </label>
								</fieldset>
							</div>
						</div>
					</div>
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
<script src="../assets/assets/vendor_components/PACE/pace.min.js"></script>
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
</body>

</html>
