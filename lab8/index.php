<?php
require('db.inc.php');
if(!isset($_SESSION['USERNAME'])){
  header('Location: Login.php');
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  
  </style>
</head>
<body >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top"">

  <a class="navbar-brand" href="#">
    <img src="gar.jpg" alt="logo" style="width:50px;">
  </a>
  
  
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0" role="tablist">
    <li class="nav-item">
      <a class="nav-link  active" href="" >Home</a>
    </li>
	<li class="nav-item">
      <a class="nav-link  " href="https://na.leagueoflegends.com/en-us/">Visit Main Page </a>
    </li>
    
	</ul>
	<ul class="nav justify-content-end">
   <li class="nav-item ">
     <button type="submit" name="login" class="btn btn-outline-info btn-sm "> <a class="nav-link text-light" href="logout.php">Log Out</a></button>
    </li>
  </ul>
</nav>
<div class="containerf-luid">
<div id="league" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
	    <li data-target="#league" data-slide-to="0" class="active"></li>
	    <li data-target="#league" data-slide-to="1"></li>
	    <li data-target="#league" data-slide-to="2"></li>
		<li data-target="#league" data-slide-to="3"></li>
		<li data-target="#league" data-slide-to="4"></li>
	    <li data-target="#league" data-slide-to="5"></li>
		<li data-target="#league" data-slide-to="6"></li>
		<li data-target="#league" data-slide-to="7"></li>
	    <li data-target="#league" data-slide-to="8"></li>
		<li data-target="#league" data-slide-to="9"></li>
		<li data-target="#league" data-slide-to="10"></li>
	  </ul>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="lol.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1>League of Legends</h1>
	        <p> Be Who You Want To Be</p>
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="modes.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Play With Different Modes</h1>
	        
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="roles.jpg" width="1100" height="480">
	      <div class="carousel-caption">
	        <h1  >Pick Your Roles</h1>
	        <p></p>
	      </div> 
		  </div>
<div class="carousel-item">
	      <img src="tpaa.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Team Up</h1>
	        
	         
	    </div>		  
	    </div>
		<div class="carousel-item">
	      <img src="yass.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Be The Best Fighter</h1>
	        </div>
	      </div> 
		  <div class="carousel-item">
	      <img src="neek.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Be The Best Mage</h1>
	        </div>
	      </div> 
		  <div class="carousel-item">
	      <img src="sor.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Be The Best Support</h1>
	        
	      </div> 
	  </div>
	  <div class="carousel-item">
	      <img src="ashe2.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Be The Best Marksman</h1>
	        
	      </div> 
	  </div>
	  <div class="carousel-item">
	      <img src="kata.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Be The Best Assassin</h1>
	        
	      </div> 
	  </div>
	  <div class="carousel-item">
	      <img src="mucdo.jpg" width="1100" height="500">
	      <div class="carousel-caption">
	        <h1  >Be The Best Tank</h1>
	        
	      </div> 
	  </div>
	   <div class="carousel-item">
	      <img src="beyou.jpg" width="1100" height="500">
	      
	  </div>
	  </div>
	  <a class="carousel-control-prev" href="#league" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#league" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom"></nav>
</body>