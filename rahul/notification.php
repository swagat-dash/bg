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
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	<link rel="stylesheet" href="../assets/ser/css/master_style.css">
  <link rel="stylesheet" href="../assets/assets/vendor_plugins/iCheck/flat/blue.css">
  <link href="../assets/assets/vendor_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
    <li class="active"><a href="#"><i class="fa fa-bell"></i><span>Notifications</span></a></li>
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
      <h1>
      Send Notifications
      </h1>
    </section>
  
     <section class="content">
      <div class="row">
			<div class="col-12">
				<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Send notifications to retailers or distributors</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<form action="" method="post">
              <div class="form-group">
                <input class="form-control" name="n-to" placeholder="To:">
              </div>
              <div class="form-group">
                <input class="form-control" name="n-subject" placeholder="Subject:">
              </div>
              <div class="form-group">
                    <textarea class="form-control" name="notification" style="height: 300px">
                   <!-- <p>Your Message Here.... + dynamically generated attached file link (example, www.bgtechno.in/upload/file.jpeg)</p>
                    <p>Type "R" to send notification to all retailers. </p>
                    <p>Type "D" to send notifications to all distributors.</p>
                    <p>Type "ALL" to send notifications to everyone.</p>
                    <p>Type retailer/distributor ID to send it to that specific person.</p>-->
                    </textarea>
              </div>
            </div>
        </form>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-success" id="sa-success"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-danger" id="sa-ticketcancel"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
    </div>
  </div>
		 </div>
	  </section>

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
	 

	<script src="../assets/assets/vendor_components/jquery/dist/jquery.js"></script>
	<script src="../assets/assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="../assets/assets/vendor_components/popper/dist/popper.min.js"></script>
	<script src="../assets/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
  <script src="../assets/assets/vendor_components/PACE/pace.min.js"></script>
	<script src="../assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
  <script src="../assets/assets/vendor_plugins/iCheck/icheck.js"></script>
  <script src="../assets/assets/vendor_components/sweetalert/sweetalert.min.js"></script>
  <script src="../assets/assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>
	<script src="../assets/ser/js/template.js"></script>
	
</body>

</html>
