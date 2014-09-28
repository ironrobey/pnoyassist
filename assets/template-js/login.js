$(document).ready(function(){

	$('#changePassword').click(function(){

		var containers = ['#forgotPasswordForm'];

		if( validate(containers) ){

			var $datas = $('#forgotPasswordForm').serializeArray();

			$.ajax({
				url: global_url+'ajax/forgotPassword',
				type: 'POST',
				dataType: 'json',
				data: $datas,
				success: function( response ){

					var $html = '';
						$html += '<div class="alert alert-'+response.alert+'" role="alert">';
							$html += '<p>'+response.msg+'</p>';
						$html += '</div>';

					$('#forgotPasswordForm .alert').remove();
					$('#forgotPasswordForm').prepend( $html );

				}, complete: function(){
					setTimeout(function(){
						$('#forgotPasswordForm .alert').remove();
						$('#forgotPasswordForm input[name="email"]').val('');
					}, 1500);
				}
			});
		}

		return false;
	});

	$('#savePassword').click(function(){

		var containers = ['#forgotPasswordForm'];

		if( $('#forgotPasswordForm input[name="password"]').val() != '' ){

			if( $('#forgotPasswordForm input[name="repassword"]').val() == $('#forgotPasswordForm input[name="password"]').val() ){
			
				var $datas = $('#forgotPasswordForm').serializeArray();
		
				$.ajax({
					url: global_url+'ajax/savePassword',
					type: 'POST',
					dataType: 'json',
					data: $datas,
					success: function( response ){

						var $html = '';
							$html += '<div class="alert alert-'+response.alert+'" role="alert">';
								$html += '<p>'+response.msg+'</p>';
							$html += '</div>';

						$('#forgotPasswordForm .alert').remove();
						$('#forgotPasswordForm').prepend( $html );

					}, 
					complete: function(){

						setTimeout(function(){
							window.location.href=global_url+"login";
						}, 500);

					}
				});

			} else {
				$('#forgotPasswordForm input[name="repassword"]').addClass('error');
				$('#forgotPasswordForm input[name="repassword"]').parent().addClass('relative');
				$('#forgotPasswordForm input[name="repassword"]').after('<i class="error-icon fa fa-times fa-lg"></i>');
				var name = $('#forgotPasswordForm input[name="repassword"]').attr('placeholder');
				if( name.indexOf('Cannot be empty') == -1 ){
					$('#forgotPasswordForm input[name="repassword"]').val('');
					$('#forgotPasswordForm input[name="repassword"]').attr('placeholder', 'Does not match password');
				}
			}

		} else {

			$('#forgotPasswordForm input[name="password"]').addClass('error');
			$('#forgotPasswordForm input[name="password"]').parent().addClass('relative');
			$('#forgotPasswordForm input[name="password"]').after('<i class="error-icon fa fa-times fa-lg"></i>');
			var name = $('#forgotPasswordForm input[name="password"]').attr('placeholder');
			if( name.indexOf('Cannot be empty') == -1 ){
				$('#forgotPasswordForm input[name="password"]').val('');
				$('#forgotPasswordForm input[name="password"]').attr('placeholder', 'Password Cannot be empty');
			}
		}

		return false;
	});

	$('#login').click(function(){

		var containers = [ '#loginForm' ];

		if( validate( containers ) ){

			var $datas = $('#loginForm').serializeArray(),
				$msg = '';

			$.ajax({
				url: global_url+'ajax/login',
				type: 'POST',
				dataType: 'json',
				data: $datas,
				success: function( response ){

					if( response != 'error' ){

						window.location.href= global_url+response;

					} else {

						$('.login-alert').animate({
							height: "toggle"
						});

					}

				}
			});

		}

		return false;
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
					$(value+' input[type="password"]').attr('placeholder', 'Password Cannot be empty');
				}
				err++;
			} else {
				$(value+' input[type="password"]').removeClass('error');
				$(value+' input[type="password"]').parent().removeClass('relative');
				$('.error-icon').remove();
			}

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