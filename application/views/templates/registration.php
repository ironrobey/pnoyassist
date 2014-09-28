<div class="regpanel">
    <div class="regpanelinner">
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-hand-down"></span></div>
            <div class="pagetitle">
                <h5>Your Information</h5>
                <h1>Sign Up</h1>
            </div>
        </div>
        <div class="regcontent">
        <p class="join">There are two ways to join PinoyAssist...</p>
        <?php if( isset($error) ): ?>
        <div class="alert alert-danger">
            <p>It seems that you are not yet registered. Please register here in order to apply for a loan.</p>
        </div>
        <?php endif; ?>
            
            <form method="post" id="registrationForm" class="stdform">
                <div class="row">
                    <div class="col-md-5">
                    <h3 class="subtitle">Fill in all of the fields below</h3>
                    <p>
                        <input type="email" name="email" class="form-control" placeholder="Email" />
                    </p>
                    <p><input type="password" name="password" class="form-control" placeholder="Password" /></p>

                    <p><input type="text" name="firstname_meta" class="form-control" placeholder="Firstname" /></p>
                    <p><input type="text" name="lastname_meta" class="form-control" placeholder="Lastname" /></p>

                    <p class="hear">
                        <select name="hear_meta">
                            <option style="display: none" value="0">How did you hear about us?</option>
                            <option value="Magazine">Magazine</option>
                            <option value="Google">Search Engine - Google</option>
                            <option value="Yahoo">Search Engine - Yahoo</option>
                            <option value="National Press">National Press</option>
                            <option value="Refer by Friends">Referred by friends</option>
                            <option value="Others">Others</option>
                        </select>
                     </p>       
<!--                     <h3 class="subtitle">Are you a borrower?</h3>
                    <p>
                        <input type="radio" class="borrower" name="borrower_meta" value="yes"> Yes &nbsp;&nbsp;
                        <input type="radio" class="borrower" name="borrower_meta" value="no" checked> No
                    </p> -->
                    <p><button class="btn btn-primary">Register</button></p>
                    </div>
                    <div class="col-md-2">
                        <center>
                            <a class="btn btn-default the-or">OR</a>
                        </center>
                    </div>
                    <div class="col-md-5">
                        <h3 class="subtitle">use an existing account</h3>
                        <a class="btn btn-facebook btn-lg" style="width: 100%" href="<?php echo $this->facebook->get_login_url(); ?>"><i class="fa fa-facebook pull-left"></i> Join with Facebook</a>
                        <br><br>
                        <a class="btn btn-warning" style="width: 100%;">Go Back to Homepage</a>
                    </div>
                </div> 
            </form>
        
        </div><!--regcontent-->
    </div><!--regpanelinner-->
</div><!--regpanel-->

<div class="regfooter">
    <p>&copy; 2013. PinoyAssist. All Rights Reserved.</p>
</div>

<!-- Modal -->
<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Alert</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="referral" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Referral Form</h4>
            </div>
            <div class="modal-body">
                <form action="#" id="referralForm" class="stdform">
                    <p><input type="email" name="referral_email" class="form-control" placeholder="Referral Email" /></p>
                    <p><input type="text" name="referral_phone" class="form-control" placeholder="Referral Phone" /></p>
                    <p><input type="text" name="referral_firstname" class="form-control" placeholder="Referral Firstname" /></p>
                    <p><input type="text" name="referral_lastname" class="form-control" placeholder="Referral Lastname" /></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Register</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Alert</h4>
            </div>
            <div class="modal-body">
                <p class="error-txt">Account already exists, Please sign in instead or press forgot password if you have forgotten your password. Thanks!</p>
            </div>
        </div>
    </div>
</div>