

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
        if(!$connection){
            die('Database connection failed' . mysqli_connect_error());
        }
        
    }

    connect();

?>