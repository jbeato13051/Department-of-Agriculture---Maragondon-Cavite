<!--FORM MODAL-->
<div class="modal fade" id="edituser<?php echo $row['ID'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle"><span class="pg-title-icon"><span class="feather-icon"></span>
<i class="ion ion-ios-person" style="color: black"></i> </span>Edit User</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="edit-user-process.php" method="POST">
                                       
<input type="hidden" name="ID" value="<?php echo $row['ID'];?>">
                                       
<div class="form-row">
<div class="col-md-12 mb-10">
<label for="UserType">User Type</label>
<select class="form-control custom-select border border-dark" name="UserType" id="UserType" required>
<option value="<?php echo $row['UserType'];?>"><?php echo $UserType=$row['UserType'];?></option>
<?php
$ret=mysqli_query($con,"SELECT UserType FROM tblselectusertype");
while($asd=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $asd['UserType'];?>"><?php echo $asd['UserType'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="UserName">Username</label>
<input type="text" class="form-control border border-dark" value="<?php echo $row['UserName'];?>" pattern=".{8,}" title="Must contain at least 8 or more characters" placeholder="Enter username" name="UserName" id="UserName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Password">Password</label>
<input type="password" class="form-control border border-dark" value="<?php echo $row['Password'];?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password" name="Password" id="Password1" required><input type="checkbox" onclick="myFunction1()">Show Password
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="FirstName">First Name</label>
<input type="text" class="form-control border border-dark" value="<?php echo $row['FirstName'];?>" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter first name" name="FirstName" id="FirstName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="LastName">Last Name</label>
<input type="text" class="form-control border border-dark" value="<?php echo $row['LastName'];?>" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter last name" name="LastName" id="LastName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="MobileNumber">Mobile Number</label>
<input type="text" class="form-control border border-dark" value="<?php echo $row['MobileNumber'];?>" pattern="[0-9]{11}" title="Please enter exactly 11 digits numbr only" placeholder="09##-####-###" name="MobileNumber" id="MobileNumber" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Email">Email</label>
<input type="email" class="form-control border border-dark" value="<?php echo $row['Email'];?>" placeholder="name@domain.com" name="Email" id="Email" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Regdate">Date Registered</label>
<input type="date" class="form-control border border-dark" value="<?php echo $row['Regdate'];?>" name="Regdate" id="Regdate" required>
</div>
</div>

<br>

<button class="btn btn-primary col-md-12 mb-10" type="submit" name="update" id="submit">Update</button>
<button type="button" class="btn btn-secondary col-md-12 mb-10" data-dismiss="modal">Close</button>

</form>
</div>
</div>
</div>

</div>
</div>
</div>
<!--END FORM MODAL-->
<script type="text/javascript">
      function myFunction1() {
        var x = document.getElementById("Password1");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
</script>