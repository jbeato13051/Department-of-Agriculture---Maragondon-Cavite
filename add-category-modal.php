<!--FORM MODAL-->
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="addcategory_ModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title" id="addcategory_ModalCenterTitle"><span class="pg-title-icon"><span class="feather-icon"></span>
<i class="ion ion-ios-bookmark" style="color: black"></i> </span>Add Category</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

<div class="modal-body">
<div class="row">
<div class="col-sm">
<form action="add-category-process.php" method="post">

<div class="form-row">
<div class="col-md-12 mb-10">
<label for="catname">Category Name</label>
<input type="text" class="form-control border border-dark" pattern="^[a-zA-z\s]+$" title="Please enter on alphabets only" placeholder="Enter category name" name="catname" id="catname" autofocus required>
</div>
</div>

<br>

<button class="btn btn-primary col-md-12 mb-10" type="submit" name="submit_addcategory" id="submit_addcategory">Submit</button>
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
            $('input[name="catname"]').on('input',function(){
                var catname = $(this).val()
                    $(this).removeClass("border-danger border-success")
                    $(this).siblings(".validation-err").remove();
                var err_el = validation_el.clone()

                    if(catname == '')
                    return false;

                    $.ajax({
                        url:"add-category-validate.php",
                        method:'POST',
                        data:{catname:catname},
                        dataType:'json',
                        error:err=>{
                            console.error(err)
                            alert("An error occured while validating the data")
                        },
                        success:function(resp){
                            if(Object.keys(resp).length > 0 && resp.field_name == 'catname'){
                                err_el.text(resp.msg)
                                $('input[name="catname"]').addClass('border-danger')
                                $('input[name="catname"]').after(err_el)
                                err_el.show('slideDown')
                                $('#submit_addcategory').attr('disabled',true)
                            }else{
                                $('input[name="catname"]').addClass('border-success')
                                $('#submit_addcategory').attr('disabled',false)
                            }
                        }
                    })
            })

        })
</script>