<!--FORM MODAL-->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle"></span>
<i class="ion ion-ios-person" style="color: black"></i> </span>Register User</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="row">
<div class="col-sm">

<form action="add-user-process.php" method="POST">
                                       
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
<label for="uname">Username</label>
<input type="text" class="form-control border border-dark" pattern=".{8,}" title="Must contain at least 8 or more characters" placeholder="Enter username" name="uname" id="uname" autofocus required>
</div>
</div>

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="Password">Password</label>
<input type="password" class="form-control border border-dark" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password" name="Password"  id="Password" required>
<input type="checkbox" onclick="myFunction()">Show Password
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
<label for="LastName">Last Name</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter last name" name="LastName" id="LastName" required>
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
<label for="Regdate">Date Registered</label>
<input type="date" class="form-control border border-dark" name="Regdate" id="Regdate" required>
</div>
</div>

<br>

<button class="btn btn-primary col-md-12 mb-10" type="submit" name="submit_users" id="submit_users">Submit</button>
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
            $('input[name="uname"]').on('input',function(){
                var uname = $(this).val()
                    $(this).removeClass("border-danger border-success")
                    $(this).siblings(".validation-err").remove();
                var err_el = validation_el.clone()

                    if(uname == '')
                    return false;

                    $.ajax({
                        url:"add-user-validate.php",
                        method:'POST',
                        data:{uname:uname},
                        dataType:'json',
                        error:err=>{
                            console.error(err)
                            alert("An error occured while validating the data")
                        },
                        success:function(resp){
                            if(Object.keys(resp).length > 0 && resp.field_name == 'uname'){
                                err_el.text(resp.msg)
                                $('input[name="uname"]').addClass('border-danger')
                                $('input[name="uname"]').after(err_el)
                                err_el.show('slideDown')
                                $('#submit_users').attr('disabled',true)
                            }else{
                                $('input[name="uname"]').addClass('border-success')
                                $('#submit_users').attr('disabled',false)
                            }
                        }
                    })
            })

        })
</script>
<script type="text/javascript">
      function myFunction() {
        var x = document.getElementById("Password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
</script>