<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
<title>参照</title>
</head>
<body>
<?php
require_once "../conf/mysql.php";

$sql = 'select * from hoge';
	$stmt = $dbh->query($sql);

echo "<table border=\"1\">";
echo "<tr><th>No</th><th>work</th><th>name</th><th>index</th><th>index2</th></tr>";

    foreach ($stmt as $result) {
    
    $No=$result['No'];
    $work=$result['work'];
    $name=$result['name'];
    $index=$result['index'];
    $index2=$result['index2'];
    
    echo "<tr><td>$No</td>";
    echo "<td>$work</td>";
    echo "<td>$name</td>";
    echo "<td>$index</td>";
    echo "<td>$index2</td></tr>";
    }

echo "</table>";
?>
</body>
</html>
