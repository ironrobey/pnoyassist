jQuery(document).ready(function($){

	// With Form Validation
	$("#form1").validate({
		rules: {
			firstname: "required",
			lastname: "required",
		},
		messages: {
			firstname: "Please enter your first name",
			lastname: "Please enter your last name",
		},
		highlight: function(label) {
			jQuery(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('Ok!').addClass('valid')
	    		.closest('.control-group').addClass('success');
	    },
	    submitHandler: function(form) {
	        $.ajax({
	            url: global_url+'ajax/updateProfile',
	            type: 'POST',
	            data: $(form).serializeArray(),
	            beforeSend: function(){
	            	$(form).find('.loader').removeClass('hide');
	            },
	            success: function(response) {
	                $(form).find('.loader').addClass('hide');

					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully updated your profile.</p>';
					$html += '</div>';

					$('#form1').prepend( $html );
	            }            
	        });
    	}

	});

});