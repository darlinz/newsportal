<?php

class Controller {
    public static function StartSite() {
        $arr = News::getLast10News();
        include_once 'view/start.php';
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php'; 
    }

    public static function AllNews() {
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }

    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }

    public static function NewsByID($id) {
        $n = News::getNewsByID($id);  
        include_once 'view/readnews.php';
    }

public static function error404() {
    header("HTTP/1.1 404 Not Found");
    include_once 'view/error404.php';
    exit();
}


    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id); 
        header('Location: news?id=' . $id . '#ctable');  
    }

    
    public static function Comments($newsid) {
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::CommentsByNews($arr);
    }

    public static function CommentsCount($newsid) {
        if (isset($newsid) && !empty($newsid)) {
            $arr = Comments::getCommentsCountByNewsID($newsid);
            ViewComments::CommentsCount($arr);
        } else {
            echo "Комментарии отсутствуют.";
        }
    }
    

    // Ссылка на список комментариев
    public static function CommentsCountWithAncor($newsid) {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCountWithAncor($arr);  // Исправлено: правильное имя класса ViewComments
    }

    // Регистрация
    public function registerForm() {
        include_once('view/formRegister.php');
    }

    public function registerUser() {
        //$result = Register::registerUser();
        $register = new Register();
        $result = $register->registerUser();
        include_once('view/answerRegister.php');
    }
}
?>
