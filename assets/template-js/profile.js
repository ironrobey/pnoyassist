jQuery(document).ready(function($){

    $('.upload').fileupload({
    	url: global_url + "ajax/uploadFile",
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        disableImageResize: false,
        imageMaxWidth: 800,
	    imageMaxHeight: 800,
	    imageCrop: true,
        start: function(){
        	var $thisClass = $(this).attr('id');
        	$(this).parent().siblings('.processUpload').removeClass('hide');
        	$('.'+$thisClass).addClass('hide');
        }, 
        done: function (e, data) {

        	var $parent = $(this).parent().parent().parent().parent().attr('id'),
        		$id = $('#'+$parent+' input[name="id"]').val(),
        		$key = $(this).attr('id');

        	$.ajax({
        		url: global_url+'ajax/saveRequirements',
        		type: 'POST',
        		dataType: 'json',
        		data: { requirement: data.result.files[0].name, id: $id, key: $key },
        		success: function( response ){
					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully uploaded a requirement.</p>';
					$html += '</div>';

					$('#'+$parent).prepend( $html );
					$('input[name="'+$key+'"]').val( data.result.files[0].name );
					$('.'+$key).removeClass('hide').attr('href', global_url+'assets/uploads/'+data.result.files[0].name);
        		}, 
        		complete: function(){
					Shadowbox.clearCache();
					Shadowbox.setup();
					computeProgress();
        		}
        	});

			setTimeout(function(){
				$('#'+$parent+' .alert').remove();
			}, 1000);

        	$(this).parent().siblings('.processUpload').addClass('hide');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $(this).parent().siblings('.processUpload').text(progress + '%');
        }

    });

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


	$('#form4 .btn-primary').click(function(){
		
		var $tpradio = $('input[name="tpradio"]:checked').val(),
			$text = $('#textarea2').val(),
			$temp = { textarea: $text, radio: $tpradio };

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
					$msg = "You have successfully deactivated your account, you will now be logged out.";
				} else {
					$className = 'danger';
					$msg = "An error has occurred. Please try again later."
				}
				
				$html = '<div class="alert alert-'+$className+'">';
					$html += '<p>'+$msg+'</p>';
				$html += '</div>';

				$('#form4').prepend( $html );

				if( response ){

					setTimeout(function(){
						window.location.href=global_url;
					}, 1500);

				}

			}
		});

		return false;
	});

	$('#form3').validate({
		rules: {
			new_pass: {
                required: true,
			},
	        con_pass: {
                required: true,
                equalTo: "#new_pass"
	        }
		},
		submitHandler: function(form) {

			var $temp = $('#form3').serializeArray();

			console.log($temp);

			$.ajax({
				url: global_url+'ajax/changePassword',
				type: 'POST',
				dataType: 'json',
				data: $temp,
				success: function(response){

					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully changed your password.</p>';
					$html += '</div>';

					$('#form3').prepend( $html );

				}
			});

			setTimeout(function(){
				$('.alert').remove();
			}, 1500);

    	}
	});

    $('#fileupload').fileupload({
    	url: global_url + "ajax/uploadFile",
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        disableImageResize: false,
        imageMaxWidth: 800,
	    imageMaxHeight: 800,
	    imageCrop: true,
        start: function(){
        	$('.processUpload').removeClass('hide')
        }, 
        done: function (e, data) {

        	$.ajax({
        		url: global_url+'ajax/saveImage',
        		type: 'POST',
        		dataType: 'json',
        		data: { profile_image: data.result.files[0].name },
        		success: function( response ){
					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully uploaded a profile image.</p>';
					$html += '</div>';

					$('.userloggedinfo img').attr('src', global_url+'assets/uploads/'+data.result.files[0].name);
					$('#form5').prepend( $html );
        		}
        	});

        	$('.processUpload').addClass('hide');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('.processUpload').text(progress + '%');
        }

    });

});