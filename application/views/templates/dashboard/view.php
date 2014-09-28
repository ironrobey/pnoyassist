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

                    <div class="tabbedwidget tab-inverse">
                        <ul>
                            <li><a href="#c-1">General Info</a></li>
                            <li><a href="#c-3">Deactivate Account</a></li>
                        </ul>
                        <div id="c-1">
                            <form id="form1" class="general-info form-horizontal" role="form" novalidate="novalidate">
                                <input type="hidden" name="user_id" value="<?php echo $user->user_id; ?>">
                                <div class="form-group required">
                                    <label for="firstname" class="col-md-2 control-label">Email</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control input-default" name="email" id="email" value="<?php echo $user->email; ?>" disabled>
                                    </div>
                                </div>

                                <div class="form-group required">
                                    <label for="firstname" class="col-md-2 control-label">First Name</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control input-default" name="firstname_meta" id="firstname_meta" placeholder="First Name" value="<?php echo get_usermeta( $user->user_id, 'firstname' ); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lastname" class="col-md-2 control-label">Last Name</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control input-default" name="lastname_meta" id="lastname_meta" placeholder="Last Name" value="<?php echo get_usermeta( $user->user_id, 'lastname' ); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword" class="col-md-2 control-label">Gender</label>
                                    <div class="col-md-5">
                                        <label class="radio-inline">
                                            <?php $gender = get_usermeta( $user->user_id, 'gender' ); ?>
                                            <div class="radio" id="uniform-inlineRadio2"><span class="checked"><input type="radio" id="inlineRadio2" name="gender_meta"<?php echo ( $gender != '' && $gender == 'male' ? ' checked="checked" ' : ' ' ); ?>value="male" style="opacity: 0;"></span></div> Male
                                        </label>
                                        <label class="radio-inline">
                                            <div class="radio" id="uniform-inlineRadio3"><span><input type="radio" id="inlineRadio3" name="gender_meta" value="female"<?php echo ( $gender != '' && $gender == 'female' ? ' checked="checked" ' : ' ' ); ?>style="opacity: 0;"></span></div> Female
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword" class="col-md-2 control-label">Birth Day</label>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <?php $birthday = get_usermeta( $user->user_id, 'birthday' ); ?>
                                                <input id="datepicker" type="text" placeholder="mm/dd/yyyy" name="birthday_meta" class="form-control input-default" value="<?php echo ( $birthday != '' ? reformat_date( $birthday ) : '' ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lastname" class="col-md-2 control-label">Phone Number</label>
                                    <div class="col-md-5">
                                        <?php $phone_number = get_usermeta( $user->user_id, 'phone_number' ); ?>
                                        <input type="text" class="form-control input-default" name="phone_number_meta" id="phone_number_meta" placeholder="Phone Number" value="<?php echo ( $phone_number != '' ? $phone_number : '' ); ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastname" class="col-md-2 control-label">Cell Phone Number</label>
                                    <div class="col-md-5">
                                        <?php $cell = get_usermeta( $user->user_id, 'cell_number' ); ?>
                                        <input type="text" class="form-control input-default" name="cell_number_meta" id="cell_number_meta" placeholder="Cell Phone Number" value="<?php echo ( $cell != '' ? $cell : '' ); ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary">Submit</button> <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="c-3">
                            <form id="form4" class="form-horizontal" role="form">
                                <input type="hidden" name="user_id" value="<?php echo $user->user_id; ?>">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h2>Do you want to deactivate this account?</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <p class="widgettitle title-danger">Deactivating this account will disable users' access to his/her account.</p>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <p><b>Reason for activation deactivation ( required ):</b></p>
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
                                    <div class="col-md-12">
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