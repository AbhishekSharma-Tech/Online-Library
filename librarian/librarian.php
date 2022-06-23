<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../index.php');
}
include('lheader.php')
?><!--content-->
<center><h4 class="m-3"><u>ADD BOOKS</u></h4></center>
<div class="container">
<div class="row justify-content-center my-5">
<div class="card p-5 col-s-12 col-md-9 ">
<form method="post" class="justify-content-center" enctype="multipart/form-data" >
<input type="text" name="name" class="form-control m-2" id="" placeholder="Book_Name" required>
<input type="file" name="file" class="form-control m-2">
<input type="text" name="author" class="form-control m-2" id="" placeholder="Author" required>
<input type="text" name="publication" class="form-control m-2" id="" placeholder="Publication" required>
<input type="date" name="date" class="form-control m-2" id="" placeholder="Purchase_Date" required>
<input type="text" name="price" class="form-control m-2" id="" placeholder="Price" required>
<input type="text" name="qty" class="form-control m-2" id="" placeholder="Quantity" required>
<input type="text" name="aqty" class="form-control m-2" id="" placeholder="Available_Quantity" required>
<center><button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
<button type="reset" name="reset" class="btn btn-primary mt-3">Reset</button></center>
</form>
</div>
</div>
</div>
<?php
include_once('../connection.php');
if(isset($_POST['submit']))
  { 
    $files=$_FILES['file'];
    $filename=$files['name'];
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
    $dst='../books_image/'.$filename;
    move_uploaded_file($filetmp,$dst);
  $query=mysqli_query($conn,"insert into books values ('','$_POST[name]','$dst','$_POST[author]','$_POST[publication]','$_POST[date]','$_POST[price]','$_POST[qty]','$_POST[aqty]')");
  if($query){  
  echo"<script>alert('Book Inserted Successfully')</script>";
  }
  else
  {
    echo'<script>alert("Insertion Failed")</script>';
  }
}
?><?php
include('../footer.php');
?>