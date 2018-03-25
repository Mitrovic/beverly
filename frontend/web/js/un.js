

	$(function() {
		//add company validation & submit
		$("#login_form").validate({
			// Rules for form validation
				email : {required : true, email: true},
				password :  {required : true},
	
			submitHandler: function() {
				//submit form via ajax
				var formData = new FormData( $("#login_form")[0] );
				$.ajax
			   ({
				   url: 'landing/ajax_login',
					type : 'POST',
					async : false,
					cache : false,
					contentType : false,
					processData : false,
					dataType: "json",
					data : formData,
					success: function(data) 
					{
					   $('#login_form_holder').html(data.message);
					   $('#row_opener').html('<div class="col-md-6 col-md-offset-3 alert alert-success">Successfully logged in !</div>');
					   var delay = 3000; 
						setTimeout(function(){ window.location = data.redirect; }, delay);
					},
				   
				   error: function(data)
				   {
					   $('#row_opener').html('<div class="col-md-6 col-md-offset-3 alert alert-danger">'+data.responseText+'</div>');
				   
				   }
			   });
			},

			// Do not change code below
			errorPlacement : function(error, element) {
				error.insertAfter(element.parent());
			}
		});

	});