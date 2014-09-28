<div class="loginpanel">
    <div class="loginpanelinner">

        <div class="logo">PINOY ASSIST</div>
        
        <form id="forgotPasswordForm" action="#" method="post">
            
            <?php if( !$exists ): ?>
            <div class="alert alert-success" role="alert">
                <p style="text-align: center;">Change Password session has expired,<br> please resend change password session.</p>
            </div>
            <div style="text-align: center;"><a href="<?php echo site_url( 'login/forgot_password' ); ?>" style="color: #fff;width: 100%;" class="btn btn-warning">Click Here to resend Password key</a></div>
            <?php else: ?>
            <input type="hidden" name="password_key" value="<?php echo $this->uri->segment(3); ?>">
            <div class="inputwrapper animate1 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter new password" />
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="password" name="repassword" id="repassword" placeholder="Re-type password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit" id="savePassword">Save New Password</button>
            </div>
            <?php endif; ?>
        </form>
        
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2013. PinoyAssist. All Rights Reserved.</p>
</div>