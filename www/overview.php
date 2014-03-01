<!DOCTYPE html>
<html lang="en">
		<head>
				<title>Center Details - Corp India</title>
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<!-- Bootstrap -->
				<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
				<link href="css/bootstrap-responsive.css" rel="stylesheet">
		</head>
		<body>
				<script src="http://code.jquery.com/jquery.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="hoverDropDown.js"></script>
				<div id="myCarousel" class="carousel slide">
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>
					  <!-- Carousel items -->
					  <div class="carousel-inner">
					  	<div class="active item">
					    	<img src="banner2.jpg"></img>
					    </div>
					    <div class="item">
					    	<img src="Banner1.jpg"></img>
					    </div>
					    <div class="item">
					    	<img src="Banner3.jpg"></img>
					    </div>
					  </div>
					  <!-- Carousel nav -->
					  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
					<div class="navbar">
						  <div class="navbar-inner" style="background:#ff3300;margin-top:-20px; height:100px;">
						    <a class="brand" href="http://corpindia.org/" style="color:black;"><h3><strong>CORP INDIA</strong></h3></a>
						    <ul class="nav">
						      <li><a href="centredisplay.php" style="color:black;"><h3><strong>CENTRE DETAILS</strong></h3></a></li>
						      <li><a href="overview.php" style="color:black;"><h3><strong>LAST 10 BENEFICIARIES</strong></h3></a></li>
						      <li><a href="#loginModal" data-toggle="modal" style="color:black;"><h3><strong>LOGIN</strong></h3></a></li>
						      <li><form class="navbar-search pull-right" style="margin-top:20px;margin-left:80%;">
                				 <input  type="text" class="search-query" placeholder="Search">
            				</form></li>
						    </ul>
						  </div>
					</div>
				<!--<div id="topPanel" class="row-fluid" style="background:#ff3300;margin-top:-20px; height:100px; position:fixed;">
				</div>-->
						<!--<div class="navbar">
							 <div class="navbar-inner">
							    <div class="container">
							 
							      <!-- .btn-navbar is used as the toggle for collapsed navbar content 
							      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							       <span class="icon-bar"></span>
							      </a>
							 
							      <!-- Be sure to leave the brand out there if you want it shown 
							      <a class="brand" href="#"></a>
							 
							      <!-- Everything you want hidden at 940px or less, place within here 
							      
							
							   	</div>
							 </div>
						</div>-->
				<!--</div>-->
				<!--dynimically created division -->
				<div id="d1">
				</div>
				<script type="text/javascript">
			$(function(){ 
				$.ajax({
							 url: 'display.php',
							 type: 'POST',
							dataType: 'json',
							success: function(output) { 	
								document.getElementById('feed').innerHTML="";							
										$.each(output, function(i, v) {
														
										});	
									},
							error:function(){alert("apitry error");}
					});
			
			}); //End of $ function

		</body>
</html>