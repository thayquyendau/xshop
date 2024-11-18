<?php

namespace models;

use commons\baseModel;

class Comment extends baseModel
{
    public function getAllComment()
    {
        $sql = "SELECT * FROM binh_luan";
        return $this->pdoQueryAll($sql, []);
    }
    public function getAllCommentbyId($id) {
        $sql = "SELECT binh_luan.id, users.user_name, binh_luan.noi_dung 
                FROM binh_luan 
                JOIN san_pham ON binh_luan.ma_san_pham = san_pham.id 
                JOIN users ON binh_luan.user = users.id 
                WHERE san_pham.id = ?";
        return $this->pdoQueryAll($sql, [$id]);
    }
    
    
    public function createComment($param)
    {
        $columns = [];
        foreach($param as $key => $value) {
            $columns[]  = ":$key";
        }
        // debug($param);
        $sql = "INSERT INTO `binh_luan` (". implode(",", array_keys($param)) .") VALUES (". implode(",", $columns) .")";
        parent::pdoQuery($sql,$param);
    }

    public function getCommentById($id)
    {
        $sql = "SELECT * FROM binh_luan WHERE id = ?";
        return $this->pdoQuery($sql, [$id]);
    }

    public function deleteComment($id)
    {
        $sql = "DELETE FROM binh_luan WHERE id = ?";
        $this->pdoQuery($sql, [$id]);
    }

    public function updateComment($param){
        $columns = [];
        foreach ($param as $key => $value) {
            if ($key != 'id') {
                $columns[] = "$key = :$key";
            }
        }
        $sql = "UPDATE binh_luan SET " . implode(", ", $columns) . " WHERE id = :id";

         parent::pdoUpdate($sql, $param);
}

}
 