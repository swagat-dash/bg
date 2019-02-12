<?php

session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"]!==true)

{

header("location: http://www.bgtechno.in");

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

	<title>Checkout | BG Techno</title>

	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
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
				<h1>
					Checkout
					
				</h1>
			</section>

			<div class="pad margin no-print">
				<div class="callout callout-danger" style="margin-bottom: 0!important;">
					<h4><i class="fa fa-info"></i> Note:</h4>
					No transaction fees are applicable by paying through UPI or any wallet. We collect 3% transaction fees on every payment gateway transaction.
				</div>
			</div>

			<!-- Main content -->
			<section class="invoice printableArea">
				<!-- title row -->
				<div class="row">
					<div class="col-12">
						<h2 class="page-header">
							INVOICE
							<small class="pull-right">Date: <?php $apt=time(); $apt1=date("d-m-Y",$apt); echo $apt1; ?></small>
						</h2>
					</div>
					<!-- /.col -->
				</div>
				<!-- info row -->
				<div class="row invoice-info">
					<div class="col-sm-6 invoice-col">
						From
						<address>
							<strong class="text-red">BG Techno</strong><br>
							Daltonganj<br>
							Jharkhand, India<br>
							Phone: +91 720 9439 979<br>
							Email: jigyasakendra1@gmail.com
						</address>
					</div>
					<!-- /.col -->
					<div class="col-sm-6 invoice-col text-right">
						To
						<address>
							<strong class="text-blue"><?php echo $_SESSION["fname"];?></strong><br>
							Phone: <?php echo $_SESSION["phn"];?><br>
							Email: <?php echo $_SESSION["email"];?>
						</address>
					</div>
					<!-- /.col -->
					<div class="col-sm-12 invoice-col">
						<div class="invoice-details row no-margin">



							 <?php 
if(!isset($_GET["id"]) && !isset($_GET["type"]))
{
echo "error";
header("location: http://www.bgtechno.in");
}

else
{

$o_id=mt_rand();
$apt=time(); $apt1=date("d-m-Y",$apt);


function ap($o_id)
{
require 'config.php';
$ap1="SELECT * FROM t_order WHERE o_id=$o_id";
$ap2=mysqli_query($ap,$ap1);

if(!$ap2)
{
die(mysqli_error($ap));
}
if(mysqli_num_rows($ap2)==0)
{
$count=0;
$pname=$_GET["type"];
$_SESSION["ptype"]=$pname;
$pid=$_GET["id"];
$_SESSION["pid"]=$pid;
$product=array("GSTR","CAS","DAR","IPR","GST");
$product_table=array("gst_return","ca_services","director_resig_reg","ipr","gst_reg");
a:
if($pname==$product[$count])
{
$ap5="SELECT price,commission FROM $product_table[$count] WHERE id=$pid";
$ap6=mysqli_query($ap,$ap5);
$ap7=mysqli_fetch_assoc($ap6);
$price=$ap7["price"];
$_SESSION["commission"]=$ap7["commission"];
$_SESSION["tmp_price"]=$price;
}
else
{
$count++;
goto a;
}

$ap3="INSERT INTO t_order (reg_date,p_name,pid,total,o_id) VALUES('$apt1','$pname','$pid','$price','$o_id')";
$ap4=mysqli_query($ap,$ap3);
mysqli_close($ap);
}


else
{
 $o_id=mt_rand();
 ap($o_id);
  

     }

}
ap($o_id);
}
echo'

                                                <div class="col-md-6 col-lg-4"><b>Order ID:</b>'.$o_id.'</div>
							<div class="col-md-6 col-lg-4"><b>Timestamp:</b>'.$apt1.'</div>
							<div class="col-md-6 col-lg-4"><b>My ID:</b>'.$_SESSION["refrallcode"].'</div>
						</div>

					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

				<!-- Table row -->
				<div class="row">
					<div class="col-12 table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Product/Service</th>
									<th>Product ID</th>
									<th class="text-right">Subtotal (In &#8377;)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>'.$_GET["type"].'</td>
									<td>'.$_GET["id"].'</td>
									<td class="text-right" id="price">'.$_SESSION["tmp_price"].'</td>
								</tr>';
								?>
							</tbody>
						</table>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

				<div class="row">

					<div class="col-12 col-sm-6 no-print">

						<!-- promo code -->
						
							<div class="form-group col-sm-6">
								<div class="controls">
									<div class="input-group input-group-sm">
										<input type="text" id="promo" class="form-control" placeholder="Promo Code" pattern="^[A-Z\d]+$"> <span class="input-group-btn">
											<button class="btn btn-info" onclick="promo()">Apply</button>


										</span>
									</div>
								</div>
							</div>
						
<script>
function promo()
{
     var req;

     req= new XMLHttpRequest();
     req.onreadystatechange = function() {

    if(this.readyState==4 && this.status==200){
    document.getElementById("price").innerHTML=this.responseText;
    document.getElementById("sub_price").innerHTML=this.responseText;
    document.getElementById("tax").innerHTML=Number(this.responseText)*0.18;
    document.getElementById("total").innerHTML=Number(this.responseText)+(0.18*Number(this.responseText));
    }

};

var code="promo.php?code="+document.getElementById("promo").value;
req.open("GET",code,true)
req.send();
}

</script>
						<!-- accepted payments column -->
						<p class="lead"><b>Payment Methods:</b></p>
						<img src="images/visa.png" alt="Visa">
						<img src="images/mastercard.png" alt="Mastercard">
						<img src="images/american-express.png" alt="American Express">
						<img src="images/paypal2.png" alt="Paypal">

						<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
							Securely pay for your products or services. We have multiple payments options like NEFT, IMPS, Bank Transfer, PayPal, Paytm wallet, PhonePay wallet, UPI etc taxfree. We also have a payment gateway which provides various options like Credit Card, Debit Card, Netbanking etc.
						</p>


					</div>
					<!-- /.col -->



					<div class="col-12 col-sm-6 text-right">

						<div>
							<p id="sub_price">Sub - Total amount : &#8377; <?php echo  $_SESSION["tmp_price"]; ?></p>
							<p id="tax">Tax (18%) : &#8377; <?php $tax=$_SESSION["tmp_price"]*0.18; echo $tax.'</p>
							
						</div>
						<div class="total-payment">
							<h3 id="total"><b>Total :</b> &#8377;';
$finalprice=$_SESSION["tmp_price"]+$tax;
echo $finalprice.'</h3>';?>
						</div>
					<!--	<label for="promocode" id="promobutton" class="no-print" onclick="i_have_code()">I have a Promo Code</label>-->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->

				<!-- this row will not appear when printing -->
				<div class="row no-print">

					<button id="print" class="btn btn-warning col-md-12 col-lg-2" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>

					<button type="button" class="btn btn-success col-md-12 col-lg-5"><i class="fa fa-paypal"></i> Pay via Payment Gateway</button>

					<button type="button" class="btn btn-info col-md-12 col-lg-5" data-toggle="modal" data-target="#pay"><i class="fa fa-credit-card"></i> Pay without transaction fees</button>
				</div>
			</section>
			<!-- /.content -->
			<div class="clearfix"></div>
		</div>
		<!-- /.content-wrapper -->
		<!-- Modal -->
		<div class="modal modal-fill fade" data-backdrop="false" id="pay" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Pay manually without any transaction fees</h5>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="vtabs">
							<ul class="nav nav-tabs tabs-vertical" role="tablist">
								<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#account" role="tab"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Bank Transfer, NEFT, IMPS</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#paytm" role="tab"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Paytm</span></a> </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#phonepe" role="tab"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">PhonePe</span></a> </li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active pad" id="account" role="tabpanel">
									<div class="pad">
										<h3>Account Details</h3>
										<dl class="dl-horizontal">
											<dt>Bank Name</dt>
											<dd>A description li</dd>
											<dt>Account Holder's Name</dt>
											<dd>Vestibulum id ligula elit.</dd>
											<dt>Account Number</dt>
											<dd>Etiam mollis euismod.</dd>
											<dt>Branch name and Address</dt>
											<dd>Fusce massa justo</dd>
											<dt>IFSC Code</dt>
											<dd>Fusce justo</dd>
										</dl>
									</div>
								</div>
								<div class="tab-pane pad" id="paytm" role="tabpanel">
									<div class="pad">
										<h3>Paytm Wallet</h3>
										<dl class="dl-horizontal">
											<dt>Account Holder's Name</dt>
											<dd>Vestibulum id ligula elit.</dd>
											<dt>Paytm Number</dt>
											<dd>Etiam mollis euismod.</dd>
										</dl>
									</div>
								</div>
								<div class="tab-pane pad" id="phonepe" role="tabpanel">
									<div class="pad">
										<h3>PhonePe wallet</h3>
										<dl class="dl-horizontal">
											<dt>Account Holder's Name</dt>
											<dd>Vestibulum id ligula elit.</dd>
											<dt>PhonePe Number</dt>
											<dd>Etiam mollis euismod.</dd>
										</dl>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Cancel</button>
						<a href="7f85nhd587344f3847err456e5764v.php"><button type="button" class="btn btn-bold btn-pure btn-primary float-right">Done</button></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.modal -->

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
	<script src="../assets/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	<script src="../assets/ser/js/template.js"></script>
	<script src="../assets/ser/js/demo.js"></script>
	<script src="../assets/assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js"></script>

	
</body>

</html>
