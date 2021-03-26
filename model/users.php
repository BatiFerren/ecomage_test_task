<?php

include_once 'main/m_db.php';

function usersAll() : array{
    $sqlShow = "SELECT * FROM users ORDER BY id ASC";
    $query = dbQuery($sqlShow);
    return $users = $query->fetchAll(PDO::FETCH_ASSOC);
}

function usersAdd(array $params) : bool{
    $sqlAdd = "INSERT users (first_name, last_name, email, create_date) VALUES (:fName, :lName, :email, :crDate)";
    dbQuery($sqlAdd, $params);
    return true;
}

function usersSelectedEdit($id) : array{
    $sqlSelectedEdit = 'SELECT * FROM users WHERE id = '.$id;
    $query = dbQuery($sqlSelectedEdit);
    return $users = $query->fetch(PDO::FETCH_ASSOC);
}

function usersEdit(array $params) : bool{
    $sqlEdit = 'UPDATE users SET first_name = :fName, last_name = :lName, email = :email, update_date = :edDate WHERE id = :id';
    dbQuery($sqlEdit, $params);
    return true;
}
