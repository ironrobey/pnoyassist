<?php display_header(); ?>
<div class="container">
    <h4 class="widgettitle title-inverse"><i class="iconsweets-calculator"></i> Educational Loan Calculator</h4>   
    <div class="pargroup">        
        <div class="row">            
            <div class="col-md-6">                 
                <div class="par">                    
                    <p><a class="btn btn-success" href=""><i class="iconfa-money"></i> Amount of Loan Desire: <strong> &#8369; <span id="amount4" class="color069"></span></strong>                        </a>                    </p>                    
                    <div id="slider4" style="margin-top:25px"></div>
                </div>            
            </div>            
            <div class="col-md-6">                  
                <div class="par">                    
                    <p>                        <a class="btn btn-success" href="">                            <i class="iconfa-calendar"></i> Length of loan: <strong><span id="amount5" class="color069"></span></strong>                        </a>                    </p> 
                    <div id="slider5" style="margin-top:25px"></div>                
                </div>             
            </div>            
            <div class="col-md-12">                
                <p style="padding:0 10px;">Monthly Business Loan Payment: &#8369; <span id="monthlypayment" class="color069"></span></p>            
            </div>        
        </div>    
    </div>
</div> 
<div class="container">    
    <h1>What is an educational loan?</h1> 
    <p style=" color: #0067b1;font-size: 25px;font-weight: bold;font-family: Oswald; line-height: 30px;">PinoyAssist offers educational loans to help defray costs of tuition and other school related expenses. </p>   
    <p><big><b>TOGETHER we can come up with a solution!</b></big></p>       
    <ul class="list-loan">    
        <li><span class="btn btn-info"><b>1.</b></span> Use the calculator above and determine how much you need.</li> 
        <li><span class="btn btn-danger"><b>2.</b></span> <a href="<?php echo site_url( 'registration' ); ?>" class="text-primary"><u>Register</u></a> with PA</li>    
        <li><span class="btn btn-warning"><b>3.</b></span> Build your points by adding all your personal and social information.</li>    
        <li><span class="btn btn-inverse"><b>4.</b></span>  Fill out the application online</li>  
        <li><span class="btn btn-primary"><b>5.</b></span>  Submit all requirements</li> 
        <li><span class="btn btn-success"><b>6.</b></span>  Click SUBMIT and we will do the rest!</li>  
    </ul>
</div>   
<div class="jumbotron mar-top-15" style="margin-bottom:0;padding-bottom: 20px"> 
    <center>   
        <p><a class="applyNow"  href="<?php echo site_url('registration'); ?>">Apply Now!  <i class="fa fa-caret-right fa-lg fa-2x blink"></i></a></p>   
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