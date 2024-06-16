<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = htmlspecialchars($_POST['answer']);
    // if the answer is C++ reply with "Correct!"
    if ($answer == "Ghost Lake") {
        echo "Correct!";
    } else {
        echo "Incorrect! The place is Ghost Lake";
    }

    echo "Thank you for your response!";
}
?>
