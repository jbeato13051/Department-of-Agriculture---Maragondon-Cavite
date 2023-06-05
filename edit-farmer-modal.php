<!--FORM MODAL-->
<div class="modal fade" id="editfarmer<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle"><span class="pg-title-icon"><span class="feather-icon"></span>
<i class="ion ion-ios-person" style="color: black"></i> </span>Edit Farmer</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="edit-farmer-process.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'];?>">  

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="RSBSA_Number">RSBSA Number</label>
<input type="number" class="form-control border border-dark" value="<?php echo $row['RSBSA_Number'];?>" placeholder="Enter RSBSA number" name="RSBSA_Number" id="RSBSA_Number" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="AreaOfField">Area of Field(ha)</label>
<input type="number" class="form-control border border-dark" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" title="Please enter on number or number with up to 2 decimal places only" value="<?php echo $row['AreaOfField'];?>" placeholder="Enter area of field(hectare/s)" name="AreaOfField"  id="AreaOfField" required>
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
<label for="MiddleName">Middle Name(Optional)</label>
<input type="text" class="form-control border border-dark" value="<?php echo $row['MiddleName'];?>" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter middle name" name="MiddleName" id="MiddleName">
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
<label for="SuffixName">Suffix Name(Optional)</label>
<input type="text" class="form-control border border-dark" value="<?php echo $row['SuffixName'];?>" pattern="^[a-zA-z\s\.]+$" title="Please enter on alphabets and dot symbol only" placeholder="Enter suffix name" name="SuffixName" id="SuffixName">
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Sex">Sex</label>
<select class="form-control custom-select border border-dark" name="Sex" id="Sex" required>
<option value="<?php echo $row['Sex'];?>" ><?php echo $Sex=$row['Sex'];?></option>
<?php
$ret=mysqli_query($con,"SELECT Sex FROM tblselectsex");
while($asd=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $asd['Sex'];?>"><?php echo $asd['Sex'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Birthdate">Birth Date</label>
<input type="date" class="form-control border border-dark" value="<?php echo $row['Birthdate'];?>" name="Birthdate" id="Birthdate" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="MaritalStatus">Marital Status</label>
<select class="form-control custom-select border border-dark" name="MaritalStatus" id="MaritalStatus" required>
<option value="<?php echo $row['MaritalStatus'];?>"><?php echo $row['MaritalStatus'];?></option>
<?php
$ret=mysqli_query($con,"SELECT MaritalStatus FROM tblselectmaritalstatus");
while($asd=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $asd['MaritalStatus'];?>"><?php echo $asd['MaritalStatus'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Address">Address</label>
<input type="text" class="form-control border border-dark" value="<?php echo $row['Address'];?>" placeholder="Enter complete address" name="Address" id="Address" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="MobileNumber">Mobile Number</label>
<input type="text" class="form-control border border-dark" pattern="[0-9]{11}" title="Please enter exactly 11 digits number only" placeholder="09##-####-###" value="<?php echo $row['MobileNumber'];?>" name="MobileNumber" id="MobileNumber" required>
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
<label for="PostingDate">Date Registered</label>
<input type="date" class="form-control border border-dark" value="<?php echo $row['PostingDate'];?>" name="PostingDate" id="PostingDate" required>
</div>
</div>

<br>

<button class="btn btn-primary col-md-12 mb-10" type="submit" name="update">Update</button>
<button type="button" class="btn btn-secondary col-md-12 mb-10" data-dismiss="modal">Close</button>

</form>
</div>
</div>
</div>

</div>
</div>
</div>
<!--END FORM MODAL-->