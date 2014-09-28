jQuery(document).ready(function($){

	$('.contact-frm').submit(function(){
		
		var $temp = $(this).serializeArray();

		$.ajax({
			url: global_url+"ajax/sendContact",
			type: 'POST',
			dataType: 'json',
			data: $temp,
			success: function(response){

				$html = "";

				if( response ){
					$className = "success";
					$msg = "You have successfully sent an email. Thank you!";
				} else {
					$className = "warning";
					$msg = "An error has occurred, please try again.";
				}
          		
          		$html += '<div class="alert alert-'+$className+'">';
          			$html += "<p>"+$msg+"</p>";
          		$html += '</div>';
				$('.contact-frm').prepend( $html );

			}
		});
		

		return false;
	});

});