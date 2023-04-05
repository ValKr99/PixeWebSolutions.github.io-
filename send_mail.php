$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'vladmo2021@gmail.com';
$subject = 'New order from your website';
$body = "Name: $name\nEmail: $email\nMessage: $message";

mail($to, $subject, $body);
