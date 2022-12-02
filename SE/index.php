<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>UWC2.0</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your tasks</a> </li>';
                                    if($_SESSION["user_job"] = "Collector"){
                                        echo '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your vehicle</a> </li>';
                                    }
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/home.jpg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>Garbage Collection & Cleaning </h1>
                    <h4 class="font-white space-xs">For a clean and beautiful environment</h5>
                    
                    <div class="steps">
                        <div class="step-item step1">
                            
            <?xml version="1.0" encoding="iso-8859-1"?>
            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330.002 330.002" style="enable-background:new 0 0 330.002 330.002;" xml:space="preserve">
                <g fill="#FFF">
                <g id="XMLID_9_">
                <path id="XMLID_10_" d="M169.392,199.395c-5.858,5.857-5.858,15.355,0,21.213c2.929,2.929,6.767,4.394,10.607,4.394 c3.838,0,7.678-1.465,10.606-4.394l44.998-44.997c0.347-0.347,0.676-0.712,0.988-1.091c0.069-0.084,0.128-0.176,0.196-0.262
                    c0.235-0.299,0.467-0.6,0.68-0.917c0.055-0.083,0.101-0.171,0.154-0.254c0.211-0.329,0.418-0.662,0.603-1.007
                    c0.032-0.06,0.057-0.123,0.088-0.184c0.194-0.374,0.378-0.753,0.541-1.145c0.017-0.04,0.028-0.081,0.044-0.121
                    c0.167-0.411,0.32-0.829,0.45-1.258c0.014-0.046,0.022-0.094,0.036-0.14c0.123-0.419,0.235-0.844,0.321-1.278
                    c0.024-0.121,0.035-0.245,0.056-0.367c0.063-0.36,0.125-0.72,0.162-1.088c0.05-0.496,0.076-0.995,0.076-1.497
                    c0-0.503-0.026-1.002-0.076-1.497c-0.037-0.371-0.1-0.734-0.164-1.097c-0.021-0.119-0.031-0.24-0.055-0.358
                    c-0.087-0.437-0.199-0.864-0.323-1.286c-0.013-0.044-0.02-0.088-0.034-0.132c-0.131-0.432-0.286-0.852-0.454-1.267
                    c-0.015-0.036-0.025-0.075-0.041-0.111c-0.164-0.394-0.349-0.776-0.544-1.152c-0.03-0.058-0.054-0.119-0.085-0.176
                    c-0.187-0.348-0.394-0.682-0.606-1.013c-0.053-0.082-0.097-0.168-0.151-0.249c-0.213-0.317-0.445-0.62-0.681-0.919
                    c-0.067-0.086-0.126-0.177-0.195-0.261c-0.312-0.379-0.641-0.744-0.988-1.091l-44.998-44.998c-5.857-5.858-15.355-5.858-21.213,0
                    c-5.858,5.858-5.858,15.355,0,21.213l19.393,19.394H15c-8.284,0-15,6.716-15,15s6.716,15,15,15h173.785L169.392,199.395z"/>
                <path id="XMLID_11_" d="M207.301,42.3c-40.945,0-79.04,20.312-101.903,54.333c-4.621,6.876-2.793,16.196,4.083,20.816
                    c6.876,4.621,16.196,2.793,20.816-4.083C147.578,87.652,176.365,72.3,207.301,72.3c51.116,0,92.701,41.586,92.701,92.701
                    s-41.586,92.701-92.701,92.701c-30.844,0-59.585-15.283-76.879-40.882c-4.638-6.864-13.962-8.67-20.827-4.032
                    c-6.864,4.638-8.67,13.962-4.032,20.827c22.882,33.868,60.915,54.087,101.738,54.087c67.658,0,122.701-55.044,122.701-122.701
                    S274.958,42.3,207.301,42.3z"/>
            </g>
            </svg>

                            <h4><span>1. </span>Login Account</h4> </div>
                        <!-- end:Step -->
                        <div class="step-item step2">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 463 463" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 463 463">
                <g fill="#FFF">
                    <g>
                        <path d="M71.5,0C32.075,0,0,32.075,0,71.5S32.075,143,71.5,143S143,110.925,143,71.5S110.925,0,71.5,0z M71.5,128    C40.346,128,15,102.654,15,71.5S40.346,15,71.5,15S128,40.346,128,71.5S102.654,128,71.5,128z"/>
                        <path d="M71.5,160C32.075,160,0,192.075,0,231.5S32.075,303,71.5,303s71.5-32.075,71.5-71.5S110.925,160,71.5,160z M71.5,288    C40.346,288,15,262.654,15,231.5S40.346,175,71.5,175s56.5,25.346,56.5,56.5S102.654,288,71.5,288z"/>
                        <path d="M71.5,320C32.075,320,0,352.075,0,391.5S32.075,463,71.5,463s71.5-32.075,71.5-71.5S110.925,320,71.5,320z M71.5,448    C40.346,448,15,422.654,15,391.5S40.346,335,71.5,335s56.5,25.346,56.5,56.5S102.654,448,71.5,448z"/>
                        <path d="m90.196,50.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.464,1.465 3.384,2.197 5.303,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.93-2.929-7.678-2.929-10.608,7.10543e-15z"/>
                        <path d="m90.196,210.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.464,1.465 3.384,2.197 5.303,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.93-2.929-7.678-2.929-10.608,0z"/>
                        <path d="m175.5,55h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m175.5,103h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m175.5,215h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m455.5,248h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"/>
                        <path d="m175.5,375h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m455.5,408h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"/>
                    </g>
                </g>
            </svg>
                            <h4><span>2. </span>Check Tasks</h4> </div>
                        <!-- end:Step -->
                        <div class="step-item step3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                                <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" /> </svg>
                            <h4><span>3. </span>Do Tasks</h4> </div>
                        <!-- end:Step -->
                    </div>
                    <!-- end:Steps -->
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
      
	  
	
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Employees of the Month</h2>
                    <p class="lead">The hard-working Employees of UWC2.0</p>
                </div>
                <div class="row">
				
				
				
						<?php 
						// fetch records from database to display popular first 3 dishes from table
						$query_res= mysqli_query($db,"select * from dishes LIMIT 3"); 
									      while($r=mysqli_fetch_array($query_res))
										  {
													
						                       echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
														<div class="food-item-wrap">
															<div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/'.$r['img'].'">
																<div class="distance"><i class="fa fa-pin"></i>1240m</div>
																<div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																<div class="review pull-right"><a href="#">198 reviews</a> </div>
															</div>
															<div class="content">
																<h5><a href="dishes.php?res_id='.$r['rs_id'].'">'.$r['title'].'</a></h5>
																<div class="product-name">'.$r['slogan'].'</div>
																<div class="price-btn-block"> <span class="price">$'.$r['price'].'</span> <a href="dishes.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order Now</a> </div>
															</div>
															
														</div>
												</div>';
													
										  }
						
						
						?>
				
				
				
				
                  
					
					
					
					
					
					
                 
                </div>
            </div>
        </section>
        <!-- Popular block ends -->
        <!-- How it works block starts -->
        <section class="how-it-works">
            <div class="container">
                <div class="text-xs-center">
                    <!-- 3 block sections starts -->
                    <div class="row how-it-works-solution">
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                            <div class="how-it-works-wrap">
                                <div class="step step-1">
                                    <div class="icon" data-step="1">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330.002 330.002" style="enable-background:new 0 0 330.002 330.002;" xml:space="preserve">
                                            <g id="XMLID_9_" fill="#FFF">
                                                <path id="XMLID_10_" d="M169.392,199.395c-5.858,5.857-5.858,15.355,0,21.213c2.929,2.929,6.767,4.394,10.607,4.394 c3.838,0,7.678-1.465,10.606-4.394l44.998-44.997c0.347-0.347,0.676-0.712,0.988-1.091c0.069-0.084,0.128-0.176,0.196-0.262
                                                    c0.235-0.299,0.467-0.6,0.68-0.917c0.055-0.083,0.101-0.171,0.154-0.254c0.211-0.329,0.418-0.662,0.603-1.007
                                                    c0.032-0.06,0.057-0.123,0.088-0.184c0.194-0.374,0.378-0.753,0.541-1.145c0.017-0.04,0.028-0.081,0.044-0.121
                                                    c0.167-0.411,0.32-0.829,0.45-1.258c0.014-0.046,0.022-0.094,0.036-0.14c0.123-0.419,0.235-0.844,0.321-1.278
                                                    c0.024-0.121,0.035-0.245,0.056-0.367c0.063-0.36,0.125-0.72,0.162-1.088c0.05-0.496,0.076-0.995,0.076-1.497
                                                    c0-0.503-0.026-1.002-0.076-1.497c-0.037-0.371-0.1-0.734-0.164-1.097c-0.021-0.119-0.031-0.24-0.055-0.358
                                                    c-0.087-0.437-0.199-0.864-0.323-1.286c-0.013-0.044-0.02-0.088-0.034-0.132c-0.131-0.432-0.286-0.852-0.454-1.267
                                                    c-0.015-0.036-0.025-0.075-0.041-0.111c-0.164-0.394-0.349-0.776-0.544-1.152c-0.03-0.058-0.054-0.119-0.085-0.176
                                                    c-0.187-0.348-0.394-0.682-0.606-1.013c-0.053-0.082-0.097-0.168-0.151-0.249c-0.213-0.317-0.445-0.62-0.681-0.919
                                                    c-0.067-0.086-0.126-0.177-0.195-0.261c-0.312-0.379-0.641-0.744-0.988-1.091l-44.998-44.998c-5.857-5.858-15.355-5.858-21.213,0
                                                    c-5.858,5.858-5.858,15.355,0,21.213l19.393,19.394H15c-8.284,0-15,6.716-15,15s6.716,15,15,15h173.785L169.392,199.395z"/>
                                                <path id="XMLID_11_" d="M207.301,42.3c-40.945,0-79.04,20.312-101.903,54.333c-4.621,6.876-2.793,16.196,4.083,20.816
                                                    c6.876,4.621,16.196,2.793,20.816-4.083C147.578,87.652,176.365,72.3,207.301,72.3c51.116,0,92.701,41.586,92.701,92.701
                                                    s-41.586,92.701-92.701,92.701c-30.844,0-59.585-15.283-76.879-40.882c-4.638-6.864-13.962-8.67-20.827-4.032
                                                    c-6.864,4.638-8.67,13.962-4.032,20.827c22.882,33.868,60.915,54.087,101.738,54.087c67.658,0,122.701-55.044,122.701-122.701
                                                    S274.958,42.3,207.301,42.3z"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <h3>Login Account</h3>
                                    <p>We"ve got your covered with menus from over 345 delivery restaurants online.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                            <div class="step step-2">
                                <div class="icon" data-step="2">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 463 463" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 463 463">
                                        <g fill="#FFF">
                                            <g>
                                                <path d="M71.5,0C32.075,0,0,32.075,0,71.5S32.075,143,71.5,143S143,110.925,143,71.5S110.925,0,71.5,0z M71.5,128    C40.346,128,15,102.654,15,71.5S40.346,15,71.5,15S128,40.346,128,71.5S102.654,128,71.5,128z"/>
                                                <path d="M71.5,160C32.075,160,0,192.075,0,231.5S32.075,303,71.5,303s71.5-32.075,71.5-71.5S110.925,160,71.5,160z M71.5,288    C40.346,288,15,262.654,15,231.5S40.346,175,71.5,175s56.5,25.346,56.5,56.5S102.654,288,71.5,288z"/>
                                                <path d="M71.5,320C32.075,320,0,352.075,0,391.5S32.075,463,71.5,463s71.5-32.075,71.5-71.5S110.925,320,71.5,320z M71.5,448    C40.346,448,15,422.654,15,391.5S40.346,335,71.5,335s56.5,25.346,56.5,56.5S102.654,448,71.5,448z"/>
                                                <path d="m90.196,50.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.464,1.465 3.384,2.197 5.303,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.93-2.929-7.678-2.929-10.608,7.10543e-15z"/>
                                                <path d="m90.196,210.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.464,1.465 3.384,2.197 5.303,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.93-2.929-7.678-2.929-10.608,0z"/>
                                                <path d="m175.5,55h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                                                <path d="m175.5,103h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                                                <path d="m175.5,215h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                                                <path d="m455.5,248h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"/>
                                                <path d="m175.5,375h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                                                <path d="m455.5,408h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"/>
                                            </g>
                                        </g>
                                    </svg>   
                                </div>
                                <h3>Check Tasks</h3>
                                <p>We"ve got your covered with menus from over 345 delivery restaurants online.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                            <div class="step step-3">
                                <div class="icon" data-step="3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                                        <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" /> </svg>
                                </div>
                                <h3>Do Tasks</h3>
                                <p>Get your food delivered! And enjoy your meal! Pay online on pickup or delivery</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- How it works block ends -->
        <!-- Featured restaurants starts -->
        <section class="featured-restaurants">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title-block pull-left">
                            <h4>UMC List</h4> </div>
                    </div>
                    <div class="col-sm-8">
                        <!-- restaurants filter nav starts -->
                        <div class="restaurants-filter pull-right">
                            <nav class="primary pull-left">
                                <ul>
                                    <li><a href="#" class="selected" data-filter="*">all</a> </li>
									<?php 
									// display categories here
									$res= mysqli_query($db,"select * from res_category");
									      while($row=mysqli_fetch_array($res))
										  {
											echo '<li><a href="#" data-filter=".'.$row['c_name'].'"> '.$row['c_name'].'</a> </li>';
										  }
									?>
                                   
                                </ul>
                            </nav>
                        </div>
                        <!-- restaurants filter nav ends -->
                    </div>
                </div>
                <!-- restaurants listing starts -->
                <div class="row">
                    <div class="restaurant-listing">
                        
						
						<?php  //fetching records from table and filter using html data-filter tag
						$ress= mysqli_query($db,"select * from restaurant");  
									      while($rows=mysqli_fetch_array($ress))
										  {
													// fetch records from res_category table according to catgory ID
													$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
													 $rowss=mysqli_fetch_array($query);
						
													 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
														<div class="restaurant-wrap">
															<div class="row">
																<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="restaurant-logo" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
																</div>
																<!--end:col -->
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																	<div class="bottom-part">
																		<div class="cost"><i class="fa fa-check"></i> Min $ 10,00</div>
																		<div class="mins"><i class="fa fa-motorcycle"></i> 30 min</div>
																		<div class="ratings"> <span>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star-o"></i>
																			</span> (122) </div>
																	</div>
																</div>
																<!-- end:col -->
															</div>
															<!-- end:row -->
														</div>
														<!--end:Restaurant wrap -->
													</div>';
										  }
						
						
						?>
						
							
						
					
                    </div>
                </div>
                <!-- restaurants listing ends -->
               
            </div>
        </section>
        <!-- Featured restaurants ends -->
        <section class="app-section">
            <div class="app-wrap">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">
                            <div class="col-xs-12 col-sm-5 right-image text-center">
                                <figure> <img src="images/app.png" alt="Right Image" class="img-fluid"> </figure>
                            </div>
                            <div class="col-xs-12 col-sm-7 left-text">
                                <h3>The Application For Employee</h3>
                                <p>Now you can check tasks &amp; check MCPs on application</p>
                                <div class="social-btns">
                                    <a href="#" class="app-btn apple-button clearfix">
                                        <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                    </a>
                                    <a href="#" class="app-btn android-button clearfix">
                                        <div class="pull-left"><i class="fa fa-android"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">CH Play</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start: FOOTER -->
        <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="images/food-picky-logo.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">About us</a> </li>
                            <li><a href="#">History</a> </li>
                            <li><a href="#">Our Team</a> </li>
                            <li><a href="#">We are hiring</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works</h5>
                        <ul>
                            <li><a href="#">Enter your location</a> </li>
                            <li><a href="#">Choose restaurant</a> </li>
                            <li><a href="#">Choose meal</a> </li>
                            <li><a href="#">Pay via credit card</a> </li>
                            <li><a href="#">Wait for delivery</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Pages</h5>
                        <ul>
                            <li><a href="#">Search results page</a> </li>
                            <li><a href="#">User Sing Up Page</a> </li>
                            <li><a href="#">Pricing page</a> </li>
                            <li><a href="#">Make order</a> </li>
                            <li><a href="#">Add to cart</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Popular locations</h5>
                        <ul>
                            <li><a href="#">Sarajevo</a> </li>
                            <li><a href="#">Split</a> </li>
                            <li><a href="#">Tuzla</a> </li>
                            <li><a href="#">Sibenik</a> </li>
                            <li><a href="#">Zagreb</a> </li>
                            <li><a href="#">Brcko</a> </li>
                            <li><a href="#">Beograd</a> </li>
                            <li><a href="#">New York</a> </li>
                            <li><a href="#">Gradacac</a> </li>
                            <li><a href="#">Los Angeles</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <h5>Address</h5>
                            <p>Concept design of oline food order and deliveye,planned as restaurant directory</p>
                            <h5>Phone: <a href="tel:+080000012222">080 000012 222</a></h5> </div>
                        <div class="col-xs-12 col-sm-5 additional-info color-gray">
                            <h5>Addition informations</h5>
                            <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                        </div>
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>