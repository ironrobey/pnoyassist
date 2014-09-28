<?php display_header(); ?>

<ul class="breadcrumbs container">
    <li><a href="<?php echo site_url(); ?>"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
    <li>Contact Us</li>
</ul>

<div class="pageheader container">
    <div class="pageicon"><span class="iconfa-envelope"></span></div>
    <div class="pagetitle">
        <h5>INQUIRE NOW!</h5>
        <h1>Contact Us</h1>
    </div>
</div><!--pageheader-->    
    

<div class="container mar-top-80">
    <section class="row">
        <div class="col-lg-6">
            
            <div class="form-data">
                <form class="form-horizontal contact-frm" method="POST">
                    <div class="form-group">
                            <label for="contactName" class=" col-lg-3 control-label">Name</label>
                        <div class=" col-lg-7">
                            <input type="text" class="form-control" name="contactName" placeholder="name" required />
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="contactEmail" class=" col-lg-3 control-label">Email</label>
                        <div class=" col-lg-7">
                            <input type="email" class="form-control" name="contactEmail" placeholder="your@example.com" data-error="Bruh, that email address is invalid" required />
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="contactNumber" class=" col-lg-3 control-label">Contact Number</label>
                        <div class=" col-lg-7">
                            <input type="number" pattern="[0-9.]*" class="form-control" name="contactNumber"  required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactMessage" class=" col-lg-3 control-label">Message</label>
                        <div class=" col-lg-7">
                            <textarea class="form-control" id="contactMessage" name="contactMessage" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-lg-7">
                            <button type="submit" id="sendInquiry" name="submit" class="btn btn-primary">Submit</button> 
                        </div>
                    </div>
                </form>
            </div><!-- #form dada -->
        </div>
        <div class="col-lg-6">
            <address>
                <strong>Address:</strong><br>
                <p>SUITE G, ANSUYA ESTATE, REVOLUTION AVE.<br>
                VICTORIA, MAHE, SEYCHELLES<br>
                <abbr title="Phone Landline">P:</abbr> + 1 617 244 2627</p>

                <p>PRIME ESTEEM SERVICES, INC <br>
                Outsourcing Partner, Philippines<br>
                27th Floor, BPI Buendia Centre 372 Sen. Gil Puyat Avenue Makati City, Philippines<br>
                <abbr title="Phone Landline">P:</abbr> +63 2 464 9043</p>
                <p><abbr title="Fax">F:</abbr> +63 2 464 9001</p>
                <p><abbr title="Mobile">M:</abbr> +63 915 927-7648</p>
                
                
                <p><label>Speak with: </label>
	Our PA Advisor</p>
<p><label>Office Hours: </label>
	Mondays to Saturdays, 830 am to 6 pm</p>
            </address>
        </div>
    </section>  
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