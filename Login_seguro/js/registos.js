$(document).ready(function(){
	
	$("#registos-form").validate({
		submitHandler : function(form) {
		    $('#submit_btn').attr('disabled','disabled');
			$('#submit_btn').button('loading');
			form.submit();
		},
		rules : {
			nome : {
				required : true
			},
			locale: {
				required : true
			},
			organizer : {
				required : true,
				organizer: true,
			},
			date_time : {
				required : true
			},
			dislocation : {
				required : true,
			}
		},
		messages : {
			nome : {
				required : "Por favor, introduza o nome do evento."
			},
			locale : {
				required : "Introduza o local do evento.",
				
			},
			orgganizer : {
				required : "Por favor, introduza o nome do organizador."
			},
			dislocation : {
				required : "Selecione uma opão.",
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
		}
	});
	
	
});
