<?php $other_purpose_meta = (isset($loan_application_id) ? get_loanmeta($loan_application_id, 'other_purpose') : '' ); ?>
<?php $other_desired_meta = (isset($loan_application_id) ? get_loanmeta($loan_application_id, 'other_desired') : '' ); ?>
<?php $purpose_arr = array( 'Appliance', 'Hospitalisation / Medical', 'Personal Use', 'Education', 'Others' ); ?>
<?php $desired_arr = array( '15', '20', '25', '30', '35', '40', '45', '50', 'others' ); ?>
<form id="form2" class="loan-information form-horizontal" role="form" novalidate="novalidate">
    <input type="hidden" name="application_id" value="<?php echo (isset($loan_application_id) ? $loan_application_id : '' ); ?>">
    <input type="hidden" name="comaker" value="<?php #echo $comaker; ?>">
    <p>
        <label for="purpose">What is the purpose of the loan?</label><br>
        <select name="purpose" id="purpose" class="form-control required">
            <option value="0">Purpose of the loan</option>
            <?php foreach( $purpose_arr as $pr ): ?>
            <option value="<?php echo $pr; ?>"<?php echo ( isset($purpose) && $pr == $purpose ? ' selected="selected"' : '')?>><?php echo $pr; ?></option>
        <?php endforeach; ?>
    </select>
</p>
<br>
<div class="purpose_input form-group<?php echo ($other_purpose_meta== '' ? ' hide' : '' ); ?>">
    <div class="col-md-12">
        <input type="text" class="form-control input-default" name="other_purpose_meta" id="others_meta" placeholder="Please specify other desired amount purpose of loan" value="<?php echo $other_purpose_meta; ?>">
    </div>
</div>
<p>
    <label for="loan_amount">Desired Loan Amount</label><br>
    <select name="loan_amount" id="loan_amount" class="form-control required">
        <option value="0">Desired Loan Amount</option>
        <?php foreach ($desired_arr as $dr) : ?>
        <option value="<?php echo $dr; ?>"<?php echo (isset($desired_loan_amount) && $desired_loan_amount == $dr ? ' selected="selected"' : '' ); ?>>Php <?php echo $dr; ?>,000</option>
    <?php endforeach; ?>
</select>
</p>
<br>
<div class="amount_input form-group<?php echo ( $other_desired_meta=='' ? ' hide' : '' ); ?>">
    <div class="col-md-12">
        <input type="text" class="form-control input-default" name="other_desired_meta" id="others_meta" placeholder="Please specify other desired amount" value="<?php echo $other_desired_meta;?>">
    </div>
</div>
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary<?php echo ( isset($status) && $status != 0 ? ' disabled' : '' );?>">Save to Proceed</button> <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt="">
    </div>
</div>
</form>