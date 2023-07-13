<?php 

    $db_host = 'localhost';
    $db_root = 'root';
    $db_password = '';
    $db_name = 'online_library';


    function connect(){
        global $connection;
        global $db_host;
        global $db_name;
        global $db_password;
        global $db_root;

        $connection = mysqli_connect($db_host, $db_root, $db_password, $db_name);
        
    }

    connect();

     
    function trimData($connection, $data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripcslashes($data);
        $data = mysqli_real_escape_string($connection, $data);
        return $data;
    }
?>