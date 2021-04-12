<?php

    $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'card_game');
    if($_POST['login']) {

        $sql = 'SELECT password, mail FROM users WHERE login = \''. $_POST['login'] . '\'';
        $table_password = $conn->connection->query($sql);
        
            $fetch = $table_password->fetch(PDO::FETCH_ASSOC);
            if($fetch) {

                $password = $fetch['password'];
                $mail = $fetch['mail'];
                
                if(isset($_POST['remindpswd_button'])) {

                    mail($mail, 'Your Password', $password);

                }
            }
    }
?>