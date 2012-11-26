
 $(document).ready(function(){	

	$('#message_send').click(function(e){
		
		e.preventDefault();
		
		var error = false;
		var name = $('#reqname').val();
		var address = $('#reqaddress').val();
		var email = $('#reqemail').val();
		var phone = $('#reqphone').val();
		
		if(name.length == 0){
			var error = true;
			$('#name_error').fadeIn(500);
		}else{
			$('#name_error').fadeOut(500);
		}
		
		if(email.length == 0 || email.indexOf('@') == '-1'){
			var error = true;
			$('#email_error').fadeIn(500);
		}else{
			$('#email_error').fadeOut(500);
		}
		if(phone.length == 0){
			var error = true;
			$('#phone_error').fadeIn(500);
		}else{
			$('#phone_error').fadeOut(500);
		}
		

		if(error == false){

			$('#message_send').attr({'disabled' : 'true', 'value' : 'Sending...' });
			
			$.post("/mail-send.php", $("#contact_form").serialize(),function(result){
			
				if(result == 'sent'){

					 $('#button').remove();

					$('#mail_success').fadeIn(500);
					$('#contact_form').fadeOut(500);
				}else{

					$('#mail_fail').fadeIn(500);

					$('#message_send').removeAttr('disabled').attr('value', 'Send Message');
				}
			});
		}
	});

});