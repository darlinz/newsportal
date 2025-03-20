<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];
    $num = substr_count($host, '/');
    $path = explode('/', $host)[$num];

    if ($path == '' OR $path == 'index' OR $path == 'index.php') {
        $response = controllerAdmin::formLoginSite();
    }

    elseif($path == 'login.php' OR $path == 'login') {
        $response = controllerAdmin::loginAction();
    }

    elseif($path == 'logout.php' OR $path == 'logout') {
        $response = controllerAdmin::logoutAction();
    }

    elseif($path == 'newsAdmin.php' OR $path == 'newsAdmin') {
        $response = controllerAdminNews::NewsList();
    }

        elseif($path == 'newsAdd.php' OR $path == 'newsAdd') {
            $response = controllerAdminNews::newsAddForm();
        }

    elseif($path == 'newsAddResult.php' OR $path == 'newsAddResult') {
        $response = controllerAdminNews::newsAddResult();
    }

        elseif($path == 'newsEdit.php' OR $path == 'newsEdit' && isset($_GET['id'])) {
            $response = controllerAdminNews::newsEditForm($_GET['id']);
        }
    
    elseif($path == 'newsEditResult.php' OR $path == 'newsEditResult' && isset($_GET['id'])) {
        $response = controllerAdminNews::newsEditResult($_GET['id']);
    }

        elseif($path == 'newsDel' OR $path == 'newsDel.php' && isset($_GET['id'])) {
            $response = controllerAdminNews::newsDeleteForm($_GET['id']);
        }

    elseif($path == 'newsDeleteResult' OR $path == 'newsDeleteResult.php' && isset($_GET['id'])) {
        $response = controllerAdminNews::newsDeleteResult($_GET['id']);
    }

    else {
        $response = controllerAdmin::error404();
    }

?>