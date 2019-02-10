<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">
    <title>Retailer's Dashboard | BG Techno</title>
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
<style>
	td{font-size: 1.1em;}
	th+td{font-weight: 300;}
	h4{font-weight: 500;}
  th{text-align: center;}
</style>
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
              <script type="text/javascript">getRandomImage(random_images_array)</script>
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
              	<div class="col-12">
                <p>Dynamic name by php variable</p>
                  <p>Dynamic email by php variable</p></div>
                  <div class="col-12">
                  <a href="wallet.php" class="btn btn-success btn-sm btn-rounded">Wallet : 0.00</a>
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
                    <a href="forgot-password.php"><i class="fa fa-unlock-alt"></i> Settings</a>
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
				<div class="box box-inverse box-warning">
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
    <li class="active"><a href="#"><i class="fa fa-shopping-cart"></i><span>Buy Now</span></a></li>
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
        Get services easily
      </h1>
    </section>
  <!--Solid box header!-->
<section class="content">

          <!-- 1 -->
          <div class="row">
<div class="col-xs-12 col=md-12 col-lg-6">

            <div class="box box-solid">
                 <div class="box-header bg-orange">
                <h4 class="box-title"><strong>GST Return With Sales &amp; Purchases</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li>
                  <li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-orange nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#11" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#12" role="tab">GSTR1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#13" role="tab">GSTR2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#14" role="tab">GSTR3</a>
                </li>
				 <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#15" role="tab">GSTR4</a>
                </li>
				 <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#16" role="tab">GSTR5</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="11">
					<div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">GSTR1</th>
                    <td>GST Returns 3B Monthly</td>
                    <td>300</td>
                  </tr>
                  <tr>
					<th scope="row">GSTR2</th>
                    <td>GST 1 Regular Return Quarterly (upto 100 sales and purchases bills)</td>
                    <td>500</td>
                  </tr>
                   <tr>
					<th scope="row">GSTR3</th>
                    <td>GST Composition Return Quarterly (upto 100 sales and purchases bills)</td>
                    <td>500</td>
                  </tr>
					 <tr>
					<th scope="row">GSTR4</th>
                    <td>GST 1 Regular &amp; Composition Return Quarterly (less than 500 sales and purchases bills)</td>
                    <td>800</td>
                  </tr>
					 <tr>
					<th scope="row">GSTR5</th>
                    <td>GST 1 Regular &amp; Composition Return Quarterly (more than 500 sales and purchases bills)</td>
                    <td>1000</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-orange dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">GSTR1</a></li>
    <li><a href="checkout.php">GSTR2</a></li>
    <li><a href="checkout.php">GSTR3</a></li>
	<li><a href="checkout.php">GSTR4</a></li>
    <li><a href="checkout.php">GSTR5</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="12">
				<h4>GST 3B Returns Monthly</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>3 - 4 working days</dd>
                <dt>Documents required</dt>
					<dd>List of all invoices issued to persons or companies.</dd>
					<dd>It should be uploaded in specified Excel format.</dd>
              </dl>
		<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="13">
				<h4>GST 1 Regular Return Quarterly (upto 100 sales and purchases bills)</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>3 - 4 working days</dd>
                <dt>Documents required</dt>
					<dd>List of all invoices issued to persons or companies.</dd>
					<dd>It should be uploaded in specified Excel format.</dd>
              </dl>
		<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="14">
                 <h4>GST Composition Return Quarterly (upto 100 sales and purchases bills)</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>3 - 4 working days</dd>
                <dt>Documents required</dt>
					<dd>List of all invoices issued to persons or companies.</dd>
					<dd>It should be uploaded in specified Excel format.</dd>
              </dl>
	<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
				  <div class="tab-pane fade" id="15">
                 <h4>GST 1 Regular &amp; Composition Return Quarterly (less than 500 sales and purchases bills)</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>4 - 5 working days</dd>
                <dt>Documents required</dt>
					<dd>List of all invoices issued to persons or companies.</dd>
					<dd>It should be uploaded in specified Excel format.</dd>
              </dl>
	<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
				  <div class="tab-pane fade" id="16">
                 <h4>GST 1 Regular &amp; Composition Return Quarterly (more than 500 sales and purchases bills)</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>5 - 6 working days</dd>
                <dt>Documents required</dt>
					<dd>List of all invoices issued to persons or companies.</dd>
					<dd>It should be uploaded in specified Excel format.</dd>
              </dl>
	<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>

              <!-- 2 -->

            <div class="box box-solid">
                 <div class="box-header bg-olive">
                <strong><h4 class="box-title">Chartered Accounting Services</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li>
                  <li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-olive nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#21" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#22" role="tab">PBS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#23" role="tab">EBS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#24" role="tab">CAC</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#25" role="tab">PR</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#26" role="tab">ADT1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#27" role="tab">ADT2</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="21">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
          <th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
          <th scope="row">PBS</th>
                    <td>Projected Balance Sheet</td>
                    <td>800</td>
                  </tr>
                  <tr>
          <th scope="row">EBS</th>
                    <td>Estimated Balance Sheet</td>
                    <td>800</td>
                  </tr>
                  <tr>
          <th scope="row">CAC</th>
                    <td>CA letter for opening Current Account</td>
                    <td>3000</td>
                  </tr>
                  <tr>
          <th scope="row">PR</th>
                    <td>Project Report</td>
                    <td>3000</td>
                  </tr>
                  <tr>
          <th scope="row">ADT1</th>
                    <td>Audit (School, NGO, Trust, Partnership Firm)</td>
                    <td>3000</td>
                  </tr>
                   <tr>
          <th scope="row">ADT2</th>
                    <td>Audit (PVT LTD, LLP, Company)</td>
                    <td>6000</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="btn-group">
  <button class="btn bg-olive dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">PBS</a></li>
    <li><a href="checkout.php">EBS</a></li>
    <li><a href="checkout.php">CAC</a></li>
    <li><a href="checkout.php">PR</a></li>
    <li><a href="checkout.php">ADT1</a></li>
    <li><a href="checkout.php">ADT2</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="22">
                  <h4>Projected Balance Sheet</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>2 - 3 working days</dd>
              </dl>
            <p>The balance sheet provides a snapshot of a company's accounts at a given point in time. The balance sheet, along with the income and cash flow statement, is an important tool for owners but also for investors because it is used to gain insight into a company and its financial operations.</p>
            <p>Projected balance sheet is used to analyse and predict the data for the next financial year.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-olive margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="23">
                  <h4>Estimated Balance Sheet</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>2 - 3 working days</dd>
              </dl>
            <p>The balance sheet provides a snapshot of a company's accounts at a given point in time. The balance sheet, along with the income and cash flow statement, is an important tool for owners but also for investors because it is used to gain insight into a company and its financial operations.</p>
            <p>Projected balance sheet is used to analyse and predict the data for the current financial year.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-olive margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="24">
                  <h4>CA Letter</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>2 - 3 working days</dd>
                </dl>
                <p>A letter by any certified chartered Accountant is a major requirement to open current account in any bank.</p>
                <p>Other documents that are required by most banks to open current account are :</p>
                <dl>
                <dd><b>CA letter</b></dd>
					<dd>PAN card</dd>
					<dd>Partnership Deed (in case of Partnership Firm)</dd>
					<dd>Certificate of Incorporation, COA, MOA (in case of Companies)</dd>
					<dd>A cheque for opening bank account</dd>
					<dd>Address proof of the Firm/Company/HUF</dd>
					<dd>ID and address proof of all partners/directors</dd>
				</dl>         
            <p align="center"><a href="checkout.php"><button type="button" class="btn bg-olive margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="25">
                  <h4>Project Report</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>4 - 5 working days</dd>
                </dl>
                <p>Project Report is required for obtaining finance facility from any bank or financial institution like term loan for financing the project/cc limit for working capital requirement of the project. Project letter must be signed by any certified chartered Accountant.</p>
                <p>The Project Report contains :</p>
                <dl class="dl-horizontal">
					<dd>Theoritical write-up</dd>
					<dd>Financial Projections</dd>
					<dd>Co-relating theory and financial figures</dd>
					<dd>Appraisal of project report</dd>
					<dd>Long-term projection and planning</dd>
					<dd>5 years projected balance sheet &amp; Cashflow/Fundflow</dd>
				</dl>        
            <p align="center"><a href="checkout.php"><button type="button" class="btn bg-olive margin">Buy Now</button></a></p>
                </div>
				  <div class="tab-pane fade" id="26">
                 <h4>Audit (School or NGO or Trust or Partnership Firm)</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>3 - 5 days</dd>
                <dt>Documents required</dt>
					<dd>Bank statement (April to March)</dd>
					<dd>All expenses (April to March)</dd>
					<dd>Sales and purchases bills</dd>
					<dd>Tally backup data</dd>
              </dl>
              <p>A tax audit is a formal examination conducted by the IRS to verify information or uncover fraud and inaccurate tax returns. The IRS selects tax returns to examine both randomly and intentionally. If the audit is selected randomly, the IRS will simply take a closer look to make sure all information are accurate.</p>
	<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="27">
                 <h4>Audit (PVT LTD or LLP or Company)</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 5 days</dd>
                <dt>Documents required</dt>
          <dd>Bank statement (April to March)</dd>
          <dd>All expenses (April to March)</dd>
          <dd>Sales and purchases bills</dd>
          <dd>Tally backup data</dd>
              </dl>
              <p>A tax audit is a formal examination conducted by the IRS to verify information or uncover fraud and inaccurate tax returns. The IRS selects tax returns to examine both randomly and intentionally. If the audit is selected randomly, the IRS will simply take a closer look to make sure all information are accurate.</p>
  <p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>
          

           <!-- 3 -->


            <div class="box box-solid">
                 <div class="box-header bg-danger">
                <h4 class="box-title"><strong>Director's Appointment or Resignation</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-danger nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#31" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#32" role="tab">DIR1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#33" role="tab">DIR2</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="31">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">DIR1</th>
                    <td>Add new director in company</td>
                    <td>3500</td>
                  </tr>
                  <tr>
					<th scope="row">DIR2</th>
                    <td>Remove director from company</td>
                    <td>3000</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">DIR1</a></li>
    <li><a href="checkout.php">DIR2</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="32">
                 <h4>Appoint new Director</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>4 - 5 days</dd>
                <dt>Documents required</dt>
					<dd>Digital Signature Certificate (DSC)</dd>
					<dd>Director Identification Number (DIN)</dd>
					<dd>PAN card</dd>
					<dd>Proof of residence</dd>
					<dd>Photograph</dd>
              </dl>
              <p>Directors are appointed by the shareholders of a Company for the management of a Company. As per Companies Law of 1956, a Private Limited Company is required to have a minimum of two Directors and a Limited Company is required to have a minimum of three Directors. On the other hand, a Limited Liability Partnership (LLP) has Designated Partners and Limited Liability Partnership Act, 2008 requires each LLP to have a minimum of two Designated Partners. Appointment or removal of a Director or Designated Partners maybe required due to various reasons. IndiaFilings can help you file the necessary filings to add or remove a Director from your Company or add or remove a Designated Partner from you LLP. To add a Director or Designated Partner, Digital Signature must first be obtained for the proposed Director. Once, Digital Signature is obtained, the proposed Director can be added into the Company with the consent of the shareholders. To remove a Director from a Company or LLP, it is important to ensure the Company or a LLP would have the minimum required number of Director or Designated Partner after removal of the Director. If so, then the resignation letter along with the required form must be filed to effect the resignation of the Director.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-danger margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="33">
                  <h4>Resignation of existing Director</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>4 - 5 days</dd>
                <dt>Documents required</dt>
					<dd>Digital Signature Certificate (DSC)</dd>
					<dd>PAN card</dd>
					<dd>Proof of residence</dd>
					<dd>Photograph</dd>
              </dl>
              <p>Directors are the said to be brain of the company. They are the managerial personnel who control and administer the company’s operations. The rotation of directors takes place in one or the other way – either by appointment of new director or resignation of existing. Aim to carry out change of directors is always to ensure optimum combination of experts on board for interest of company. The authority to approve the resignation of the director lies with the members of BoD whereas the appointment must be made through consent of shareholders. Whether it is an appointment, removal or resignation, the change does not take effect until the intimation is made to Ministry of corporate affairs.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-danger margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>

 <!-- 4 -->

            <div class="box box-solid">
                 <div class="box-header bg-teal">
                <h4 class="box-title"><strong>Company Registration</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-teal nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#41" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#42" role="tab">CMPR1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#43" role="tab">CMPR2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#44" role="tab">CMPR3</a>
                </li>
				 <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#45" role="tab">CMPR4</a>
                </li>
				 <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#46" role="tab">CMPR5</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="41">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">CMPR1</th>
                    <td>NIDHI Company Registration</td>
                    <td>75000</td>
                  </tr>
                   <tr>
					<th scope="row">CMPR2</th>
                    <td>One Person Company (OPC) Registration</td>
                    <td>13000</td>
                  </tr>
					 <tr>
					<th scope="row">CMPR3</th>
                    <td>Private Limited (PVT LTD) Company Registration</td>
                    <td>14000</td>
                  </tr>
					<tr>
					<th scope="row">CMPR4</th>
                    <td>Limited Company Registration</td>
                    <td>32000</td>
                  </tr>
					<tr>
					<th scope="row">CMPR5</th>
                    <td>Limited Liablity Partnership Company (LLP) Registration</td>
                    <td>14000</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-teal dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">CMPR1</a></li>
    <li><a href="checkout.php">CMPR2</a></li>
    <li><a href="checkout.php">CMPR3</a></li>
	<li><a href="checkout.php">CMPR4</a></li>
    <li><a href="checkout.php">CMPR5</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="42">
                 <h4>NIDHI Company Registration</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>10 - 15 working days</dd>
					<dt>Minimum Capital</dt>
					<dd>10 Lacs</dd>
                <dt>Documents required</dt>
					<dd>Director Pan card</dd><dd>Aadhar card</dd><dd>5 Company name in Excel format</dd><dd>Director Identification Number (DIN)</dd><dd>Minumum 3
director's education, mobile number, email ID etc information in excel format</dd>
              </dl>
			<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="43">
                <h4>One Person Company (OPC) Registration</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>10 - 15 working days</dd>
                <dt>Documents required</dt>
					<dd>Reservation application of name in INC-1</dd><dd>Identity proof, address proof and PAN card copy of nominee and member</dd><dd>Written Consent of Nominee in form INC-3</dd><dd>Memorandum and Affidavit of sharer for form INC-9</dd><dd>Application for Company Registration</dd><dd>Registrar Office Address in Form INC-22</dd><dd>Registered office's address proof</dd>
              </dl>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="44">
                 <h4>Private Limited (PVT LTD) Company Registration</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>10 - 15 working days</dd>
                <dt>Documents required</dt>
					<dd>Digital Signature Certificate</dd><dd>Director Identification Number (DIN)</dd><dd>Application for Reservation of Name of company in e-Form INC–1</dd><dd>Form SPICE INC-32</dd><dd>MOA(INC-33) and AOA(INC-34)</dd><dd>PAN(form 49A) and TAN(form 49B) Application</dd>
              </dl><p>For Name availability under RUN Web service, there is no prior requirement to obtain DSC and DIN . It can be done with account login on MCA portal.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
				  <div class="tab-pane fade" id="45">
                 <h4>Limited Company Registration</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>10 - 15 working days</dd>
                <dt>Documents required</dt>
					<dd>PAN card copy with Self-attestation</dd><dd>Latest passport size photo</dd><dd>Copy of No Objection Certificate(NOC) from the owner of the property</dd><dd>If owned property, a copy of Sale Deed and Electricity bill is sufficient</dd><dd>Identity proof with self attestation</dd><dd>Latest Utility Bill or bank statement</dd><dd>Proof of Office registration, with rental or lease agreement</dd>
              </dl>
					  <p>In case of NRI or Foreign national, Passport copy has to be notarized at the Indian Embassy of the particular country.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
				  <div class="tab-pane fade" id="46">
                 <h4>Limited Liablity Partnership Company (LLP) Registration</h4>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>10 - 15 working days</dd>
                <dt>Documents required</dt>
					<dd>PAN Card of the Partners</dd><dd>Address Proof of the Partners</dd><dd>Utility Bill of the proposed Registered Office of the LLP</dd><dd>No-Objection Certificate (NOC) from the Landlord</dd><dd>Rental Agreement Copy between the LLP and the Landlord</dd><dd>Director Identification Number (DIN) for Partners</dd><dd>Application for Reservation of Name</dd><dd>Filing for Incorporation</dd>
              </dl>
					  <p>The Partners then have 60 days to file the required incorporation documents and register the LLP. In case the LLP is not formed within 60 days of name approval letter, the approval for name for the LLP would have to be re-obtained.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>


           <!-- 5 -->
				
            <div class="box box-solid">
                 <div class="box-header bg-purple">
                <h4 class="box-title"><strong>GST Registration</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-purple nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#51" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#52" role="tab">Details</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="51">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">GSTN</th>
                    <td>New GST Registration</td>
                    <td>1500</td>
                  </tr>
                </tbody>
              </table>
					</div>
				<a href="checkout.php"><button type="button" class="btn bg-purple margin">Buy Now</button></a>
                </div>
                <div class="tab-pane fade" id="52">
                  <h4>New GST Registration</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>8 - 10 working days</dd>
                <dt>Documents required</dt>
          <dd>Passport sized Photographs</dd><dd>PAN card</dd><dd>Aadhar card</dd><dd>Rent agreement/registry copy of the registered office</dd><dd>Incorporation Certificate</dd><dd>Cancelled cheque</dd><dd>First page of passbook/bank statement</dd>
          <dt>Other Details</dt>
          <dd>Email Address</dd><dd>Mobile Number</dd><dd>Father and Mother's name</dd>
              </dl>
            <p>All documents must be self attested and scanned pdf format</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-purple margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>

                   <!-- 6 -->

            <div class="box box-solid">
                 <div class="box-header bg-orange">
                <h4 class="box-title"><strong>Intellectual Property</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-orange nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#61" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#62" role="tab">ISO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#63" role="tab">TMP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#64" role="tab">TMC</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="61">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">ISO</th>
                    <td>ISO (9001:2015) Certification</td>
                    <td>12000</td>
                  </tr>
                  <tr>
					<th scope="row">TMP</th>
                    <td>Trademarks (Individual / Propertiorship)</td>
                    <td>9000</td>
                  </tr>
                   <tr>
					<th scope="row">TMC</th>
                    <td>Trademarks (Partnership / LLP / Company)</td>
                    <td>14000</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-orange dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">ISO</a></li>
    <li><a href="checkout.php">TMP</a></li>
    <li><a href="checkout.php">TMC</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="62">
                   <h4>ISO (9001 : 2015) Certification</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>10 - 15 days</dd>
                <dt>Validity</dt>
                <dd>3 Years</dd>
                <dt>Documents required</dt>
          <dd>Identity and residential proof</dd><dd>Address proof of the registered office</dd><dd>Email ID</dd><dd>Company's objectives, records and quality clause</dd>
              </dl>
            <p>ISO 9001:2015 specifies requirements for a quality management system when an organization:
<ul>
<li>Needs to demonstrate its ability to consistently provide products and services that meet customer and applicable statutory and regulatory requirements.</li>
<li>Aims to enhance customer satisfaction through the effective application of the system, including processes for improvement of the system and the assurance of conformity to customer and applicable statutory and regulatory requirements.</li></ul>
All the requirements of ISO 9001:2015 are generic and are intended to be applicable to any organization, regardless of its type or size, or the products and services it provides.
</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="63">
                   <h4>Trademarks Registration (Individual or Propertiorship)</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>5 - 10 days</dd>
                <dt>Validity</dt>
                <dd>10 Years</dd>
                <dt>Documents required</dt>
          <dd>Identity proof of the individual or Proprietor</dd><dd>Address proof of the individual or Proprietor</dd><dd>Signed Form-48</dd><dd>Copy of the logo or word</dd>
              </dl>
            <p>A trademark is a visual symbol, which may be a word, name, device, label or numerals used by a business to distinguish it goods or services from other similar goods or services originating from a different business. A registered trademark is an intangible asset or intellectual property for a business and is used to protect the company's investment in the brand or symbol. A trademark is registrable if it is distinctive for the goods and services you provide. Proposed trademarks that are similar or identical to an existing registered trademark cannot be registered. Also, trademarks are not registrable if it is offensive, generic, deceptive, not distinctive, contains specially protected emblems, etc.
Trademarks in India are registered by the Controller General of Patents Designs and Trademarks, Ministry of Commerce and Industry, Government of India. Trademarks are registered under the Trademark Act, 1999 and provide the trademark owner with a right to sue for damages when infringements of trademarks occur. Once a trademark is registered, R symbol can be used and the registration will be valid for 10 years. Registered trademarks nearing expiry can be easily renewed by filing a trademark renewal application for a period of another 10 years.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="64">
                  <h4>Trademarks Registration (Partnership or LLP or Company)</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>5 - 10 days</dd>
                <dt>Validity</dt>
                <dd>10 Years</dd>
                <dt>Documents required</dt>
          <dd>Identity proof of Signatory</dd><dd>Address proof of Signatory</dd><dd>Signed Form-48</dd><dd>Incorporation Certificate or Partnership Deed</dd><dd>Copy of Logo (Optional)</dd><dd>Aadhar Udhyog Registration Certificate (Optional)</dd>
              </dl>
            <p>A trademark is a visual symbol, which may be a word, name, device, label or numerals used by a business to distinguish it goods or services from other similar goods or services originating from a different business. A registered trademark is an intangible asset or intellectual property for a business and is used to protect the company's investment in the brand or symbol. A trademark is registrable if it is distinctive for the goods and services you provide. Proposed trademarks that are similar or identical to an existing registered trademark cannot be registered. Also, trademarks are not registrable if it is offensive, generic, deceptive, not distinctive, contains specially protected emblems, etc.
Trademarks in India are registered by the Controller General of Patents Designs and Trademarks, Ministry of Commerce and Industry, Government of India. Trademarks are registered under the Trademark Act, 1999 and provide the trademark owner with a right to sue for damages when infringements of trademarks occur. Once a trademark is registered, R symbol can be used and the registration will be valid for 10 years. Registered trademarks nearing expiry can be easily renewed by filing a trademark renewal application for a period of another 10 years.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-orange margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>


    				<!---2 col layout--->
   					 </div>
					<div class="col-xs-12 col=md-12 col-lg-6">
          			 <!----2 col layout--->
          			 
          			 
          			 <!-- 7 -->
          			 
             <div class="box box-solid">
                 <div class="box-header bg-teal">
                <h4 class="box-title"><strong>Website Design &amp; Development</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-teal nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#71" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#72" role="tab">WEB1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#73" role="tab">WEB2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#74" role="tab">WEB3</a>
                </li>
         <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#75" role="tab">WEB4</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#76" role="tab">WEB5</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#77" role="tab">WEB6</a>
                </li>
         <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#78" role="tab">WEB7</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="71">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
          <th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
          <th scope="row">WEB1</th>
                    <td>Landing Page</td>
                    <td>3500</td>
                  </tr>
                  <tr>
          <th scope="row">WEB2</th>
                    <td>Business &amp; Startup Website</td>
                    <td>6000</td>
                  </tr>
                   <tr>
          <th scope="row">WEB3</th>
                    <td>e-Commerce Website</td>
                    <td>45000</td>
                  </tr>
           <tr>
          <th scope="row">WEB4</th>
                    <td>Blog Website</td>
                    <td>15000</td>
                  </tr>
           <tr>
          <th scope="row">WEB5</th>
                    <td>Personal Website (Digital v-card/resume)</td>
                    <td>2300</td>
                  </tr>
          <tr>
          <th scope="row">WEB6</th>
                    <td>Search Engine Optimization (SEO)</td>
                    <td>50 <sub>per page</sub></td>
                  </tr>
          <tr>
          <th scope="row">WEB7</th>
                    <td>Domain, Hosting and SSL Certificate</td>
                    <td>Quote ( 999 approx.)</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="btn-group">
  <button class="btn bg-teal dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">WEB1</a></li>
    <li><a href="checkout.php">WEB2</a></li>
    <li><a href="checkout.php">WEB3</a></li>
  <li><a href="checkout.php">WEB4</a></li>
    <li><a href="checkout.php">WEB5</a></li>
  <li><a href="checkout.php">WEB6</a></li>
    <li><a href="checkout.php">WEB7</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="72">
                  <h4>Landing Page</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>4 - 7 days</dd>
                <dt>Number of Pages</dt>
                <dd>1 or 2 long pages</dd>
                <dt>Features</dt>
                <dd>Eye catchy design, high conversion CTA buttons (Your ultimate consumers are your users, not search engines), sharing and social media links, Inquiry form, newsletter feature, fast and responsive.</dd>
					</dl>
            <p>In digital marketing, a landing page is a standalone web page, created specifically for the purposes of a marketing or advertising campaign. It’s where a visitor “lands” when they have clicked on a Google AdWords ad or similar. In simple words, landing pages act like one page website.
Landing pages are designed with a single focused objective – known as a Call to Action (CTA).
This simplicity is what makes landing pages the best option for increasing the conversion rates of your Google AdWords campaigns and lowering your cost of acquiring a lead or sale.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="73">
                  <h4>Business &amp; Startup Website</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>10 - 15 days</dd>
                <dt>Number of Pages</dt>
                <dd>5 to 12 pages</dd>
                <dt>Features</dt>
                <dd>professional design, SSL, branding, SEO optimization, CTAs, Display products or services, Newsletter subscription, FAQ section, blogs(static), live-chat etc.</dd>
              </dl>
            <p>According to a survey people spend 6 hours a day on the Internet. There are numerous benefits of having a website for your small business. A website is not an expense. It is an investment because you should expect a return on your money within a period of time. If you want an effective website or one that can help you take your business to another level, you have to be prepared to invest in one.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="74">
                  <h4>e-Commerce Website</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>30 days</dd>
                <dt>Number of Pages</dt>
                <dd>No limitation</dd>
                <dt>Features</dt>
                <dd>professional design, SEO optimization, high conversion CTAs, Display products or services, email marketing integration, login/register feature, Payment Gateway Integration, Woocommerce Admin Panel (CMS), promo code and discounts feature, tax calculations, search and filter products, wishlist, order management, reporting tools, email notification, blogs, live-chat, responsive and secure.</dd>
              </dl>
            <p>Take your business into new heights by selling online. Whether you have a book store or a clothing brand or a general store, e-Commerce is the future for every business. Adapt to online store to get passive income without any hassle.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="75">
                  <h4>Blog Website</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>15 - 20 days</dd>
                <dt>Number of Pages</dt>
                <dd>No limitation</dd>
                <dt>Features</dt>
                <dd>professional design, SEO optimization, Modern UI/UX and typography, Newsletter subscription, comments with anti spam filter, donate button, Wordpress (CMS), email marketing, sell merchandises, responsive and secure.</dd>
              </dl>
            <p>Blogging is a great way to show your talents and interests to prospective employers, while adding an edge to your resume. If you blog consistently it shows your dedication, passions and creativity - all of which are key attributes employers look for in job candidates. Blogging is also the best way for content marketing and promotion of products.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                 <div class="tab-pane fade" id="76">
                  <h4>Personal Website (Digital v-card/resume)</h4>
                  <blockquote cite="http://swagatdash.com">
              Turn yourself into a brand
            </blockquote>
                  <p>Forget the old CV/Resume in plain text format. Personal resume website is the best way to impress any interviewer for sure.</p>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 5 days</dd>
               <dt>Number of Pages</dt>
                <dd>1 to 3 pages</dd>
                <dt>Features</dt>
                <dd>professional design, showcase your skills and interests, Modern UI/UX and typography, Newsletter subscription, portfolio gallery for showing your collection, education and experiences, free visual resume, responsive and secure.</dd>
              </dl>
            <p>It is important in todays generation to turn your personal name into a brand as it is the only thing you are going to have throughout your life. According to a recent survey, having a personal website with your own name as your domain helps in getting high salary jobs easily. Personal websites have many features like portfolio, resume, contact details, and blogs.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                 <div class="tab-pane fade" id="77">
                  <h4>Search Engine Optimization (SEO)</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
        <dd>3 - 5 days</dd>
               <dt>Number of Pages</dt>
                <dd>1 to 3 pages</dd>
                <dt>Features</dt>
                <dd>professional design, showcase your skills and interests, Modern UI/UX and typography, Newsletter subscription, portfolio gallery for showing your collection, education and experiences, free visual resume responsive and secure.</dd>
              </dl>
            <p>You can’t just open a website and expect people to flood in. If you really want to succeed you have to create traffic. What is better than 1st rank on google? SEO helps to index your web pages properly with appropriate keywords and white hat SEO techniques. Why pay for ads or PPC marketing when you can do that for free using SEO. What you do after you create your content is what truly counts. SEO makes your site indexable by popular search engines like Google, Yahoo, Bing, Baidu and Yandex.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                 <div class="tab-pane fade" id="78">
                  <h4>Domain, Hosting and SSL Certificate</h4>
        <dl class="dl-horizontal">
                <dt>Hosting Features</dt>
                <dd>99.9% Uptime, no forced ads, unlimited hosting, unlimited bandwidth, cPanel Control Panel, tech support, instant activation, free mysql databases, php 6.5 to 7.1, phpMyAdmin, SSI(server side includes), full FTP support, web-ftp application, SSL installation, Cron jobs, unlimited parked domains, unlimited sub-domains, email accounts and mail server.</dd>
                <dt>Domains</dt>
                <dd>.COM , .IN , .CO , .ORG , .CO.IN , .INFO , .club , .me , .xyz and many more. Redirection, parked domains, privacy protection, and premium DNS also available.</dd>
                <dt>Security Features</dt>
                <dd>Fast And Global Content Delivery Network, Improve Visitor Experiences Through Load Balancing, Web Content Optimization, Enterprise-Class Web Application Firewall, Rate Limiting, HSTS, SSL, DDoS Protection, DNSSEC etc.</dd>
              </dl> <p> All the above features(except domain) are free with any website plan.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>




           <!-- 8 -->

            <div class="box box-solid">
                 <div class="box-header bg-purple">
                <h4 class="box-title"><strong>Graphics Designing</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-purple nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#81" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#82" role="tab">GD1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#83" role="tab">GD2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#84" role="tab">GD3</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="81">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">GD1</th>
                    <td>Logo Designing</td>
                    <td>1500</td>
                  </tr>
                  <tr>
					<th scope="row">GD2</th>
                    <td>Pamphlet and Banner Designing</td>
                    <td>1500</td>
                  </tr>
                   <tr>
					<th scope="row">GD3</th>
                    <td>Visual CV or Resume</td>
                    <td>1500</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-purple dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">GD1</a></li>
    <li><a href="checkout.php">GD2</a></li>
    <li><a href="checkout.php">GD3</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="82">
                  <h4>Logo Designing</h4>
                  <p>Forget the old CV/Resume in plain text format. Personal resume website is the best way to impress any interviewer for sure.</p>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 5 days</dd>
               <dt>Number of Pages</dt>
                <dd>1 to 3 pages</dd>
                <dt>Features</dt>
                <dd>professional design, showcase your skills and interests, Modern UI/UX and typography, Newsletter subscription, portfolio gallery for showing your collection, education and experiences, free visual resume, responsive and secure.</dd>
              </dl>
            <p>It is important in todays generation to turn your personal name into a brand as it is the only thing you are going to have throughout your life. According to a recent survey, having a personal website with your own name as your domain helps in getting high salary jobs easily. Personal websites have many features like portfolio, resume, contact details, and blogs.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-purple margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="83">
                  <h4>Pamphlet and Banner Designing</h4>
                  <p>Forget the old CV/Resume in plain text format. Personal resume website is the best way to impress any interviewer for sure.</p>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 5 days</dd>
               <dt>Number of Pages</dt>
                <dd>1 to 3 pages</dd>
                <dt>Features</dt>
                <dd>professional design, showcase your skills and interests, Modern UI/UX and typography, Newsletter subscription, portfolio gallery for showing your collection, education and experiences, free visual resume, responsive and secure.</dd>
              </dl>
            <p>It is important in todays generation to turn your personal name into a brand as it is the only thing you are going to have throughout your life. According to a recent survey, having a personal website with your own name as your domain helps in getting high salary jobs easily. Personal websites have many features like portfolio, resume, contact details, and blogs.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-purple margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="84">
                  <h4>Visual CV or Resume</h4>
                  <p>Forget the old CV/Resume in plain text format. Personal resume website is the best way to impress any interviewer for sure.</p>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 5 days</dd>
               <dt>Number of Pages</dt>
                <dd>1 to 3 pages</dd>
                <dt>Features</dt>
                <dd>professional design, showcase your skills and interests, Modern UI/UX and typography, Newsletter subscription, portfolio gallery for showing your collection, education and experiences, free visual resume, responsive and secure.</dd>
              </dl>
            <p>It is important in todays generation to turn your personal name into a brand as it is the only thing you are going to have throughout your life. According to a recent survey, having a personal website with your own name as your domain helps in getting high salary jobs easily. Personal websites have many features like portfolio, resume, contact details, and blogs.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-purple margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>


           <!-- 9 -->


            <div class="box box-solid">
                 <div class="box-header bg-orange">
                <h4 class="box-title"><strong>Bulk SMS</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-orange nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#91" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#92" role="tab">Promotional</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#93" role="tab">Transactional</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#94" role="tab">Reseller</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="91">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">PSMS1</th>
                    <td>Promotional SMS (5000)</td>
                    <td>1000</td>
                  </tr>
                  <tr>
					<th scope="row">PSMS2</th>
                    <td>Promotional SMS (10,000)</td>
                    <td>1900</td>
                  </tr>
          <th scope="row">PSMS3</th>
                    <td>Promotional SMS (1,00,000)</td>
                    <td>16999</td>
                  </tr>
                   <tr>
					<th scope="row">TSMS1</th>
                    <td>Transactional SMS (5000)</td>
                    <td>1300</td>
                  </tr>
          <th scope="row">TSMS2</th>
                    <td>Transactional SMS (10,000)</td>
                    <td>2200</td>
                  </tr>
                   <tr>
          <th scope="row">TSMS3</th>
                    <td>Transactional SMS (1,00,000)</td>
                    <td>17999</td>
                  </tr>
          <th scope="row">RPSMS</th>
                    <td>Promotional SMS Reseller Plan (1,00,000)</td>
                    <td>14999</td>
                  </tr>
                   <tr>
          <th scope="row">RTSMS</th>
                    <td>Transactional SMS reseller Plan (1,00,000)</td>
                    <td>15999</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-orange dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">PSMS1</a></li>
    <li><a href="checkout.php">PSMS2</a></li>
    <li><a href="checkout.php">PSMS3</a></li>
    <li><a href="checkout.php">TSMS1</a></li>
    <li><a href="checkout.php">TSMS2</a></li>
    <li><a href="checkout.php">TSMS3</a></li>
    <li><a href="checkout.php">RPSMS</a></li>
    <li><a href="checkout.php">RTSMS</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="92">
                  <h4>Promotional SMS</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 4 Hours</dd>
                <dt>Common Uses</dt>
                <dd>Mass SMS advertising</dd><dd>Notifications and remainders</dd><dd>Surveys</dd><dd>Offers and events publicity</dd>
              </dl>
            <p>Promotional SMS is the new market mantra used to promote or sell goods and services. Considered one of the fastest, reliable and cost-effective marketing tools, marketing SMS is utilized for advertising purposes. With the help of Bulk SMS services, one can promote brands, update information and provide offer details to clients at large with a single click.
Cost is the driving factor for using Promotional SMS Service. With its lowest price offerings, Promotional SMS gateway finds its way to sell the brand instantly. One can rest assure to use SMS service for advertising, as it is viewed by most of the customers. We assure our customers with 100% instant delivery and hassle free registration process.</p>
					<div class="btn-group">
  <button class="btn bg-orange dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">PSMS-5000</a></li>
    <li><a href="checkout.php">PSMS-10000</a></li>
    <li><a href="checkout.php">PSMS-100000</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="93">
                 <h4>Transactional SMS</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 4 Hours</dd>
                <dt>Common Uses</dt>
                <dd>OTP verification</dd><dd>Personalised or dynamic SMS</dd><dd>School daily attendance</dd><dd>Order status and confirmation</dd>
              </dl>
            <p>As per the latest TRAI guidelines, now it is possible to send out messages through Transactional SMS to DND (Do not disturb) / NDNC registered customers. Though these messages are not of promotional nature, sometimes it becomes necessary to send out alert or service messages to clients at large. Certainly it becomes important to send out important SMS which are of an emergency nature. That’s when these Transactional SMS comes handy to reach out masses at large. With Transactional SMS messages, one can send informative, generic, critical data or information.
All SMS content needs to be transactional and should not contain any promotional content on this SMS route. Hence all the SMS content are approved in advance with variables. You could only send out those pre-approved SMS templates by changing the variables from the SMS template.</p>
          <div class="btn-group">
  <button class="btn bg-orange dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">TSMS-5000</a></li>
    <li><a href="checkout.php">TSMS-10000</a></li>
    <li><a href="checkout.php">TSMS-100000</a></li>
  </ul></div>
                </div>
                <div class="tab-pane fade" id="94">
                 <h4>Reseller Bulk SMS Plan</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 - 4 Hours</dd>
                <dt>SMS Limit</dt>
               <dd>1,00,000 SMS</dd>
              </dl>
            <p>s per the latest TRAI guidelines, now it is possible to send out messages through Transactional SMS to DND (Do not disturb) / NDNC registered customers. Though these messages are not of promotional nature, sometimes it becomes necessary to send out alert or service messages to clients at large. Certainly it becomes important to send out important SMS which are of an emergency nature. That’s when these Transactional SMS comes handy to reach out masses at large. With Transactional SMS messages, one can send informative, generic, critical data or information.
All SMS content needs to be transactional and should not contain any promotional content on this SMS route. Hence all the SMS content are approved in advance with variables. You could only send out those pre-approved SMS templates by changing the variables from the SMS template.</p>
          <div class="btn-group">
  <button class="btn bg-orange dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">RPSMS</a></li>
    <li><a href="checkout.php">RTSMS</a></li>
  </ul></div>
                </div>
              </div>
            </div>

	<!-- 10 -->

            <div class="box box-solid">
                 <div class="box-header bg-olive">
                <h4 class="box-title"><strong>Digital Signature Certificate</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-olive nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#101" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#102" role="tab">DSC1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#103" role="tab">DSC2</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="101">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">DSC1</th>
                    <td>DSC Class 2</td>
                    <td>900</td>
                  </tr>
                  <tr>
					<th scope="row">DSC2</th>
                    <td>DSC Class 3</td>
                    <td>3500</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-olive dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">DSC1</a></li>
    <li><a href="checkout.php">DSC2</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="102">
                  <h4>DSC Class 2</h4>
                  <p>These certificates are accepted for IFFCO, Northern Railway, MCA 21, e-Filing, e-Tendering etc.</p>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>48 hours</dd>
                <dt>Documents required</dt>
					<dd>Proof of identity - PAN card</dd><dd>Proof of residence - utility bill</dd>
              </dl>
					  <p>These are issued to the director/signatory authorities of the companies for the purpose of e-filing with the Registrar of Companies (ROC). Class 2 certificate is mandatory for individuals who have to sign manual documents while filing of returns with the ROC.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-olive margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="103">
                  <h4>DSC class 3</h4>
                  <p>These certificates are accepted for IFFCO, Northern Railway, MCA 21, e-Filing, e-Tendering etc.</p>
				<dl class="dl-horizontal">
				<dt>Time required</dt>
                <dd>48 Hours</dd>
                <dt>Documents required</dt>
					<dd>Proof of identity - PAN card</dd><dd>Proof of residence - utility bill</dd>
              </dl>
					  <p>These certificates are used in online participation/bidding in e-auctions and online tenders anywhere in India. The vendors who wish to participate in the online tenders must have a Class 3 digital signature certificate.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-olive margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>
   <!-- 11 -->

            <div class="box box-solid">
                 <div class="box-header bg-danger">
                <h4 class="box-title"><strong>Non-Profits and Trust Registration</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-danger nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#111" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#112" role="tab">ORG1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#113" role="tab">ORG2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#114" role="tab">ORG3</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="111">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">ORG1</th>
                    <td>Non-Governmental Organisation (NGO) Registration</td>
                    <td>15000</td>
                  </tr>
                  <tr>
					<th scope="row">ORG2</th>
                    <td>Trust Registration</td>
                    <td>15000</td>
                  </tr>
                  <tr>
					<th scope="row">ORG3</th>
                    <td>Section 8 Company Registration</td>
                    <td>40000</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">ORG1</a></li>
    <li><a href="checkout.php">ORG2</a></li>
    <li><a href="checkout.php">ORG3</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="112">
                  <h4>Non-Governmental Organisation (NGO) Registration</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>30 Days</dd>
                <dt>Documents required</dt>
          <dd>Proof of identity and proof of residence of all members</dd><dd>Passport size photographs of all members</dd><dd>Name and address of NGO</dd>
              </dl>
            <p>
            NGO may be defined as association having a definite cultural, educational, economical, religious or social association organization. They are not owned by any one and cannot distribute profits as such. Whatever profits they may earn from economic activities are reinvested or spent on appropriate non profit activities. The typical sources of revenue or non governmental organizations are donations, membership fees, interest and dividends on investments. Task-oriented and driven by people with a common interest, NGOs do a variety of service and humanitarian functions, bring resident issues to Governments, advocate and display policies and encourage political participation through arrangement of info. Some are arranged around particular concerns such as human rights, environment or wellness.</p>
            <p>
A Non Profit Organization can get income tax benefit by getting itself registered and abiding by certain other process, but such NGO  does not provide any profit to the persons making donations. The Income Tax Act 1961 has certain provisions which offer tax benefits to the "donors" like 35ac where donor gets 100% tax rebate and 80G where donor gets 50% tax rebate. In India non profit / public charitable companies can be registered as trusts, societies, or a personal limited non earnings business, under section 25 Companies Act 1956. Non-profit organizations in India exist independently of the state. They are self-governed by a board of trustees or 'handling committee'/ governing council.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-danger margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="113">
                 <h4>Trust Registration</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>30 Days</dd>
                <dt>Documents required</dt>
          <dd>Proof of identity and proof of residence of all trustees, settlers/authors</dd><dd>Passport size photographs of all trustees</dd><dd>Name and address of Trust</dd><dd>Trust deed (MOA, objectives and rules)</dd>
              </dl>
            <p>A trust is a legal arrangement pursuant to which one person (the “grantor” or “settlor”) entrusts assets to another person or organization (the “trustee”) to manage for the benefit of others (the “beneficiaries”). Now, this is an oversimplified definition, and with certain types of trusts, a single person can serve as grantor, trustee, and beneficiary; but, this provides a good foundation for our discussion of charitable trusts. When a person wants his or her properties and money to be managed by a certain body, it is a trust. Trusts also assist in doing charitable work for the entire body of mankind whether it is medical, educational, labor, etc. Trusts are not dependent on the programs of the government. Trusts have their own policies since they can be public or private trusts. It does not need any aid from the government or any organization. NGOs can receive financial assistance from the government while trusts cannot.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-danger margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="114">
                 <h4>Section 8 Company Registration</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>30 Days</dd>
                <dt>Documents required</dt>
          <dd>Identity proof of Directors</dd><dd>Director Identification Number (DIN)</dd><dd>Digital Signature Certificate (DSC)</dd>
             <dd>Name and address of company</dd> </dl>
            <p>Section 8 Company is named Section 8 of the Companies Act, 2013, for promoting commerce, art, science, sports, education, research, social welfare, religion, charity, protection of environment or any such other object', provided the profits, if any, or other income is applied for promoting only the objects of the company and no dividend is paid to its members. Therefore, Section 8 Company or Section 25 Company is a company registered under the Companies Act, 2013 for charitable or not-for-profit purposes.

A Section 8 Company is similar to a Trust or Society except, a section 8 Company is registered under the Central Government's Ministry of Corporate Affairs. Trusts and Societies are registered under State Government regulations. A section 8 company has various advantages when compared to Trust or Society like improved recognition and better legal standing. Section 8 company also has higher credibility amongst donors, Government departments and other stakeholders.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-danger margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>

          
    <!-- 12 -->

            <div class="box box-solid">
                 <div class="box-header bg-teal">
                <h4 class="box-title"><strong>Tax Solutions</strong></h4>
                 <ul class="box-controls pull-right">
                  <li><a class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></a></li><li><a class="box-btn-fullscreen"></a></li>
                </ul>
                </div>
                 <!-- Nav tabs -->
             <ul class="nav nav-tabs nav-tabs-teal nav-justified" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#121" role="tab"><i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#122" role="tab">10E</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#123" role="tab">AIR</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#124" role="tab">ITR</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#125" role="tab">TDS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#126" role="tab">AFC</a>
                </li>
              </ul>
                <!-- Tab panes -->
              <div class="box-body tab-content">
                <div class="tab-pane fade active show" id="121">
                 <div class="table-responsive">
                 <table class="table table-hover">
                <thead>
                  <tr>
					<th scope="col">ID</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
					<th scope="row">10E</th>
                    <td>10 E Certificate</td>
                    <td>1500</td>
                  </tr>
                  <tr>
					<th scope="row">AIR</th>
                    <td>Annual Information Returns</td>
                    <td>1500</td>
                  </tr>
                   <tr>
					<th scope="row">ITR</th>
                    <td>Income Tax Returns File (with balance sheet and computation)</td>
                    <td>500</td>
                  </tr>
                   <tr>
          <th scope="row">TDS</th>
                    <td>TDS Returns File</td>
                    <td>500</td>
                  </tr>
					 <tr>
					<th scope="row">AFC</th>
                    <td>Annual filings of company</td>
                    <td>6500</td>
                  </tr>
                </tbody>
              </table>
					</div>
					<div class="btn-group">
  <button class="btn bg-teal dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Buy Now</button>
  <ul class="dropdown-menu">
    <li><a href="checkout.php">10E</a></li>
    <li><a href="checkout.php">AIR</a></li>
    <li><a href="checkout.php">ITR</a></li>
	<li><a href="checkout.php">TDS</a></li>
  <li><a href="checkout.php">AFC</a></li>
  </ul>
</div>
                </div>
                <div class="tab-pane fade" id="122">
                  <h4>10 E Certificate</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>5 to 6 Days</dd>
                <dt>Documents required</dt>
          <dd>Form-16</dd><dd>Arrear sheet</dd>
             </dl>
            <p>If you have received some salary in arrears, it is likely you have heard of Form 10E. The income tax department recently made filing of Form 10E mandatory for those claiming income tax relief. Tax relief is allowed if you have received past dues in the current year. This relief makes sure there is no extra tax burden on you.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="123">
                  <h4>Annual Information Returns</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>3 to 4 Days</dd>
                <dt>Documents required</dt>
         <dd>Bank statement (April to March) or account details</dd>
          <dd>PAN card</dd>
          <dd>Aadhar card</dd></dl>
            <p>As per the amendment to Section 285BA of the Income Tax Act, 1961, specified entities (Filers) are required to furnish an Annual Information Return (AIR) in respect of specified financial transactions registered/recorded by them during the financial year (beginning on or after April 1, 2004) to the income tax authority or such other prescribed authority. An entity who is required to file AIR is required to file one single AIR for the whole organization.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="124">
                  <h4>Income Tax Returns File (with balance sheet and computation)</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>2 to 3 Days</dd>
                <dt>Documents required</dt>
          <dd>PAN card</dd><dd>Aadhar Card</dd><dd>Details of all bank accounts (Account number, IFSC code, MICR code)</dd><dd>All sources of Income</dd><dd>TDS and advance tax payments</dd>
          <dt>Deductions</dt><dd>LIC</dd><dd>Tution Fees</dd><dd>GPF</dd><dd>PPF</dd><dd>And other deductions claimed under Section 80</dd></dl>
            <p>Irrespective of whether you live in India currently or not, filing an income tax return is compulsory, if your total Indian income exceeds Rs.2,50,000. Even if you don't meet the Rs.2,50,000 threshold, it's a good practice to file or e-file your income tax return. An income tax return is an important document that you must produce at the time of availing a home loan, as it reflects your financial prosperity. An income tax return—as a proof of income—shows your capacity to repay a loan. If you are planning to go abroad for higher studies, or are about to take up a job outside of India, you'll need at least three years' filed income tax returns to show as proof of income. People processing your visa application may request for this financial information to evaluate your financial health, which in return shows that you can support yourself on your own in their country.</p><p>As per the source of income select the right type of income tax return form as it is the most important part in filing yoiur returns. Income tax department has prescribed different ITR forms to file the returns like ITR-1 (Sahaj), ITR-2, ITR-3, ITR-4, ITR-4S (Sugam). Assessees should choose the right form as required by them to file returns correctly.</p>
					<p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="125">
                  <h4>TDS Returns File</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>2 to 3 Days</dd>
                <dd>PAN card</dd><dd>Aadhar Card</dd><dd>Tax payment challans (self-assessment or advance tax)</dd><dd>All sources of Income and salary certificate</dd><dd>Details of all bank accounts (Account number, IFSC code, MICR code)</dd><dd>Form-16</dd><dd>Form-26AS</dd>
              </dl>
            <p>Tax Deducted at Source or TDS is a type of advance tax which is deducted from the earnings of an individual or an organization before the money is actually credited into that entity’s account, according to the Indian Taxation Code. The government is able to generate revenues by implementing the provisions of TDS on the earnings of individuals as well as businesses. Rules and regulations regarding TDS are controlled and governed under the Income Tax Act, 1961 by the Central Board of Direct Taxes (CBDT). As the name suggests, “Tax Deducted at Source” implies that the payee or the employer deducts the tax before making a payment to the receiver. Tax Deducted at Source is applicable on income earned regularly and also on the income earned occasionally or irregularly. Thus, TDS is applicable on various incomes, including, but not limited to Salary, Commission, Rent, Professional Fees and Interest.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
                <div class="tab-pane fade" id="126">
                  <h4>Annual filings of company</h4>
        <dl class="dl-horizontal">
        <dt>Time required</dt>
                <dd>7 to 8 Days</dd>
                <dt>Documents required</dt>
         <dd>Tax audit with CA seal and signature</dd></dl>
            <p>All companies registered in India like private limited company, one person company, limited company, and section 8 company must file MCA annual return and income tax return each year. Companies must conduct an Annual General Meeting at the end of each financial year and file an annual return with the Ministry of Corporate Affair to maintain compliance. For newly incorporated Companies, the Annual General Meeting should be held within 18 months from date of incorporation or 9 months from the date of closing of financial year, whichever is earlier. Subsequent Annual General Meetings should be held within 6 months from the end of that financial year. In India, normally the financial year starts on April 1st and end on 31st March. So a Company's annual return would be due on or before September 30th.</p><p>Annual return consists of information and documents that include the Balance Sheet of the Company, Profit & Loss Account, Compliance Certificate, Registered Office Address, Register of Member, Shares and Debentures details, Debt details and information about the Management of the Company. The annual return would also disclose the shareholding structure of the Company, changes in Directorship and details of transfers of securities.</p><p>In addition to MCA annual return, companies must also file income tax return irrespective of income, profit or loss. Hence, even dormant companies with no transactions are required to file income tax return each year. Private limited companies, limited companies and one person companies would be required to file Form ITR -6. The due date for filing income tax return for a company is on or before the 30th of September.</p>
          <p align="center"><a href="checkout.php"><button type="button" class="btn bg-teal margin">Buy Now</button></a></p>
                </div>
              </div>
            </div>

			</div>
		</div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   <!-- /.content-wrapper -->
  <footer class="main-footer">
			<div class="pull-right d-none d-sm-inline-block">
				<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					<li class="nav-item">
						<a class="nav-link" href="https://www.swagatdash.com/" target="_blank" style="display: none;">♥</a>
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
	
    </body>
</html>
