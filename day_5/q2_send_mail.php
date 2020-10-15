<html>
<head><b>Feedback</b></head>
<body>
<p>Please fill the feedback form as your feedback matters to us.</p>
<form action = "q2_send_mail.php" method="POST">
    Name <input type="text"  name="name" style="margin-left:25px;" required><br><br>
Email id : <input type='email' name='mailid' required><br><br>
    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="submit">
 </form>
</body>
</html>

<?php

if(@$_POST['submit'])
{
	$name = $_POST['name'];
	$mailid = $_POST['mailid'];
	$feedback = $_POST['feedback'];

	// ini_set("SMTP","smtp.gmail.com");
	// ini_set("smtp_port","587");
  $admin = "@gmail.com";//admin email id receives feedback, updated in php.ini and sendmail.conf

	$subject = "Thank you for submitting feedback";
	$body ="Hi $name!
  Thank you for your valuable feedback.
  Following is the copy of the feedback you provided:$feedback";
	$headers = "From: $admin";

	mail($mailid, $subject, $body, $headers);

	$admin = "@gmail.com";//put the admin email id
	$subject = "Feedback from $name";
	$body = "Feedback:
  Name: $name
  Email id: $mailid
  Feedback: $feedback";

	mail($admin, $subject, $body, $headers);

	die("Thank you for your feedback");
}


?>
