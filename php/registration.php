<?php

    $_SESSION['table_error'] = '';

    function save_user($login, $password, $full_name, $mail) {

        $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'card_game');

        $password = crypt($password, 'salt');

        $sql = "INSERT INTO `users` (`login`, `password`, `full_name`, `mail`) 
                    VALUES (\"$login\", \"$password\", \"$full_name\", \"$mail\")";

        $conn->connection->query($sql);
        
    }

    if(isset($_POST['signup_button'])) {

        save_user($_POST['login'], $_POST['password'], $_POST['full_name'], $_POST['mail']);

    }

?>