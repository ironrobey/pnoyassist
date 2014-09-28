<div id="mainwrapper" class="mainwrapper">

    <?php $role_name = role_name( $this->session->userdata( 'login_data' )['role'] ); ?>
    
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
            <li><a href="<?php echo site_url( $role_name ); ?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Dashboard</li>
        </ul>
        
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5>All Features Summary</h5>
                <h1><?php echo ucwords( $this->uri->segment(1) ); ?> Dashboard</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row">
                    <div id="dashboard-left" class="col-md-8">
                        
                        <?php if($this->session->userdata('login_data')['role'] == 1 ): ?>
                        
                        <h4 class="widgettitle"><span class="glyphicon glyphicon-comment glyphicon-white"></span> Submitted Applications</h4>
                        <div class="widgetcontent nopadding">
                            <ul class="commentlist">
                                <?php if(count($applications) >  0): ?>
                                <?php foreach( $applications as $application ): ?>
                                <li>

                                    <img src="<?php echo image_url( get_usermeta( $application->user_id, 'profile_image' ) ); ?>" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4><a href="<?php echo site_url( 'admin/loan/'.$application->loan_application_id ); ?>"><?php echo get_usermeta( $application->user_id, 'firstname' ); ?> <?php echo get_usermeta( $application->user_id, 'lastname' ); ?></a></h4>
                                        <h5>Purpose: <?php echo $application->purpose; ?></h5>
                                        <h5>Loan Amount: <?php echo $application->desired_loan_amount; ?>, 000</h5>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                <?php else: ?>
                                <li>
                                    No Submitted Application as of yet.
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        
                        <br />

                        <?php else : ?>

                        <h4 class="widgettitle"><span class="glyphicon glyphicon-comment glyphicon-white"></span> Recent Comments</h4>
                        <div class="widgetcontent nopadding">
                            <ul class="commentlist">
                                <li>
                                    <img src="images/photos/thumb2.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4><a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h4>
                                        <h5>in <a href="">Sit Voluptatem</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                        <p>
                                            <a href="" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-thumbs-up glyphicon-white"></span> Approve</a>
                                            <a href="" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-down"></span> Reject</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/photos/thumb1.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4><a href="">But I must explain to you how all this mistaken</a></h4>
                                        <h5>in <a href="">At vero eos et accusamus et iusto odio dignissimos</a></h5>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                        <p>
                                            <a href="" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-thumbs-up glyphicon-white"></span> Approve</a>
                                            <a href="" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-down"></span> Reject</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/photos/thumb10.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4><a href="">On the other hand, we denounce with righteous indignation</a></h4>
                                        <h5>in <a href="">These cases are perfectly simple and easy to distinguish</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
                                        <p>
                                            <a href="" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-thumbs-up glyphicon-white"></span> Approve</a>
                                            <a href="" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-down"></span> Reject</a>
                                        </p>
                                    </div>
                                </li>
                                <li><a href="">View More Comments</a></li>
                            </ul>
                        </div>
                        
                        <br />

                        <?php endif; ?>
                        
                    </div><!--col-md-8-->
                    
                    <div id="dashboard-right" class="col-md-4">
                        
                        <h5 class="subtitle">Announcements</h5>
                        
                        <div class="divider15"></div>
                        
                        <div class="alert alert-block">
                              <button data-dismiss="alert" class="close" type="button">&times;</button>
                              <h4>Warning!</h4>
                              <p style="margin: 8px 0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna.</p>
                        </div><!--alert-->
                        
                        <br />
                        
                        <h4 class="widgettitle">Event Calendar</h4>
                        <div class="widgetcontent nopadding">
                            <div id="datepicker"></div>
                        </div>
                    
                                                
                    </div><!-- col-md-4 -->
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
