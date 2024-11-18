<?php

namespace models;

use commons\baseModel;

class Product extends baseModel
{
    public function getAllProduct()
    {
        $sql = "SELECT * FROM san_pham";
        return $this->pdoQueryAll($sql, []);
    }
    public function getAllProductbyId($id){
        $sql = "SELECT * FROM san_pham WHERE ma_loai = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }
    public function createProduct($param)
    {
        $columns = [];
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        $sql = "INSERT INTO `san_pham` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql,$param);
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM san_pham WHERE id = ?";
        return $this->pdoQuery($sql, [$id]);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM san_pham WHERE id = ?";
        // debug($sql);
        $this->pdoQuery($sql, [$id]);
    }

    public function updateProduct($param){
        $columns = [];
        foreach ($param as $key => $value) {
            if ($key != 'id') {
                $columns[] = "$key = :$key";
            }
        }
        $sql = "UPDATE san_pham SET " . implode(", ", $columns) . " WHERE id = :id";

         parent::pdoUpdate($sql, $param);
}

}
 