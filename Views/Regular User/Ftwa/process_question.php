<?php
require_once 'Database.php';
require_once 'Fatwa.php';

$db = new Database();
$fatwa = new Fatwa($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $question = $_POST['question'];

    $message = $fatwa->askFatwa($username, $question);
    echo $message;
}
?>
