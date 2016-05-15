<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    //$email_to = "drewottophotography@gmail.com";
    $email_to = "ashlyn.duhautois@gmail.com";
     
    $email_subject = "O Photo Information Request";
    $from = 'O Photo Info Req <drewottophotography@gmail.com>';
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $date = $_POST['date']; // required
    $location = $_POST['location']; // required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The e-mail address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Wedding date:".clean_string($date)."\n";
    $email_message .= "Location: ".clean_string($location)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    
    $email_subject .= " for ".clean_string($name);
     
     
// create email headers
$headers = 'From: '.$from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers, $from); 

header("Location: thankyou.html");
die();
 
?>
 
<!-- place your own success html below -->
 
<?php
}
die();
?>