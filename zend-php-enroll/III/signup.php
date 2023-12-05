<?php
// signup.php
phpinfo(INFO_VARIABLES);

if (!empty($_POST)) {
    // filter and validate data
    $valid = 0;
    // filter inputs
    $email = (!empty($_POST['email'])) ? trim(strip_tags($_POST['email'])) : '';
    $username = (!empty($_POST['username'])) ? trim(strip_tags($_POST['username'])) : '';
    $password = (!empty($_POST['password'])) ? trim($_POST['password']) : '';
    // username needs to be 6 to 8 alpha-numeric characters
    if (!empty($username) && strlen($username) >= 6 && strlen($username) <= 8 && ctype_alnum($username)) {
        $valid++;
    } else {
        $error[] = ERR_USERNAME;
    }
    // email needs to be valid
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid++;
    } else {
        $error[] = ERR_EMAIL;
    }
    // password: min 6 chars
    if (!empty($password) && strlen($password) >= 6) {
        $valid++;
    } else {
        $error[] = ERR_PASSWORD;
    }
}