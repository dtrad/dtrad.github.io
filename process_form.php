<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = htmlspecialchars($_POST['answer']);

    // Save the answer to a file (or database)
    $file = 'responses.txt';
    file_put_contents($file, $answer . PHP_EOL, FILE_APPEND);

    echo "Thank you for your response!";
}
?>
