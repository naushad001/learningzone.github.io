<?php 
  $R="";
if(isset($_POST['b1']))
  {
    $s1=$_POST["t1"];
    $s2=$_POST["t2"];
    $s3=$_POST["t3"];
    $s4=$_POST["t4"];
    
    $X=mysqli_connect("localhost","root","","learningzone");
    $X->query("insert into info values('$s1','$s2','$s3','$s4')");
    $R="Data Save Successfully";    
    
     }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CONTACT-US LEARNING ZONE</title>


    <!------- bootstrap------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!------- bootstrap------->

    <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
    <script type="text/javascript" href="js/index.js" media="all"></script>
    <style type="text/css">
        .contact{
         background: #c7e5ff;
}
.contact-1{
          padding: 0px;
          margin-top: 80px; 

}
.contact-1 input{
             padding: 10px 20px;
    margin: 7px 40px;
    border-radius: 9px;
    width: 83%
          
}
.contact-1 textarea {
                    padding: 10px 20px 18px 20px;
                    margin: 7px 40px;
                    border-radius: 9px;
                    width: 83%
}


.contact-1 input[type=submit]{
         background: #0088ff;
         font-size: 20px;
         font-weight: 700;
          
}
.contact-2{
      padding: 0px ;
      margin: 30px 20px 0px 20px;
}

.contact-2 h3{
      padding: 0px ;
      font-size: 24px;
      font-weight: 700;
}
.contact-2 p{
      padding: 0px ;
      font-size: 18px;
      
}
.contact-2 a{
      padding: 0px ;
      font-size: 18px;
      
}
    </style>
</head>

<body class="contact">
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
          <a class="dropdown-item" href="bba.php">BBA</a>
          <a class="dropdown-item" href="bca.php">BCA</a>
          <a class="dropdown-item" href="bcs.php">B.SC(CS)</a>
          <a class="dropdown-item" href="mba.php">MBA</a>
          <a class="dropdown-item" href="mca.php">MCA</a>
          <a class="dropdown-item" href="mcs.php">M.SC(CS)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about-us.php">About-Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="contact.php">Contact</a>
      </li>
    </ul>
      <button class="btn btn-outline-success my-2 btn my-sm-0" type="submit"><a href="signup.php"><span><img src="images/user.png">SIGN UP</span></a></button>
  </div>
</nav>
 </div>
</section>
<!-- Map -->
<section class="maap">>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
          <img src="images/india.gif">
        </div>
         <div class="col-12 col-md-6" >
          <img src="images/01.png" style="width: 650px;margin-top: 45px;">
        </div>
    </div>
</div>
</section>

<div class="container contact-1">
    <div class="row">
        <div class="col-12 col-md-6 col-sm-12" >
           <div class="card ">
            <form method="post">
               <input type="text" name="t1" placeholder="Name" class="mt-5">
               <input type="text" name="t2" placeholder="Mobile Number">
               <input type="email" name="t3" placeholder="Email Address">
               <textarea  name="t4" placeholder="I want to know About"></textarea>
                <input  name="b1" type="submit" name="submit" >
            </form>
           </div> 
        </div>
        <div class="col-12 col-md-6 col-sm-12" >
            <img src="images/MAP.png" alt="Workplace" usemap="#workmap" width="550" height="430">
            <map name="planetmap">
              <area shape="rect" coords="0,0,82,126" alt="Workplace" href="sun.htm">
              <area shape="circle" coords="90,58,3" alt="Workplace" href="mercur.htm">
              <area shape="circle" coords="124,58,8" alt="Workplace" href="venus.htm">
            </map>

        </div>
    </div>
</div>

<!-- Contact -->
<div class="container mt-5 ">
    <div class="row">
       <div class="col-12 col-md-6 col-sm-12">
        <div class="card mt-2">
            <div class="contact-2">
               <h3>STUDENT CONTACT CENTER</h3> 
               <p>Mo-7669135433<br>
                G-naushadsalami0786@gmail.com
               </p>
           </div>
        </div>
        <div class="card mt-2">
            <div class="contact-2">
           <h3>FOR ANY MEDIA ENQUIRY</h3> 
           <p>G-naushadsalami0786@gmail.com
           </p>
       </div>
        </div>
        <div class="card mt-2">
            <div class="contact-2">
           <h3>FOR ANY BUSINESS ENQUIRY</h3> 
           <p>
            G-naushadsalami0786@gmail.com
           </p>
       </div>
        </div>
        <div class="card mt-2">
            <div class="contact-2">
           <h3>FOR ANY PRODUCT/WEBSITE BUGS ENQUIRY</h3> 
           <p>
            G-naushadsalami0786@gmail.com
           </p>
       </div>
        </div>
        <div class="card mt-2">
            <div class="contact-2">
           <h3>INDIA ENQUIRY</h3> 
           <p>
            G-naushadsalami0786@gmail.com
           </p>
       </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-sm-12">
         <div class="card mt-2">
            <div class="contact-2">
           <h3>HEADQUARTERS</h3> 
           <p>Learning zone, Meerut college meerut pincode 250001, india
            Mo-7669135433<br>
           </p>
       </div>
        </div>
        <div class="card mt-2">
            <div class="contact-2">
            <a href="#">Complaint Resolution</a>
        </div>
        </div>
        <div class="card mt-2">
            <div class="contact-2">
            <a href="#">Customer Care</a>
        </div>
        </div>
        <div class="card mt-2">
            <div class="contact-2">
            <a href="#">Support Center</a>
        </div>
        </div>
    </div> 
    </div>
</div>

    <!-- Footer -->
    <div class="sec-5 mt-5">
        <div class="container ">
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