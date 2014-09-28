<?php display_header(); ?>
<ul class="breadcrumbs container">    
	<li><a href="index.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>    
	<li>About Us</li>
</ul>
<div class="pageheader container">    
	<div class="pageicon"><span class="iconfa-user"></span></div>    
	<div class="pagetitle">        
		<h5>WHO WE ARE</h5>        
		<h1>About Us</h1>    
	</div>
</div><!--pageheader-->        
<div class="container mar-top-15">    
	<div class="jumbotron" style="padding-bottom: 10px; padding-top: 10px;">        
		<center>            
			<p style="margin:0;line-height: 45px;font-family: Oswald; line-height: 27px">OUR MAIN OBJECTIVE IS TO HELP IMPROVE YOUR CURRENT FINANCIAL STANDING BY WAY OF THE DIFFERENT PRODUCTS WE OFFER.</p>        
		</center>    
	</div>    
	<div class="row mar-top-40">        
		<div class="col-md-6">            
			<h2 class="text-primary"><big>PinoyAssist</big></h2>             
			<p><big>Established to provide a variety of services to the Filipino people and businesses.</big></p>        
		</div>        
		<div class="col-md-4">            
			<center><img src="<?php echo site_url( 'assets/images/pa.png' ); ?>"></center>        
		</div>    
	</div>        
	<p class="mar-top-40"><big>We are staffed with qualified and experienced personnel we call PA Advisors.</big></p>
	<p><big>Trust that we will work to help you meet your end goal while keeping your best interests at heart.</big></p>
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