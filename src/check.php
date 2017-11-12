<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<title>確認</title>
</head>
<body>

<?php
$work=$_POST["work"];
$name=$_POST["name"];
$index=$_POST["index"];
$index2=$_POST["index2"];

echo "<table border = 1>";
echo "<tr>";
echo "<th>work</th><th>name</th><th>index</th><th>index2</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$work</td>";
echo "<td>$name</td>";
echo "<td>$index</td>";
echo "<td>$index2</td>";
echo "</tr>";
echo "</table>";

?>
<br>
<br>

入力内容に問題なければ登録をおしてください。
<form method="post" action="insert.php">
<input type="hidden" name="work" value="<?php echo $work; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="index" value="<?php echo $index; ?>">
<input type="hidden" name="index2" value="<?php echo $index2; ?>">

<input type="submit" value="登録" />
</body>
</html>

