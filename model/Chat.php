<?php 
class Chat extends Model{
    static function getSqlRequest($tmp=10){
        return "SELECT * FROM `Chat` ORDER BY `chat_date` DESC LIMIT 10";
    }
}
?>

