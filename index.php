<HTML>
<head>
    <title>PhpStorm</title>
</head>
<body>
<pre>
<?php
require_once "vendor/autoload.php";

use app\database\Conn;


$pdo = (new Conn())->conn();
$pdo = (new Conn())->close();


?>
    </pre>
</body>
</html>