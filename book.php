<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Above Multi-purpose Free Bootstrap Responsive Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script src="register.js"></script>
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<img src="img/works/logo1.png " alt="logo"/>
                    <a class="navbar-brand" href="home.html"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home.html">Home</a></li> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="packages.html">Packages</a></li>
                        <li><a href="contact.html">Contact</a></li>
						<li><a href="book.php">Book</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
<div class="row">
								<div class="col-md-6">
									<br>
									<div class="alert alert-success hidden" id="contactSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>
									<div class="alert alert-error hidden" id="contactError">
										<strong>Error!</strong> There was an error sending your message.
									</div>
									<div class="contact-form">
										<form id="contact-form" role="form" novalidate="novalidate">
											<div class="form-group has-feedback">
												<label for="name">Name*</label>
												<input type="text" class="form-control" id="name"  placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email">Email*</label>
												<input type="email" class="form-control" id="email"  placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="phone">phone*</label>
												<input type="number" class="form-control" id="phone"  placeholder="">
												
											</div>
											<div class="form-group has-feedback">
												<label for="address">address*</label>
												<input type="text" class="form-control"  id="address"  placeholder="">
											</div>
                                            <div class="form-group has-feedback">
												<label for="location">Where from*</label>
												<input type="text" class="form-control" id="location" placeholder="">
												
											</div>
                                            <div class="form-group has-feedback">
												<label for="guests">How many*</label>
												<input type="number" class="form-control"  id="guests" placeholder="">
												
											</div>
                                            <div class="form-group has-feedback">
												<label for="arrival">Arrival*</label>
												<input type="date" class="form-control"  id="arrival" >
												
											</div>
                                            <div class="form-group has-feedback">
												<label for="leaving">Leaving*</label>
												<input type="date" class="form-control"  id="leaving">
											</div>
											<input type="button" id="btnsave" value="Register" >
									</div>
								</div>