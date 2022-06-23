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
  <center><h4 class="mt-3"><u>BOOKS INFORMATION</u></h4></center>
<div class="row justify-content-center">
<div class="card py-3 px-5 mb-3 col-s-12 col-md-9">
 <form class="" method="POST">
 <input type="text" class="form-control " name="t1" placeholder="Enter book name for search">
 <input type="submit" class="form-control btn-primary mt-2" name="submit" value="SEARCH">
 </form>
 </div>
 </div>
  <?php
  if(isset($_POST["submit"]))
  {
    $res=mysqli_query($conn,"select * from books where book_name like('%$_POST[t1]%')");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
    echo"<tr>";
    echo"<th>";echo"bookname";echo"</th>";
    echo"<th>";echo"image";echo"</th>";
    echo"<th>";echo"author";echo"</th>";
    echo"<th>";echo"publication";echo"</th>";
    echo"<th>";echo"purchase_date";echo"</th>";
    echo"<th>";echo"price";echo"</th>";
    echo"<th>";echo"quantity";echo"</th>";
    echo"<th>";echo"available_quantity";echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>";echo $row["book_name"];echo"</td>";
    echo"<td>";?><img src="<?php echo $row["book_image"];?>" height="100" width="100"><?php echo"</td>";
    echo"<td>";echo $row["author"];echo"</td>";
    echo"<td>";echo $row["publication"];echo"</td>";
    echo"<td>";echo $row["purchase_date"];echo"</td>";
    echo"<td>";echo $row["price"];echo"</td>";
    echo"<td>";echo $row["quantity"];echo"</td>";
    echo"<td>";echo $row["available_quantity"];echo"</td>";
    echo"</tr>";
    }
    echo"</table>";
    echo"</div>";
  }
  else{
    $res=mysqli_query($conn,"select * from books");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
    echo"<tr>";
    echo"<th>";echo"bookname";echo"</th>";
    echo"<th>";echo"image";echo"</th>";
    echo"<th>";echo"author";echo"</th>";
    echo"<th>";echo"publication";echo"</th>";
    echo"<th>";echo"purchase_date";echo"</th>";
    echo"<th>";echo"price";echo"</th>";
    echo"<th>";echo"quantity";echo"</th>";
    echo"<th>";echo"available_quantity";echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>";echo $row["book_name"];echo"</td>";
    echo"<td>";?><img src="<?php echo $row["book_image"];?>" height="100" width="100"><?php echo"</td>";
    echo"<td>";echo $row["author"];echo"</td>";
    echo"<td>";echo $row["publication"];echo"</td>";
    echo"<td>";echo $row["purchase_date"];echo"</td>";
    echo"<td>";echo $row["price"];echo"</td>";
    echo"<td>";echo $row["quantity"];echo"</td>";
    echo"<td>";echo $row["available_quantity"];echo"</td>";
    echo"</tr>";
    }
    echo"</table>";
    echo"</div>";
  }
  ?>
  </div>
<?php
include('../footer.php')
?>




