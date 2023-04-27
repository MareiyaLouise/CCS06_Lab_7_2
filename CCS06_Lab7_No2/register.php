<?php

require "vendor/autoload.php";

session_start();
// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
//This function ensures that the essential data is available and controls any potential mistakes that might happen 
//during the procedure. if-else is used to see if the required variables, such as fullname, email, and birthdate are set. 
//An exception is generated and an error message is shown if any of these variables are undefined.
//A try-catch block is used to handle any exceptions that might arise while the code is being executed. An error 
//message is displayed when an exception is caught. 
try {
    if (isset($_POST['fullname'])) {
        $_SESSION['fullname'] = $_POST['fullname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['birthdate'] = $_POST['birthdate'];

        header('Location: quiz.php');
        exit;
    } else {
        throw new Exception('Missing the basic information.');
    }
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}



// 2. Why do you think the session variable assignments are wrapped inside an if-else and try-catch statements?
// _____________________________________________________________________