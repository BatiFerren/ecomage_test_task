<?php

include_once 'model/m_db.php';

function usersAll() : array{
    $sqlShow = 'SELECT * FROM users ORDER BY id ASC';
    $query = dbQuery($sqlShow);
    return $users = $query->fetchAll(PDO::FETCH_ASSOC);
}

function usersAdd(array $params) : bool{
    $sqlAdd = 'INSERT users (first_name, last_name, email, create_date) VALUES (:fName, :lName, :email, :crDate)';
    dbQuery($sqlAdd, $params);
    return true;
}
