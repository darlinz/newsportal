<?php
class ViewNews{
    public static NewsByCategory($arr) {
        foreach($arr as $value) {
            echo '<img src="data:image/jpeg;base64,'.base64_encode($value['picture']).'"
            width=150 /><br>';
            echo "<h2>"$value['title']."</h2>";

            echo "<a href='news?id=".$value['id']."'>Edasi</a><br>";
        }
    }

    public static function AllNews($arr) {
        foreach($arr as $value) {
            echo "<li>".$value['title'];

            echo "<a href='news?id=".$value['id']."'>Edasi</a></li><br>";
        }

    }

    public static function ReadNews($n) {
        foreach($arr as $value) {
            echo "<li>".$value['title'];

            echo "<a href='news?id=".$value['id']."'>Edasi</a></li><br>";
        }
    }

}
?>