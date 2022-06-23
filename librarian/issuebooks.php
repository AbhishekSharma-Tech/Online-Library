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
<center><h4 class="mt-3"><u>ISSUE BOOKS</u></h4></center>
<div class="container">
<div class="row justify-content-center">
<div class="card py-3 px-5 mb-3 col-s-12 col-md-9 ">
 <form class="" method="POST">
 <select class="form-control" name="aadhar" placeholder="aadhar no.">
    <?php
        $res=mysqli_query($conn,"select aadhar from userinfo");
        while($row=mysqli_fetch_array($res))
            {
                echo"<option>";
                echo $row["aadhar"];
                echo"</option>";
            }
    ?>
 <input type="submit" class="form-control btn-primary my-2" name="submit">
 <?php
    if(isset($_POST['submit']))
    {
        $res1=mysqli_query($conn,"select * from userinfo where aadhar='$_POST[aadhar]'");
        while($row1=mysqli_fetch_array($res1))
        {
            $firstname=$row1["firstname"];
            $middlename=$row1["middlename"];
            $lastname=$row1["lastname"];
            $phone=$row1["phone"];
            $email=$row1["email"];
            $aadhar=$row1["aadhar"];
            $_SESSION["aadhar"]=$aadhar;
        }
        ?>
        </div>
        <div class="card m-3 p-4 col-s-12 col-md-9 ">
        <input type="text" name="aadhar" class="form-control mt-2" value="<?php echo $aadhar;?>" id="" placeholder="aadhar" disabled>
        <input type="text" name="name" class="form-control mt-2" id="" value="<?php echo $firstname.' '.$middlename.' '.$lastname;?>" placeholder="name">
        <input type="text" name="phone" class="form-control mt-2" id="" value="<?php echo $phone;?>" placeholder="phone">
        <input type="text" name="email" class="form-control mt-2" id="" value="<?php echo $email;?>" placeholder="email">
        <input type="text" name="issuedate" class="form-control mt-2" id="" value="<?php echo date("d-m-y");?>"  placeholder="issue date">
        <input type="text" name="returndate" class="form-control mt-2" id="" value=""  placeholder="return date">
        <select class="form-control mt-2" name="book_name" placeholder="book_name"> 
    <?php
        $res=mysqli_query($conn,"select book_name from books");
        while($row=mysqli_fetch_array($res))
            {
                echo"<option>";
                echo $row["book_name"];
                echo"</option>";
            }
            ?>
         <input type="submit" name="submit1" class="form-control btn-primary mt-3" id="" value="issue book">
         <?php  
    }
    else{
       
    }
    ?>
    </form>
    </div></div></div>
    <?php
    if(isset($_POST["submit1"]))
{
 $query1 =   mysqli_query($conn,"INSERT INTO issued_books VALUES ('','$_SESSION[aadhar]','$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[issuedate]','$_POST[returndate]','$_POST[book_name]')");
 $query2 =  mysqli_query($conn,"update books set available_quantity=available_quantity-1 where book_name='$_POST[book_name]'");   
if ($query1&&$query2)
{
 echo"<script>alert('Books Issued Succesfully')</script>";
}
else{
  echo "<script>alert('Books Issued failed')</script>";
}
}
?>
<?php
include('../footer.php');
?>