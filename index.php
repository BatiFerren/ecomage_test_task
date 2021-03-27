<?php

include_once 'model/users.php';

if (sizeof($_GET) === 0){
    $users = usersAll();
}
else{
    $id = htmlspecialchars(trim($_GET['idSearchForm']));
    $firstName = htmlspecialchars(trim($_GET['fNameSearchForm']));
    $lastName = htmlspecialchars(trim($_GET['lNameSearchForm']));
    $email = trim($_GET['emailSearchForm']);
    $createDtFrom = $_GET['crDateFrom'];
    $createDtTo = $_GET['crDateTo'];
    $editDtFrom = $_GET['edDateFrom'];
    $editDtTo = $_GET['edDateTo'];

    $params = [
        'id' => $id,
        'fName' => $firstName,
        'lName' => $lastName,
        'email' => $email,
        'crDateFrom' => $createDtFrom,
        'crDateTo' => $createDtTo,
        'edDateFrom' => $editDtFrom,
        'edDateTo' => $editDtTo
    ];

    $users = usersSelect($params);

}

include 'views/v_index.php';

?>