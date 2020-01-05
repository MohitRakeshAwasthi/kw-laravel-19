$(function() {

	$("#form").validate({

		rules: {

			name : 
			{
				required     : true,
				maxlength    : 200,
			},
			email: 
			{
				required : true,
				email    : true
			},
			mobile: 
			{
				required  : true,
				minlength : 10
			},
			password: 
			{
				required  : true,
				minlength : 6
			}
		},

		messages: {

			name : 
			{
				required  : "Please enter your full name",
				maxlength : "Your full name must be not be more than 200 characters long"
			},
			password : 
			{
				required  : "Please provide a password",
				minlength : "Your password must be at least 6 characters long"
			},
			email  : "Please enter a valid email address",
			mobile : "Please enter a valid mobile number"
		},

		submitHandler: function(form) {
			form.submit();
		}
	});

});