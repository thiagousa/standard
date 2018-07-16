<HTML>
<head>
    <title>Standard</title>
</head>
<body>
<pre>
<?php
require_once "vendor/autoload.php";

use app\database\config;

$a = new config();



print_r($a->test());

?>
    </pre>
</body>
</html>