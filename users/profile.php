<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:../index.php');
}
include('sheader.php');
include('../connection.php');
?>
  <!--content-->
  <div class="container-fluid mt-3">
<center><h4 class="mt-3"><u>PROFILE</u></h4></center>
<?php
 $res1=mysqli_query($conn,"select * from userinfo where email='$_SESSION[email]'");
        while($row1=mysqli_fetch_array($res1))
        {
            $firstname=$row1["firstname"];
            $middlename=$row1["middlename"];
            $lastname=$row1["lastname"];
            $phone=$row1["phone"];
            $email=$row1["email"];
            $aadhar=$row1["aadhar"];
            $_SESSION["aadhar"]=$aadhar;
            $birth = $row1['birth'];
            $blood = $row1['blood'];
            $gender = $row1['gender'];
            $nationality = $row1['nationality'];
            $city =$row1['city'];
            $state = $row1['state'];
            $pin = $row1['pin'];
            $paddress = $row1['paddress'];
            $taddress = $row1['taddress'];
            $photo=$row1["photo"];
        }
        ?>
        <div class="row justify-content-center m-3">
        <div class="card col-7 mx-3">
                            <div class="row">
                                <div class="col-12 pt-2">
         <center><img width="150px" height="150px" class="rounded-circle" src="<?php echo $photo;?>" /> </center>
         </div>  </div>  
         <hr>  
         <div class="row">
         <label for name="Full Name" class="col-sm-2 col-form-label labels">Full Name</label>
       <div class=col-sm-10>
        <input type="text" name="name" class="form-control" id="" value="<?php echo $firstname.' '.$middlename.' '.$lastname;?>" disabled>
   </div>
   <label for Phone="Phone" class="col-sm-2 col-form-label labels">Phone</label>
       <div class=col-sm-10>
        <input type="text" name="phone" class="form-control mt-2" id="" value="<?php echo $phone;?>" disabled>
      </div>
        <label for email="Email" class="col-sm-2 col-form-label labels">Email</label>
       <div class=col-sm-10>
        <input type="text" name="email" class="form-control mt-2" id="" value="<?php echo $email;?>" disabled>
        </div>
        <label for aadhar="Aadhar" class="col-sm-2 col-form-label labels">Aadhar</label>
       <div class=col-sm-10>
        <input type="text" name="aadhar" class="form-control mt-2" value="<?php echo $aadhar;?>" id="" disabled>
        </div>
        <label for birth="birth" class="col-sm-2 col-form-label labels">Birth</label>
       <div class=col-sm-10>
        <input type="text" name="birth" class="form-control mt-2" id="" value="<?php echo $birth;?>" disabled>
        </div>
        <label for blood="blood" class="col-sm-2 col-form-label labels">Blood</label>
       <div class=col-sm-10>
        <input type="text" name="blood" class="form-control mt-2" id="" value="<?php echo $blood;?>" disabled>
        </div>
        <label for gender="gender" class="col-sm-2 col-form-label labels">Gender</label>
       <div class=col-sm-10>
        <input type="text" name="gender" class="form-control mt-2" id="" value="<?php echo $gender;?>" disabled>
        </div>
        <label for nationality="Nationality" class="col-sm-2 col-form-label labels">Nationality</label>
       <div class=col-sm-10>
        <input type="text" name="nationality" class="form-control mt-2" id="" value="<?php echo $nationality;?>" disabled>
        </div>
        <label for city="city" class="col-sm-2 col-form-label labels">City</label>
       <div class=col-sm-10>
        <input type="text" name="city" class="form-control mt-2" id="" value="<?php echo $city;?>" disabled>
        </div>
        <label for state="state" class="col-sm-2 col-form-label labels">State</label>
       <div class=col-sm-10>
        <input type="text" name="state" class="form-control mt-2" id="" value="<?php echo $state;?>"  disabled>
        </div>
        <label for name="pin" class="col-sm-2 col-form-label labels">Pincode</label>
       <div class=col-sm-10>
        <input type="text" name="pin" class="form-control mt-2" id="" value="<?php echo $pin;?>" disabled>
        </div>
        <label for address="Address" class="col-sm-2 col-form-label labels">Address</label>
        <div class=col-sm-10>
        <textarea name="address" class="form-control mt-2" id="" value="" disabled><?php echo $paddress;?></textarea>
        </div>  
</div>
</div>
                  <!--notifications-->
                <div class="card col-4">
<center><h5 class=pt-4>Notifications</h5></center>
<hr>
<?php
 $query=mysqli_query($conn,"SELECT * FROM message WHERE aadhar=$_SESSION[aadhar]");
while($row=mysqli_fetch_array($query)){
$title=$row['title'];
$messages=$row['messages'];
?>
<ul><a href='' onclick="this.innerHTML='<?php echo $messages;?>'"><li><?php echo $title;?></li></a></ul>
<?php
} 
?>
</div>
</div>
</div>
<?php
include('../footer.php')
?>