<?php
include_once("../connection.php");
$a=date("d-m-y");
$id=$_GET["id"];
$res=mysqli_query($conn,"update issued_books set return_date='$a' where id=$id");
$book_name="";
$res=mysqli_query($conn,"select * from issued_books where id=$id");
while($row=mysqli_fetch_array($res))
{
    $book_name=$row["book_name"];
}
mysqli_query($conn,"update books set available_quantity=available_quantity+1 where book_name='$book_name'");
?>
<script>
alert("book returned");
window.location="returnbook.php";
</script>
