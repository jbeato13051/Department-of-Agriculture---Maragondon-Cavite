<!--FORM MODAL-->
<div class="modal fade" id="restorerecyclebinreportdamage<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<form action="restore-report-damage-recyclebin-process.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'];?>">

<input type="hidden" name="RSBSA_Num" value="<?php echo $row['RSBSA_Number'];?>">
<input type="hidden" name="CategoryName" value="<?php echo $row['CategoryName'];?>">
<input type="hidden" name="ProductName" value="<?php echo $row['ProductName'];?>">
<input type="hidden" name="AreaDamage_hectares" value="<?php echo $row['AreaDamage_hectares'];?>">
<input type="hidden" name="GrossDamage_bag" value="<?php echo $row['GrossDamage_bag'];?>">
<input type="hidden" name="AverageWeightPerBag_kg" value="<?php echo $row['AverageWeightPerBag_kg'];?>">
<input type="hidden" name="PostingDate" value="<?php echo $row['PostingDate'];?>">
<input type="hidden" name="UpdationDate" value="<?php echo $row['UpdationDate'];?>">

<h3 class="text-center">Are you sure want to restore this data?</h3>

<br>

<div class="modal-footer">
<button class="btn btn-primary col-md-6 mb-10" type="submit" name="submit_backupdamage">Yes</button>
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