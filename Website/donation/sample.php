

<?php
$to = $_POST['email'];
$subject = 'Thanks for subscribing!';
$body = 'Thanks for subscribing to our e-mail list!';
if (mail($to, $subject, $body)) {
 echo("<p>You've successfully subscribed!</p>");
} else {
 echo("<p>We weren't able to successfully subscribe you.<p>");
}
?>
