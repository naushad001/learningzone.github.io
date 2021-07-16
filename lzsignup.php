<?php 
  $R="";
if(isset($_POST['b1']))
  {
    $s1=$_POST["t1"];
    $s2=$_POST["t2"];
    $s3=$_POST["t3"];
    $s4=$_POST["t4"];
    
    $X=mysqli_connect("localhost","root","","learningzone");
    $X->query("insert into signup values('$s1','$s2','$s3','$s4')");
    $X->query("insert into login values('$s3','$s4')");
    $R="Data Save Successfully";    
    $result=$X->query("select * from signup where gmail='$s3' AND Password='$s4'");
    if($row=mysqli_fetch_row($result))
      {
      header("location:LearningZone.php");
          
       }
     }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LEARNING ZONE</title>


    <!------- bootstrap------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!------- bootstrap------->

    <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
    <script type="text/javascript" href="js/index.js" media="all"></script>
    <style type="text/css">
    	body{
	            background-color: #dde0d7s;
             }


.divup
{
    	    border-radius: 20px;
    box-shadow: -6px -10px 10px white;
}
.divup p{
   padding: 18px 0px 30px 0px ;
   font-size: 18px;
   font-weight: 600;
}
.divup p a{
   padding: 0px ;
   margin: 0px;
   font-size: 18px;
   font-weight: 600;
   color: #000;
}
.divdown {
    border-radius: 20px;
    background: #0065ff;
    box-shadow: -1px 1px 17px #000815;
    margin-left: -17px;
    margin-right: -18px;
}
.text{
    	border-color: transparent;
    border-radius: 50px;
    background: #5497ff;
    box-shadow: 0px 4px 3px #004bbf;
}
input[type=text ]{
   background: #5497ff;
    box-shadow: 0px 4px 3px #004bbf;
}
input[type=submit ] {
    background: #0043ab;
    box-shadow: 0px 4px 3px #002d73;
    width: 100%;
    font-size: 21px;
    color: #002358;
    font-weight: 700;
    border-radius: 50px;
    border: transparent;
}

    </style>

</head>

<body>
    <!------- Navbar section------->
<section class="nav">
  <div class="container">
           <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="LearningZone.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="bba.html">BBA</a>
          <a class="dropdown-item" href="bca.html">BCA</a>
          <a class="dropdown-item" href="bcs.html">B.SC(CS)</a>
          <a class="dropdown-item" href="mba.html">MBA</a>
          <a class="dropdown-item" href="mca.html">MCA</a>
          <a class="dropdown-item" href="mcs.html">M.SC(CS)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us.html">About-Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="contact.html">Contact</a>
      </li>
    </ul>
      <button class="btn btn-outline-success my-2 btn my-sm-0" type="submit"><a href="bba.html"><a href="LearningZone.php">GO TO HOME</a></button>
  </div>
</nav>
 </div>
</section>

<div class="container mt-5">
	<div class="row">
		<div class="col-sm-4 offset-4 divup ">
			<div height="40px" width="100px" class="divdown"><br>
				<h2 class="text-center text-dark font-weight-bold">SIGN UP</h2>
				<div class="container text-center">
					<form method="post">
						<input type="text" name="t1" class=" form-control text" placeholder="Name" required><br>
						<input type="text" name="t2" class=" form-control text" placeholder="Mobile" required><br>
						<input type="text" name="t3" class=" form-control text" placeholder="Email Address" required><br>
						<input type="password" name="t4" class=" form-control text " placeholder="Password" required><br>
						<input type='Submit' value='save' Name='b1' class=" form-control text">
               <p>Don't Have an Account? <a href="lzlogin.php">LOG IN</a></p>
                  <font color='Red'><?=$R;?></font>
					</form>
					
				</div>
				
			</div>
		</div>
		
	</div>
</div>

    <!-- Footer -->
    <div class="sec-5">
        <div class="container mt-5">
            <div class="row footer">
                 <div class="col-12 col-md-3 mt-5">
                    <img src="images/logo.png">
                    <p>A Prenier educational consultant<br>Institon focussion on providing<br>Quailty learning to univisty<br> Students aspiring for a bright<br>career</p>
                </div>
                 <div class="col-12 col-md-2">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">About Me</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2">
                    <h4>About-Us</h4>
                    <ul>
                        <li><a href="#">membership Login</a></li>
                        <li><a href="#">About Me</a></li>
                        <li><a href="#">Terms of condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-3">
                    <h4>Adress</h4>
                    <ul>
                        <li><a href="#">121 King SL Melboume vc</a></li>
                        <li><a href="#">250001 Meerut</a></li>
                        <li><a href="#">(India)</a></li>
                        <li><a href="#">M-9876543210 </a></li>
                        <li><a href="#">G-Nau@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2  follow ">
                    <h5 class="title ">Follow-Us</h5>
                    <img class="text-center mr-1" src="Images/insta.png">
                    <img class="text-center mr-1" src="Images/fb.png">
                    <img class="text-center mr-1" src="Images/wa.png">
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
    <!-- Copyright -->
    <section class="copy">
    <div class="container">
        <div class="row">
            <div class="col-12 follow">
                <h6 class="title">Copyright © 2021. LEARNING ZONE -Writter NAUSHAD SALMANEE & NISHI GARG .</h6>
            </div>
        </div>
    </div>
</section>
</body>
</html>