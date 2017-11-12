<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<title>完了</title>
</head>
<body>

<?php
require_once "../conf/mysql.php";


$work=$_POST["work"];
$name=$_POST["name"];
$index=$_POST["index"];
$index2=$_POST["index2"];

$sql = 'update テーブル名 set name =:name where id = :value';
$stmt = $dbh -> prepare("INSERT INTO hoge (`work`, `name`, `index`, `index2`) VALUES (:work, :name, :index, :index2)");

$stmt->bindValue(':work', $work, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':index', $index, PDO::PARAM_STR);
$stmt->bindValue(':index2', $index2, PDO::PARAM_STR);


$stmt->execute();


?>
<br>
<br>

登録完了しました。
<a href="./touroku.php">登録画面へ</a>
</body>
</html>

