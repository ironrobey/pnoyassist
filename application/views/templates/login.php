<div class="loginpanel">
    <div class="loginpanelinner">
        <div style="text-align: center;"><a href="<?php echo site_url(); ?>" style="color: #fff;width: 100%;" class="btn btn-warning">Click Here to go back to homepage</a></div>

        <div class="logo">PINOY ASSIST</div>
        
        <div class="animate0 bounceIn login-fb">
        <?php if( $this->uri->segment(2) == 'exists' ): ?>
        <p>Doesn't Exists in our database.</p>
        <?php endif; ?>
        
        <a href="<?php echo $this->facebook->get_login_url(); ?>" class="btn btn-facebook btn-lg" style="width: 100%"><i class="fa fa-facebook pull-left"></i> Sign in with Facebook</a>
        </div>
        <center style="margin-bottom: 20px;"><a class="btn btn-default the-or">OR</a></center>
        <form id="loginForm" action="#" method="post">
            
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="email" name="email" id="username" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter any password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit" id="login">Sign In</button>
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <div class="pull-right">Forgot Password? <a href="<?php echo site_url( 'login/forgot_password' ); ?>">Click Here</a></div>
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <div class="pull-right">Not a member? <a href="<?php echo site_url( 'registration' ); ?>">Sign Up</a></div>
            </div>
            
        </form>
        
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2013. PinoyAssist. All Rights Reserved.</p>
</div>