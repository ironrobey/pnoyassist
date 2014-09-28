<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('common_css')){

	function common_css(){
        ?>
        <link rel="stylesheet" href="<?php echo site_url( 'assets/css/style.default.css' ); ?>" type="text/css" />
        <?php
	}
}

if ( ! function_exists('common_js')){

    function common_js(){
        ?>
        <script src="<?php echo site_url( 'assets/js/jquery-1.10.2.min.js' ); ?>"></script>
        <script src="<?php echo site_url( 'assets/js/jquery-migrate-1.2.1.min.js' ); ?>"></script>
        <script src="<?php echo site_url( 'assets/js/jquery-ui-1.10.3.min.js' ); ?>"></script>
        <script src="<?php echo site_url( 'assets/js/bootstrap.js' ); ?>"></script>
        <script src="<?php echo site_url( 'assets/js/jquery.uniform.min.js' ); ?>"></script>
        <script src="<?php echo site_url( 'assets/js/modernizr.min.js' ); ?>"></script>
        <?php
    }
}

if ( ! function_exists('parse_css')){
    function parse_css( $styles ){
        foreach( $styles as $style ){
        if( $style!='' || $style!= null ){
        ?>
        <link rel="stylesheet" href="<?php echo site_url( 'assets' ) . '/'. $style; ?>">
        <?php
        }
        }
    }
}

if ( ! function_exists('parse_js')){
    function parse_js( $scripts ){
        foreach( $scripts as $script ){
            if( $script!='' || $script!= null ){ ?>
            <script type="text/javascript" src="<?php echo site_url( 'assets' ) .'/'. $script; ?>?v=1.0"></script>
            <?php
            }
        }
    }
}

if ( ! function_exists('reformat_date')){
    function reformat_date( $raw_date ){

        $year = substr($raw_date, 0, 4);
        $month = substr($raw_date, 4, 2);
        $day = substr($raw_date, 6, 2);
        $new_date = $day.'/'.$month.'/'.$year;

        return $new_date;

    }
}

if ( ! function_exists('image_url')){
    function image_url( $data ){

        if( !$data ){
            return site_url('assets/images/photos/thumb1.png' );
        } elseif( strpos($data,'http') !== 0 ) {
            return site_url('assets/uploads/'.$data);
        } else {
            return $data;
        }

    }
}

if ( ! function_exists('role_name')){
    function role_name( $role_id ){

        switch($role_id){

            case 1:
                $role = 'admin';
            break;

            case 2:
                $role = 'staff';
            break;

            case 3:
                $role = 'members';
            break;

        }

        return $role;

    }
}

if ( ! function_exists('display_e')){
    function display_e( $data, $die = false ){

        echo '<pre>';
        var_dump( $data );
        echo '</pre>';

        if( $die ){
            die();
        }

    }
}

if ( ! function_exists('navigation_display')){
    function navigation_display(){
        $CI =& get_instance();

        $role_name = $CI->uri->segment(1);

        ?>
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
                <li class="nav-header">Navigation</li>
                <li class="active"><a href="<?php echo site_url( $role_name ); ?>"><span class="iconfa-laptop"></span> Dashboard</a></li>
                <li class="dropdown"><a href="#"><span class="iconfa-envelope"></span> Messaging</a>
                    <ul>
                        <li><a href="#">Mailbox</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="<?php echo site_url( $role_name.'/profile' ); ?>"><span class="iconfa-book"></span> Profile</a>
                    <ul>
                        <li><a href="<?php echo site_url( $role_name.'/profile' ); ?>">Edit Profile</a></li>
                        <li><a href="<?php echo site_url( 'logout' ); ?>">Sign Out</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="iconfa-calendar"></span> Calendar</a></li>
                <?php if($CI->uri->segment(1) == 'admin'): ?>
                <li class="dropdown"><a href="<?php echo site_url( $role_name.'/users' ); ?>"><span class="glyphicon glyphicon-user"></span> Users</a>
                    <ul>
                        <li><a href="<?php echo site_url( $role_name.'/users' ); ?>">Website Members</a></li>
                        <li><a href="<?php echo site_url( $role_name.'/pending' ); ?>">Pending Members</a></li>
                        <li><a href="<?php echo site_url( $role_name.'/borrowers' ); ?>">Borrowers</a></li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div><!--leftmenu-->
        <?php
    }
}

if ( ! function_exists('main_navi_display')){
    function main_navi_display(){
        $CI =& get_instance();

        $role_name = $CI->uri->segment(1);

        ?>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a href="<?php echo site_url(); ?>">
                        <span class="head-icon head-home"></span>
                        <span class="headmenu-label">Home</span>
                    </a>
                </li>
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="count">4</span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">Messages</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Messages</li>
                        <li><a href=""><span class="glyphicon glyphicon-envelope"></span> New message from <strong>Jack</strong> <small class="muted"> - 19 hours ago</small></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-envelope"></span> New message from <strong>Jane</strong> <small class="muted"> - 3 days ago</small></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-envelope"></span> New message from <strong>Tanya</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-envelope"></span> New message from <strong>Lee</strong> <small class="muted"> - 1 week ago</small></a></li>
                        <li class="viewmore"><a href="messages.html">View More Messages</a></li>
                    </ul>
                </li>
                <?php if( $role_name == 'admin' ): ?>
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">10</span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">New Users</span>
                    </a>
                    <ul class="dropdown-menu newusers">
                        <li class="nav-header">New Users</li>
                        <li>
                            <a href="">
                                <img src="<?php echo site_url( 'assets/images/photos/thumb1.png' ); ?>" alt="" class="userthumb" />
                                <strong>Draniem Daamul</strong>
                                <small>April 20, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?php echo site_url( 'assets/images/photos/thumb2.png' ); ?>" alt="" class="userthumb" />
                                <strong>Shamcey Sindilmaca</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?php echo site_url( 'assets/images/photos/thumb3.png' ); ?>" alt="" class="userthumb" />
                                <strong>Nusja Paul Nawancali</strong>
                                <small>April 19, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?php echo site_url( 'assets/images/photos/thumb4.png' ); ?>" alt="" class="userthumb" />
                                <strong>Rose Cerona</strong>
                                <small>April 18, 2013</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?php echo site_url( 'assets/images/photos/thumb5.png' ); ?>" alt="" class="userthumb" />
                                <strong>John Doe</strong>
                                <small>April 16, 2013</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">1</span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">Loans</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header"><a href="<?php echo site_url( 'members/loans' ); ?>">Loan Application</a></li>
                        <li class="nav-header"><a href="<?php echo site_url( 'members/coborrower' ); ?>">Co-borrower Application</a></li>
                    </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="<?php echo image_url( $CI->session->userdata('profile_image') ); ?>" height="85" />
                        <div class="userinfo">
                            <h5><?php echo ucwords( $CI->session->userdata('firstname').' '.$CI->session->userdata('lastname') ); ?> <!-- small>- juan@themepixels.com</small --></h5>
                            <ul>
                                <li><a href="<?php echo site_url( $role_name.'/profile' ); ?>">Edit Profile</a></li>
                                <li><a href="<?php echo site_url( 'logout' ); ?>">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
        <?php
    }
}

if ( ! function_exists('getBorrowerDetails')){
    function getBorrowerDetails($comaker){

        $CI =& get_instance();
        $CI->load->model('m_common');
        return $CI->m_common->getComaker( $comaker );

    }
}

if( !function_exists('display_footer') ){
    function display_footer(){
        $CI =& get_instance();
        ?>
        <div class="mar-top-40 con-case" style="">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <p>© 2014 PinoyAssist. All rights reserved.</p>
                        <address>
                        <b>Address:</b><br>
                        <p>SUITE G, ANSUYA ESTATE, REVOLUTION AVE.<br>
                        VICTORIA, MAHE, SEYCHELLES<br>
                        <abbr title="Phone Landline">P:</abbr> + 1 617 244 2627</p>

                        <p>PRIME ESTEEM SERVICES, INC <br>
                        Outsourcing Partner, Philippines<br>
                        27th Floor, BPI Buendia Centre 372 Sen. Gil Puyat Avenue Makati City, Philippines<br>
                        <abbr title="Phone Landline">P:</abbr> +63 2 464 9043</p>
                    </div>
                    <div class="col-md-2">
                        <p><big>PinoyAssist</big></p>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url( 'about' ); ?>">Who we are</a></li>
                            <li><a href="<?php echo site_url( 'what_we_offer' ); ?>">What we offer</a></li>
                        </ul>
                    
                        <p><big>Legal</big></p>
                        <ul>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <p><big>iLoan</big></p>
                        <ul>
                            <li><a href="<?php echo site_url( 'educational_loan' ); ?>">Educational Loan</a></li>
                            <li><a href="<?php echo site_url( 'medical_loan'); ?>">Medical Loan</a></li>
                            <li><a href="<?php echo site_url( 'home_repair_loan'); ?>">Home Repair Loan</a></li>
                            <li><a href="<?php echo site_url( 'business_loan'); ?>">Business Loan</a></li>
                            <li><a href="<?php echo site_url( 'moving_and_relocation_loan'); ?>">Moving and Relocation Loan</a></li>
                            <li><a href="<?php echo site_url( 'leisure_loan'); ?>">Leisure Loan</a></li>
                            <li><a href="<?php echo site_url( 'anything_loan'); ?>">Anything Loan</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <p><big>Support</big></p>
                        <ul>
                            <li><a href="<?php echo site_url( 'contact' ); ?>">Contact Us</a></li>
                            <li><a href="<?php echo site_url( 'loan_procedure' ); ?>">Loan Procedure</a></li>
                            <li><a href="<?php echo site_url( 'faqs' ); ?>">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="hidden-xs navbar navbar-default footer-nav navbar-fixed-bottom stickyFooter">
            <div class="container">    
                <ul class="nav navbar-nav navbar-left">
                    <li class="loan-facebook"><a href="https://www.facebook.com/pinoy.assist" target="_blank"><span class="fa fa-facebook"></span> follow us on Facebook</a></li>
                    <li class="loan-procedure"><a href="<?php echo site_url( 'loan_procedure' ); ?>">LOAN PROCEDURE</a></li>
                    <li class="loan-calculator"><a href="#">LOAN CALCULATOR</a></li>
                    <li class="loan-faqs"><a href="#">FAQs</a></li>
                    <li class="loan-form"><a href="<?php echo site_url( 'registration' ); ?>">Apply Now</a></li>
                </ul>     
            </div>
        </div> 

        <?php
    }
}

if( !function_exists('display_header')){
    function display_header(){
        $CI =& get_instance();
        $a = '';
        $b = '';
        $c = '';
        $d = '';
        switch( $CI->uri->segment(1) ){
            case 'contact':
                $d = ' class="active"';
            break;

            case 'what_we_offer':
                $c = ' class="active"';
            break;

            case 'about':
                $b = ' class="active"';
            break;
        }
        ?>
        <div class="navbar navbar-default header-nav">
            <section class="container">
                <div class="row">
                    <section class="navbar-header">
                    <span class="visible-xs pull-left logoSmall"><a href="#" class="float-left"><img src="<?php echo site_url( 'assets/images/logo-icon.png' ); ?>"></a></span>
                    <button class="navbar-toggle pull-right" data-toggle ="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </section>
                    <section class="mobileMenuCollapse collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="logo-icon"><img src="<?php echo site_url( 'assets/images/logo-icon.png' ); ?>"></li>
                            <li<?php echo $a; ?>><a href="<?php echo site_url(); ?>">HOME</a></li>
                            <li<?php echo $b; ?>><a href="<?php echo site_url( 'about' ); ?>">WHO WE ARE</a></li>
                            <li<?php echo $c; ?>><a href="<?php echo site_url( 'what_we_offer' ); ?>">WHAT WE OFFER</a></li>
                            <li<?php echo $d; ?>><a href="<?php echo site_url( 'contact' ); ?>">CONTACT US</a></li>
                        </ul>
                        <div class="pull-right">
                            <?php if( $CI->session->userdata('login_data') ): ?>
                                <?php $login_data = $CI->session->userdata( 'login_data' ); ?>
                                <?php 
                                    switch( $login_data['role'] ): 
                                        case 1:
                                            $uri = 'admin';
                                        break;
                                        case 2:
                                            $uri = 'staff';
                                        break;
                                        case 3:
                                            $uri = 'members';
                                        break;
                                    endswitch;
                                ?>
                            <a href="<?php echo site_url( $uri ); ?>" class="navbar-btn btn-warning btn">My Account</a>
                            <a href="<?php echo site_url( 'logout' ); ?>" class="navbar-btn btn-warning btn">Logout</a>
                            <?php else: ?>
                            <a href="<?php echo site_url( 'registration' ); ?>" class="navbar-btn btn-warning btn">JOIN US</a>
                            <a href="<?php echo site_url( 'login' ); ?>" class="navbar-btn btn-warning btn">SIGN IN</a>
                            <?php endif; ?>
                        </div>
                    </section>
                </div>
            </section>
        </div>
        <?php
    }
}
