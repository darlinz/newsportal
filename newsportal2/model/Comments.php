<?php
class Comments {
    public static function insertComment($c, $id) {
        $query = "INSERT INTO comments (news_id, textt, date_added) VALUES ('".$id."', '".$c."', CURRENT_TIMESTAMP)";
        $db = new Database();
        $q = $db->executeRun($query);
        return $q;
    }

    public static function getCommentByNewsID($id) {
        $query = "SELECT * FROM comments WHERE news_id = ".(string)$id." ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCommentsCountByNewsID($id) {
        $query = "select count(id) as 'count' from comments where news_id=".(string)$id;
        $db = new Database();
        $c = $db->getOne($query);
        return $c;
    }
    
}
?>
