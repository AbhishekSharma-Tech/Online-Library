<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e59b510569.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>library management system</title>
    <style>
    body {
      background-color: #FFDEE9;
      background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
    }
    h1{
      background: -webkit-linear-gradient(#eee, #333);
     -webkit-background-clip: text;
     -webkit-text-fill-color: transparent;
    }
    </style>
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
    <span class="navbar-toggler-icon"></span>
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
        <a class="nav-link text-white" href="#">How it Works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Plans</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Contact us</a>
      </li>
      </ul>
</nav>
<div class="container-fluid p-3">
  <a href="librarian.php"><button type="button" class="btn btn-primary">ADD BOOKS</button></a>  
  <a href="issuebooks.php"><button type="button" class="btn btn-primary">ISSUE BOOKS</button></a>
  <a href="returnbook.php"><button type="button" class="btn btn-primary">RETURN BOOKS</button></a>
  <a href="booksinfo.php"><button type="button" class="btn btn-primary">BOOKS INFO</button></a>
<a href="lsinfo.php"><button type="button" class="btn btn-primary">USER DATA</button></a>
<a href="lpass.php"><button type="button" class="btn btn-success">Change Password</button></a>
<a href="../users/slogout.php"><button type="button" class="btn btn-danger">LogOut</button></a>
</div>