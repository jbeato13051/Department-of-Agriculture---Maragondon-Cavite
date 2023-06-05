<!--FORM MODAL-->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<img src="dist/img/da-logo.svg.png" class="avatar-img rounded-circle" style="max-width: 70px;align-items: left">
<h1 class="modal-title text-center" id="exampleModalCenterTitle">LOGIN FORM</h1>
<img src="dist/img/govph-logo.svg.png" class="avatar-img rounded-circle" style="max-width: 60px;align-items: right">
</div>

<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="php/check-login.php" method="post">

<?php if (isset($_GET['error'])) { ?>
<div class="alert alert-danger" role="alert">
<?=$_GET['error']?>
</div>
<?php } ?>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="UserType">User Type</label>
<select class="form-control custom-select border border-dark" name="UserType" id="UserType" required>
<option value="">Select User Type</option>
<option value="Admin">Admin</option>
<option value="Employee">Employee</option>
<option value="Farmers_aide">Farmers_aide</option>
</select>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="UserName">Username</label>
<input type="text" class="form-control border border-dark" placeholder="Enter username" name="UserName" id="UserName" autocomplete="on" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Password">Password</label>
<input type="password" class="form-control border border-dark" placeholder="Enter password" name="Password"  id="Password" required>
</div>
</div>

<br>

<button class="btn btn-primary col-md-12 mb-10" type="submit">Login</button>
<button type="button" class="btn btn-secondary col-md-12 mb-10" data-dismiss="modal">Close</button>

</form>
</div>
</div>
</div>

</div>
</div>
</div>
<!--END FORM MODAL-->
