<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e59b510569.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <title>library management system</title>
  </head>
  <body>
  <div class=p-3>
  <div class="float-right">
  <i class="fab fa-youtube p-1" style="font-size:40px;color:#cd201f"></i>
   <i class="fab fa-facebook-square" style="font-size:40px;color:#4267B2"></i>
   <i class="fab fa-instagram p-1" style="font-size:40px;color:#e4405f"></i>
   <i class="fab fa-twitter-square" style="font-size:40px;color:#55acee"></i>
   </div>
  <div class="float-left">
    <img src="../images/logo.png" width=50px height=50px>
    </div>
    <h1>Library Management System</h1>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">MENU</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../gallery.php">Gallery</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-white" href="#">How it works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Plans</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="../about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Contact us</a>
      </li>
      </ul>
      <em>
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="#"><span style="font-size:23px";>welcome</span></a>
      </li>
     
      <li class="nav-item">
      <div style="margin:-14px 0px; font-size:23px";>
        <a class="nav-link text-white" href="profile.php"><img width="65px" height="65px" class="rounded-circle"
         src="<?php
                      include_once('../connection.php');
                     $res=mysqli_query($conn,"select photo from userinfo where email='$_SESSION[email]'");
                     while($row1=mysqli_fetch_array($res))
                        {$photo=$row1["photo"];}
        echo $photo;?>" /><?php echo"$_SESSION[email]";?></a>
    </div>
      </li>
      </div>
      </ul></em>
</nav>
<div class="container-fluid mt-3">
<a href="profile.php"><button type="button" class="btn btn-primary">PROFILE</button></a>
 <a href="user.php"><button type="button" class="btn btn-primary">UPDATE INFO</button></a>
 <a href="sbookinfo.php"><button type="button" class="btn btn-primary">BOOKS INFO</button></a>
 <a href="issuedbooks.php"><button type="button" class="btn btn-primary">ISSUED BOOKS</button></a>
 <a href="spass.php"><button type="button" class="btn btn-success">CHANGE PASSWORD</button></a>
<a href="slogout.php"><button type="button" class="btn btn-danger">LOGOUT</button></a>
</div>