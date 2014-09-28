<?php display_header(); ?>

<div class="container hidden-xs">
    <div class="mar-top-20">
        <h1 class="logo pull-left"><a href="">keyword</a></h1>
        <p class="pull-right tel-num">CALL +63 2 464 9043</p>
    </div>
</div>

<section class="mar-top-15 case-rotating-image">
    <div class="container rotating-image">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo site_url( 'assets/images/sample1.png' ); ?>" alt="First slide">
                    <div class="carousel-caption hidden-xs"><!--caption here--></div>
                </div>
                <div class="item">
                    <img src="<?php echo site_url( 'assets/images/home_banner2.jpg' ); ?>" alt="Second slide">
                    <div class="carousel-caption hidden-xs"><!--caption here--></div>
                </div>
                <div class="item">
                    <img src="<?php echo site_url( 'assets/images/home_banner3.jpg' ); ?>" alt="Third slide" usemap="#joinnow">
                    <div class="carousel-caption hidden-xs"><!--caption here--></div>
                </div>
            </div>
            <a class="carousel-control left" href="#carousel-example-generic" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#carousel-example-generic" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    <map name="joinnow">
       <area shape="rect" coords="568,300,695,331" alt="Join Now" href="<?php echo site_url( 'assets/files/PinoyAssist-MarketingPartner_ApplicationForm2.pdf' ); ?>" target="_blank" />
    </map>
</section>
<div class="slideShadow"></div>

<div class="container call-to-actions mar-top-80">
	<section class="row">
    	<div class="col-md-4">
        	<img src="<?php echo site_url( 'assets/images/action-calc.png' ); ?>" alt="What is a PinoyAssist Points" title="What is a PinoyAssist Points" />
        	<h3>What is a PinoyAssist Points?</h3>
        </div>
        <div class="col-md-4">
        	<img src="<?php echo site_url( 'assets/images/action-easy.png' ); ?>" alt="It's so easy" title="It's so easy" />
        	<h3>It's so easy!</h3>
        </div>
        <div class="col-md-4">
        	<img src="<?php echo site_url( 'assets/images/action-qna.png' ); ?>" alt="Frequently Asked Questions" title="Frequently Asked Questions" />
        	<h3>Frequently Asked Questions</h3>
        </div>
    </section>
</div>

<div class="jumbotron mar-top-80">
	<center>
	<h2>What is PinoyAssist?</h4>
    <p>We are an online organization that provides prudent and progressive-minded 
Filipinos the opportunity to improve their current standing or goals towards 
upward mobility. </p>
	<a href="<?php echo site_url( 'registration' ); ?>" class="btn btn-success btn-lg">Join Now!</a>
    </center>
</div>

<?php display_footer(); ?>

<div class="modal fade" id="contact" role="dialog">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<form class="form-horizontal" action="#" method="POST">
        	<div class="modal-header">
            	<h4>Contact tech site</h4>
            </div>
            <div class="modal-body">
            	<div class="form-group">
                	<label for="contact-name" class=" col-lg-2 control-label">Name</label>
                    <div class=" col-lg-10">
                    	<input type="text" class="form-control" id="contact-name" placeholder="name" />
                    </div>
                </div>
                <div class="form-group">
                	<label for="contact-email" class=" col-lg-2 control-label">Name</label>
                    <div class=" col-lg-10">
                    	<input type="email" class="form-control" id="contact-email" placeholder="your@example.com" />
                    </div>
                </div>
                <div class="form-group">
                	<label for="contact-message" class=" col-lg-2 control-label">Name</label>
                    <div class=" col-lg-10">
                    	<textarea class="form-control" id="contact-message"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            	<a class="btn btn-default" data-dismiss="modal">close</a>
            </div>
            </form>
        </div>
    </div>
</div>