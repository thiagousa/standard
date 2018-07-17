<HTML>
<head>
    <title>PhpStorm</title>
</head>
<body>
<pre>
<?php
require_once "vendor/autoload.php";

use app\database\Conn;

$pdo = new Conn();

//$pdo = (new Conn())->conn();

print_r($pdo->conn());


print_r($pdo->close());


?>
    </pre>
</body>
</html>