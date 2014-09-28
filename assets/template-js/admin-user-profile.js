jQuery(document).ready(function($){

	// With Form Validation
	$("#form1").validate({
		rules: {
			firstname: "required",
			lastname: "required",
		},
		messages: {
			firstname: "First name cannot be empty",
			lastname: "Last name cannot be empty",
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
						$html += '<p>You have successfully updated this profile.</p>';
					$html += '</div>';

					$('#form1').prepend( $html );
	            }            
	        });
    	}

	});

	$('#form4 .btn-primary').click(function(){
		
		var $tpradio = $('input[name="tpradio"]:checked').val(),
			$text = $('#textarea2').val(),
			$user_id = $('input[name="user_id"]').val(),
			$temp = { textarea: $text, radio: $tpradio, user_id: $user_id };

		$.ajax({
			url: global_url+'ajax/deactivateAccount',
			type: 'POST',
			dataType: 'json',
			data: $temp,
			success: function(response){

				$className = '';
				$msg = '';

				if( response ){
					$className = 'success';
					$msg = "You have successfully deactivated this account.";
				} else {
					$className = 'danger';
					$msg = "An error has occurred. Please try again later."
				}
				
				$html = '<div class="alert alert-'+$className+'">';
					$html += '<p>'+$msg+'</p>';
				$html += '</div>';

				$('#form4').prepend( $html );

			}
		});

		return false;
	});
});