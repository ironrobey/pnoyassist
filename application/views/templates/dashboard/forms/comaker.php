                            <form id="form3" class="form-horizontal" role="form">
                                <input type="hidden" name="user_id" value="<?php echo ( isset( $user_id ) ? $user_id : '' ); ?>">
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
                                </div><!-- .row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php #$disabled = ( isset($status) && $status != 0 ? ' disabled' : '' );?>
                                        <button type="submit" class="btn btn-primary<?php #echo $disabled; ?>">Save to Proceed</button> <img class="loader hide" src="<?php #echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
                                    </div>
                                </div>
                            </form>