<!--FORM MODAL-->
<div class="modal fade" id="addreportdamaged" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle"><span class="pg-title-icon"><span class="feather-icon"></span>
<i class="ion ion-ios-list-box" style="color: black"></i> </span>Add Report Damaged Product</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="add-report-damaged-process.php" method="POST">

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="RSBSA_Number">RSBSA No.</label>
 <select class="form-control custom-select border border-dark" name="RSBSA_Number" id="RSBSA_Number" required>
<option value="">Select RSBSA No.</option>
<?php
$ret=mysqli_query($con,"SELECT RSBSA_Number FROM tblfarmer");
while($asd=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $asd['RSBSA_Number'];?>"><?php echo $asd['RSBSA_Number'];?></option>
<?php } ?>
</select>
</div>
</div>
                                       
<div class="form-row">
<div class="col-md-12 mb-10">
<label for="CategoryName">Category</label>
<select class="form-control custom-select border border-dark" name="CategoryName" id="CategoryName" required>
<option value="">Select Category</option>
<?php
$ret=mysqli_query($con,"SELECT CategoryName FROM tblcategory");
while($qwe=mysqli_fetch_array($ret))
{?>
<option value="<?php echo $qwe['CategoryName'];?>"><?php echo $qwe['CategoryName'];?></option>
<?php } ?>
</select>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="ProductName">Product</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter product name" name="ProductName" id="ProductName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="AreaDamage_hectares">Area Damaged(ha)</label>
<input type="number" class="form-control border border-dark" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" title="Please enter on number or number with up to 2 decimal places only" placeholder="Enter area damaged(hectare/s)" name="AreaDamage_hectares" id="AreaDamage_hectares" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="GrossDamage_bag">Gross Damaged(bag)</label>
<input type="number" class="form-control border border-dark" placeholder="Enter gross harvest(bag/s)" name="GrossDamage_bag" id="GrossDamage_bag" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="AverageWeightPerBag_kg">Average Weight Per Bag(kg)</label>
<input type="number" class="form-control border border-dark" placeholder="Enter average weight per bag(kg)" name="AverageWeightPerBag_kg" id="AverageWeightPerBag_kg" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="PostingDate">Posting Date</label>
<input type="date" class="form-control border border-dark" name="PostingDate" id="PostingDate" required>
</div>
</div>

<br>

<button class="btn btn-primary col-md-12 mb-10" type="submit" name="submit" id="submit">Submit</button>
<button type="button" class="btn btn-secondary col-md-12 mb-10" data-dismiss="modal">Close</button>

</form>
</div>
</div>
</div>

</div>
</div>
</div>
<!--END FORM MODAL-->