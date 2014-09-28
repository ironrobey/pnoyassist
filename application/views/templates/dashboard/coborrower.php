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
                            <li><a href="#c-1">Co-borrower</a></li>
                            <li><a href="#c-2">Co-borrower Requirements</a></li>
                            <li><a href="#c-3">Undertaking</a></li>
                            <li><a href="#c-4">Generate Co-borrower Key</a></li>
                        </ul>

                        <div id="c-1">
                            <?php $this->load->view('templates/dashboard/forms/comaker', $profile); ?>
                        </div><!-- #c-1 -->
                        <div id="c-2">
                            <?php $this->load->view('templates/dashboard/forms/comaker-requirements', $profile); ?>
                        </div><!-- #c-2 -->
                        <div id="c-3">
                            <?php $this->load->view('templates/dashboard/forms/comaker-undertaking.php', $profile); ?>
                        </div><!-- #c-4 -->
                        <div id="c-4">
                            <?php $this->load->view('templates/dashboard/forms/borrower-key.php', $profile); ?>
                        </div><!-- #c-4 -->
                        
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
                <button type="submit" class="btn btn-primary">Send Co-borrower Key <img class="loader hide" src="<?php echo site_url( 'assets/images/loaders/loader8.gif' ); ?>" alt=""></button>
            </div>
            </form>
        </div>
    </div>
</div>