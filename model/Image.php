<?php 
class Image extends Model{
    static function getSqlRequest($tmp=10){
        return "SELECT * FROM `Image` ORDER BY `image_id` DESC LIMIT 10";
    }
    // public function AddImage(){
    //     return "INSERT INTO `Image`( VALUES "
    // }
}
?>
