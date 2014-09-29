<?php display_header(); ?>
<div class="container">
  <h4 class="widgettitle title-inverse bold">Anything Loan Calculator</h4>
  <div class="pargroup">
    <div class="row">
      <div class="col-md-6">
        <div class="par">
          <p>
            <a class="btn btn-success" href="">
              <i class="iconfa-money"></i> Amount of Loan Desired: <strong> &#8369; <span id="amount4" class="color069"></span></strong>
            </a>
          </p>
          <div id="slider4" style="margin-top:25px"></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="par">
          <p>
            <a class="btn btn-success" href="">
              <i class="iconfa-calendar"></i> Length of loan: <strong><span id="amount5" class="color069"></span></strong>
            </a>
          </p>
          <div id="slider5" style="margin-top:25px"></div>
        </div>
      </div>
      <div class="col-md-12">
        <p  class="color069" style="padding:0 10px;">Monthly Business Loan Payment: <span style="color: #0067b1">&#8369;</span> <span id="monthlypayment" class="color069"></span></p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-9">
      <h1>What is Anything Loan?</h1>

      <p style=" color: #0067b1;font-size: 25px;font-weight: bold;font-family: Oswald; line-height: 30px;">THIS IS A UNIQUE LENDING SOLUTION THAT ALLOWS CUSTOMERS TO BORROW FUNDS FOR JUST ABOUT ANYTHING!</p>

      <p><big><b>It can be used for:</b></big></p>

      <ul class="list-loan">
        <li><span class="btn btn-primary"><i class="iconfa-ok"></i></span> TECHNOLOGY LOANS - a computer, an iPad or a new smart phone</li>
        <li><span class="btn btn-primary"><i class="iconfa-ok"></i></span> Wedding Loans</li>
        <li><span class="btn btn-primary"><i class="iconfa-ok"></i></span> Birthday Celebration Loans</li>
        <li><span class="btn btn-primary"><i class="iconfa-ok"></i></span> and almost anything you can think of!</li>
      </ul>


      <p><big><b>TOGETHER, we can consider so many possibilities!</b></big></p>

      <p><big><b>Take these easy steps:</b></big></p>
      <ul class="list-loan">
        <li><span class="btn btn-info"><b>1.</b></span> Move the arrow above to calculate th amount of loan you need.</li> 
        <li><span class="btn btn-danger"><b>2.</b></span> <a href="<?php echo site_url( 'registration' ); ?>" class="text-primary"><u>Register</u></a> with PA</li>    
        <li><span class="btn btn-warning"><b>3.</b></span> Build your points by adding all your personal and social information.</li>    
        <li><span class="btn btn-inverse"><b>4.</b></span>  Fill out the application online</li>  
        <li><span class="btn btn-primary"><b>5.</b></span>  Submit all requirements</li> 
        <li><span class="btn btn-success"><b>6.</b></span>  Click SUBMIT and we will do the rest!</li>  
      </ul>       
    </div>
    <div class="col-md-3">
        <h1 style="font-family: Oswald; font-size: 40px;">iLoan</h1>  
        <ul style="list-style-type: none;">        
            <li><span class="iconfa-ok"></span> <a href="<?php echo site_url( 'educational_loan' ); ?>">Educational Loan</a></li>        
            <li><span class="iconfa-ok"></span> <a href="<?php echo site_url( 'medical_loan' ); ?>"> Medical Loan</a></li>    
            <li><span class="iconfa-ok"></span> <a href="<?php echo site_url( 'home_repair_loan' ); ?>">Home Repair Loan</a></li>  
            <li><span class="iconfa-ok"></span> <a href="<?php echo site_url( 'business_loan' ); ?>">Business Loan</a></li>        
            <li><span class="iconfa-ok"></span> <a href="<?php echo site_url( 'moving_and_relocation_loan' ); ?>">Moving and Relocation Loan</a></li> 
            <li><span class="iconfa-ok"></span> <a href="<?php echo site_url( 'leisure_loan' ); ?>"> Leisure Loan</a></li>              
            <li><span class="iconfa-ok"></span> <a href="<?php echo site_url( 'anything_loan' ); ?>">Anything Loan</a></li>  
        </ul> 
    </div>
  </div>
</div>
<div class="jumbotron mar-top-15" style="margin-bottom:0;padding-bottom: 20px"> 
  <center>   
    <p><a class="applyNow"  href="<?php echo site_url('registration'); ?>">Apply Now!  <i class="fa fa-caret-right fa-lg fa-2x blink"></i></a></p>  
  </center>
</div>
<?php display_footer(); ?>