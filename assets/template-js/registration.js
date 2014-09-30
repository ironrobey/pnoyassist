$(document).ready(function(){

	var urlStr = window.location.href;

	if( urlStr.split('/')[4] == "exists#_=_" ){

		$('#myMessage').modal();

		setTimeout(function(){
			$('#myMessage').modal('hide');
		}, 1000);

	}

	// $('.btn-facebook').click(function(){

	// 	$.ajax({
	// 		url: global_url+'ajax/facebookLogin',
	// 		type: 'POST',
	// 		dataType: 'json',
	// 		success: function(response){
	// 			window.location.href=response;
	// 		}
	// 	});

	// 	return false;
	// });

	$('.btn-primary').click(function(){

		var containers = [ '#registrationForm' ];

		if( $('.borrower:checked').val() == 'yes' ){
			containers.push( '#referralForm' );
		}

		if( validate( containers ) ){

			var $datas = $('#registrationForm, #referralForm').serializeArray(),
				$msg = '';

			$.ajax({
				url: global_url+'ajax/register',
				type: 'POST',
				dataType: 'json',
				data: $datas,
				success: function( response ){
					if( response == 'exists' ){

						$msg = '<p>Email already exists in our database.</p>';

					} else {

						$msg = '<p>You have successfully registered</p>';

						console.log( response );

						setTimeout(function(){
							window.location.href=global_url+response;
						}, 1500);

					}

					$('#message .modal-body p').remove();
					$('#message .modal-body').append( $msg );
					$('#referral').modal('hide');
					$('#message').modal();

					setTimeout(function(){
						$('#message').modal('hide');
					}, 4000);
				}
			});

		}

		return false;
	});

	$('.borrower').change(function(){

		if( $(this).val() == 'yes' ){
			$('#referral').modal();
		}

	});

	$('#referral').on('hidden.bs.modal', function(e){

		$('.borrower').each(function(){
			if( $(this).val() == 'yes' ){
				$(this).attr('checked', false);
			} else {
				$(this).attr('checked', true);
			}
		});

	});

	$('#message').on('hidden.bs.modal', function(e){
		$('#registrationForm')[0].reset();
	});

	function validate( arr ){

		var err = 0;

		$.each(arr, function(index, value){

			if( $(value+' input[type="email"]').val() == '' || !isValidEmail( $(value+' input[type="email"]').val() ) ){
				$(value+' input[type="email"]').addClass('error');
				$(value+' input[type="email"]').parent().addClass('relative');
				$(value+' input[type="email"]').after('<i class="error-icon fa fa-times fa-lg"></i>');
				var name = $(value+' input[type="email"]').attr('placeholder');
				if( name.indexOf('Please input correct email format') == -1 ){
					$(value+' input[type="email"]').val('');
					$(value+' input[type="email"]').attr('placeholder', 'Please input correct email format');
				}
				err++;
			} else {
				$(value+' input[type="email"]').removeClass('error');
				$(value+' input[type="email"]').parent().removeClass('relative');
				$('.error-icon').remove();
			}

			if( $(value+' input[type="password"]').val() == ''){
				$(value+' input[type="password"]').addClass('error');
				$(value+' input[type="password"]').parent().addClass('relative');
				$(value+' input[type="password"]').after('<i class="error-icon fa fa-times fa-lg"></i>');
				var name = $(value+' input[type="password"]').attr('placeholder');
				if( name.indexOf('Cannot be empty') == -1 ){
					$(value+' input[type="password"]').val('');
					$(value+' input[type="password"]').attr('placeholder', name+' Cannot be empty');
				}
				err++;
			} else {
				$(value+' input[type="password"]').removeClass('error');
				$(value+' input[type="password"]').parent().removeClass('relative');
				$('.error-icon').remove();
			}

			$(value+' input[type="text"]').each(function(){
				if( $(this).val() == ''){
					$(this).addClass('error');
					$(this).parent().addClass('relative');
					$(this).after('<i class="error-icon fa fa-times fa-lg"></i>');
					var name = $(this).attr('placeholder');
					if( name.indexOf('Cannot be empty') == -1 ){
						$(this).val('');
						$(this).attr('placeholder', name+' Cannot be empty');
					}
					err++;
				} else {
					$(this).removeClass('error');
					$(this).parent().removeClass('relative');
					$('.error-icon').remove();
				}			
			});

		});
	
		if( err > 0 ){
			return false;
		} else {
			return true;
		}

	}

	function isValidEmail(emailText) {
	    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	    return pattern.test(emailText);
	};

});	