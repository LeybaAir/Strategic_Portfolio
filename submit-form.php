$name = $_POST['username'];
$email = $_POST['email'];
$hire = $_POST['expertise'];
$comment = $_POST['comment'];

$to = 'Leyba.air@gmail.com';
$subject = 'New form submission';
$message = "Name: $name\nEmail: $email\nHiring: $hire\nComment: $comment";
$headers = 'From: webmaster@example.com' . "\r\n" .
           'Reply-To: webmaster@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Location: thank-you.html');
