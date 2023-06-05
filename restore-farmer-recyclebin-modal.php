<!--FORM MODAL-->
<div class="modal fade" id="restorerecyclebinfarmer<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<form action="restore-farmer-recyclebin-process.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'];?>">

<input type="hidden" name="RSBSA_Num" value="<?php echo $row['RSBSA_Number'];?>">
<input type="hidden" name="AreaOfField" value="<?php echo $row['AreaOfField'];?>">
<input type="hidden" name="FirstName" value="<?php echo $row['FirstName'];?>">
<input type="hidden" name="MiddleName" value="<?php echo $row['MiddleName'];?>">
<input type="hidden" name="LastName" value="<?php echo $row['LastName'];?>">
<input type="hidden" name="SuffixName" value="<?php echo $row['SuffixName'];?>">
<input type="hidden" name="Sex" value="<?php echo $row['Sex'];?>">
<input type="hidden" name="Birthdate" value="<?php echo $row['Birthdate'];?>">
<input type="hidden" name="MaritalStatus" value="<?php echo $row['MaritalStatus'];?>">
<input type="hidden" name="Address" value="<?php echo $row['Address'];?>">
<input type="hidden" name="MobileNumber" value="<?php echo $row['MobileNumber'];?>">
<input type="hidden" name="Email" value="<?php echo $row['Email'];?>">
<input type="hidden" name="PostingDate" value="<?php echo $row['PostingDate'];?>">
<input type="hidden" name="UpdationDate" value="<?php echo $row['UpdationDate'];?>">

<h3 class="text-center">Are you sure want to restore this data?</h3>

<br>

<div class="modal-footer">
<button class="btn btn-primary col-md-6 mb-10" type="submit" name="submit_backupfarmers">Yes</button>
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