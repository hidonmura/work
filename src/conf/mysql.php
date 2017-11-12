<?php
$dsn = 'mysql:dbname=hidonmura_test;host=mysql534.db.sakura.ne.jp;charset=utf8;';
$user = 'hidonmura';
$password = 'takuya314';

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}
?>
