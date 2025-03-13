<?php
class ViewComments {
    public static function CommentsForm() {
        echo '<form action="insertcomment">
        <input type="hidden" name="id" value="'.$_GET['id'].'">
            Teie kommentaar: <input type="text" name="comments">
        <input type="submit" value="Saada"> </form>';
    }

    public static function CommentsByNews ($arr) {
        if($arr!=null) {
            echo '<table id="ctable"><th>Kommentaar</th><th>Kuupäev</th>';
            foreach($arr as $value) {
                echo '<tr><td>'.$value['text']."</td></tr>".$value['date']."</td></tr>";
            }
            echo '</table>';
        }
    }

}