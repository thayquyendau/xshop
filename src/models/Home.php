<?php 
namespace models;
use commons\baseModel;

class Home extends baseModel
{
    public function getAllCategory()
    {
        $sql = "SELECT * FROM san_pham";
        return $this->pdoQueryAll($sql, []);
    }
}
?>