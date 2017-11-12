<?php
$dsn = 'mysql:dbname=XXX;host=XXX;charset=utf8;';
$user = 'XXX';
$password = 'XXX';

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}
?>
