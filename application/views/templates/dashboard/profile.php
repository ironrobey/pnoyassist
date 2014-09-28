<div id="mainwrapper" class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo site_url( 'assets/images/comlogo.png' ); ?>" alt="" /></a>
        </div>
        <?php main_navi_display(); ?>
    </div>
    
    <div class="leftpanel">
        
        <?php navigation_display(); ?>
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="<?php echo site_url( $this->uri->segment(1) ); ?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Dashboard</li>
        </ul>
        
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5>All Features Summary</h5>
                <h1><?php echo ucwords( $this->uri->segment(1) )?> Dashboard</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row">

                    <div class="tabbedwidget">
                        <ul>
                            <li><a href="#c-1">General Info</a></li>
                            <li><a href="#c-2">Password</a></li>
                            <li><a href="#c-4">Profile Image</a></li>
                            <li><a href="#c-5">My Requirements</a></li>
                            <li><a href="#c-3">Deactivate Account</a></li>
                        </ul>
                        <div id="c-1">
                            <form id="form1" class="general-info form-horizontal" role="form" novalidate="novalidate">
                                <input type="hidden" name="user_id" value="<?php echo $profile->user_id; ?>">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">Email</label>
                                        <input type="text" class="form-control input-default" name="email" id="email" value="<?php echo $profile->email; ?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">First Name</label>
                                        <input type="text" class="form-control input-default" name="firstname_meta" id="firstname_meta" placeholder="First Name" value="<?php echo ( isset($metas->firstname) ? $metas->firstname : '' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Last Name</label>
                                        <input type="text" class="form-control input-default" name="lastname_meta" id="lastname_meta" placeholder="Last Name" value="<?php echo ( isset($metas->lastname) ? $metas->lastname: ''); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Birth Day</label>
                                        <input id="datepicker" type="text" placeholder="mm/dd/yyyy" name="birthday_meta" class="form-control input-default" value="<?php echo (isset( $metas->birthday ) ? reformat_date( $metas->birthday ) : '' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Gender</label>
                                        <div class="col-md-12 row">
                                            <label class="radio-inline">
                                                <?php $gender = get_usermeta( $profile->user_id, 'gender' ); ?>
                                                <input type="radio" id="inlineRadio2" name="gender_meta"<?php echo (isset( $metas->gender ) && $metas->gender == 'male' ? ' checked="checked" ' : ' ' ); ?>value="male" style="opacity: 0;"> Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="inlineRadio3" name="gender_meta" value="female"<?php echo (isset( $metas->gender ) && $metas->gender == 'female' ? ' checked="checked" ' : ' ' ); ?>style="opacity: 0;"> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Phone Number</label>
                                        <input type="text" class="form-control input-default" name="phone_number_meta" id="phone_number_meta" placeholder="Phone Number" value="<?php echo (isset( $metas->phone_number ) ? $metas->phone_number : '' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Cell Phone Number</label>
                                        <input type="text" class="form-control input-default" name="cell_number_meta" id="cell_number_meta" placeholder="Cell Phone Number" value="<?php echo (isset( $metas->cell_number ) ? $metas->cell_number : '' ); ?>">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button> <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="c-2">
                            <form id="form3" class="form-horizontal" role="form">

                                <div class="form-group">
                                    <label for="lastname" class="col-md-2 control-label">New password:</label>
                                    <div class="col-md-5">
                                        <input type="password" class="form-control input-default" name="new_pass" id="new_pass">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastname" class="col-md-2 control-label">Confirm password:</label>
                                    <div class="col-md-5">
                                        <input type="password" class="form-control input-default" name="con_pass" id="con_email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div id="c-4">
                            <form id="form5" class="form-horizontal" role="form">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Profile Image:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="profile_image" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $profile_image = get_usermeta($profile->user_id, 'profile_image'); ?>
                                            <input type="hidden" name="profile_image_meta" value="<?php echo $profile_image; ?>">
                                            <?php $profile_image_url = ( $profile_image!='' ? site_url( 'assets/uploads/'.$profile_image ) : '' ); ?>
                                            <a href="<?php echo $profile_image_url; ?>" class="profile_image_meta<?php echo ( $profile_image!='' ? '' : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload My Signature:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_signature" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_signature = get_usermeta($profile->user_id, 'ps_signature'); ?>
                                            <input type="hidden" name="ps_signature" class="required" value="<?php echo $ps_signature; ?>">
                                            <?php $ps_url = ( $ps_signature!='' ? site_url( 'assets/uploads/'.$ps_signature ) : '' ); ?>
                                            <a href="<?php echo $ps_url; ?>" class="ps_signature<?php echo ( $ps_signature!='' ? '' : ' hide' ); ?><?php echo ( isset($loan_application->status) && $loan_application->status != 0 ? ' disabled' : '' );?>" rel="shadowbox">View Upload</a>    
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div id="c-5">
                            <form id="form5" class="form-horizontal" role="form">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Goverment Issued ID's:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_gid_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_gid = get_usermeta($profile->user_id, 'ps_gid'); ?>
                                            <input type="hidden" name="ps_gid_meta" class="required" value="<?php echo $ps_gid; ?>">
                                            <?php $ps_gid_url = ( $ps_gid!='' ? site_url( 'assets/uploads/'.$ps_gid ) : '' ); ?>
                                            <a href="<?php echo $ps_gid_url; ?>" class="ps_gid_meta<?php echo ( $ps_gid!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Company ID:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_cid_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_cid = get_usermeta($profile->user_id, 'ps_cid'); ?>
                                            <input type="hidden" name="ps_cid_meta" clas="required" value="<?php echo $ps_cid; ?>">
                                            <?php $ps_cid_url = ( $ps_cid!='' ? site_url( 'assets/uploads/'.$ps_cid ) : '' ); ?>
                                            <a href="<?php echo $ps_cid_url; ?>" class="ps_cid_meta<?php echo ( $ps_cid!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload Latest 3mos. Payslip:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_payslip_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_payslip = get_usermeta($profile->user_id, 'ps_payslip'); ?>
                                            <input type="hidden" name="ps_payslip_meta" class="required" value="<?php echo $ps_payslip; ?>">
                                            <?php $ps_payslip_url = ( $ps_payslip!='' ? site_url( 'assets/uploads/'.$ps_payslip ) : '' ); ?>
                                            <a href="<?php echo $ps_payslip_url; ?>" class="ps_payslip_meta<?php echo ( $ps_payslip!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Upload 2x2 Colored ID Picture:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_idpic_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_idpic = get_usermeta($profile->user_id, 'ps_idpic'); ?>
                                            <input type="hidden" name="ps_idpic_meta" class="required" value="<?php echo $ps_idpic; ?>">
                                            <?php $ps_idpic_url = ( $ps_idpic!='' ? site_url( 'assets/uploads/'.$ps_idpic ) : '' ); ?>
                                            <a href="<?php echo $ps_idpic_url; ?>" class="ps_idpic_meta<?php echo ( $ps_idpic!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">COE w/ Compensation:</label>
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_coe_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_coe = get_usermeta($profile->user_id, 'ps_coe'); ?>
                                            <input type="hidden" name="ps_coe_meta" class="required" value="<?php echo $ps_coe; ?>">
                                            <?php $ps_coe_url = ( $ps_coe!='' ? site_url( 'assets/uploads/'.$ps_coe ) : '' ); ?>
                                            <a href="<?php echo $ps_coe_url; ?>" class="ps_coe_meta<?php echo ( $ps_coe!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Proof of billing ( under applican't name ):</label> 
                                        <div class="col-md-12 row">
                                            <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Select file...</span>
                                                <!-- The file input field used as target for the file upload widget -->
                                                <input id="ps_proof_meta" class="upload" type="file" name="files">
                                            </span>
                                            <span class="processUpload hide"></span>
                                            <?php $ps_proof = get_usermeta($profile->user_id, 'ps_proof'); ?>
                                            <input type="hidden" name="ps_proof_meta" class="required" value="<?php echo $ps_proof; ?>">
                                            <?php $ps_proof_url = ( $ps_proof!='' ? site_url( 'assets/uploads/'.$ps_proof ) : '' ); ?>
                                            <a href="<?php echo $ps_proof_url; ?>" class="ps_proof_meta<?php echo ( $ps_proof!='' ? : ' hide' ); ?>" rel="shadowbox">View Upload</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="c-3">
                            <form id="form4" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h2>Are you sure you want to deactivate your account?</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <p class="widgettitle title-danger">Deactivating your account will disable your profile. You will no longer use the whole functionality of pinoyassist website.  </p>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <p><b>Reason for leaving (Required):</b></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12" id="tooltips">
                                        <label class="radio-inline moreInfo" title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Tooltip on top">
                                            <div class="radio" id="uniform-inlineRadio2"><span><input type="radio" id="inlineRadio2" name="tpradio" value="I don't understand PinoyAssist" style="opacity: 0;"></span></div> I don't understand PinoyAssist
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-12" id="tooltips">
                                        <label class="radio-inline moreInfo" title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Tooltip on top">
                                            <div class="radio" id="uniform-inlineRadio2"><span><input type="radio" id="inlineRadio2" name="tpradio" value="I don't find PinoyAssist userful" style="opacity: 0;"></span></div> I don't find PinoyAssist useful.
                                        </label>
                                       
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="inputPassword" class="control-label">Textarea w/ Character Count</label>
                                        <textarea cols="80" rows="5" id="textarea2" class="form-control input-default"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--tabbedwidget-->

                </div><!--row-->
                
                <div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2014. PinoyAssist. All Rights Reserved.</span>
                    </div>
                    <div class="footer-right">
                        <span>Designed by: <a href="http://tektile.com.ph/">Tektile Web Technologies</a></span>
                    </div>
                </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

<div class="modal fade" id="sendKey" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="sendKeyForm" action="#" method="POST">
                <input type="hidden" name="profile_email" value="<?php echo $profile->email; ?>">
                <input type="hidden" name="profile_name" value="<?php echo ( isset($metas->firstname) ? $metas->firstname : '' ); ?> <?php echo ( isset($metas->lastname) ? $metas->lastname : '' ); ?>">
            <div class="modal-header">
                <h4>Send Co-borrower key</h4>
            </div>
            <div class="modal-body">
                   <p>Please enter principal borrower's email address.</p>
                   <input type="text" name="principal_email" class="form-control" placeholder="Principal Borrower Email">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                <button type="submit" class="btn btn-primary">Send Co-borrower Key</button>
            </div>
            </form>
        </div>
    </div>
</div>