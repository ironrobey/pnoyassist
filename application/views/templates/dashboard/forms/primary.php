
                            <form id="form1" class="general-info form-horizontal" role="form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">First Name</label>
                                        <input type="text" class="form-control input-default" name="firstname_meta" id="firstname_meta" placeholder="First Name" value="<?php echo get_usermeta( $user_id, 'firstname' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Last Name</label>
                                        <input type="text" class="form-control input-default" name="lastname_meta" id="lastname_meta" placeholder="Last Name" value="<?php echo get_usermeta( $user_id, 'lastname' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="middlename_meta" class="control-label">Middle Name</label>
                                        <input type="text" class="form-control input-default required" name="middlename_meta" id="middlename_meta" placeholder="Middle Name" value="<?php echo get_usermeta( $user_id, 'middlename' ); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="suffixname_meta" class="control-label">Suffix Name</label>
                                        <input type="text" class="form-control input-default required" name="suffixname_meta" id="suffixname_meta" placeholder="Suffix Name" value="<?php echo get_usermeta( $user_id, 'suffixname' ); ?>">
                                    </div>   
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">Email</label>
                                        <input type="text" class="form-control input-default" name="email" id="email" value="<?php echo $email; ?>" disabled>
                                    </div>     
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Gender</label>
                                        <div class="col-md-12 row">
                                            <label class="radio-inline">
                                                <?php $gender = get_usermeta( $user_id, 'gender' ); ?>
                                                <input type="radio" id="inlineRadio2" name="gender_meta"<?php echo ( $gender != '' && $gender == 'male' ? ' checked="checked" ' : ' ' ); ?>value="male" style="opacity: 0;" disabled> Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="inlineRadio3" name="gender_meta" value="female"<?php echo ( $gender != '' && $gender == 'female' ? ' checked="checked" ' : ' ' ); ?>style="opacity: 0;" disabled> Female
                                            </label>
                                        </div>
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Birth Day</label>
                                        <?php $birthday = get_usermeta( $user_id, 'birthday' ); ?>
                                        <input class="datepicker2 form-control input-default" type="text" placeholder="mm/dd/yyyy" name="birthday_meta" value="<?php echo ( $birthday != '' ? reformat_date( $birthday ) : '' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="age_meta" class="control-label">Age</label>
                                        <input type="text" class="form-control input-default required" name="age_meta" id="age_meta" placeholder="Age" value="<?php echo get_usermeta( $user_id, 'age' ); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="mothermaidenname_meta" class="control-label">Mother's Full Maiden Name</label>
                                        <input type="text" class="form-control input-default required" name="mothermaidenname_meta" id="mothermaidenname_meta" placeholder="Mother's Full Maiden Name" value="<?php echo get_usermeta( $user_id, 'mothermaidenname' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dependents_meta" class="control-label">No. of Dependents</label>
                                        <input type="text" class="form-control input-default required" name="dependents_meta" id="dependents_meta" placeholder="No. of dependents" value="<?php echo get_usermeta( $user_id, 'dependents' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civil_status_meta" class="control-label">Civil Status</label>
                                        <?php $civil_status = get_usermeta( $user_id, 'civil_status' ); ?>
                                        <?php $cstat = array( 'single','widowed','married','separated' ); ?>
                                        <select name="civil_status_meta" id="civil_status_meta" class="form-control required">
                                            <option value="0">Civil Status</option>
                                            <?php foreach( $cstat as $cst ): ?>
                                            <option value="<?php echo $cst; ?>"<?php echo ( $civil_status == $cst ? ' selected' : '' ); ?>><?php echo ucwords($cst); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="tax_meta" class="control-label">Tax Identification No.</label>
                                        <input type="text" class="form-control input-default required" name="tax_meta" id="tax_meta" placeholder="Tax Identification No." value="<?php echo get_usermeta( $user_id, 'tax' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sssgsis_meta" class="control-label">SSS / GSIS No.</label>
                                        <input type="text" class="form-control input-default required" name="sssgsis_meta" id="sssgsis_meta" placeholder="SSS / GSIS No." value="<?php echo get_usermeta( $user_id, 'sssgsis' ); ?>">
                                    </div>
                                    <div class="col-md-4"></div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php $phone_number = get_usermeta( $user_id, 'phone_number' ); ?>
                                        <label for="lastname" class="control-label">Phone Number</label>
                                        <input type="text" class="form-control input-default" name="phone_number_meta" id="phone_number_meta" placeholder="Phone Number" value="<?php echo ( $phone_number != '' ? $phone_number : '' ); ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Cell Phone Number</label>
                                        <?php $cell = get_usermeta( $user_id, 'cell_number' ); ?>
                                        <input type="text" class="form-control input-default" name="cell_number_meta" id="cell_number_meta" placeholder="Cell Phone Number" value="<?php echo ( $cell != '' ? $cell : '' ); ?>" disabled>
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="facebook_meta" class="control-label">Facebook Account</label>
                                        <input type="text" class="form-control input-default required" name="facebook_meta" id="facebook_meta" placeholder="Facebook Account" value="<?php echo get_usermeta( $user_id, 'facebook' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="skype_meta" class="control-label">Skype ID</label>
                                        <input type="text" class="form-control input-default required" name="skype_meta" id="skype_meta" placeholder="Skype ID" value="<?php echo get_usermeta( $user_id, 'skype' ); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="present_address_meta" class="control-label">Present Home Address</label>
                                        <input type="text" class="form-control input-default required" name="present_address_meta" id="present_address_meta" placeholder="Present Home Address" value="<?php echo get_usermeta( $user_id, 'present_address' ); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="length_stay_meta" class="control-label">Length of Stay</label>
                                        <input type="text" class="form-control input-default required" name="length_stay_meta" id="length_stay_meta" placeholder="Length of Stay" value="<?php echo get_usermeta( $user_id, 'length_stay' ); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="permanent_address_meta" class="control-label">Permanent Address</label>
                                        <input type="text" class="form-control input-default required" name="permanent_address_meta" id="permanent_address_meta" placeholder="Permanent Address" value="<?php echo get_usermeta( $user_id, 'permanent_address' ); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="residential_status_meta" class="control-label">Residential Status</label>
                                        <select name="residential_status_meta" id="residential_status_meta" class="form-control input-default required">
                                            <option value="0">Please select residential status</option>
                                            <?php $res_arr = array( 'owned', 'rented', 'mortgaged', 'used free', 'others' ); ?>
                                            <?php $res_sta = get_usermeta($user_id, 'residential_status'); ?>
                                            <?php foreach($res_arr as $ra): ?>
                                            <option value="<?php echo $ra; ?>"<?php echo ($res_sta==$ra ? ' selected="selected"' : ''); ?>><?php echo ucwords($ra); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?php $others = get_usermeta($user_id, 'others'); ?>
                                    <div class="col-md-4 others_input<?php echo ($others== '' ? ' hide' : ''); ?>">
                                        <label for="salary_meta" class="control-label">Please specify others</label>
                                        <input type="text" name="others_meta" class="form-control input-default required" placeholder="Please specify others" value="<?php echo $others; ?>">
                                    </div>
                                </div><!-- .row -->
                                <?php $rental_mortgaged = get_usermeta($user_id, 'rental_mortgaged'); ?>
                                <div class="row rented_mortgage_input<?php echo ($rental_mortgaged=='' ? ' hide' : '' ); ?>">
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">If Rented / Mortgaged</label>
                                        <input type="text" name="rental_mortgaged_meta" class="form-control input-default" placeholder="Monthly Rental / Mortgaged" value="<?php echo isset( $rental_mortgaged ) ? $rental_mortgaged : '' ; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label"></label>
                                        <input type="text" name="lessor_mortgagor_meta" class="form-control input-default" placeholder="Lessor / Mortgagor" value="<?php echo isset( $lessor_mortgagor ) ? $lessor_mortgagor : '' ; ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Employer / Business Name</label>
                                        <input type="text" class="form-control input-default required" name="employer_meta" id="employer_meta" placeholder="Employer / Business Name" value="<?php echo get_usermeta($user_id, 'employer'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Month Basic Salary</label>
                                        <input type="text" class="form-control input-default required" name="salary_meta" id="salary_meta" placeholder="Monthly Basic Salary" value="<?php echo get_usermeta($user_id, 'salary'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Office / Business Address</label>
                                        <input type="text" class="form-control input-default required" name="office_address_meta" id="office_address_meta" placeholder="Office / Business Address" value="<?php echo get_usermeta($user_id, 'office_address'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Position in the company</label>
                                        <input type="text" class="form-control input-default required" name="position_meta" id="position_meta" placeholder="Position in the company" value="<?php echo get_usermeta($user_id, 'position'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="office_tel_meta" class="control-label">Office Telephone &amp; Loc. Nos. </label>
                                        <input type="text" class="form-control input-default required" name="office_tel_meta" id="office_tel_meta" placeholder="Office Telephone &amp; Loc. Nos." value="<?php echo get_usermeta($user_id, 'office_tel'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Employment Tenure</label>
                                        <input type="text" class="form-control input-default required" name="tenure_meta" id="tenure_meta" placeholder="Employment Tenure" value="<?php echo get_usermeta($user_id, 'tenure'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="payroll_meta" class="control-label">Payroll Date</label>
                                        <?php $payroll = get_usermeta( $user_id, 'payroll' ); ?>
                                        <input type="text" placeholder="Payroll Date" name="payroll_meta" class="datepicker2 form-control input-default required" value="<?php echo ( isset($payroll) ? reformat_date($payroll) : '' ); ?>">
                                    </div>
                                </div><!-- .row -->

                                <h3>Spouse Information</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="firstname" class="control-label">First Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_firstname_meta" id="spouse_firstname_meta" placeholder="First Name" value="<?php echo get_usermeta($user_id, 'spouse_firstname'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Last Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_lastname_meta" id="spouse_lastname_meta" placeholder="Last Name" value="<?php echo get_usermeta($user_id, 'spouse_lastname'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="middlename" class="control-label">Middle Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_middlename_meta" id="spouse_middlename_meta" placeholder="Middle Name" value="<?php echo get_usermeta($user_id, 'spouse_middlename'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="suffixname_meta" class="control-label">Suffix Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_suffixname_meta" id="spouse_suffixname_meta" placeholder="Suffix Name" value="<?php echo get_usermeta($user_id, 'spouse_suffixname'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firstname" class="col-md-2 control-label">Email</label>
                                        <input type="text" class="form-control input-default" name="spouse_email_meta" id="spouse_email_meta" placeholder="Email" value="<?php echo get_usermeta($user_id, 'spouse_email'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputPassword" class="control-label">Birth Day</label>
                                        <input type="text" placeholder="mm/dd/yyyy" name="spouse_birthday_meta" class="datepicker2 form-control input-default" value="<?php echo get_usermeta($user_id, 'spouse_birthday'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="age_meta" class="control-label">Age</label>
                                        <input type="text" class="form-control input-default" name="spouse_age_meta" id="spouse_age_meta" placeholder="Age" value="<?php echo get_usermeta($user_id, 'spouse_age'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="tax_meta" class="control-label">Tax Identification No.</label>
                                        <input type="text" class="form-control input-default" name="spouse_tax_meta" id="spouse_tax_meta" placeholder="Tax Identification No." value="<?php echo get_usermeta($user_id, 'spouse_tax'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="sssgsis_meta" class="control-label">SSS / GSIS No.</label>
                                        <input type="text" class="form-control input-default" name="spouse_sssgsis_meta" id="spouse_sssgsis_meta" placeholder="SSS / GSIS No." value="<?php echo get_usermeta($user_id, 'spouse_sssgsis'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Phone Number</label>
                                        <input type="text" class="form-control input-default" name="spouse_phone_number_meta" id="spouse_phone_number_meta" placeholder="Phone Number" value="<?php echo get_usermeta($user_id, 'spouse_phone_number'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="control-label">Cell Phone Number</label>
                                        <input type="text" class="form-control input-default" name="spouse_cell_number_meta" id="spouse_cell_number_meta" placeholder="Cell Phone Number" value="<?php echo get_usermeta($user_id, 'spouse_cell_number'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Employer / Business Name</label>
                                        <input type="text" class="form-control input-default" name="spouse_employer_meta" id="spouse_employer_meta" placeholder="Employer / Business Name" value="<?php echo get_usermeta($user_id, 'spouse_employer'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="salary_meta" class="control-label">Month Basic Salary</label>
                                        <input type="text" class="form-control input-default" name="spouse_salary_meta" id="spouse_salary_meta" placeholder="Monthly Basic Salary" value="<?php echo get_usermeta($user_id, 'spouse_salary'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="office_address_meta" class="control-label">Office / Business Address</label>
                                        <input type="text" class="form-control input-default" name="spouse_office_address_meta" id="spouse_office_address_meta" placeholder="Office / Business Address" value="<?php echo get_usermeta($user_id, 'spouse_office_address'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="position_meta" class="control-label">Position in the company</label>
                                        <input type="text" class="form-control input-default" name="spouse_position_meta" id="spouse_position_meta" placeholder="Position in the company" value="<?php echo get_usermeta($user_id, 'spouse_position'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="office_tel_meta" class="control-label">Office Telephone &amp; Loc. Nos. </label>
                                        <input type="text" class="form-control input-default" name="spouse_office_tel_meta" id="spouse_office_tel_meta" placeholder="Office Telephone &amp; Loc. Nos." value="<?php echo get_usermeta($user_id, 'spouse_office_tel'); ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tenure_meta" class="control-label">Employment Tenure</label>
                                        <input type="text" class="form-control input-default" name="spouse_tenure_meta" id="spouse_tenure_meta" placeholder="Employment Tenure" value="<?php echo get_usermeta($user_id, 'spouse_tenure'); ?>">
                                    </div>
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php #$disabled = ( isset($loan_application->status) && $loan_application->status != 0 ? ' disabled' : '' );?>
                                        <button type="submit" class="btn btn-primary<?php #echo $disabled; ?>">Save to Proceed</button> <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
                                    </div>
                                </div>
                            </form><!-- #form1 -->