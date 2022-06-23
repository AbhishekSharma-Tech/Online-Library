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
<center><h4 class="mt-3"><u>CHANGE PASSWORD</u></h4></center>
<div class="row justify-content-center">
<div class="card py-3 px-5 mb-3 col-s-12 col-md-8">
	<form action="#" method="POST">
    <input type="password" class="form-control mt-2" name="oldpassword"  placeholder="old password" required>
    <input type="password" class="form-control mt-2" name="newpassword" placeholder="new password" required>
    <input type="password" class="form-control mt-2" name="confirmpassword" placeholder="confirm password" required>
 <center> <input type="submit" name="submit" class="btn btn-primary mt-2" value="UPDATE">
  <button type="reset" class="btn btn-primary mt-2">RESET</button></center>
</form>
</div>
</div>
</div>
</div>
<?php
if (isset($_POST['submit'])){
  $oldpassword=$_POST['oldpassword'];
  $newpassword=$_POST['newpassword'];
  $confirmpassword=$_POST['confirmpassword'];
  if ($confirmpassword==$newpassword){
  $query=mysqli_query($conn,"SELECT password from userinfo WHERE email='$_SESSION[email]'");
  while ($row=mysqli_fetch_array($query)){
  $password=$row['password'];
  }
  if($oldpassword=$password){
  $query1=mysqli_query($conn,"UPDATE userinfo SET password='$newpassword' WHERE email='$_SESSION[email]'");
  if ($query1) {?>
    <script>
        alert("Password changed successfully");
        window.location="slogout.php";
    </script>
    <?php
} else {
    echo "Error updating record: " . mysqli_error($conn);
}}
}
else{
  echo "<script>alert('please enter same password')</script>";
}
}
include('../footer.php')
?>