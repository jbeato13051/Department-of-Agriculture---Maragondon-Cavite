<!--FORM MODAL-->
<div class="modal fade" id="viewuser<?php echo $row['ID'];?>" tabindex="-1" role="dialog" aria-labelledby="addcategory_ModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title" id="addcategory_ModalCenterTitle"><span class="pg-title-icon"><span class="feather-icon"></span>
<i class="ion ion-ios-person" style="color: black"></i> </span>View User Details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="view-user-process.php" method="post">

<input type="hidden" name="ID" value="<?php echo $row['ID'];?>">  

<div class="form-row">
<div class="col-md-6 mb-10">
<label>Role: </label>
</div>
<div class="col-md-6 mb-10">
<p><?php echo $row['UserType'];?></p>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label>First Name: </label>
</div>
<div class="col-md-6 mb-10">
<p><?php echo $row['FirstName'];?></p>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label>Last Name: </label>
</div>
<div class="col-md-6 mb-10">
<p><?php echo $row['LastName'];?></p>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label>Email: </label>
</div>
<div class="col-md-6 mb-10">
<p><?php echo $row['Email'];?></p>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label>Mobile Number: </label>
</div>
<div class="col-md-6 mb-10">
<p><?php echo $row['MobileNumber'];?></p>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label>Reg. date: </label>
</div>
<div class="col-md-6 mb-10">
<p><?php echo $row['Regdate'];?></p>
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label>Last Update: </label>
</div>
<div class="col-md-6 mb-10">
<p><?php echo $row['UpdationDate'];?></p>
</div>
</div>

</form>
</div>
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
<!--END FORM MODAL-->