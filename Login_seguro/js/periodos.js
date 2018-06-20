$(document).ready(function(){
	
	$("#periodos-form").validate({
		submitHandler : function(form) {
		    $('#submit_btn').attr('disabled','disabled');
			$('#submit_btn').button('loading');
			form.submit();
		},
		rules : {
			start_time : {
                required : true,
            },
            
			end_time : {
				required : true,
			},
			
		messages : {
			start_time : {
				required : "Por favor, introduza a hora de inicio do seu turno."
			},
			end_time : {
				required : "Por favor, introduza a hora de fim do seu turno."
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
        },
        }
	}
	});
});