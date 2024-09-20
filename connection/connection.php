<?php
const SERVER='localhost';
const DBNAME= 'instagram';
const DBUSER='root';
const DBPASSWORD='';
const DBCHARSET='UTF8';
const DBTYPE='mysql';

req

try {
    $conection = new PDO(
        DBTYPE . ':host=' . SERVER . ';dbname=' . DBNAME . ';charset=' . DBCHARSET,
        DBUSER,
        DBPASSWORD,
        [
            PDO::ATTR_PERSISTENT            => true,
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND    =>  "SET NAMES 'UTF8'"

        ]
    );
} catch ( PDOException $e ) {
    echo 'ERROR!';
    print_r( $e );
}
?>