jQuery(document).ready(function(){
                
    // Prettify
    prettyPrint();
                
    // tabbed widget
    jQuery('.tabbedwidget').tabs();

    computeLoanPayment( 15000, 3, "#monthlypayment" );
    computeLoanPayment( 15000, 3, "#monthlypaymentModal" );
        
        // accordion widget
	jQuery('.accordion').accordion({heightStyle: "content"});
        
        // growl notification
	if(jQuery('#growl').length > 0) {
		jQuery('#growl').click(function(){
			jQuery.jGrowl("Hello world!");
		});
	}
	
	// another growl notification
	if(jQuery('#growl2').length > 0) {
		jQuery('#growl2').click(function(){
			var msg = "This notification will live a little longer.";
			jQuery.jGrowl(msg, { life: 5000});
		});
	}
        
        // basic alert box
	if(jQuery('.alertboxbutton').length > 0) {
		jQuery('.alertboxbutton').click(function(){
                        //jQuery.alerts.dialogClass = 'customStyle';
			jAlert('This is a custom alert box', 'Alert Dialog', function(){
                           //jQuery.alerts.dialogClass = null; // reset to default
                        });
		});
	}
	
	// confirm box
	if(jQuery('.confirmbutton').length > 0) {
		jQuery('.confirmbutton').click(function(){
			jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {
				jAlert('Confirmed: ' + r, 'Confirmation Results');
			});
		});
	}
	
	// promptbox
	if(jQuery('.promptbutton').length > 0) {
		jQuery('.promptbutton').click
		(function(){
			jPrompt('Type something:', 'Prefilled value', 'Prompt Dialog', function(r) {
				if( r ) alert('You entered ' + r);
			});
		});
	}
	
	// alert with html
	if(jQuery('.alerthtmlbutton').length > 0) {
		jQuery('.alerthtmlbutton').click(function(){
			jAlert('You can use HTML, such as <strong>bold</strong>, <em>italics</em>, and <u>underline</u>!');
		});
	}
        
        // alert danger
        if(jQuery('.alertdanger').length > 0) {
		jQuery('.alertdanger').click(function(){
                        jQuery.alerts.dialogClass = 'alert-danger';
			jAlert('This is a custom alert box for danger', 'Alert Danger', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});
	}
        
        // alert warning
        if(jQuery('.alertwarning').length > 0) {
		jQuery('.alertwarning').click(function(){
                        jQuery.alerts.dialogClass = 'alert-warning';
			jAlert('This is a custom alert box for warning', 'Alert Warning', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});
	}
        
        // alert success
        if(jQuery('.alertsuccess').length > 0) {
		jQuery('.alertsuccess').click(function(){
                        jQuery.alerts.dialogClass = 'alert-success';
			jAlert('This is a custom alert box for success', 'Alert Success', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});
	}
        
        // alert info
        if(jQuery('.alertinfo').length > 0) {
		jQuery('.alertinfo').click(function(){
                        jQuery.alerts.dialogClass = 'alert-info';
			jAlert('This is a custom alert box for info', 'Alert Info', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});
	}
        
        // alert inverse
        if(jQuery('.alertinverse').length > 0) {
		jQuery('.alertinverse').click(function(){
                        jQuery.alerts.dialogClass = 'alert-inverse';
			jAlert('This is a custom alert box for inverse', 'Alert Inverse', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});
	}

	// normal slider
	jQuery("#slider").slider({value: 40});
	
	// slider snap to increments
	jQuery("#slider2").slider({
			value:100,
			min: 0,
			max: 500,
			step: 50,
			slide: function(event, ui) {
				jQuery("#amount").text("$"+ui.value);
			}
	});
	jQuery("#amount").text("$" + jQuery("#slider").slider("value"));
	
	// slider with range
	jQuery("#slider3").slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
		slide: function( event, ui ) {
			jQuery("#amount2").text("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
		}
	});
	jQuery("#amount2").text("$" + jQuery("#slider3").slider("values", 0) +
			" - $" + jQuery("#slider3").slider("values", 1));
	
	// slider with fixed minimum
	jQuery("#slider4").slider({
			range: "min",
			value: 15000,
            min:15000,
			max: 50000,
            step: 5000,
			slide: function( event, ui ) {
				jQuery("#amount4").text(ui.value);
                computeLoanPayment( ui.value, jQuery('#amount5').text(), "#monthlypayment" );
                
			}
	});
	jQuery("#amount4").text(jQuery("#slider4").slider("value"));
	
	// slider with fixed maximum
	jQuery("#slider5").slider({
			range: "min",
			value: 3,
			min: 3,
			max: 12,
            step: 3,
			slide: function(event, ui) {
				jQuery("#amount5").text(ui.value+ " months");
				computeLoanPayment( jQuery('#amount4').text(), ui.value, "#monthlypayment" );
			}
	});
	jQuery("#amount5").text(jQuery("#slider5").slider("value")+" months");

	jQuery("#slider40").slider({
			range: "min",
			value: 15000,
            min:15000,
			max: 50000,
            step: 5000,
			slide: function( event, ui ) {
				jQuery("#amount40").text(ui.value);
                computeLoanPayment( ui.value, jQuery('#amount50').text(), "#monthlypaymentModal" );
                
			}
	});
	jQuery("#amount40").text(jQuery("#slider40").slider("value"));

	jQuery("#slider50").slider({
			range: "min",
			value: 3,
            min:3,
			max: 12,
            step: 3,
			slide: function( event, ui ) {
				jQuery("#amount50").text(ui.value);
                computeLoanPayment( jQuery('#amount40').text(), ui.value, "#monthlypaymentModal" );
			}
	});
	jQuery("#amount50").text(jQuery("#slider50").slider("value"));
	
	// slider vertical
	jQuery("#slider6").slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: 60,
			slide: function( event, ui ) {
				jQuery("#amount6").text(ui.value);
			}
	});
	jQuery("#amount6").text( jQuery("#slider6").slider("value"));

	
	// slider vertical with range
	jQuery("#slider7").slider({
			orientation: "vertical",
			range: true,
			values: [17, 67],
			slide: function(event, ui) {
				jQuery("#amount7").text("$"+ui.values[0]+"-$"+ui.values[1]);
			}
		});
	jQuery("#amount7").text("$"+jQuery("#slider7").slider("values",0) +
			" - $"+jQuery("#slider7").slider("values",1));
   
   
   //jQuery dialog
   jQuery('#opendialog').click(function(){
        jQuery('#dialog-message').dialog('open');       
   });
   
   jQuery('#dialog-message').dialog({
        autoOpen: false,
        modal: true,
        show: {
                effect: "blind",
                duration: 100
        },
        buttons: {
                Ok: function() {
                        jQuery(this).dialog('close');
                }
        }
   });

    function computeLoanPayment( $loan, $length, $id ){

    	$quotient = $loan / parseInt( $length );
    	$interest = $loan * .035;
    	$payment = ( $loan == 0 || parseInt( $length ) == 0 ? 0 : $interest + $quotient );	
    	jQuery($id).text( Math.ceil( $payment ) );

    }
	
});