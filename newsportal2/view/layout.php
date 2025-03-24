<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MS+dh/1fQ784/iJTQUOhcWr7x9JvoRxT2MZwit"
    crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
</head>
<body>
    <nav class="one">
        <ul class="topmenu">
            <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    <?php
                        Controller::AllCategory();
                    ?>
                </ul>
            </li>
            <li><a href="iwww">Info</a></li>
            <li><a href="./">Stardileht</a></li>
            <li><a href="registerForm">Register</a></li>
        </ul>
        
       
        
    </nav>

    <section>
        <div class="divBox">
            <?php
            if (isset($content)){
                echo $content;
            }
            else{
                echo '<h1>Content is gone</h1>';
            }
            ?>
        </div>
    </section>

    <hr>
    <p style="display:block; text-align: center;">SPTV22 2025 a. &copy;</p>
</body>
</html>
