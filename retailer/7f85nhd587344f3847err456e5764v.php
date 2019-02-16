<?php
session_start();
if(!isset($_SESSION["login_retailer"]) || $_SESSION["login_retailer"]!==true)

{

header("location: http://www.bgtechno.in");

}

a:
$t_id=mt_rand();
require 'config.php';
$ap1="SELECT t_id FROM transactions WHERE t_id=$t_id";
$ap2=mysqli_query($ap,$ap1);
if(mysqli_num_rows($ap2)!==0)
{
mysqli_close($ap);
goto a;
}

else
{

$_SESSION["t_id"]=$t_id;

}

 ?>﻿

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Manual Transaction Verification | BG Techno</title>
  
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
  <link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="../assets/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="../assets/ser/css/master_style.css">
	<link rel="stylesheet" href="../assets/ser/css/skins/_all-skins.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<script>
var random_images_array = ['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png','avatar5.png', 'avatar6.png', 'avatar7.png', 'avatar8.png', 'avatar9.png', 'avatar10.png', 'avatar11.png', 'avatar12.png', 'avatar13.png', 'avatar14.png','avatar15.png', 'avatar16.png', 'avatar17.png', 'avatar18.png', 'avatar19.png', 'avatar20.png', 'avatar21.png', 'avatar22.png', 'avatar23.png', 'avatar24.png','avatar25.png', 'avatar26.png', 'avatar27.png', 'avatar28.png', 'avatar29.png', 'avatar30.png', 'avatar31.png', 'avatar32.png', 'avatar33.png', 'avatar34.png','avatar35.png', 'avatar36.png', 'avatar37.png', 'avatar38.png', 'avatar39.png', 'avatar40.png', 'avatar41.png', 'avatar42.png', 'avatar43.png', 'avatar44.png'];
    
function getRandomImage(imgAr, path) {
    path = path || '../assets/images/avatar/';
    var num = Math.floor( Math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img src="' + path + img + '" alt = "Profile Icon" class="user-image rounded-circle">';
    document.write(imgStr); document.close();
}
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="../assets/images/aries-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../assets/images/aries-dark.png" alt="logo"></span>
	  </b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
		  <img src="../assets/images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="../assets/images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>			

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <script>getRandomImage(random_images_array, '../assets/images/avatar/')</script>
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
              	<div class="col-12">
                <p><?php echo $_SESSION["fname"] ; ?></p>
                  <p><?php echo $_SESSION["email"] ; ?></p></div>
                  <div class="col-12">
                  <a href="wallet.php" class="btn btn-success btn-sm btn-rounded">My Wallet</a>
                </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="kyc.php"><i class="ion ion-person"></i> My e-KYC</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#" data-toggle="modal" data-target="#inbox"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#" data-toggle="modal" data-target="#share"><i class="ion ion-share"></i> Share &amp; refer</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
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
					 			<li><a class="box-btn-close" href="#"></a></li>
							</ul>
						</div>
    				</div>
					<div class="box-body">
               			e-KYC helps us to know you or your business properly, so that you can buy any products or services very quickly as we would have all the required documents or details handy. In case of personal services, we would like to know details like your PAN number, Aadhar number etc. In case of business services, we would like to know about your business like GST number, DIN, etc. Next time when you buy any products, you would not be asked again for those details. We understand your privacy and so we do not share any of your details with 3rd parties.
    				</div>
				</div>
			<!--message starts-->
				<div class="box box-inverse box-info">
    				<div class="box-header">
        			<h4 class="box-title"><strong>Dynamic title</strong></h4>
            			<div class="box-tools pull-right">					
							<ul class="box-controls">
					 			<li><a class="box-btn-close" href="#"></a></li>
							</ul>
						</div>
    				</div>
					<div class="box-body">
               			Dynamic body
    				</div>
				</div>
			<!--message starts-->
				<div class="box box-inverse box-danger">
    				<div class="box-header">
        			<h4 class="box-title"><strong>Dynamic title</strong></h4>
            			<div class="box-tools pull-right">					
							<ul class="box-controls">
					 			<li><a class="box-btn-close" href="#"></a></li>
							</ul>
						</div>
    				</div>
					<div class="box-body">
                		Dynamic body
    				</div>
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
				<p id="to-copy">http://www.bgtechno.in/<?php echo "retailer.php?refrallcode=".$_SESSION["refrallcode"]."/" ; ?></p>
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
      <h2 style="display: none;">Fill this form to manually verify your transaction</h2>
      <!-- sidebar menu: : style can be found in sidebar.less -->
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
    <li><a href="index.php"><i class="fa fa-shopping-cart"></i><span>Buy Now</span></a></li>
    <li><a href="transactions.php"><i class="fa fa-credit-card"></i><span>Transactions</span></a></li>
    <li><a href="contact.php"><i class="fa fa-envelope"></i><span>Support</span></a></li>
		</ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Transaction Update</h3>
          <h6 class="box-subtitle">Fill the below form for verification of completion your UPI / Paytm / PhonePe or any Wallet transaction.</h6>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
            	<form action="verify.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<h5>Full Name <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="uname" value="<?php echo $_SESSION["fname"].$_SESSION["lname"];?>" class="form-control" required data-validation-required-message="Enter your full name"> </div>
						<div class="form-control-feedback"><small>This name should match your account's name.</small></div>
					</div>
					<div class="form-group">
						<h5>Email <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="email" name="email" value="<?php echo $_SESSION["email"];?>" class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="Enter your email"></div><div class="form-control-feedback"><small>This email should match your account's email.</small></div>
					</div>
					<div class="form-group">
						<h5>Payment Method <span class="text-danger">*</span></h5>
						<div class="controls">
							<select name="payment" id="payment" required class="form-control">
								<option value="">Select Your Payment Method</option>
								<option value="Google Pay">Google Pay</option>
								<option value="Paytm">Paytm</option>
								<option value="PhonePe">PhonePe</option>
								<option value="BHIM UPI">BHIM UPI</option>
								<option value="Account Transfer">Account Transfer</option>
								<option value="NEFT">NEFT</option>
								<option value="IMPS">IMPS</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<h5>Transaction ID / Reference Number<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="t_id" value="<?php echo $_SESSION["t_id"];?>" class="form-control" required data-validation-required-message="Enter the transaction ID" pattern="^[0-9a-zA-Z]{6,}$"> </div>
					</div>
					<div class="form-group">
						<h5>Confirm Transaction ID / Reference Number<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="text" name="transaction-ID2" data-validation-match-match="transaction-ID" class="form-control" required> </div>
					</div>
               		<div class="form-group">
                <h5>Date of Transaction <span class="text-danger">*</span></h5>
                <div class="input-group date">
           <input type="text" class="form-control" id="datepicker" name="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
					<span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
              </div>
				<div class="bootstrap-timepicker">
                <div class="form-group">
                  <h5>Time of Transaction </h5>
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="timepicker" name="time">
					   <span class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </span>
                  </div>
                </div>
              </div>

					<div class="form-group">
						<h5>Upload Screenshot </h5>
						<div class="controls">
							<input type="file" name="file" class="form-control" required> </div>
					</div>
					
					<!-- 
						<div class="form-group">
						<h5>Product / Service <span class="text-danger">*</span></h5>
						<div class="controls">
							<select name="productlist" id="productlist" required class="form-control">
								<option value="">Select Your Product</option>
								<option value="1">GST</option>
								<option value="2">PAN</option>
								<option value="3">Aadhar</option>
								<option value="4">AePS</option>
								<option value="5">ITR</option>
								<option value="5">Railway Ticket Booking</option>
								<option value="5">Web design</option>
								<option value="6">Bulk SMS</option>
								<option value="7">Business Registration</option>
								<option value="8">Jhar Sewa</option>
								<option value="9">Digital Signature</option>
								<option value="10">Software Services</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<h5>Amount <span class="text-danger">*</span></h5>
						<div class="input-group"> <span class="input-group-addon">$</span>
							<input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required"> <span class="input-group-addon">.00</span> </div>
					</div> 
					-->
					
					<div class="text-xs-right">
						<button type="submit" class="btn btn-info">Verify my Transaction</button>
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
          <li class="nav-item">
            <a class="nav-link" href="https://www.swagatdash.com/" target="_blank" style="display:none;">♥</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">FAQ</a>
          </li>
        </ul>
      </div>
      &copy; 2019 BG Techno. All Rights Reserved.
    </footer>

</div>
<!-- ./wrapper -->
	<script src="../assets/assets/vendor_components/jquery/dist/jquery.min.js"></script>
	<script src="../assets/assets/vendor_components/popper/dist/popper.min.js"></script>
	<script src="../assets/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../assets/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
    $('.timepicker').timepicker({
      showInputs: false
    });
  //Date picker
    $('#datepicker').datepicker({
    autoclose: true,
    todayHighlight: true
    });
  });</script>
</body>
</html>
