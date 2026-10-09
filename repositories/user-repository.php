<?php

function getUsers()
{
    $users = [
        ["id" => 1, "name" => "Admin Utama", "email" => "admin@ski.sch.id", "role" => "admin"],
        ["id" => 2, "name" => "Budi Santoso", "email" => "budi.santoso@siswa.ski.sch.id", "role" => "member"],
        ["id" => 3, "name" => "Siti Aminah", "email" => "siti.aminah@siswa.ski.sch.id", "role" => "member"],
        ["id" => 4, "name" => "Richard Marcell", "email" => "richard.m@ski.sch.id", "role" => "admin"],
    ];

    return $users;
}

function getUser()
{
    $users = getUsers();
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 1;

    foreach ($users as $user) {
        if ($user['id'] === $id) {
            return $user;
        }
    }

    return $users[0];
}
?>