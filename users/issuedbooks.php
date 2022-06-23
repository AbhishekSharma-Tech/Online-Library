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
<div class="data px-5 ">
<center><h4 class="mt-3"><u>ISSUED BOOKS</u></h4></center>
 <table class='table table-hover table-dark'>
 <tr>
 <th>Book Name</th>
 <th>Issue date</th>
 <th>return date</th>
 </tr>
 <?php
  $res=mysqli_query($conn,"select * from issued_books where email='$_SESSION[email]'");
  while ($row=mysqli_fetch_array($res))
  {
   echo"<tr>";
   echo"<td>";echo $row["book_name"]; echo"</td>";
   echo"<td>";echo $row["issue_date"];echo"</td>";
   echo"<td>";echo $row["return_date"];echo"</td>";
   echo"</tr>";
  }
 ?>
 </table>
 </div>
 </div>
<?php
include('../footer.php');
?>