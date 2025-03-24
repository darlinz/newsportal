<html>
<head>
    <title>Dashboard</title>
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/mystyle.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script type="text/js/javascript" src="public/js/ajaxupload.3.5.js"></script>
</head>
<body>
    <div class="container">

    <?php
    if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"]) && $_SESSION["sessionId"] === session_id()) {
    ?>

        <div class="header clearfix">
        <nav class="navbar navbar-default">
        <div class="container-fluid">

        <ul class="nav nav-pills pull-right">
            <li role="button"><?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : 'Гость'; ?>
                <a href="logout.php" style="display: inline;">Выйти <i class="fa fa-sign-out"></i></a>
            </li>
        </ul>

        <?php
        if (isset($_SESSION["status"]) && $_SESSION["status"] == "admin") {
            echo '<h4><a href="../" target="_blank">WEBSITE</a>';
            echo ' &#187 <a href="./">Start admin</a>';
            echo ' &#187 <a href="categoryAdmin">News Categories</a>';
            echo ' &#187 <a href="newsAdmin">NewsList</a>';
            echo ' </h4>';
        } else {
            echo '<h4>У вас нет прав!</h4>';
        }
        ?>

    </div>
    </nav>
    </div>
        <?php
    }
    ?>

        <div id="content" style="padding-top:20px;">
            <?php echo $content; ?>
        </div>
        <footer class="footer">
            <p>&copy; 2019 Design Admin Dashboard<i class="fa fa-child"></i></p>
        </footer>
    </div>
</body>
</html>
