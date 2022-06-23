<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../index.php');
}
include('lheader.php');
include('../connection.php');
?>
<h3>message</h3>
<form class=col-6 method="post">
<input type="text" class="form-control" name="title" placeholder="title">
<textarea class="form-control" name="message" placeholder="message"></textarea>
<input type="submit" class="form-control bg-primary" name="submit" value="send">  
</form>
<?php
 if(isset($_POST['submit']))
 {
  $id=$_GET["id"];
 $query= mysqli_query($conn,"select aadhar from issued_books where id=$id");
 $row=mysqli_fetch_array($query);
 $aadhar=$row['aadhar'];
 $title=$_POST['title'];
 $message=$_POST['message'];
 $query1=mysqli_query($conn,"INSERT INTO message VALUES('','$aadhar','$title','$message','n')");
 if($query1){
   echo"<script>alert('message sent');
   window.location='returnbook.php';</script>";
 }
 else{
  echo"<script>alert('message sent failed');
  window.location='returnbook.php';</script>";
 }
 }
include('../footer.php');
?>