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
<style>input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}</style>
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
			<script>
				getRandomImage(random_images_array, '../assets/images/avatar/')

			</script>
		</a>
		<ul class="dropdown-menu scale-up">
			<!-- User image -->
			<li class="user-header">
				<div class="col-12">
					<p><?php echo "$_SESSION[fname]" ; ?></p>
                  <p><?php echo "$_SESSION[email]" ; ?></p>
				</div>
				<div class="col-12"> <a href="wallet.php" class="btn btn-success btn-sm btn-rounded">My Wallet</a> </div>
			</li>
			<!-- Menu Body -->
			<li class="user-body">
				<div class="row no-gutters">
				<div class="col-12 text-left"> <a href="#"><i class="ion ion-person"></i> My e-KYC</a> </div>
					<div class="col-12 text-left"> <a href="#" data-toggle="modal" data-target="#inbox"><i class="ion ion-email-unread"></i> Inbox</a> </div>
					<div class="col-12 text-left"> <a href="#" data-toggle="modal" data-target="#share"><i class="ion ion-share"></i> Share &amp; refer</a> </div>
					<div role="separator" class="divider col-12"></div>
					<div class="col-12 text-left"> <a href="#"><i class="fa fa-power-off"></i> Logout</a> </div>
				</div>
			</li>
		</ul>
	</li>
</ul>
</div>
</nav>
</header>
<!-- inbox Modal -->
<div class="modal center-modal fade" data-backdrop="true" id="inbox" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
	<!--message starts-->
	<div class="box box-inverse box-success">
		<div class="box-header">
			<h4 class="box-title"><strong>Complete your e-KYC</strong></h4>
			<div class="box-tools pull-right">
				<ul class="box-controls">
					<li>
						<a class="box-btn-close" href="#"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="box-body"> e-KYC helps us to know you or your business properly, so that you can buy any products or services very quickly as we would have all the required documents or details handy. In case of personal services, we would like to know details like your PAN number, Aadhar number etc. In case of business services, we would like to know about your business like GST number, DIN, etc. Next time when you buy any products, you would not be asked again for those details. We understand your privacy and so we do not share any of your details with 3rd parties. </div>
	</div>
	<!--message starts-->
	<div class="box box-inverse box-info">
		<div class="box-header">
			<h4 class="box-title"><strong>Dynamic title</strong></h4>
			<div class="box-tools pull-right">
				<ul class="box-controls">
					<li>
						<a class="box-btn-close" href="#"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="box-body"> Dynamic body </div>
	</div>
	<!--message starts-->
	<div class="box box-inverse box-danger">
		<div class="box-header">
			<h4 class="box-title"><strong>Dynamic title</strong></h4>
			<div class="box-tools pull-right">
				<ul class="box-controls">
					<li>
						<a class="box-btn-close" href="#"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="box-body"> Dynamic body </div>
	</div>
	<!-- content ends -->
</div>
</div>
</div>
</div>
<!-- inbox Modal ends -->
<!-- referral Modal -->
<div class="modal modal-primary fade" id="share">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
	<h4 class="modal-title">Referral Code</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
	<p id="to-copy">http://www.rmdtechnologies.in/<?php echo "retailer.php?refrallcode=".$_SESSION["refrallcode"]."/" ; ?></p>
	<p>Copy the referral code and share it with your friends to enroll them as your retailers.</p>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
	<button type="button" class="btn btn-outline float-right" onClick="CopyToClipboard('to-copy')">Copy</button>
</div>
</div>
</div>
</div>
<!-- /.modal -->
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- sidebar menu: : style can be found in sidebar.less -->
<h2 style="display: none;">Fill this kyc form to enable hassle free and fast checkout</h2>
<ul class="sidebar-menu" data-widget="tree">
<li class="user-profile treeview">
	<a href="services.html"> <span>Services Basic Info</span> <span class="pull-right-container"> <i class="fa fa-angle-right pull-right"></i> </span> </a>
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
<li><a href="index.php"><i class="fa fa-shopping-cart"></i><span>Buy Now</span></a></li>
<li><a href="transactions.php"><i class="fa fa-credit-card"></i><span>Transactions</span></a></li>
<li><a href="contact.php"><i class="fa fa-envelope"></i><span>Support</span></a></li>
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
<div class="box-header with-border bg-olive">
	<h3 class="box-title">Personal e-KYC</h3>
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
				<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<h5>Email <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="email" class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="Please enter your email address" data-validation-regex-message="Enter a valid email address">
					</div>
					<div class="form-control-feedback"><small>This email should match your account's email.</small></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>Phone <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="number" name="phone" class="form-control" data-validation-regex-regex="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" required data-validation-required-message="Enter your mobile number" data-validation-regex-message="Enter a valid Indian phone number"> </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">		
				<div class="form-group">
					<h5>House No &amp; Society name <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="appartment" class="form-control" required data-validation-required-message="Enter your House Number, Floor, Appartment name"> </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<h5>Landmark <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="landmark" class="form-control" required data-validation-required-message="Enter your Landmark"> </div>
				</div>
			</div>
			<div class="col-md-4">		
				<div class="form-group">
					<h5>District <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="district" class="form-control" required data-validation-required-message="Enter your District or Town"> </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">		
				<div class="form-group">
					<h5>Pincode <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="number" name="pincode" class="form-control" data-validation-regex-regex="^[1-9][0-9]{5}$" required data-validation-required-message="Enter your Pincode" data-validation-regex-message="Enter a valid Indian Zip code"> </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>State <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="state" id="state" required class="form-control">
							<option value="">Select Your State</option>
							<option value="1">Andhra Pradesh</option>
							<option value="2">Arunachal Pradesh</option>
							<option value="3">Assam</option>
							<option value="4">Bihar</option>
							<option value="5">Chhattisgarh</option>
							<option value="6">Goa</option>
							<option value="7">Gujarat</option>
							<option value="8">Haryana</option>
							<option value="9">Himachal Pradesh</option>
							<option value="10">Jammu and Kashmir</option>
							<option value="11">Jharkhand</option>
							<option value="12">Karnataka</option>
							<option value="13">Kerala</option>
							<option value="14">Madhya Pradesh</option>
							<option value="15">Maharashtra</option>
							<option value="16">Manipur</option>
							<option value="17">Meghalaya</option>
							<option value="18">Mizoram</option>
							<option value="19">Nagaland</option>
							<option value="20">Odisha</option>
							<option value="21">Punjab</option>
							<option value="22">Rajasthan</option>
							<option value="23">Sikkim</option>
							<option value="24">Tamil Nadu</option>
							<option value="25">Telangana</option>
							<option value="26">Tripura</option>
							<option value="27">Uttar Pradesh</option>
							<option value="28">Uttarakhand</option>
							<option value="29">West Bengal</option>
							<option value="23">Andaman and Nicobar Islands</option>
							<option value="24">Chandigarh</option>
							<option value="25">Dadar and Nagar Haveli</option>
							<option value="26">Daman and Diu</option>
							<option value="27">Delhi</option>
							<option value="28">Lakshadweep</option>
							<option value="29">Puducherry (Pondicherry)</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h5>Aadhar Number<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="number" name="aadhar" class="form-control" required data-validation-required-message="Aadhar Number is mandatory for e-KYC" data-validation-regex-regex="^[\d]{12}$" data-validation-regex-message="Enter valid Aadhar number"> </div>
					</div>
				</div>
			<div class="col-md-6">
				<div class="form-group">
						<h5>PAN Number<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="pan" class="form-control" required data-validation-required-message="Enter your Permanent Account Number" data-validation-regex-regex="[A-Z]{3}[ABCFGHLJPTE]{1}[A-Z]{1}[0-9]{4}[A-Z]{1}" data-validation-regex-message="Enter a valid PAN number in uppercase only"> </div>
				</div>
			</div>
		</div>
		<div class="form-group">
						<h5>Upload Scanned Documents<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="file" name="file" class="form-control"> </div>
					</div>
						<div class="text-xs-right">
					<button type="submit" class="btn bg-olive">Submit</button>
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
<section class="content">
<!-- Basic Forms -->
<div class="box">
<div class="box-header with-border bg-purple">
	<h3 class="box-title">Business e-KYC</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
	<div class="row">
		<div class="col">
			<form novalidate>
				<div class="form-group">
				<h5>Company Name <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="name" class="form-control" required data-validation-required-message="Enter the full name of your Company/Shop/Industry"> </div>
					<div class="form-control-feedback"><small>The name should match your legal identity proofs if the company is already registered.</small></div>
				</div>
			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<h5>Email <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="email" class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="Please enter your email address" data-validation-regex-message="Enter a valid email address">
					</div>
					<div class="form-control-feedback"><small>This email should match your account's email.</small></div>
				</div></div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>Phone <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="phone" class="form-control" data-validation-regex-regex="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" required data-validation-required-message="Enter your mobile number" data-validation-regex-message="Enter a valid Indian phone number"> </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">		
				<div class="form-group">
					<h5>Registered Address <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="com-address" class="form-control" required data-validation-required-message="Enter your Office Number, Floor, Complex name, locality and region"> </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<h5>Address Line 2 <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="com-address2" class="form-control" required data-validation-required-message="Enter your 2nd line of address"> </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">		
				<div class="form-group">
					<h5>District <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="text" name="com-district" class="form-control" required data-validation-required-message="Enter your District, Town or City"> </div>
				</div>
			</div>
			<div class="col-md-4">		
				<div class="form-group">
					<h5>Pincode <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="number" name="com-pincode" class="form-control" data-validation-regex-regex="^[1-9][0-9]{5}$" required data-validation-required-message="Enter your Pincode" data-validation-regex-message="Enter a valid Indian Zip code"> </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<h5>State <span class="text-danger">*</span></h5>
					<div class="controls">
						<select name="com-state" id="com-state" required class="form-control">
							<option value="">Select Your State</option>
							<option value="1">Andhra Pradesh</option>
							<option value="2">Arunachal Pradesh</option>
							<option value="3">Assam</option>
							<option value="4">Bihar</option>
							<option value="5">Chhattisgarh</option>
							<option value="6">Goa</option>
							<option value="7">Gujarat</option>
							<option value="8">Haryana</option>
							<option value="9">Himachal Pradesh</option>
							<option value="10">Jammu and Kashmir</option>
							<option value="11">Jharkhand</option>
							<option value="12">Karnataka</option>
							<option value="13">Kerala</option>
							<option value="14">Madhya Pradesh</option>
							<option value="15">Maharashtra</option>
							<option value="16">Manipur</option>
							<option value="17">Meghalaya</option>
							<option value="18">Mizoram</option>
							<option value="19">Nagaland</option>
							<option value="20">Odisha</option>
							<option value="21">Punjab</option>
							<option value="22">Rajasthan</option>
							<option value="23">Sikkim</option>
							<option value="24">Tamil Nadu</option>
							<option value="25">Telangana</option>
							<option value="26">Tripura</option>
							<option value="27">Uttar Pradesh</option>
							<option value="28">Uttarakhand</option>
							<option value="29">West Bengal</option>
							<option value="23">Andaman and Nicobar Islands</option>
							<option value="24">Chandigarh</option>
							<option value="25">Dadar and Nagar Haveli</option>
							<option value="26">Daman and Diu</option>
							<option value="27">Delhi</option>
							<option value="28">Lakshadweep</option>
							<option value="29">Puducherry (Pondicherry)</option>
						</select>
					</div>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h5>GSTIN Number<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="com-gstin" class="form-control" required data-validation-required-message="GST Number is mandatory for e-KYC" data-validation-regex-regex="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}" data-validation-regex-message="Enter valid GST number in uppercase only"> </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h5>Company's PAN Number<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="com-pan" class="form-control" required data-validation-required-message="Enter your Company's Permanent Account Number" data-validation-regex-regex="[A-Z]{3}[ABCFGHLJPTE]{1}[A-Z]{1}[0-9]{4}[A-Z]{1}" data-validation-regex-message="Enter a valid PAN number in uppercase only"> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<h5>Passport Number</h5>
						<div class="controls">
							<input type="text" name="com-passport" class="form-control" data-validation-regex-regex="^(?!^0+$)[a-zA-Z\d]{5,20}$" data-validation-regex-message="Enter valid Passport number in uppercase only"> </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<h5>DIN / DPIN Number</h5>
						<div class="controls">
							<input type="number" name="com-din" class="form-control" data-validation-regex-regex="^[\d]{8}$" data-validation-regex-message="Enter a valid Director Identification Number in uppercase only"> </div>
					</div>
				</div>
			</div>
			<div class="form-group">
					<h5>Tell us more 
					<div class="controls">
						<textarea name="textarea" id="com-info" rows="10" class="form-control" required placeholder="Describe your business..."></textarea>
					</div>
				</div>
		<div class="form-group">
						<h5>Upload Scanned Documents</h5>
						<div class="controls">
							<input type="file" name="file" class="form-control"> </div>
					</div>
						<div class="text-xs-right">
					<button type="submit" class="btn bg-purple">Submit</button>
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
</body>

</html>
