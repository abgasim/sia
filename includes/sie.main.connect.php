<?php
//connect DB
/*if (file_exists('/home/a1e50s1696c1/sie.ini')) {
    $config = parse_ini_file('/home/a1e50s1696c1/sie.ini');
    define("DBHOST", $config["DBHOST"]);
    define("DBUSER", $config["DBUSER"]);
    define("DBPASSWORD", $config["DBPASSWORD"]);
    define("DBNAME", $config["DBNAME"]);
    define('DBPORT', $config['DBPORT']);
    define('DBSERVER', $config['DBSERVER']);
} else {
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASSWORD", "");
    define("DBNAME", "sie_db");
    define('DBPORT', '3306');
    define("DBSERVER", "sie");
}*/
$documnetRootPath = $_SERVER['DOCUMENT_ROOT'];
$server_name = "localhost";
$user_name = "sia-admin";
$password = "admin@sia";
try {
    $connect = new PDO("mysql:host=$server_name;dbname=sia_db",$user_name,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>