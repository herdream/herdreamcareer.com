<?PHP
	require_once "include/formvalidator.php";
	$show_form=true;
	$recipient = "agebby@gmail.com";
	if (isset($_POST['flag'])) 
	{
		$validator = new FormValidator();
		$validator->addValidation("reqname","req","Please fill in Name");
		$validator->addValidation("reqemail","req","Please fill in Email");
		$validator->addValidation("reqemail","email","The input for Email should be a valid email value");
		$validator->addValidation("reqphone","req","Please enter a phone");
		
		if($validator->ValidateForm())
		{
			$show_form=false;
			$to = $recipient;
			$subject = "Big Sister's Workshop: Website Form";
			$email = $reqemail ;
			$headers = "From: " . htmlspecialchars($_POST['reqemail']) ;
			$body = "The following message was sent from the Big Sister's Workshop: Contat Us Form.\n\n";
			$body = $body . "Name: " . htmlspecialchars($_POST['reqname']) . "\n\n";
			$body = $body . "Email: " . htmlspecialchars($_POST['reqemail']) . "\n\n";
			$body = $body . "Phone: " . htmlspecialchars($_POST['reqphone']) . "\n\n";
			$body = $body . "Message: " . htmlspecialchars($_POST['reqmessage']) . "\n\n";
			
			if (mail($to, $subject, $body, $headers)) {
				echo 'sent';
			}
			else {
				echo 'failed';
			}
		}
		else
		{
			echo 'failed';
		}
	}
	else
	{
		echo 'failed';
	}