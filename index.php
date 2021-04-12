<?php
    session_start();

    require_once(__DIR__.'/php/connection/DatabaseConnection.php');
    require_once(__DIR__.'/php/password_reminder.php');
    require_once(__DIR__.'/php/registration.php');
    require_once(__DIR__.'/php/login.php');
    require_once(__DIR__.'/view/View.php');

    if(!$_SESSION['page']) {

        $_SESSION['page'] = 'main';

    }

    if(isset($_POST['remindpswd_button'])) {

        $_SESSION['page'] = 'password_reminder';

    }  else if(isset($_POST['signin_button']) && $_SESSION['page'] != 'login') {

        $_SESSION['page'] = 'login';

    } else if(isset($_POST['signup_button'])) {

        $_SESSION['page'] = 'registration';

    } else if(isset($_POST['goto_main_button'])) {

        $_SESSION['page'] = 'main';

    } else if(isset($_POST['signin_button']) || isset($_POST['goto_userinfo_button'])) {

        if(check_user($_POST['login'], $_POST['password'])) {

            $_SESSION['page'] = 'user';

        }

    } else if(isset($_POST['cards_button'])) {

        $_SESSION['page'] = 'cards';

    } else if(isset($_POST['battle_button'])) {

        $_SESSION['page'] = 'battle';

    } else if(isset($_POST['goto_userinfo_button'])) {

        echo '<br><br><br><br>going back to user';
        $_SESSION['page'] = 'user';

    } else {
        
        $_SESSION['page'] = 'main';

    }

    if($_SESSION['page'] == 'user') {

        $page = new View(__DIR__.'/view/templates/' . $_SESSION['page'] . ".tpl");
        $page->content = str_replace("{username}", $_POST['login'], $page->content);

    } else {

        $page = new View(__DIR__.'/view/templates/' . $_SESSION['page'] . ".html");

    }
    $page->render();

?>