<?php
class modelAdminNews {
    public static function getNewsList() {
        $query = "SELECT news.*, category.name, users.username FROM news, category, users WHERE news.category_id=category.id AND news.user_id=users.id ORDER BY `news`.`id` DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getNewsAdd() {
        $test = false;
        if (isset($_POST['save'])) {
            if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {

                $title=$_POST['title'];
                $text=$_POST['text'];
                $idCategory=$_POST['idCategory'];

                $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));

                $sql = "INSERT INTO `news` (`id`, `title`, `text`, `picture`, `category_id`, `user_id`) VALUES(NULL, '$title', '$text', '$image', '$idCategory', '1')";

                $db = new Database();
                $item = $db->executeRun($sql);

                if ($item == true) {
                    $test=true;
                }
            }
        }
        return $test;
    }

    public static function getNewsDetail($id) {
        $query = "SELECT news.*, category.name, users.username FROM news, category, users WHERE news.category_id=category.id AND news.user_id=users.id and news.id=".$id;
        $db = new Database();
        $arr = $db->getOne($query);
        return $arr;
    }

    public static function getNewsEdit($id) {
        $test = false;
        if(isset($_POST['save'])) {
            if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory'])) {
                $title = $_POST['title'];
                $text = $_POST['text'];
                $idCategory = $_POST['idCategory'];
                $image = $_FILES['picture']['name'];
                if ($image!="") {
                    $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
                }
                if ($image=='') {
                    $sql="UPDATE `news` SET `title` = '$title', `text` = '$text', `category_id` = '$idCategory' WHERE `news`.`id` = ".$id;
                } else {
                    $sql="UPDATE `news` SET `title` = '$title', `text` = '$text', `picture` = '$image', `category_id` = '$idCategory' WHERE `news`.`id` = ".$id;
                }
                $db = new Database();
                $item = $db->executeRun($sql);
                if($item == true) {
                    $test = true;
                }
            }
        }
        return $test;
    }

    public static function getNewsDelete($id) {
        $test = false;
        $sql_comments = "DELETE FROM `comments` WHERE `news_id` = $id";
        $db = new Database();
        $db->executeRun($sql_comments);
        $sql_news = "DELETE FROM `news` WHERE `id` = $id";
        if ($db->executeRun($sql_news)) {
            $test = true;
        }
        return $test;
    }
}