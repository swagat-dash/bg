<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>My wallet | BG Techno</title>
  
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
  <link rel="stylesheet" href="../assets/assets/vendor_components/Magnific-Popup-master/dist/magnific-popup.css">
	<link rel="stylesheet" href="../assets/ser/css/master_style.css">
	<link rel="stylesheet" href="../assets/ser/css/skins/_all-skins.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<script type="text/javascript">
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
              <script type="text/javascript">getRandomImage(random_images_array, '../assets/images/avatar/')</script>
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
              	<div class="col-12">
                <p><?php echo "$_SESSION[fname]" ; ?></p>
                  <p><?php echo "$_SESSION[email]" ; ?></p></div>
                  <div class="col-12">
                  <a href="#" class="btn btn-success btn-sm btn-rounded">My Wallet</a>
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
    <li><a href="data.php"><i class="fa fa-users"></i><span>Retailers</span></a></li>
    <li><a href="transactions.php"><i class="fa fa-credit-card"></i><span>Transactions</span></a></li>
    <li><a href="contact.php"><i class="fa fa-envelope"></i><span>Support</span></a></li>
		</ul>
    </section>
  </aside>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>My Wallet</h1>
    </section>

    
    <!-- Main content -->
    <section class="content">
      <div class="row">
			<div class="col-12">
				<div class="box">
					<div class="box-header with-border">						
						<h4 class="box-title">Add or Withdraw money easily</h4>
						<h6 class="box-subtitle">You can withdraw your money anytime by PayTm, PhonePe or directly to you account.</h6>
					</div>
					<div class="box-body">
						<div class="row mb-30">
							<!-- Column -->
							<div class="col-md-4 col-lg-4 col-xs-12">
								<div class="box box-inverse box-success">
									<div class="box-body text-center">
										<h1 class="font-light text-white">2,064</h1>
										<h6 class="text-white mb-10">Available Balance</h6>
									</div>
								</div>
							</div>
							<!-- Column -->
							<div class="col-md-4 col-lg-4 col-xs-12">
								<div class="box box-inverse box-danger">
									<div class="box-body text-center">
										<h1 class="font-light text-white">1,738</h1>
										<h6 class="text-white mb-10">Pending Add Request</h6>
									</div>
								</div>
							</div>
							<!-- Column -->
							<div class="col-md-4 col-lg-4 col-xs-12">
								<div class="box box-inverse box-warning">
									<div class="box-body text-center">
										<h1 class="font-light text-white">1100</h1>
										<h6 class="text-white mb-10">Pending Withdraw Request</h6>
									</div>
								</div>
							</div>
							<!-- Column -->
						</div>
              <div class="row no-gutters">

              <div class="col-lg-4">
                <div class="box p-60 text-center">
                  <h3 class="price text-danger">
                    <sup>&#8377;</sup>999
                  </h3>

                  <br>
                  <a class="btn btn-bold btn-block btn-round btn-danger" href="checkout.php">Add Money</a>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="box p-60 text-center">
                  <h3 class="price text-primary">
                    <sup>&#8377;</sup>1999
                  </h3>
                  <br>
                  <a class="btn btn-bold btn-block btn-round btn-primary" href="checkout.php">Add Money</a>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="box p-60 text-center">
                  <h3 class="price text-info">
                    <sup>&#8377;</sup>2999
                  </h3>
                  <br>
                  <a class="btn btn-bold btn-block btn-round btn-info" href="checkout.php">Add Money</a>
                </div>
              </div>
					</div>
            <div class="row no-gutters">

              <div class="col-lg-4">
                <div class="box p-60 text-center">
                  <h3 class="price text-danger">
                    <sup>&#8377;</sup>3999
                  </h3>

                  <br>
                  <a class="btn btn-bold btn-block btn-round btn-danger" href="checkout.php">Add Money</a>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="box p-60 text-center">
                  <h3 class="price text-primary">
                    <sup>&#8377;</sup>4999
                  </h3>
                  <br>
                  <a class="btn btn-bold btn-block btn-round btn-primary" href="checkout.php">Add Money</a>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="box p-60 text-center">
                  <h3 class="price text-info">
                    <sup>&#8377;</sup>5999
                  </h3>
                  <br>
                  <a class="btn btn-bold btn-block btn-round btn-info" href="checkout.php">Add Money</a>
                </div>
              </div>
					</div>
					 <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Withdraw Money</h3>
        </div>
        <div class="box-body">
			<a class="popup-with-form btn btn-success" href="#withdraw-form">Proceed</a>
			
			<!-- form itself -->
			<form id="withdraw-form" class="form-element mfp-hide white-popup-block" action="">
				<h1>Withdrawl Request</h1>
				<fieldset style="border:0;">
					<p>You can withdraw your money anytime by requesting here. You can choose any payment method like UPI, PayTm, PhonePe or directly to you account.</p>
					<div class="form-group">
					<input name="paymentMethod" type="radio" class="with-gap" id="upi" checked/>
						<label for="upi">UPI</label></div>
						<div class="form-group">
					<input name="paymentMethod" type="radio" class="with-gap" id="phonepe" />
							<label for="phonepe">PhonePe</label></div>
							<div class="form-group">
					<input name="paymentMethod" type="radio" class="with-gap" id="paytm"/>
								<label for="paytm">PayTm</label></div>
								<div class="form-group">
					<input name="paymentMethod" type="radio" class="with-gap" id="bank" />
									<label for="bank">Bank Transfer</label></div>
    					<div class="box form-group" data-show="upi" data-hide="paymentMethod">
    					<div class="controls">
						<input type="text" class="form-control" name="upi" placeholder="Google Pay or BHIM UPI">
							</div></div>
    					<div class="box form-group" data-show="phonepe" data-hide="paymentMethod">
    					<div class="controls">
						<input type="tel" class="form-control" name="phonepe" placeholder="PhonePe Number" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$">
							</div></div>
   				 		<div class="box form-group" data-show="paytm" data-hide="paymentMethod">
   				 		<div class="controls">
						<input type="tel" class="form-control" name="paytm" placeholder="PayTm Number" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$">
							</div></div>
    					<div class="box form-group" data-show="bank" data-hide="paymentMethod">
    					<div class="controls">
						<input type="text" class="form-control" name="name" placeholder="Account Holder's Name" pattern="^[A-z ]{3,72}$">
							</div>
							<div class="controls">
						<input type="text" class="form-control" name="phone" placeholder="registered mobile number" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$">
							</div>
 				 		<div class="controls">
						<input type="text" class="form-control" name="accountNumber" placeholder="Account Number" pattern="^[\d]{11,17}$">
							</div>
 				 		<div class="controls">
						<input type="text" class="form-control" name="bankName" placeholder="Bank name and branch" pattern="^[A-z,. \d]{3,72}$">
							</div>
 				 		<div class="controls">
						<input type="text" class="form-control" name="ifsc" placeholder="IFSC Code" pattern="^[a-z0-9]{11}$|^[A-Z0-9]{11}$">
							</div>
  				 		</div>
   				 		<button type="submit" class="btn btn-info">Withdraw</button>
				</fieldset>
				
			</form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

					</div>
				</div>
		  </div>
		</div>
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
  <script src="../assets/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
  <script src="../assets/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
	<script src="../assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	<script src="../assets/ser/js/template.js"></script>
	<script src="../assets/ser/js/demo.js"></script>