<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../index.php');
}
include('sheader.php');
include_once('../connection.php');
?>
  <!--content-->
  <div class="container-fluid mt-3">
<div class="data">
<center><h4 class="mt-3"><u>UPDATE INFORMATION</u></h4></center>
<div class="row justify-content-center">
<div class="card py-3 px-5 mb-3 col-s-12 col-md-8">
	<form action="user.php" method="POST"enctype="multipart/form-data">
      <input type="number" class="form-control mt-2" name="phone" id="inputPhone" placeholder="phone" required>
    <input type="text" class="form-control mt-2" id="inputAddress2" name="taddress" placeholder="Temporary address" required>
    <input type="file" name="file" class="form-control mt-2" required>
 <center> <input type="submit" name="submit" class="btn btn-primary mt-2" value="UPDATE">
  <button type="reset" class="btn btn-primary mt-2">RESET</button></center>
</form>
</div>
</div>
</div>
</div>
<?php
if (isset($_POST['submit'])){
  $phone=$_POST['phone'];
  $taddress=$_POST['taddress'];
  $files=$_FILES['file'];
  $filename=$files['name'];
  $fileerror=$files['error'];
  $filetmp=$files['tmp_name'];
  $dst='../photo/'.$filename;
  move_uploaded_file($filetmp,$dst);
  $query=mysqli_query($conn,"UPDATE userinfo SET phone='$phone',taddress='$taddress',photo='$dst' WHERE email='$_SESSION[email]'");
  if ($query) {?>
    <script>
        alert("Record updated successfully");
        window.location="user.php";
    </script>
    <?php
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}
include('../footer.php')
?>