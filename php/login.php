<?php
 
    function check_user($login, $password) {

        $conn = new DatabaseConnection('127.0.0.1', NULL, 'root', 'password', 'card_game');

        $password = crypt($password, 'salt');
        $sql = "SELECT password FROM users WHERE login = \"$login\"";
        $table_password = $conn->connection->query($sql);
        $fetch = $table_password->fetch(PDO::FETCH_ASSOC);
        $table_password = $fetch['password'];

        if($table_password != $password) {

            return false;

        } else {

            return true;

        }
        
    }

?>