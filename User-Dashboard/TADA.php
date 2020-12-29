<!DOCTYPE html>
<?php
include("conn.php");
include("session.php");
?>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Expense Approval & Reimbursement - Employee Profile</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="shortcut icon" href="nirma_logo.ico">
  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/nirma_logo.ico">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<style>
#form-element {
	overflow-x: scroll;
	background-image: url("form_img.jpg");
}
.table-element {
	margin-left:10px;
	margin-right:10px;
	border: 1px solid #ffffff !important;
	padding: 2px;
	font-size: 100%;
	font-family: Verdana;
	color: black;
}
#table:bordering {
	border: 1px solid #ffff !important;
	padding-right: 15px;
	padding-left: 15px;
}
#th{
	font-family: Verdana;
	color : white;
}
#label-element {
	font-size: 150%;
	font-family: Verdana;
	color: black;
}
#sub-label-element {
	font-family: Verdana;
	font-size: 120%;
	color: black;
}
</style>
<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                <img src="nimlogo.png" alt="ITNU" height="50" width="100">
                </a>

				<ul class="nav navbar-nav search-nav">
					<li>
						<div class="search">
						<div class="form-group form-animate-text">
							<label class="label-search"><b>Expense Approval & Reimbursement System - <?php echo $logindesg; ?></b></label>
						</div>
						</div>
					</li>
				</ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span style="font-size:150%"><?php echo $login_session; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="signout.php"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a href="index.php"><span class="fa-home fa"></span> Dashboard </a>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Forms  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="STTP.php">STTP Form</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-inbox.php?Desg=<?php echo $logindesg; ?>">Inbox</a></li>
                      </ul>
                    </li>
                  
                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Form Element</h3>
                        <p class="animated fadeInDown">
                          Form <span class="fa-angle-right fa"></span> Form Element
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
				<div class="col-md-12 padding-0">
					<div class="col-md-12">
					<?php $id=$_GET["ID"]; ?>
					<form method="post" action="TA_DAone.php?ID=<?php echo $id; ?>" id="form-element"> 
						<center><font size="10" style="font-family: verdana;color: black;">Institute of Technology<br>Nirma University</font></center>
						<br><br>
					<table>
					<tr>
						<th><label class="col-md-12 col-form-label" for="name" id="label-element">Name: </label></th>
						<td>
						<div class="form-group">
                              <div class="col-md-12"><input type="text" class="form-control" name="name" value="<?php echo $login_session;?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="designation" id="label-element">Designation: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12">
							<input type="text" name="designation" class="form-control" value="<?php echo $logindesg;?>" disabled>
							</div>
						</div>
						</td>
					</tr>
					<tr>	
						<th><label class="col-md-12 col-form-label" for="department" id="label-element">Department: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="text" name="department" class="form-control" value="<?php echo $logindept;?>" disabled>
							</div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="tamonth" id="label-element">Travelling allowence bill for the month of: </label></th>
						<td>
						<div class="form-group">
                              <div class="col-md-12"><input type="month" class="form-control" name="ta_month"></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="basic_pay" id="label-element">Basic pay: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control" name="basic_pay"></div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="agp" id="label-element">AGP: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="text" class="form-control" name="agp"></div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="purpose" id="label-element">Purpose: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="text" class="form-control" name="purpose"></div>
						</div>
						</td>
					</tr>
					</table><br><br><br><br>
					<table border="1" id="employee_table" class="table-element">
						<tr>	
							<th></th>
							<th colspan="8">Travelling</th>
							<th colspan="3">Daily Allowance</th>
							<th colspan="5">Conveyance</th>
						</tr>
						<tr>
							<th></th>
							<th colspan="3">Departure</th>
							<th colspan="3">Arrival</th>
							<th>Travelled By</th>
							<th>Fare ammount</th>
							<th>Halt Days</th>
							<th>Rate of D.A.</th>
							<th>Total D.A.</th>
							<th>Date</th>
							<th>From Place</th>
							<th>TO Place</th>
							<th>Kms/ Point</th>
							<th>Amount</th>
						</tr>
						<tr>
							<th>Remove entry</th>
							<th>Date</th>
							<th>Place</th>
							<th>Time (am/pm)</th>
							<th>Date</th>
							<th>Place</th>
							<th>Time (am/pm)</th>
							<th>(Rail / Bus)</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
						<tr id="row1">
							<td></td>
							<td> <input type="date" name="dep_date[]"></td>
							<td> <input type="text" name="dep_place[]"></td>
							<td> <input type="time" name="dep_time[]"></td>
							<td> <input type="date" name="arr_date[]"></td>
							<td> <input type="text" name="arr_place[]"></td>
							<td> <input type="time" name="arr_time[]"></td>
							<td> <input type="text" name="travel_by[]"></td>
							<td> <input type="number" name="fare_amt[]"></td>
							<td> <input type="number" name="halt_days[]"></td>
							<td> <input type="number" name="rate_da[]"></td>
							<td> <input type="number" name="total_da[]"></td>
							<td> <input type="date" name="con_date[]"></td>
							<td> <input type="text" name="from_place[]"></td>
							<td> <input type="text" name="to_place[]"></td>
							<td> <input type="number" name="kmp[]"></td>
							<td> <input type="number" name="con_amt[]"></td>
						</tr>
					</table>
					<br>
					<input class="submit btn btn-danger2" type="button" onclick="add_row();" value="ADD ROW">
					<br><br><br><br>
					<label class="col-md-12 col-form-label" id="label-element">Certificates (Strike out items that aren't relevant):</label>
					<br> 
					<ul>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="I have actually performed the journey as per details given in the bill.">I have actually performed the journey as per details given in the bill.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="Rikshaw / Taxi fares shown in the bill are actuals (see overleaf)">Rikshaw / Taxi fares shown in the bill are actuals (see overleaf)</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="I have not been given free boarding / lodging by the organiser / organisers.">I have not been given free boarding / lodging by the organiser / organisers.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="I have actually stayed in hotel at the place of visit, the bill in original submitted.">I have actually stayed in hotel at the place of visit, the bill in original submitted.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="I have drawn an advance for the journey Rs.">I have drawn an advance for the journey Rs.<input type="number" name="adv_rs"></label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="The excess amount over advanced drawn has been paid into the accounts and voucher submitted.">The excess amount over advanced drawn has been paid into the accounts and voucher submitted.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="I have not preferred or drawn this claim previously.">I have not preferred or drawn this claim previously.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="The organisers had provided boarding / lodging / local conveyance.">The organisers had provided boarding / lodging / local conveyance.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" id="sub-label-element"><input type="checkbox" class="checkbox" name="certificates[]" value="I have complied with all the conditions attached to my order dated ">I have complied with all the conditions attached to my order dated <input type="date" name="order_date"></label><br>
						</div>
					</ul><br><br><br>
					<table>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Fare </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"> <input type="number" class="form-control" name="fare"placeholder="Rs."> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Daily Allowance </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control" name="Da_allow" placeholder="Rs."> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Conveyance </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control" name="conv" placeholder="Rs."> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Others </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control" name="other" placeholder="Rs."> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Total </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control" name="total" placeholder="Rs."> </div>
						</div></td>
					</tr>
					</table>
					<center style="padding-bottom: 10px;"><input class="submit btn btn-danger1" type="submit" name="submit_row" value="SUBMIT"></center>
					</form>
					</div>
				</div>
              </div>
            </div>
          <!-- end: content -->
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                          <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Ui Elements
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                       <span class="fa fa-check-square-o"></span>Forms
                       <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span>Tables
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>Calendar
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-envelope-o"></span>Mail
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Pages
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required",
        validate_lastname: "required",
        validate_username: {
          required: true,
          minlength: 2
        },
        validate_password: {
          required: true,
          minlength: 5
        },
        validate_confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#validate_password"
        },
        validate_email: {
          required: true,
          email: true
        },
        validate_agree: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname",
        validate_lastname: "Please enter your lastname",
        validate_username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        validate_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        validate_confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        validate_email: "Please enter a valid email address",
        validate_agree: "Please accept our policy"
      }
    });

    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });


    $('.mask-date').mask('00/00/0000');
    $('.mask-time').mask('00:00:00');
    $('.mask-date_time').mask('00/00/0000 00:00:00');
    $('.mask-cep').mask('00000-000');
    $('.mask-phone').mask('0000-0000');
    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
    $('.mask-phone_us').mask('(000) 000-0000');
    $('.mask-mixed').mask('AAA 000-S0S');
    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
    $('.mask-money2').mask("#.##0,00", {reverse: true});
    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.mask-ip_address').mask('099.099.099.099');
    $('.mask-percent').mask('##0,00%', {reverse: true});
    $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mask-fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/, 
          fallback: '/'
        }, 
        placeholder: "__/__/____"
      }
    });
    $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    var options =  {onKeyPress: function(cep, e, field, options){
      var masks = ['00000-000', '0-00-00-00'];
      mask = (cep.length>7) ? masks[1] : masks[0];
      $('.mask-crazy_cep').mask(mask, options);
    }};

    $('.mask-crazy_cep').mask('00000-000', options);


    var options2 =  { 
      onComplete: function(cep) {
        alert('CEP Completed!:' + cep);
      },
      onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 
          'currentField: ', currentField, ' options: ', options);
      },
      onChange: function(cep){
        console.log('cep changed! ', cep);
      },
      onInvalid: function(val, e, f, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
    };

    $('.mask-cep_with_callback').mask('00000-000', options2);

    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

    $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



    var slider = document.getElementById('noui-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var slider = document.getElementById('noui-range');
    noUiSlider.create(slider, {
                        start: [ 20, 80 ], // Handle start position
                        step: 10, // Slider moves in increments of '10'
                        margin: 20, // Handles must be more than '20' apart
                        connect: true, // Display a colored bar between the handles
                        direction: 'rtl', // Put '0' at the bottom of the slider
                        orientation: 'vertical', // Orient the slider vertically
                        behaviour: 'tap-drag', // Move handle on tap, bar is draggable
                        range: { // Slider can select '0' to '100'
                        'min': 0,
                        'max': 100
                      },
                        pips: { // Show a scale with the slider
                          mode: 'steps',
                          density: 2
                        }
                      });



    $(".select2-A").select2({
      placeholder: "Select a state",
      allowClear: true
    });

    $(".select2-B").select2({
      tags: true
    });

    $("#range1").ionRangeSlider({
      type: "double",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500
    });

    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


    $(".dial").knob({
      height:80
    });

    $('.dial1').trigger(
     'configure',
     {
       "min":10,
       "width":80,
       "max":80,
       "fgColor":"#FF6656",
       "skin":"tron"
     }
     );

    $('.dial2').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#FF6656",
       "skin":"tron",
       "cursor":true
     }
     );

    $('.dial3').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#27C24C",
     }
     );
  });
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function add_row()
{
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td><td> <input type='date' name='dep_date[]'></td><td> <input type='text' name='dep_place[]'></td><td> <input type='time' name='dep_time[]'></td><td><input type='date' name='arr_date[]'></td><td> <input type='text' name='arr_place[]'></td><td> <input type='time' name='arr_time[]'></td><td> <input type='text' name='travel_by[]'></td><td> <input type='number' name='fare_amt[]'></td><td> <input type='number' name='halt_days[]'></td><td> <input type='number' name='rate_da[]'></td><td> <input type='number' name='total_da[]'></td><td> <input type='date' name='con_date[]'></td><td> <input type='text' name='from_place[]'></td><td> <input type='text' name='to_place[]'></td><td> <input type='number' name='kmp[]'></td><td> <input type='number' name='con_amt[]'></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>

<!-- end: Javascript -->
</body>
</html>
