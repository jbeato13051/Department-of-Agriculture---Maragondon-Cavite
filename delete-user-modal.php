<!--FORM MODAL-->
<div class="modal fade" id="deleteuser<?php echo $row['ID'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="delete-user-process.php" method="post">

<input type="hidden" name="ID" value="<?php echo $row['ID'];?>">
<input type="hidden" name="UserType" value="<?php echo $row['UserType'];?>">
<input type="hidden" name="UserName" value="<?php echo $row['UserName'];?>">
<input type="hidden" name="Password" value="<?php echo $row['Password'];?>">
<input type="hidden" name="FirstName" value="<?php echo $row['FirstName'];?>">
<input type="hidden" name="LastName" value="<?php echo $row['LastName'];?>">  
<input type="hidden" name="MobileNumber" value="<?php echo $row['MobileNumber'];?>">
<input type="hidden" name="Email" value="<?php echo $row['Email'];?>">
<input type="hidden" name="Regdate" value="<?php echo $row['Regdate'];?>">
<input type="hidden" name="UpdationDate" value="<?php echo $row['UpdationDate'];?>">

<h3 class="text-center">Are you sure want to delete?</h3>

<br>

<div class="modal-footer">
<button class="btn btn-danger col-md-6 mb-10" type="submit" name="del">Yes</button>
<button type="button" class="btn btn-secondary col-md-6 mb-10" data-dismiss="modal">Cancel</button>
</div>

</form>
</div>
</div>
</div>

</div>
</div>
</div>
<!--END FORM MODAL-->