<?php
if (!function_exists("create_message")) {
    function create_message(string $name, string $mes): bool
    {
        require "./database/connect.php";
        $sql = 'INSERT INTO conversation (user, message) VALUES (:user, :message)';
        $newUser = $db->prepare($sql);
        $newUser->bindValue(":user", $name, PDO::PARAM_STR);
        $newUser->bindValue(":message", $mes, PDO::PARAM_STR);
        $response = $newUser->execute();
        return $response;
    }
}

if (!function_exists('get_all_message')) {
    function get_all_message(): bool
    {
        require "./database/connect.php";
        $sql = 'SELECT * FROM chat ORDER BY id' ;
        $getMessage = $db->prepare($sql);
        $getMessage->execute();
        $allMessage= $getMessage->fetchAll();
        return $allMessage;
    } 
}

?>