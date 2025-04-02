<?php 
$n1=rand(20,30);
$n2=rand(20,30); 
$answer=$n1+$n2;
$_SESSION["auto_sum"]=$answer;
?>
<div class="container-fluid">
    <div class="row">
        <div class="side-contact bg-form">
            <!-- Form Opening Button -->
                <div  onclick="openForm()" class=" fbtn bg-danger text-light btn-light px-4 py-2" style="cursor:pointer;">Enquiry Now</div>
            <form action="formhandler.php" method="POST" name="modal_form">
                <div class="row">
                    <div class="col-md-12 text-center py-2">
                        <h5 class="text-white">Get An Imediate Response</h5>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="form_name" type="number" name="mobile" class="form-control" placeholder="Mobile No *" required="required" data-error="Firstname is required.">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me..." rows="3" required="required" data-error="Please, leave us a message."></textarea>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control bg-dark text-white text-center"  id="disabledInput" type="number" value=" <?php echo $n1; ?> + <?php echo $n2; ?> =" disabled> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input  type="number" name="uanswer" class="form-control" placeholder="?" required="required" data-error="Answer is required.">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <button type="button" onclick="closeForm()" class="btn-primary rounded px-4 py-2">Cancel</button>
                                <input type="submit" name="submit_modal" id="submit_modal " class="btn-warning rounded  px-3 py-2 float-right text-dark" value="Submit">
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
/**
*******Side-Contact Form*******
**/
function openForm() {
    let f = document.querySelector('.side-contact');
    if(f.style.right == "0px" ){
        f.style.right = "-320px";
    }else{
        f.style.right = "0px";
    }
}

function closeForm() {
    document.querySelector('.side-contact').style.right = "-320px";
}
</script>
