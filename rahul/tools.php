<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Admin Dashboard | BG Techno</title>

	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	<link rel="stylesheet" href="../assets/ser/css/master_style.css">
	<link rel="stylesheet" href="../assets/ser/css/skins/_all-skins.css">
	<link rel="stylesheet" href="../assets/assets/vendor_plugins/pace/pace.min.css">
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
<style>.box-body {
    overflow-x: auto!important;
}</style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
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
                  <a href="#"><i class="ion ion-person"></i> Tools</a>
                 </div>
                <div class="col-12 text-left">
                  <a href="#" data-toggle="modal" data-target="#recover"><i class="fa fa-exclamation-circle"></i> Recovery</a>
                 </div>
				<div class="col-12 text-left">
                  <a href="#" data-toggle="modal" data-target="#pwd"><i class="ion ion-person"></i> Change Password</a>
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
              
<!-- pwd Modal -->
<div class="modal center-modal fade" data-backdrop="true" id="pwd" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
			<!--message starts-->
				<div class="box">
<div class="box-header with-border">
	<h3 class="box-title">Change Your Password</h3>
	<h6 class="box-subtitle">Fill the form to change your admin password.</h6>
</div>
<div class="box-body">
	<div class="row">
		<div class="col">
			<form novalidate>
				<div class="form-group">
					<h5>Email <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="email" name="email" class="form-control" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="Enter your email">
					</div>
					<div class="form-control-feedback"><small>This email should match your account's email.</small></div>
				</div>
				<div class="form-group">
					<h5>Old Password <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="password" name="old-password" class="form-control" required data-validation-required-message="Enter a secure password" pattern="^(?=[\040-\176]*?[A-Z])(?=[\040-\176]*?[a-z])(?=[\040-\176]*?[0-9])(?=[\040-\176]*?[#?!@$%^&*-])[\040-\176]{8,72}$"></div>
						<div class="form-control-feedback"></div>
				</div>
				<div class="form-group">
					<h5>New Password <span class="text-danger">*</span></h5>
					<div class="controls">
						<input type="password" name="new-password" class="form-control" required data-validation-required-message="Enter a secure password" pattern="^(?=[\040-\176]*?[A-Z])(?=[\040-\176]*?[a-z])(?=[\040-\176]*?[0-9])(?=[\040-\176]*?[#?!@$%^&*-])[\040-\176]{8,72}$"></div>
						<div class="form-control-feedback"><small>Password should contain atleast one uppercase letter, one lowercase letter, one number, one symbol and should be 8 - 72 characters long.</small></div>
				</div>
				<div class="form-group">
					<h5>Confirm Password <span class="text-danger">*</span></h5>
					<div class="controls">
<input type="password" name="confirm-new-password" data-validation-match-match="new-password" required data-validation-required-message="Please enter your password again for confirmation" class="form-control"> </div>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-outline" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-info float-right">Submit</button>
			</div>
			</form>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<!-- /.box-body -->
</div>
			<!-- content ends -->
			</div>
		</div>
	</div>
</div>
<!-- pwd Modal ends -->

<!-- recover Modal -->
<div class="modal modal-danger fade" id="recover">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			  <h4 class="modal-title">Account Recovery</h4>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p id="to-copy">http://www.bgtechno.in/7hf633fsryt7bnct34573ncb4tv5q1.php</p>
				<p>Share the link to recover any distributor or retailer account.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline float-right" onClick="CopyToClipboard('to-copy')">Copy Link</button>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->

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
        <li class="active"><a href="#"><i class="fa fa-wrench"></i><span>Tools</span></a></li>
    </ul>
    </section>
  </aside>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tools
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       <div class="col-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">For Retailers</h3>
              <div class="box-tools pull-right">
            <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></a></li>
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li>
             </ul>
          </div>
            </div>
            <form class="form-element">

            <div class="box-body form-element">
            <br>
             <div class="input-group">
                <input class="form-control" type="text" name="id" pattern="^[A-z\d]+$" placeholder="Enter the Retailer ID" required>
                <span class="input-group-addon">Retailer ID</span>
              </div>
              <br><br>
               <div class="input-group">
                <select name="business-status" class="select form-control">
                	<option value="">Business e-KYC status</option>
                	<option value="pending">Pending</option>
                	<option value="completed">Completed</option>
                	<option value="cancelled">Cancelled</option>
                </select>
                <span class="input-group-addon">Business e-KYC Status</span>
              </div>
			<br><br>
              <div class="input-group">
                <select name="personal-status" class="select form-control">
                	<option value="">Personal e-KYC status</option>
                	<option value="pending">Pending</option>
                	<option value="completed">Completed</option>
                	<option value="cancelled">Cancelled</option>
                </select>
                <span class="input-group-addon">Personal e-KYC Status</span>
              </div>
           <div class="box-footer" style="text-align: center">
               
                <button type="submit" class="btn btn-success">Update</button>
                
              </div>
				</div>
				 </form>        
        </div>
    </div></div>
    <div class="row">
       <div class="col-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">For Distributors</h3>
              <div class="box-tools pull-right">
            <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></a></li>
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li>
             </ul>
          </div>
            </div>
            <form class="form-element">

            <div class="box-body form-element">
            <br>
             <div class="input-group">
                <input class="form-control" type="text" name="id" pattern="^[A-z\d]+$" placeholder="Enter the Distributor ID" required>
                <span class="input-group-addon">Distributor ID</span>
              </div>
              <br><br>
               <div class="input-group">
                <select name="business-status" class="select form-control">
                	<option value="">Business e-KYC status</option>
                	<option value="pending">Pending</option>
                	<option value="completed">Completed</option>
                	<option value="cancelled">Cancelled</option>
                </select>
                <span class="input-group-addon">Business e-KYC Status</span>
              </div>
			<br><br>
              <div class="input-group">
                <select name="personal-status" class="select form-control">
                	<option value="">Personal e-KYC status</option>
                	<option value="pending">Pending</option>
                	<option value="completed">Completed</option>
                	<option value="cancelled">Cancelled</option>
                </select>
                <span class="input-group-addon">Personal e-KYC Status</span>
              </div>
           <div class="box-footer" style="text-align: center">
               
                <button type="submit" class="btn btn-success">Update</button>
                
              </div>
				</div>
				 </form>        
        </div>
    </div></div>
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
	<script src="../assets/assets/vendor_components/PACE/pace.min.js"></script>
	<script src="../assets/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../assets/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	<script src="../assets/ser/js/template.js"></script>
	<script src="../assets/ser/js/demo.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../assets/ser/js/pages/data-table.js"></script>

</body>


