<form id="form5" class="form-horizontal" role="form">
    <label for="lastname" class="control-label">Contact Person in case of emergency</label><br>
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="emergency_contact_1_name_meta" placeholder="Name" value="<?php echo get_usermeta( $user_id, 'emergency_contact_1_name' ); ?>">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control input-default required" name="emergency_contact_1_relationship_meta" placeholder="Relationship" value="<?php echo get_usermeta( $user_id, 'emergency_contact_1_relationship' ); ?>">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control input-default required" name="emergency_contact_1_address_meta" placeholder="Address" value="<?php echo get_usermeta( $user_id, 'emergency_contact_1_address' ); ?>">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="emergency_contact_1_contact_no_meta" placeholder="Contact No." value="<?php echo get_usermeta( $user_id, 'emergency_contact_1_contact_no' ); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="emergency_contact_2_name_meta" placeholder="Name" value="<?php echo get_usermeta( $user_id, 'emergency_contact_2_name' ); ?>">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control input-default required" name="emergency_contact_2_relationship_meta" placeholder="Relationship" value="<?php echo get_usermeta( $user_id, 'emergency_contact_2_relationship' ); ?>">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control input-default required" name="emergency_contact_2_address_meta" placeholder="Address" value="<?php echo get_usermeta( $user_id, 'emergency_contact_2_address' ); ?>">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="emergency_contact_2_contact_no_meta" placeholder="Contact No." value="<?php echo get_usermeta( $user_id, 'emergency_contact_2_contact_no' ); ?>">
        </div>
    </div>

    <label for="lastname" class="control-label">Parent Information</label><br>
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="parent_1_name_meta" placeholder="Name" value="<?php echo get_usermeta( $user_id, 'parent_1_name' ); ?>">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control input-default required" name="parent_1_living_deceased_meta" placeholder="Living / Deceased" value="<?php echo get_usermeta( $user_id, 'parent_1_living_deceased' ); ?>">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control input-default required" name="parent_1_address_meta" placeholder="Address" value="<?php echo get_usermeta( $user_id, 'parent_1_address' ); ?>">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="parent_1_contact_no_meta" placeholder="Contact No." value="<?php echo get_usermeta( $user_id, 'parent_1_contact_no' ); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="parent_2_name_meta" placeholder="Name" value="<?php echo get_usermeta( $user_id, 'parent_2_name' ); ?>">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control input-default required" name="parent_2_living_deceased_meta" placeholder="Living / Deceased" value="<?php echo get_usermeta( $user_id, 'parent_2_living_deceased' ); ?>">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control input-default required" name="parent_2_address_meta" placeholder="Address" value="<?php echo get_usermeta( $user_id, 'parent_2_address' ); ?>">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="parent_2_contact_no_meta" placeholder="Contact No." value="<?php echo get_usermeta( $user_id, 'parent_2_contact_no' ); ?>">
        </div>
    </div>

    <label for="lastname" class="control-label">Personal References</label><br>
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="personal_reference_1_name_meta" placeholder="Name" value="<?php echo get_usermeta( $user_id, 'personal_reference_1_name' ); ?>">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control input-default required" name="personal_reference_1_company_meta" placeholder="Company" value="<?php echo get_usermeta( $user_id, 'personal_reference_1_company' ); ?>">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control input-default required" name="personal_reference_1_address_meta" placeholder="Address" value="<?php echo get_usermeta( $user_id, 'personal_reference_1_address' ); ?>">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="personal_reference_1_contact_no_meta" placeholder="Contact No." value="<?php echo get_usermeta( $user_id, 'personal_reference_1_contact_no' ); ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="personal_reference_2_name_meta" placeholder="Name" value="<?php echo get_usermeta( $user_id, 'personal_reference_2_name' ); ?>">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control input-default required" name="personal_reference_2_company_meta" placeholder="Company" value="<?php echo get_usermeta( $user_id, 'personal_reference_2_company' ); ?>">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control input-default required" name="personal_reference_2_address_meta" placeholder="Address" value="<?php echo get_usermeta( $user_id, 'personal_reference_2_address' ); ?>">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-default required" name="personal_reference_2_contact_no_meta" placeholder="Contact No." value="<?php echo get_usermeta( $user_id, 'personal_reference_2_contact_no' ); ?>">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary<?php echo ( isset($status) && $status != 0 ? ' disabled' : '' );?>">Save to Proceed</button> <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
        </div>
    </div>
</form>