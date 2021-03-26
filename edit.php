<?php

include_once 'model/users.php';

$isFormSend = false;
$err = '';

    $user = usersSelectedEdit($_GET['id']);

    $id = $user['id'];
    $firstName = $user['first_name'];
    $lastName = $user['last_name'];
    $email = $user['email'];
    $editDt = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);

    if($firstName === '' || $lastName === '' || $email === ''){
        $err = 'Type all data!';
    }
    elseif (mb_strlen($firstName, 'UTF8') < 3 || mb_strlen($lastName, 'UTF8') < 3){
        $err = 'First Name and Last Name must contains more than 2 characters';
    }
    else {
        $firstName = htmlspecialchars($firstName);
        $lastName = htmlspecialchars($lastName);
        $editDt = date("Y-m-d H:i:s");
        $isFormSend = true;

        $params = [
            'id' => $id,
            'fName' => $firstName,
            'lName' => $lastName,
            'email' => $email,
            'edDate' => $editDt

        ];

        usersEdit($params);

        header('Location: index.php');
        exit();

    }
}
include 'views/v_edit.php';









