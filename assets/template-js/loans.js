jQuery(document).ready(function($){

	computeProgress();

	$('.enter-borrower-key').click(function(){
		var $temp = $('#enter_key').serializeArray();

		$.ajax({
			url: global_url+'ajax/linkAccounts',
			type: 'POST',
			dataType: 'json',
			data: $temp,
			success: function(response){
				if( response ){
					location.reload();
				} else {

					var $html = '';
					$html += '<div class="alert alert-danger">';
						$html += '<p>The key doesn\'t exists in our database, please advise co-borrower to confirm key.</p>';
					$html += '</div>';

					$('#c-8 form').prepend( $html );

				}
				
			}, complete: function(){

				setTimeout(function(){
					$('.alert').remove();
				}, 1500 );

			}
		});

		return false;
	});

	function computeProgress(){
		var $total = $('.tabbedwidget .required').length,
			$finish = 1;

		$('.tabbedwidget .required').each(function(){

			if( $(this).val() != '' || $(this).val() != 0 ){
				console.log($finish+' - '+$(this).attr('name')+' : '+$(this).val() );
				$finish++;
			}

		});

		$progress = Math.floor( ( $finish / $total ) * 100 );

		$('.progress-bar').css({ width: $progress+'%' });
		$('.progress-bar').attr('aria-valuenow', $progress);
		$('.percent').text($progress);

		if( $progress >= 100 ){
			if( $('input[name="loan_status"]').val() == 0 ){
				$('#completed_application').removeClass('hide');	
			}
			
			$('.progress, .progress_message').addClass('hide');

		}

	}

	$('.submit_completed_application').click(function(){

		var $application_id = $('input[name="application_id"]').val();

		$.ajax({
			url: global_url+'ajax/ajaxSubmitApplication',
			type: 'POST',
			dataType: 'json',
			data: { application_id: $application_id },
			success: function(response){
				$('#completed_application').empty().text('You have submitted your loan application. An agent will contact you for further verification. Thank you!');

				$('.btn-primary, .btn-success').addClass('disabled');
			}
		});

	});

	$(".datepicker2").datepicker({
		changeYear: true
	});

	$('#residential_status_meta').change(function(){
		if( $(this).val() == 'rented' ){
			$('.rented_mortgage_input').removeClass('hide');
			$('.others_input').addClass('hide');
		} else if ( $(this).val() == 'others' ){
			$('.others_input').removeClass('hide');	
			$('.rented_mortgage_input').addClass('hide');
		} else {
			$('.rented_mortgage_input, .others_input').addClass('hide');
		}
	});

	$('#purpose').change(function(){
		if( $(this).val() == 'Others' ){
			$('.purpose_input').removeClass('hide');
		} else {
			$('.purpose_input').addClass('hide');
		}
	});

	$('#loan_amount').change(function(){
		if( $(this).val() == 'others' ){
			$('.amount_input').removeClass('hide');
		} else {
			$('.amount_input').addClass('hide');
		}
	});

    $('#fileuploadPS').fileupload({
    	url: global_url + "ajax/uploadFile",
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        disableImageResize: false,
        imageMaxWidth: 800,
	    imageMaxHeight: 800,
	    imageCrop: true,
        start: function(){
        	$(this).parent().siblings('.processUpload').removeClass('hide')
        }, 
        done: function (e, data) {

        	var $id = $('#form6 input[name="id"]').val(),
        		$key = 'ps_signature_meta';

        	$.ajax({
        		url: global_url+'ajax/saveRequirements',
        		type: 'POST',
        		dataType: 'json',
        		data: { requirement: data.result.files[0].name, id: $id, key: $key },
        		success: function( response ){
					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully uploaded a profile image.</p>';
					$html += '</div>';

					$('#form6').prepend( $html );
					$('input[name="principal_signature"]').val( data.result.files[0].name );
					$('.view_ps').removeClass('hide').attr('href', global_url+'assets/uploads/'+data.result.files[0].name);
        		},
        		complete: function(){
        			Shadowbox.clearCache();
        			Shadowbox.setup();
        			// computeProgress();
        		}
        	});

			setTimeout(function(){
				$('#form6 .alert').remove();
			}, 1000);

        	$('.processUpload').addClass('hide');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('.processUpload').text(progress + '%');
        }

    });

    $('#fileuploadCS').fileupload({
    	url: global_url + "ajax/uploadFile",
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        disableImageResize: false,
        imageMaxWidth: 800,
	    imageMaxHeight: 800,
	    imageCrop: true,
        start: function(){
        	$(this).parent().siblings('.processUpload').removeClass('hide')
        }, 
        done: function (e, data) {

        	var $id = $('#form6 input[name="comaker"]').val(),
        		$key = 'co_signature_meta';

        	$.ajax({
        		url: global_url+'ajax/saveRequirements',
        		type: 'POST',
        		dataType: 'json',
        		data: { requirement: data.result.files[0].name, id: $id, key: $key },
        		success: function( response ){
					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully uploaded a profile image.</p>';
					$html += '</div>';

					$('#form6').prepend( $html );
					$('input[name="co_signature"]').val( data.result.files[0].name );
					$('.view_cs').removeClass('hide').attr('href', global_url+'assets/uploads/'+data.result.files[0].name);

        		}, 
        		complete: function(){
					Shadowbox.clearCache();
					Shadowbox.setup();
					// computeProgress();
        		}
        	});

			setTimeout(function(){
				$('#form6 .alert').remove();
			}, 1000);

        	$('.processUpload').addClass('hide');
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('.processUpload').text(progress + '%');
        }

    });

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

        		console.log( data.result.files[0].name );

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
					// computeProgress();
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

	// With Form Validation
	$("#form1").validate({
		rules: {
			middlename_meta: "required",
			age_meta: {
				required: true,
				number: true
			},
			birthplace_meta: "required",
			citizenship_meta: "required",
			tax_meta: {
				required: true,
				number: true
			},
			sssgsis_meta: {
				required: true,
				number: true
			},
			facebook_meta: "required",
			skype_meta: "required",
			present_address_meta: "required",
			length_stay_meta: "required",
			permanent_address_meta: "required",
			residential_status_meta: "required",
			salary_meta: "required",
			employer_meta: "required",
			position_meta: "required",
			tenure_meta: "required",
			office_tel_meta: "required",
			office_address_meta: "required",
			payroll_meta: "required"
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

			var $temp = $('#form1').serializeArray(),
				$action = "ajaxSaveMeta";

			$.ajax({
				url: global_url+'ajax/'+$action,
				type: 'POST',
				dataType: 'json',
				data: $temp,
				beforeSend: function(){
					$('.loader').removeClass('hide');
				},
				success: function(response){
					console.log(response);
					$('.loader').addClass('hide');

					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully updated you account.</p>';
					$html += '</div>';

					$('#form1').prepend( $html );
				},
				complete: function(){
					setTimeout(function(){
						$('.alert').remove();
					}, 1500);
					// computeProgress();
				}
			});

			

    	}

	});

    $('#form3 .btn-primary').click(function(){
		var $temp = $('#form3').serializeArray(),
			$action = "ajaxSaveMeta";

		$.ajax({
			url: global_url+'ajax/'+$action,
			type: 'POST',
			dataType: 'json',
			data: $temp,
			beforeSend: function(){
				$('.loader').removeClass('hide');
			},
			success: function(response){
				$('.loader').addClass('hide');

				$html = '<div class="alert alert-success">';
					$html += '<p>You have successfully updated your comaker details.</p>';
				$html += '</div>';

				$('#form3').prepend( $html );
			}, complete: function(){
				setTimeout(function(){
					$('.alert').remove();
				}, 1500);

				// computeProgress();
			}
		});	
		return false;    	
    });

	$("#form4").validate({
		rules: {
			middlename_meta: "required",
			suffixname_meta: "required",
			age_meta: {
				required: true,
				number: true
			},
			birthplace_meta: "required",
			citizenship_meta: "required",
			tax_meta: {
				required: true,
				number: true
			},
			sssgsis_meta: {
				required: true,
				number: true
			},
			facebook_meta: "required",
			skype_meta: "required",
			present_address_meta: "required",
			length_stay_meta: "required",
			permanent_address_meta: "required",
			residential_status_meta: "required",
			salary_meta: "required",
			employer_meta: "required",
			position_meta: "required",
			tenure_meta: "required",
			office_tel_meta: "required",
			office_address_meta: "required",
			payroll_meta: "required"
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

			var $temp = $('#form4').serializeArray(),
				$action = "ajaxSaveOthers";

			$.ajax({
				url: global_url+'ajax/'+$action,
				type: 'POST',
				dataType: 'json',
				data: $temp,
				beforeSend: function(){
					$('.loader').removeClass('hide');
				},
				success: function(response){
					$('.loader').addClass('hide');

					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully uploaded a profile image.</p>';
					$html += '</div>';

					$('#form4').prepend( $html );
				}, complete: function(){
					setTimeout(function(){
						$('.alert').remove();
					}, 1500);

					// computeProgress();
				}
			});

    	}

	});

	$.validator.addMethod("notEqual", function(value, element, param) {
		return this.optional(element) || value != param;
	}, "Please select an option");

	$("#form2").validate({
		rules: {
			purpose: {
				required: true,
				notEqual: 0
			},
			loan_amount: {
				required: true,
				notEqual: 0
			},
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

			var $temp = $('#form2').serializeArray(),
				$action = "ajaxLoanApplication";

			$.ajax({
				url: global_url+'ajax/'+$action,
				type: 'POST',
				dataType: 'json',
				data: $temp,
				beforeSend: function(){
					$('.loader').removeClass('hide')
				},
				success: function(response){
					console.log(response);
					$('#form2 input[name="application_id"]').val(response);
					$('.loader').addClass('hide');
				},
				complete: function(){
					// computeProgress();
				}
			});

    	}

	});

	$("#form5").validate({
		rules: {
			emergency_contact_1_name_meta: "required",
			emergency_contact_1_relationship_meta: "required",
			emergency_contact_1_address_meta: "required",
			emergency_contact_1_contact_no_meta: "required",
			emergency_contact_2_name_meta: "required",
			emergency_contact_2_relationship_meta: "required",
			emergency_contact_2_address_meta: "required",
			emergency_contact_2_contact_no_meta: "required",
			parent_1_name_meta: "required",
			parent_1_living_deceased_meta: "required",
			parent_1_address_meta: "required",
			parent_1_contact_no_meta: "required",
			parent_2_name_meta: "required",
			parent_2_living_deceased_meta: "required",
			parent_2_address_meta: "required",
			parent_2_contact_no_meta: "required",
			personal_reference_1_name_meta: "required",
			personal_reference_1_company_meta: "required",
			personal_reference_1_address_meta: "required",
			personal_reference_1_contact_no_meta: "required",
			personal_reference_2_name_meta: "required",
			personal_reference_2_company_meta: "required",
			personal_reference_2_address_meta: "required",
			personal_reference_2_contact_no_meta: "required",
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

			var $temp = $('#form5').serializeArray(),
				$action = "ajaxSaveLoanMeta";

			$.ajax({
				url: global_url+'ajax/'+$action,
				type: 'POST',
				dataType: 'json',
				data: $temp,
				beforeSend: function(){
					$('.loader').removeClass('hide')
				},
				success: function(response){
					console.log(response);
					$('.loader').addClass('hide');
				},
				complete: function(){
					// computeProgress();
				}

			});

    	}

	});

	$('#form6 .generate').click(function(){
		var $user_id = $('input[name="user_id"]').val();
		$.ajax({
			url: global_url+'ajax/ajaxGenerateRandomKey',
			type: 'POST',
			dataType: 'json',
			data: { user_id: $user_id },
			success: function( response ){
				$('#borrower-key').val(response);
				$('#sendKey').modal();
			}
		});

		return false;
	});

	$( "#sendKeyForm" ).validate({
		rules: {
			principal_email: {
				required: true,
				email: true
			}
		},
		submitHandler: function(form) {

			var $principal = $('input[name="principal_email"]').val(),
				$comaker = $('input[name="profile_email"]').val(),
				$name = $('input[name="profile_name"]').val(),
				$key = $('#borrower-key').val();

			$.ajax({
				url: global_url+'ajax/sendKey',
				type: 'POST',
				dataType: 'json',
				data: { key: $key, email: $principal, comaker: $comaker, name: $name },
				beforeSend: function(){
					$('.loader').removeClass('hide');
				}, 
				success: function(response){

					$html = '<div class="alert alert-success">';
						$html += '<p>You have successfully sent co-borrower\'s key to principal borrower.</p>';
					$html += '</div>';

					$('#sendKey .modal-body .alert').remove();
					$('#sendKey .modal-body').prepend( $html );

					setTimeout(function(){
						$('#sendKey .modal-body .alert').remove();
						$('input[name="principal_email').val('');
						$('#sendKey').modal('hide');
					}, 1500);

				}, complete: function(){
					$('.loader').addClass('hide');
				}
			});
    	}
	});

});