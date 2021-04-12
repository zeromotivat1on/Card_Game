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
            if($_POST['login']) $_SESSION['login'] = $_POST['login'];

        }

    } else if(isset($_POST['cards_button'])) {

        $_SESSION['page'] = 'cards';

    } else if(isset($_POST['battle_button'])) {

        $_SESSION['page'] = 'battle';

    } else {
        
        $_SESSION['page'] = 'main';

    }


    $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'card_game');

    $password = crypt($password, 'salt');
    $sql = "SELECT login, photo FROM users WHERE login = ".$_SESSION['login'];
    $table_password = $conn->connection->query($sql);
    $fetch = $table_password->fetch(PDO::FETCH_ASSOC);
    $login = $fetch['login'];
    $photo = $fetch['photo'];
    
    if($_SESSION['page'] == 'user') {

        $page = new View(__DIR__.'/view/templates/' . $_SESSION['page'] . ".tpl");
        $page->content = str_replace("{username}", $login, $page->content);
        $page->content = str_replace("{imgurl}", $photo, $page->content);

    } else if($_SESSION['page'] == 'battle') {

        $page = new View(__DIR__.'/view/templates/' . $_SESSION['page'] . ".html");
        //$page->content = str_replace("{username}", $_POST['login'], $page->content);

    } else {

        $page = new View(__DIR__.'/view/templates/' . $_SESSION['page'] . ".html");

    }
    $page->render();

?>