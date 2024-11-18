<?php

namespace models;

use commons\baseModel;

class User extends baseModel
{
    public function getAllUser()
    {
        $sql = "SELECT * FROM users ";
        return $this->pdoQueryAll($sql, []);
    }

    public function createUser($param)
    {
        $columns = [];
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        $sql = "INSERT INTO `users` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql,$param);
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM users  WHERE id = ?";
        return $this->pdoQuery($sql, [$id]);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function updateUser($param)
    {
        $columns = [];
        foreach($param as $key => $value) {
            if ($key != 'id') {
                $columns[] = "$key = :$key";
            }
        }
        $sql = "UPDATE users SET " . implode(", ", $columns) . " WHERE id = :id";
        // debug($sql);
        parent::pdoUpdate($sql, $param);
    }
}
 