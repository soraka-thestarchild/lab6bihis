<?php
require('db.inc.php');
if(isset($_SESSION['USERNAME'])){
  header('Location: index.php');
}

if(isset($_POST['login'])){
    @$username=$_POST['username'];
    @$password=$_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM tbl_account WHERE username='$username' AND password='$password'");

        if(mysqli_num_rows($result) > 0 )
        { 
            $_SESSION["USERNAME"] = $username; 
            echo "<script type='text/javascript'>alert('Welcome {$_SESSION['USERNAME']}'); location.replace('index.php');</script>";    
        }
        else
        {
            echo "<script>alert('The username or password are incorrect!');</script>";
        }

}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/global.css">
  <style type="text/css">
#hrline1 {
    line-height: 1em;
    position: relative;
    top: -40px;
    left: -30%;
    width: 38%
}

#text2 {
    font-size: 16px;
    font-family: 'Roboto Slab', serif;
    position: relative;
    top: -70px;
    left: 40%;
    color: gray
}

#hrline2 {
    position: relative;
    top: -95px;
    left: 31%;
    width: 37%
}

#facebook1,
#google1 {
    width: 15px;
    height: 15px;
    position: relative;
    left: -10%;
    top: 1px
}

#facebook,
#google {
    width: 140px;
    height: 40px;
    position: relative;
    top: -80px;
    left: 12%;
    border-radius: 5px;
    border-width: 1px;
    border-color: black;
    font-size: 17px;
    background-color: white
}

#facebook:hover {
    background-color: #2c27bc;
    color: white;
    transition: 0.5s
}

#google {
    position: relative;
    left: 26.5%
}

#google:hover {
    background-color: #ce6c46;
    color: white;
    transition: 0.5s
}
.page-holder { 
  min-height: 100vh;
  }
  .bg-cover {
  background-size: cover !important;
  }

  </style>
</head>
<body>
<div style="background: url(jinx.jpg)" class="page-holder bg-cover">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="gar.jpg" alt="logo" style="width:50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0" role="tablist">
    <li class="nav-item">
      <a class="nav-link  " href="index.php">Home</a>
    </li>
	
    <li class="nav-item">
      <a class="nav-link active" href="">Log In</a>
    </li>
	 <li class="nav-item">
      <a class="nav-link  " href="Signin.php">Sign In</a>
    </li>
   
  </ul>
</nav><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
<div class="container">
<div class="row d-flex justify-content-center">
  <div class="card-group " style="width:800px ">
    <div class="card img-fluid  special-card" style="background-color: rgba(245, 245, 245, 0.3); ">
<img class="card-img-top" src="gar3.png" alt="Card image" height="530" width="450">    </div>
	

		
				<div class="card special-card " style="background-color: rgba(245, 245, 245, 0.3); ">
					<div class="login-form">
					<form method="POST">
					
					<br>
						<div class="form-gorup ">
							<center><label >Username or Email </label></center>
							<input type="text" class="form-control" placeholder="Enter Username or Email here" name="username" required>
						</div><br>
						<div class="form-gorup ">
							<center><label>Password</label></center>
							<input type="password" class="form-control" placeholder="Enter password here" name="password" required>
						</div><br>
						<div class="checkbox ">
						
						<label >
							<input  type="checkbox"> Remember My Account
						</label>
						<label class="float-right ">
							<a href="#"> Forgot Password?</a>
						</label>
					</div><br>
					<center><button type="submit" name="login" class="btn btn-danger"> &nbsp&nbsp Log In&nbsp&nbsp</button>
					</center></form><br><br><form>
					<div><hr id="hrline1">
            <p id="text2" class="text-dark">or log in with</p>
            <hr id="hrline2"> <button id="facebook"><img id="facebook1" src="https://image.flaticon.com/icons/svg/174/174848.svg">Facebook</button> <button id="google"><img id="google1" src="https://image.flaticon.com/icons/svg/281/281764.svg">Google</button>
           
					<p class="register-link m-t-15 text-center text-dark"> Dont Have an Account? <a href="Signin.php"> Sign up Here</a></p>
					
					</div>
					
					</form>
					
					</form>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>
    
    
  </div>
</div>
						
							

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>