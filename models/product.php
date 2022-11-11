<?php
class Product extends Db{
    public function getAllProduct()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY `id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items =$sql ->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return
    }
    public function getAllProducts ()
    {
        $sql = self::$connection->prepare("SELECT * FROM products where id=?");
        $sql->blind_param("id",$id); //return an object
        $sql ->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
//

?>