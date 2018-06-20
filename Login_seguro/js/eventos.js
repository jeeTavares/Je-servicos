$(document).ready(function(){
	
	$("#event-form").validate({
		submitHandler : function(form) {
		    $('#submit_btn').attr('disabled','disabled');
			$('#submit_btn').button('loading');
			form.submit();
		},
		rules : {
			nome : {
				required : true
			},
			locale : {
                required : true,
            },
            email : {
				email: true,
				remote: {
					url: "check-email.php",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
			},
			date_time : {
				required : true
			},
			dislocation : {
                required : true,
            }
		},
		messages : {
			name : {
				required : "Por favor, introduza o nome do evento."
			},
			locale : {
				required : "Introduza o local do evento.",
            },
            email :{
                required : "Introduza o nome utilizador a realizar o evento.",
            },
			date_time : {
				required : "Por favor, introduza a data e hora do evento."
			},
			dislocation : {
                required : "Escolha uma das opções para a deslocação.",
            function : myFunction ({
                    // Get the checkbox
                    var : checkBox = document.getElementById("myCheck"),
                    // Get the output text
                    var : text = document.getElementById("text"),
                  
                    // If the checkbox is checked, display the output text
                    if (checkBox,checked = true){
                      text.style.display = "block";
                    }, else : {
                      text,style,display = "none",
                    }
                })
			}
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
	});
	
	
});