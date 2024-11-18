<?php

namespace models;

use commons\baseModel;

class Login extends baseModel
{
    public function getAllUser()
    {
        $sql = "SELECT * FROM users ";
        return $this->pdoQueryAll($sql, []);
    }
    public function findUser($data)
    {
        $sql = "SELECT * FROM users WHERE USER_ID = :user_id AND PASSWORD = :password";
        return parent::pdoQuery($sql, $data);
    }
    //Chua hoan thien
    public function getUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = ?";
        return parent::pdoQuery($sql, [$id]);
    }
    public function updateUser($param)
    {
        // debug($param);
        $columns = [];
        foreach ($param as $key => $value) {
            if ($key != 'id') {
                $columns[] = "$key = :$key";
            }
        }
        // debug($columns);
        $sql = "UPDATE users SET " . implode(", ", $columns) . " WHERE id = :id";
        // debug($sql);
        parent::pdoUpdate($sql, $param);
    }
}
