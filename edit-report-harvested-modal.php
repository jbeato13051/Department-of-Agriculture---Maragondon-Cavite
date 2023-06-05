<!--FORM MODAL-->
<div class="modal fade" id="editreportharvested<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle">
<i class="ion ion-ios-list-box" style="color: black"></i> Edit Report Harvested Product</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="edit-report-harvested-process.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id'];?>">  

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="RSBSA_Number">RSBSA No.</label>
 <select class="form-control custom-select border border-dark" name="RSBSA_Number" id="RSBSA_Number" required>
<option value="<?php echo $row['RSBSA_Number'];?>"><?php echo $RSBSA_Number=$row['RSBSA_Number'];?></option>
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
<option value="<?php echo $row['CategoryName'];?>"><?php echo $CategoryName=$row['CategoryName'];?></option>
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
<input type="text" class="form-control border border-dark" value="<?php echo $row['ProductName'];?>" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter product name" name="ProductName" id="ProductName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="AreaHarvested_hectares">Area Harvested(ha)</label>
<input type="number" class="form-control border border-dark" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" title="Please enter on number or number with up to 2 decimal places only" value="<?php echo $row['AreaHarvested_hectares'];?>" placeholder="Enter area harvested(hectare/s)" name="AreaHarvested_hectares" id="AreaHarvested_hectares" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="GrossHarvest_bag">Gross Harvest(bag)</label>
<input type="number" class="form-control border border-dark" value="<?php echo $row['GrossHarvest_bag'];?>" placeholder="Enter gross harvest(bag/s)" name=" GrossHarvest_bag" id=" GrossHarvest_bag" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="AverageWeightPerBag_kg">Average Weight Per Bag(kg)</label>
<input type="number" class="form-control border border-dark" value="<?php echo $row['AverageWeightPerBag_kg'];?>" placeholder="Enter average weight per bag(kg)" name="AverageWeightPerBag_kg" id="AverageWeightPerBag_kg" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="PostingDate">Posting Date</label>
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