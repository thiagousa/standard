<HTML>
<head>
    <title>Standard 1.0.1 </title>
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