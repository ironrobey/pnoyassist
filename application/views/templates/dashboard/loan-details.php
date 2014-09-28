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
            <?php if($this->uri->segment(2)): ?>
                <li><span class="separator"></span> <?php echo ucwords( $this->uri->segment(2) ); ?></li>
            <?php endif; ?>
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
                            <li><a href="#c-7">Principal Requirements</a></li>
                            <li><a href="#c-2">Loan Information</a></li>
                            <li><a href="#c-1">Borrower</a></li>
                            <?php if( isset($application->comaker) && $application->comaker ): ?>
                            <li><a href="#c-3">Comaker</a></li>
                            <li><a href="#c-4">Comaker Requirements</a></li>
                            <?php endif; ?>
                            <li><a href="#c-5">Other References</a></li>
                            <li><a href="#c-6">Undertaking</a></li>
                        </ul>
                        <div id="c-1">
                            <form id="form1" class="general-info form-horizontal" role="form" novalidate="novalidate">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">First Name</label>
                                        <input type="text" class="form-control input-default" name="firstname_meta" id="firstname_meta" placeholder="First Name" value="<?php echo ( isset( $member->user_id ) ? get_usermeta( $member->user_id, 'firstname' ) : '' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Last Name</label>
                                        <input type="text" class="form-control input-default" name="lastname_meta" id="lastname_meta" placeholder="Last Name" value="<?php echo ( isset($member->user_id) ? get_usermeta( $member->user_id, 'lastname' ) : '' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="middlename_meta" class="control-label">Middle Name</label>
                                        <input type="text" class="form-control input-default required" name="middlename_meta" id="middlename_meta" placeholder="Middle Name" value="<?php echo get_usermeta( $member->user_id, 'middlename' ); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="suffixname_meta" class="control-label">Suffix Name</label>
                                        <input type="text" class="form-control input-default required" name="suffixname_meta" id="suffixname_meta" placeholder="Suffix Name" value="<?php echo get_usermeta( $member->user_id, 'suffixname' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">Email</label>
                                        <input type="text" class="form-control input-default" name="email" id="email" value="<?php echo ( isset($member->email) ? $member->email : '' ); ?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Gender</label>
                                        <div class="col-md-12 row">
                                            <label class="radio-inline">
                                                <?php $gender = get_usermeta( $member->user_id, 'gender' ); ?>
                                                <input type="radio" id="inlineRadio2" name="gender_meta"<?php echo ( $gender != '' && $gender == 'male' ? ' checked="checked" ' : ' ' ); ?>value="male" style="opacity: 0;" disabled> Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="inlineRadio3" name="gender_meta" value="female"<?php echo ( $gender != '' && $gender == 'female' ? ' checked="checked" ' : ' ' ); ?>style="opacity: 0;" disabled> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Birth Day</label>
                                        <?php $birthday = get_usermeta( $member->user_id, 'birthday' ); ?>
                                        <input class="datepicker2 form-control input-default" type="text" placeholder="mm/dd/yyyy" name="birthday_meta" value="<?php echo ( $birthday != '' ? reformat_date( $birthday ) : '' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="age_meta" class="control-label">Age</label>
                                        <input type="text" class="form-control input-default required" name="age_meta" id="age_meta" placeholder="Age" value="<?php echo get_usermeta( $member->user_id, 'age' ); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="mothermaidenname_meta" class="control-label">Mother's Full Maiden Name</label>
                                        <input type="text" class="form-control input-default required" name="mothermaidenname_meta" id="mothermaidenname_meta" placeholder="Mother's Full Maiden Name" value="<?php echo get_usermeta( $member->user_id, 'mothermaidenname' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dependents_meta" class="control-label">No. of Dependents</label>
                                        <input type="text" class="form-control input-default required" name="dependents_meta" id="dependents_meta" placeholder="No. of dependents" value="<?php echo get_usermeta( $member->user_id, 'dependents' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civil_status_meta" class="control-label">Civil Status</label>
                                        <?php $civil_status = get_usermeta( $member->user_id, 'civil_status' ); ?>
                                        <?php $cstat = array( 'single','widowed','married','separated' ); ?>
                                        <select name="civil_status_meta" id="civil_status_meta" class="form-control required">
                                            <option value="0">Civil Status</option>
                                            <?php foreach( $cstat as $cst ): ?>
                                            <option value="<?php echo $cst; ?>"<?php echo ( $civil_status == $cst ? ' selected' : '' ); ?>><?php echo ucwords($cst); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="tax_meta" class="control-label">Tax Identification No.</label>
                                        <input type="text" class="form-control input-default required" name="tax_meta" id="tax_meta" placeholder="Tax Identification No." value="<?php echo get_usermeta( $member->user_id, 'tax' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sssgsis_meta" class="control-label">SSS / GSIS No.</label>
                                        <input type="text" class="form-control input-default required" name="sssgsis_meta" id="sssgsis_meta" placeholder="SSS / GSIS No." value="<?php echo get_usermeta( $member->user_id, 'sssgsis' ); ?>">
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <?php $phone_number = get_usermeta( $member->user_id, 'phone_number' ); ?>
                                        <label for="lastname" class="control-label">Phone Number</label>
                                        <input type="text" class="form-control input-default" name="phone_number_meta" id="phone_number_meta" placeholder="Phone Number" value="<?php echo ( $phone_number != '' ? $phone_number : '' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Cell Phone Number</label>
                                        <?php $cell = get_usermeta( $member->user_id, 'cell_number' ); ?>
                                        <input type="text" class="form-control input-default" name="cell_number_meta" id="cell_number_meta" placeholder="Cell Phone Number" value="<?php echo ( $cell != '' ? $cell : '' ); ?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="facebook_meta" class="control-label">Facebook Account</label>
                                        <input type="text" class="form-control input-default required" name="facebook_meta" id="facebook_meta" placeholder="Facebook Account" value="<?php echo get_usermeta( $member->user_id, 'facebook' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="skype_meta" class="control-label">Skype ID</label>
                                        <input type="text" class="form-control input-default required" name="skype_meta" id="skype_meta" placeholder="Skype ID" value="<?php echo get_usermeta( $member->user_id, 'skype' ); ?>">
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="present_address_meta" class="control-label">Present Home Address</label>
                                        <input type="text" class="form-control input-default required" name="present_address_meta" id="present_address_meta" placeholder="Present Home Address" value="<?php echo get_usermeta( $member->user_id, 'present_address' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="length_stay_meta" class="control-label">Length of Stay</label>
                                        <input type="text" class="form-control input-default required" name="length_stay_meta" id="length_stay_meta" placeholder="Length of Stay" value="<?php echo get_usermeta( $member->user_id, 'length_stay' ); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="permanent_address_meta" class="control-label">Permanent Address</label>
                                        <input type="text" class="form-control input-default required" name="permanent_address_meta" id="permanent_address_meta" placeholder="Permanent Address" value="<?php echo get_usermeta( $member->user_id, 'permanent_address' ); ?>">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="residential_status_meta" class="control-label">Residential Status</label>
                                        <select name="residential_status_meta" id="residential_status_meta" class="form-control input-default required">
                                            <option value="0">Please select residential status</option>
                                            <?php $res_arr = array( 'owned', 'rented', 'mortgaged', 'used free', 'others' ); ?>
                                            <?php $res_sta = get_usermeta($member->user_id, 'residential_status'); ?>
                                            <?php foreach($res_arr as $ra): ?>
                                            <option value="<?php echo $ra; ?>"<?php echo ($res_sta==$ra ? ' selected="selected"' : ''); ?>><?php echo ucwords($ra); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?php $others = get_usermeta($member->user_id, 'others'); ?>
                                    <div class="col-md-4 others_input<?php echo ($others== '' ? ' hide' : ''); ?>">
                                        <label for="salary_meta" class="control-label">Please specify others</label>
                                        <input type="text" name="others_meta" class="form-control input-default required" placeholder="Please specify others" value="<?php echo $others; ?>">
                                    </div>
                                </div>
                                <?php $rental_mortgaged = get_usermeta($member->user_id, 'rental_mortgaged'); ?>
                                <div class="row rented_mortgage_input<?php echo ($rental_mortgaged=='' ? ' hide' : '' ); ?>">
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">If Rented / Mortgaged</label>
                                        <input type="text" name="rental_mortgaged_meta" class="form-control input-default" placeholder="Monthly Rental / Mortgaged" value="<?php echo isset( $rental_mortgaged ) ? $rental_mortgaged : '' ; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label"></label>
                                        <input type="text" name="lessor_mortgagor_meta" class="form-control input-default" placeholder="Lessor / Mortgagor" value="<?php echo isset( $lessor_mortgagor ) ? $lessor_mortgagor : '' ; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Employer / Business Name</label>
                                        <input type="text" class="form-control input-default required" name="employer_meta" id="employer_meta" placeholder="Employer / Business Name" value="<?php echo get_usermeta($member->user_id, 'employer'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Month Basic Salary</label>
                                        <input type="text" class="form-control input-default required" name="salary_meta" id="salary_meta" placeholder="Monthly Basic Salary" value="<?php echo get_usermeta($member->user_id, 'salary'); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Office / Business Address</label>
                                        <input type="text" class="form-control input-default required" name="office_address_meta" id="office_address_meta" placeholder="Office / Business Address" value="<?php echo get_usermeta($member->user_id, 'office_address'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Position in the company</label>
                                        <input type="text" class="form-control input-default required" name="position_meta" id="position_meta" placeholder="Position in the company" value="<?php echo get_usermeta($member->user_id, 'position'); ?>">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="office_tel_meta" class="control-label">Office Telephone &amp; Loc. Nos. </label>
                                        <input type="text" class="form-control input-default required" name="office_tel_meta" id="office_tel_meta" placeholder="Office Telephone &amp; Loc. Nos." value="<?php echo get_usermeta($member->user_id, 'office_tel'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Employment Tenure</label>
                                        <input type="text" class="form-control input-default required" name="tenure_meta" id="tenure_meta" placeholder="Employment Tenure" value="<?php echo get_usermeta($member->user_id, 'tenure'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="payroll_meta" class="control-label">Payroll Date</label>
                                        <?php $payroll = get_usermeta( $member->user_id, 'payroll' ); ?>
                                        <input type="text" placeholder="Payroll Date" name="payroll_meta" class="datepicker2 form-control input-default required" value="<?php echo ( isset($payroll) ? reformat_date($payroll) : '' ); ?>">
                                    </div>
                                </div>

                                <h3>Spouse Information</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">First Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_firstname_meta" id="spouse_firstname_meta" placeholder="First Name" value="<?php echo get_usermeta( $member->user_id, 'spouse_firstname' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Last Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_lastname_meta" id="spouse_lastname_meta" placeholder="Last Name" value="<?php echo get_usermeta( $member->user_id, 'spouse_lastname' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="middlename" class="control-label">Middle Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_middlename_meta" id="spouse_middlename_meta" placeholder="Middle Name" value="<?php echo get_usermeta( $member->user_id, 'spouse_middlename' )?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="suffixname_meta" class="control-label">Suffix Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_suffixname_meta" id="spouse_suffixname_meta" placeholder="Suffix Name" value="<?php echo get_usermeta( $member->user_id, 'spouse_suffixname' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firstname" class="col-md-2 control-label">Email</label>
                                        <input type="text" class="form-control input-default" name="spouse_email_meta" id="spouse_email_meta" placeholder="Email" value="<?php echo get_usermeta( $member->user_id, 'spouse_email' )?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Birth Day</label>
                                        <input type="text" placeholder="mm/dd/yyyy" name="spouse_birthday_meta" class="datepicker2 form-control input-default" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="age_meta" class="control-label">Age</label>
                                        <input type="text" class="form-control input-default" name="spouse_age_meta" id="spouse_age_meta" placeholder="Age" value="<?php echo get_usermeta( $member->user_id, 'spouse_age' )?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="tax_meta" class="control-label">Tax Identification No.</label>
                                        <input type="text" class="form-control input-default" name="spouse_tax_meta" id="spouse_tax_meta" placeholder="Tax Identification No." value="<?php echo get_usermeta( $member->user_id, 'spouse_tax' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sssgsis_meta" class="control-label">SSS / GSIS No.</label>
                                        <input type="text" class="form-control input-default" name="spouse_sssgsis_meta" id="spouse_sssgsis_meta" placeholder="SSS / GSIS No." value="<?php echo get_usermeta( $member->user_id, 'spouse_sssgsis' )?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Phone Number</label>
                                        <input type="text" class="form-control input-default" name="spouse_phone_number_meta" id="spouse_phone_number_meta" placeholder="Phone Number" value="<?php echo get_usermeta( $member->user_id, 'spouse_phone_number' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Cell Phone Number</label>
                                        <input type="text" class="form-control input-default" name="spouse_cell_number_meta" id="spouse_cell_number_meta" placeholder="Cell Phone Number" value="<?php echo get_usermeta( $member->user_id, 'spouse_cell_number' )?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Employer / Business Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_employer_meta" id="spouse_employer_meta" placeholder="Employer / Business Name" value="<?php echo get_usermeta( $member->user_id, 'spouse_employer' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Month Basic Salary</label>
                                        <input type="text" class="form-control input-default" name="spouse_salary_meta" id="spouse_salary_meta" placeholder="Monthly Basic Salary" value="<?php echo get_usermeta( $member->user_id, 'spouse_salary' )?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Office / Business Address</label>
                                        <input type="text" class="form-control input-default" name="spouse_office_address_meta" id="spouse_office_address_meta" placeholder="Office / Business Address" value="<?php echo get_usermeta( $member->user_id, 'spouse_office_address' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="position_meta" class="control-label">Position in the company</label>
                                        <input type="text" class="form-control input-default" name="spouse_position_meta" id="spouse_position_meta" placeholder="Position in the company" value="<?php echo get_usermeta( $member->user_id, 'spouse_position' )?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="office_tel_meta" class="control-label">Office Telephone &amp; Loc. Nos. </label>
                                        <input type="text" class="form-control input-default" name="spouse_office_tel_meta" id="spouse_office_tel_meta" placeholder="Office Telephone &amp; Loc. Nos." value="<?php echo get_usermeta( $member->user_id, 'spouse_office_tel' )?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tenure_meta" class="control-label">Employment Tenure</label>
                                        <input type="text" class="form-control input-default" name="spouse_tenure_meta" id="spouse_tenure_meta" placeholder="Employment Tenure" value="<?php echo get_usermeta( $member->user_id, 'spouse_tenure' )?>">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div id="c-2">
                            <form id="form2" class="loan-information form-horizontal" role="form" novalidate="novalidate">

                                <p>
                                    <label for="purpose">What is the purpose of the loan?</label><br>
                                    <?php $purpose_arr = array( 'Appliance', 'Hospitalisation / Medical', 'Personal Use', 'Education', 'Others' ); ?>
                                    <select name="purpose" id="purpose" class="form-control required">
                                        <option value="0">Purpose of the loan</option>
                                        <?php foreach( $purpose_arr as $pr ): ?>
                                        <option value="<?php echo $pr; ?>"<?php echo ( isset($application->purpose) && $pr == $application->purpose ? ' selected="selected"' : '')?>><?php echo $pr; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </p>
                                <br>
                                <?php $other_purpose_meta = get_loanmeta($application->loan_application_id, 'other_purpose');?>
                                <div class="purpose_input form-group<?php echo ($other_purpose_meta== '' ? ' hide' : '' ); ?>">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control input-default" name="other_purpose_meta" id="others_meta" placeholder="Please specify other desired amount purpose of loan" value="<?php echo $other_purpose_meta; ?>">
                                    </div>
                                </div>
                                <p>
                                    <label for="loan_amount">Desired Loan Amount</label><br>
                                    <select name="loan_amount" id="loan_amount" class="form-control required">
                                        <option value="0">Desired Loan Amount</option>
                                        <?php $desired_arr = array( '15', '20', '25', '30', '35', '40', '45', '50', 'others' ); ?>
                                        <?php foreach ($desired_arr as $dr) : ?>
                                        <option value="<?php echo $dr; ?>"<?php echo (isset($application->desired_loan_amount) && $application->desired_loan_amount == $dr ? ' selected="selected"' : '' ); ?>>Php <?php echo $dr; ?>,000</option>
                                        <?php endforeach; ?>
                                    </select>
                                </p>
                                <br>
                                <?php $other_desired_meta = get_loanmeta($application->loan_application_id, 'other_desired');?>
                                <div class="amount_input form-group<?php echo ( $other_desired_meta=='' ? ' hide' : '' ); ?>">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control input-default" name="other_desired_meta" id="others_meta" placeholder="Please specify other desired amount" value="<?php echo $other_desired_meta;?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="c-5">
                            <form id="form5" class="form-horizontal" role="form">
                                <label for="lastname" class="control-label">Contact Person in case of emergency</label><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_1_name_meta" placeholder="Name" value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_1_name'); ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_1_relationship_meta" placeholder="Relationship" value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_1_relationship'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_1_address_meta" placeholder="Address" value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_1_address'); ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_1_contact_no_meta" placeholder="Contact No." value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_1_contact_no'); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_2_name_meta" placeholder="Name" value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_2_contact_no'); ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_2_relationship_meta" placeholder="Relationship" value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_2_contact_no'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_2_address_meta" placeholder="Address" value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_2_contact_no'); ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="emergency_contact_2_contact_no_meta" placeholder="Contact No." value="<?php echo get_loanmeta($application->loan_application_id, 'emergency_contact_2_contact_no'); ?>">
                                    </div>
                                </div>

                                <label for="lastname" class="control-label">Parent Information</label><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="parent_1_name_meta" placeholder="Name" value="<?php echo get_loanmeta($application->loan_application_id, 'parent_1_name'); ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control input-default required" name="parent_1_living_deceased_meta" placeholder="Living / Deceased" value="<?php echo get_loanmeta($application->loan_application_id, 'parent_1_living_deceased'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-default required" name="parent_1_address_meta" placeholder="Address" value="<?php echo get_loanmeta($application->loan_application_id, 'parent_1_address'); ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="parent_1_contact_no_meta" placeholder="Contact No." value="<?php echo get_loanmeta($application->loan_application_id, 'parent_1_contact_no'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="parent_2_name_meta" placeholder="Name" value="<?php echo get_loanmeta($application->loan_application_id, 'parent_2_name'); ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control input-default required" name="parent_2_living_deceased_meta" placeholder="Living / Deceased" value="<?php echo get_loanmeta($application->loan_application_id, 'parent_2_living_deceased'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-default required" name="parent_2_address_meta" placeholder="Address" value="<?php echo get_loanmeta($application->loan_application_id, 'parent_2_address'); ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="parent_2_contact_no_meta" placeholder="Contact No." value="<?php echo get_loanmeta($application->loan_application_id, 'parent_2_contact_no'); ?>">
                                    </div>
                                </div>

                                <label for="lastname" class="control-label">Personal References</label><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="personal_reference_1_name_meta" placeholder="Name" value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_1_name'); ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control input-default required" name="personal_reference_1_company_meta" placeholder="Company" value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_1_company'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-default required" name="personal_reference_1_address_meta" placeholder="Address" value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_1_address'); ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="personal_reference_1_contact_no_meta" placeholder="Contact No." value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_1_contact_no'); ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="personal_reference_2_name_meta" placeholder="Name" value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_2_name'); ?>">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control input-default required" name="personal_reference_2_company_meta" placeholder="Company" value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_2_company'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-default required" name="personal_reference_2_address_meta" placeholder="Address" value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_2_address'); ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-default required" name="personal_reference_2_contact_no_meta" placeholder="Contact No." value="<?php echo get_loanmeta($application->loan_application_id, 'personal_reference_2_contact_no'); ?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="c-6">
                            <form id="form6" class="form-horizontal" role="form">
                                <input type="hidden" name="application_id" value="<?php echo (isset($loan_application->loan_application_id) ? $loan_application->loan_application_id : '' ); ?>">
                                <input type="hidden" name="comaker" value="<?php echo (isset($comakerData->other_id)? $comakerData->other_id: ''); ?>">
                                <p>I hereby certify that all information provided in this application and in all supporting documents are true and correct, and made for the purpose of obtaining credit. I further authorize Prime Esteem Services, Inc. to perform the necessary credit checkings and information on me and my co-maker's. I understand that this application may be denied with no obligation on the part of Prime Esteem Services, Inc. to disclose the reason thereof.</p>
                                <br>
                                <p>I acknowledge that upon receipt of the loan proceeds thru credit to my PINOY ASSIST Visa Debit Card, I am deemed to have fully examined the documents and have waived any and all objections thereto.</p>
                                <br>
                                <p>I authorize PINOY ASSIST to withdraw funds from my Company Issued ATM card to pay my monthly amortization. PINOY ASSIST will then deposit the remaining balance of my salary to the PINOY ASSIST Visa Debit Card. </p>

                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Principal Borrower's Signature over printed name:</label>
                                        <dv class="col-md-12 row">
                                            <?php $ps_signature = get_usermeta($member->user_id, 'ps_signature'); ?>
                                            <?php $ps_url = ( $ps_signature!='' ? site_url( 'assets/uploads/'.$ps_signature ) : '' ); ?>
                                            <a href="<?php echo $ps_url; ?>" rel="shadowbox">View Signature</a>
                                        </dv>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        <div id="c-7">
                            <form id="form7" class="form-horizontal" role="form">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Goverment Issued ID's:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_gid = get_usermeta($member->user_id, 'ps_gid'); ?>
                                            <?php $ps_gid_url = ( $ps_gid!='' ? site_url( 'assets/uploads/'.$ps_gid ) : '' ); ?>
                                            <a href="<?php echo $ps_gid_url; ?>" rel="shadowbox">View Goverment Issued ID's</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Company ID:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_cid = get_usermeta($member->user_id, 'ps_cid'); ?>
                                            <?php $ps_cid_url = ( $ps_cid!='' ? site_url( 'assets/uploads/'.$ps_cid ) : '' ); ?>
                                            <a href="<?php echo $ps_cid_url; ?>" rel="shadowbox">View Company ID</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Latest 3mos. Payslip:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_payslip = get_usermeta($member->user_id, 'ps_payslip'); ?>
                                            <?php $ps_payslip_url = ( $ps_payslip!='' ? site_url( 'assets/uploads/'.$ps_payslip ) : '' ); ?>
                                            <a href="<?php echo $ps_payslip_url; ?>" rel="shadowbox">View Latest 3mos. Payslip</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">2x2 Colored ID Picture:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_idpic = get_usermeta($member->user_id, 'ps_idpic'); ?>
                                            <?php $ps_idpic_url = ( $ps_idpic!='' ? site_url( 'assets/uploads/'.$ps_idpic ) : '' ); ?>
                                            <a href="<?php echo $ps_idpic_url; ?>" rel="shadowbox">View 2x2 Colored ID Picture</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">COE w/ Compensation:</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_coe = get_usermeta($member->user_id, 'ps_coe'); ?>
                                            <?php $ps_coe_url = ( $ps_coe!='' ? site_url( 'assets/uploads/'.$ps_coe ) : '' ); ?>
                                            <a href="<?php echo $ps_coe_url; ?>" rel="shadowbox">View COE w/ compensation</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Latest Statement of Account ( preferably not less than 6mos of account details ):</label>
                                        <div class="col-md-12 row">
                                            <?php $ps_soa = get_usermeta($member->user_id, 'ps_soa'); ?>
                                            <?php $ps_soa_url = ( $ps_soa!='' ? site_url( 'assets/uploads/'.$ps_soa ) : '' ); ?>
                                            <a href="<?php echo $ps_soa_url; ?>" rel="shadowbox">View SOA</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="lastname" class="control-label">Proof of billing ( under applican't name ):</label> 
                                        <div class="col-md-12 row">
                                            <?php $ps_proof = get_usermeta($member->user_id, 'ps_proof'); ?>
                                            <?php $ps_proof_url = ( $ps_proof!='' ? site_url( 'assets/uploads/'.$ps_proof ) : '' ); ?>
                                            <a href="<?php echo $ps_proof_url; ?>" rel="shadowbox">View Proof of billing</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <?php if( isset($application->comaker) && $application->comaker ): ?>
                        <div id="c-3">
                            <?php $this->load->view('templates/dashboard/forms/third', $application); ?>
                        </div><!-- #c-3 -->
                        <div id="c-4">
                            <?php $this->load->view('templates/dashboard/forms/fourth', $application); ?>
                        </div><!-- #c-4 -->
                        <?php endif; ?>

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