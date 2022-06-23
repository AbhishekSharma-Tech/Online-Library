<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../index.php');
}
include('lheader.php');
include_once('../connection.php');
?>
  <!--content-->
  <center><h4 class="mt-3"><u>RETURN BOOK</u></h4></center>
<div class="container">
<div class="row justify-content-center">
<div class="card py-3 px-5 mb-3 col-12 ">
 <form class="" method="POST">
 <select class="form-control" name="aadhar" placeholder="aadhar no.">
    <?php
        $res=mysqli_query($conn,"select aadhar from issued_books where return_date=''");
        while($row=mysqli_fetch_array($res))
            {
                echo"<option>";
                echo $row["aadhar"];
                echo"</option>";
            }
    ?>
 <input type="submit" class="form-control btn-primary" name="submit">
 </form>
 </div>
 <?php
    if(isset($_POST['submit']))
    {
     echo" <div class='card py-3 px-5 mb-3 col-12'>";
      $res1=mysqli_query($conn,"select * from issued_books where aadhar='$_POST[aadhar]' and return_date=''");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
        echo "<tr>";
        echo "<th>";echo"name";echo "</th>";
        echo "<th>";echo"aadhar";echo "</th>";
        echo "<th>";echo"phone";echo "</th>";
        echo "<th>";echo"email";echo "</th>";
        echo "<th>";echo"bookname";echo "</th>";
        echo "<th>";echo"issuedate";echo "</th>";
        echo "<th>";echo"RETURN";echo "</th>"; 
        echo "<th>";echo"MESSAGE";echo "</th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($res1))
        {
        echo"<tr>";
        echo"<td>";echo $row["name"];echo"</td>";
        echo"<td>";echo $row["aadhar"];echo"</td>";
        echo"<td>";echo $row["phone"];echo"</td>";
        echo"<td>";echo $row["email"];echo"</td>";
        echo"<td>";echo $row["book_name"];echo"</td>";
        echo"<td>";echo $row["issue_date"];echo"</td>";
        echo"<td>";?> <a href="return.php?id=<?php echo $row["id"]; ?> ">return</a><?php echo"</td>";
        echo"<td>";?> <a href="msg.php?id=<?php echo $row["id"]; ?> ">message</a><?php echo"</td>";
        echo"</tr>";
        }
        echo"</table>";
        echo "</div>";
        echo "</div>";
    }
        ?>
</div></div>
<?php
include('../footer.php');
?>