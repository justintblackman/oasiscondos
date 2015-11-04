<?php
	$name    = $_POST['name'];
	$email   = $_POST['email'];
	$message = $_POST['message'];
	$human = $_POST['human'];
	$from = 'From: TangledDemo'; 
    $to = 'general-inquiry@oasiscondos.ca'; 
    $subject = 'Website Inquiry'
   
	$body = " Contact Form Message from: $name\n Return E-mail Address: $email\n Message: \n $message";

?>	

<?php
if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '6') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '6') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
	
?>