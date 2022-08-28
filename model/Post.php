<?php
class Post extends Model {
    static function getSqlRequest($tmp=9){
        return "SELECT * FROM `Post` ORDER BY `post_date` DESC LIMIT 9";
    }
}
?>