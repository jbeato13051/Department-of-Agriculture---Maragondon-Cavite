<!--FORM MODAL-->
<div class="modal fade" id="deleterecyclebinfarmer<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<form action="delete-farmer-recyclebin-process.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'];?>">  

<h3 class="text-center">Are you sure want to permanently delete this data?</h3>

<br>

<div class="modal-footer">
<button class="btn btn-danger col-md-6 mb-10" type="submit" name="delby1">Yes</button>
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