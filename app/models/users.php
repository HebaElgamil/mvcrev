<?php
namespace MVCREV\models;
use MVCREV\core\session;

use MVCREV\core\model;

class users extends model{
    function getAllUsers(){
        $data=model::db()->run("SELECT * FROM users ")->fetchAll();
        return $data;
    }

    function getUser($email, $password){
        $data=model::db()->row("SELECT email, password FROM users WHERE email = ? && password = ?", [$email, $password]);
        return $data;
    }

    function insertUser($username, $email, $password){
        $data= model::db()->insert('users', ['username' => 'Dave']);

        return $data;

    }
}