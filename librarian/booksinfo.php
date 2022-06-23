<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../index.php');
}
include('lheader.php')
?>
<center><h4 class="mt-3"><u>BOOKS INFORMATION</u></h4></center>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="card py-3 mb-3 col-s-12 col-md-9 ">
 <form class="" method="POST">
 <input type="text" class="form-control" name="t1" placeholder="Enter book name for search">
 <input type="submit" class="form-control btn-primary" name="submit">
 </form>
</div>
<div class="m-3">
  <?php
  if(isset($_POST["submit"]))
  {
    include_once('../connection.php');
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
    include_once('../connection.php');
    $res=mysqli_query($conn,"select * from books");
    echo"<div class='table-responsive'>";
    echo"<table class='table table-hover table-dark'>";
    echo"<tr>";
    echo"<th>";echo"Book_Name";echo"</th>";
    echo"<th>";echo"Image";echo"</th>";
    echo"<th>";echo"Author";echo"</th>";
    echo"<th>";echo"Publication";echo"</th>";   
    echo"<th>";echo"Purchase_Date";echo"</th>";
    echo"<th>";echo"Price";echo"</th>";
    echo"<th>";echo"Quantity";echo"</th>";
    echo"<th>";echo"Available_Quantity";echo"</th>";
    echo"<th>";echo"DELETE BOOK";echo"</th>";
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
    echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deletebook.php?id=".$row["id"]."'>delete</a></td>"; 
    echo"</tr>";
  }
    echo"</table>";
    echo"</div>";
  }
  ?>
  </div></div></div>
<?php
include('../footer.php');
?>