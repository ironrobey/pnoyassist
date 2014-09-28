<div id="mainwrapper" class="mainwrapper">
    <?php $spouseData = getOthersViaPrincipal( $this->session->userdata('login_data')['user_id'], 'spouse' ); ?>
    <?php $comakerData = getOthersViaPrincipal( $this->session->userdata('login_data')['user_id'], 'comaker' ); ?>

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
                <p class="progress_message">You are <span class="percent">0</span>% in completing this form</p>
                <div class="row">
                    <input type="hidden" name="loan_status" value="<?php echo (isset($loan_application->status) ? $loan_application->status : '' ); ?>">

                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>

                    <p id="completed_application" class="hide">
                        You are now ready to submit this application for further checking of our staff. 
                        <a href="#" class="submit_completed_application btn btn-success">Submit completed Application</a>
                        <br><br>
                    </p>

                    <?php if(isset($loan_application->status) && $loan_application->status != 0): ?>
                        
                        <p id="completed_application">
                            You have submitted your loan application. An agent will contact you for further verification. Thank you!
                            <br><br>
                        </p>                        

                    <?php endif; ?>


                    <div class="tabbedwidget">
                        <ul>
                            <li><a href="#c-7">Principal Requirements</a></li>
                            <li><a href="#c-2">Loan Information</a></li>
                            <li><a href="#c-1">Borrower</a></li>
                            <?php if( isset($loan_application->comaker) && $loan_application->comaker ): ?>
                            <li><a href="#c-3">Comaker</a></li>
                            <li><a href="#c-4">Comaker Requirements</a></li>
                            <?php else: ?>
                            <li><a href="#c-8">Enter Coborrower Key</a></li>
                            <?php endif; ?>
                            <li><a href="#c-5">Other References</a></li>
                            <li><a href="#c-6">Undertaking</a></li>
                        </ul>

                        <div id="c-1">
                            <?php $this->load->view('templates/dashboard/forms/primary', $profile); ?>
                        </div><!-- #c-1 -->
                        <div id="c-2">
                            <?php $this->load->view('templates/dashboard/forms/secondary', isset( $loan_application ) ? $loan_application : array() ); ?>
                        </div><!-- #c-2 -->
                        <?php if( isset($loan_application->comaker) && $loan_application->comaker ): ?>
                        <div id="c-3">
                            <?php $this->load->view('templates/dashboard/forms/third', $loan_application); ?>
                        </div><!-- #c-3 -->
                        <div id="c-4">
                            <?php $this->load->view('templates/dashboard/forms/fourth', $loan_application); ?>
                        </div><!-- #c-4 -->
                        <?php else : ?>
                        <div id="c-8">
                            <?php $this->load->view('templates/dashboard/forms/eight', $loan_application); ?>
                        </div><!-- /#c-3 -->
                        <?php endif; ?>
                        <div id="c-5">
                            <?php $this->load->view('templates/dashboard/forms/fifth', $profile); ?>
                        </div><!-- #c-5 -->
                        <div id="c-6">
                            <?php $this->load->view('templates/dashboard/forms/sixth', $loan_application); ?>
                        </div><!-- #c-6 -->
                        <div id="c-7">
                            <?php $this->load->view('templates/dashboard/forms/seventh', $loan_application); ?>
                        </div><!-- #c-7 -->


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