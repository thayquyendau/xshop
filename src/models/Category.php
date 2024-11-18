<?php

namespace models;

use commons\baseModel;

class Category extends baseModel
{
    public function getAllCategory()
    {
        $sql = "SELECT * FROM loai";
        return $this->pdoQueryAll($sql, []);
    }

    public function createCategory($param)
    {
        $columns = [];
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        $sql = "INSERT INTO `loai` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql,$param);
    }

    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM loai WHERE id = ?";
        debug($sql);
        return $this->pdoQuery($sql, [$id]);
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM loai WHERE id = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function updateCategory($param)
    {
        $columns = [];
        foreach($param as $key => $value) {  
                $columns[] = "$key = :$key";
        }
        $sql = "UPDATE loai SET " . implode(", ", $columns) . " WHERE id = :id";
        parent::pdoUpdate($sql, $param);
    }
}
 