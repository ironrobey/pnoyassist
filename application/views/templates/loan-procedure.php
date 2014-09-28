<?php display_header(); ?>

<ul class="breadcrumbs container">
    <li><a href="<?php echo site_url(); ?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
    <li>Loan Procedure</li>
</ul>

<div class="pageheader container">
    <div class="pageicon"><span class="iconfa-money"></span></div>
    <div class="pagetitle">
        <h5>how to apply?</h5>
        <h1>Loan Procedure</h1>
    </div>
</div><!--pageheader-->    
    
<div class="container mar-top-80">
    <ul style="list-style-type: none;">
       <li><span class="iconfa-ok"></span> Register to our website </li>
       <li><span class="iconfa-ok"></span>  Complete the Loan Application Form then submit</li>
       <li><span class="iconfa-ok"></span>   Notification of loan approval, 24 hours after Skype interview</li>
       <li><span class="iconfa-ok"></span>  Release of Loan, 24 to 48 hours after loan notification </li>
       <li><span class="iconfa-ok"></span> Speak with our PA Advisor at +63 2 781-2261 / +63 2 861-1364 / +63 917 530-8022 for any questions/concerns </li>
   </ul>
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