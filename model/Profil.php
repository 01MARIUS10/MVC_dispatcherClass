<?php
class Profil extends Model {
    static function getSqlRequest($tmp=0){
        return "SELECT * FROM `User` 
        INNER JOIN Project ON User.user_id_project = Project.project_id  ";
    }
}
?>