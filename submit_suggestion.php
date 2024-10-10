<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // prevent hacking through html!
    $suggestion = htmlspecialchars($_POST['suggestion']);

    // this directory is where the files go!
    file_put_contents('suggestions.txt', $suggestion . PHP_EOL, FILE_APPEND);

    // change to a thanks for your feedback page later!
    header("Location: index.html");
    exit();
}
?>
