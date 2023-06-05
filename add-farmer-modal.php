<!--FORM MODAL-->
<div class="modal fade" id="addfarmer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle">
<i class="ion ion-ios-person" style="color: black"></i> Add Farmer</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="add-farmer-process.php" method="POST">

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="RSBSA">RSBSA Number</label>
<input type="number" class="form-control border border-dark" placeholder="Enter RSBSA number" name="RSBSA" id="RSBSA" autofocus required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="AreaOfField">Area of Field(ha)</label>
<input type="number" class="form-control border border-dark" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" title="Please enter on number or number with up to 2 decimal places only" placeholder="Enter area of field(hectare/s)" name="AreaOfField"  id="AreaOfField" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="FirstName">First Name</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter first name" name="FirstName" id="FirstName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="MiddleName">Middle Name(Optional)</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter middle name" name="MiddleName" id="MiddleName">
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="LastName">Last Name</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter last name" name="LastName" id="LastName" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="SuffixName">Suffix Name(Optional)</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s\.]+$" title="Please enter on alphabets and dot symbol only" placeholder="Enter suffix name" name="SuffixName" id="SuffixName">
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Sex">Sex</label>
<select class="form-control custom-select border border-dark" name="Sex" id="Sex" required>
<option value="">Select Sex</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Birthdate">Birth Date</label>
<input type="date" class="form-control border border-dark" name="Birthdate" id="Birthdate" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="MaritalStatus">Marital Status</label>
<select class="form-control custom-select border border-dark" name="MaritalStatus" id="MaritalStatus" required>
<option value="">Select Marital Status</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Widowed">Widowed</option>
<option value="Divorce">Divorce</option>
</select>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Address">Address</label>
<input type="text" class="form-control border border-dark" placeholder="Enter complete address" name="Address" id="Address" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="MobileNumber">Mobile Number</label>
<input type="text" class="form-control border border-dark" pattern="[0-9]{11}" title="Please enter exactly 11 digits number only" placeholder="09##-####-###" name="MobileNumber" id="MobileNumber" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Email">Email</label>
<input type="email" class="form-control border border-dark" placeholder="name@domain.com" name="Email" id="Email" required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="PostingDate">Date Registered</label>
<input type="date" class="form-control border border-dark" name="PostingDate" id="PostingDate" required>
</div>
</div>

<br>

<button class="btn btn-primary col-md-12 mb-10" type="submit" name="submit_farmer" id="submit_farmer">Submit</button>
<button type="button" class="btn btn-secondary col-md-12 mb-10" data-dismiss="modal">Close</button>

</form>
</div>
</div>
</div>

</div>
</div>
</div>
<!--END FORM MODAL-->
<script>
        $(function(){
            var validation_el = $('<div>')
                validation_el.addClass('validation-err alert alert-danger my-2')
                validation_el.hide()
            $('input[name="RSBSA"]').on('input',function(){
                var RSBSA = $(this).val()
                    $(this).removeClass("border-danger border-success")
                    $(this).siblings(".validation-err").remove();
                var err_el = validation_el.clone()

                    if(RSBSA == '')
                    return false;

                    $.ajax({
                        url:"add-farmer-validate.php",
                        method:'POST',
                        data:{RSBSA:RSBSA},
                        dataType:'json',
                        error:err=>{
                            console.error(err)
                            alert("An error occured while validating the data")
                        },
                        success:function(resp){
                            if(Object.keys(resp).length > 0 && resp.field_name == 'RSBSA'){
                                err_el.text(resp.msg)
                                $('input[name="RSBSA"]').addClass('border-danger')
                                $('input[name="RSBSA"]').after(err_el)
                                err_el.show('slideDown')
                                $('#submit_farmer').attr('disabled',true)
                            }else{
                                $('input[name="RSBSA"]').addClass('border-success')
                                $('#submit_farmer').attr('disabled',false)
                            }
                        }
                    })
            })

        })
</script>