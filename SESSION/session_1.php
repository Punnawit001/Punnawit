<?/php
session_start();

$_SESSION['username'] = 'john_doe';
$_SESSION['email'] = 'john@example.com';


$username = $_SESSION['username'];
$email = $_SESSION['email'];


echo "Useename" .$username. "<br>";
echo "Email" .$email."<br>";

if (true) {
header("Location: https://www.google.com");
}
session_destroy();
?>