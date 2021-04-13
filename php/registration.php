<?php

    function save_user($login, $password, $photo, $mail) {

        $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'card_game');

        $password = crypt($password, 'salt');

        if(!$photo) {

            $photo = 'https://ofwforum.com/ext/dark1/memberavatarstatus/image/avatar.png';

        }

        $sql = "INSERT INTO `users` (`login`, `password`, `photo`, `mail`) 
                    VALUES (\"$login\", \"$password\", \"$photo\", \"$mail\")";

        $conn->connection->query($sql);
        
    }

    if(isset($_POST['signup_button'])) {

        save_user($_POST['login'], $_POST['password'], $_POST['photo'], $_POST['mail']);

    }

?>