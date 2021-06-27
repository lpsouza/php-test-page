<?php
    if (@$_GET["phpinfo"] == 1) {
        phpinfo();
        die();
    }
    $time_start = microtime(true);
    $hostname = php_uname("n");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $hostname ?></title>
</head>
<body>
    <h1><?= $hostname ?></h1>
    <?php
		if (@$_GET["size"] > 0) {
			set_time_limit(300);
			echo "<div style=\"display: none\">";
			for ($i=0; $i <= $_GET["size"]; $i++) { 
				echo "a";
			}
			echo "</div>";
		}

        $time_end = microtime(true);
        $time = $time_end - $time_start;
    ?><p>Page loaded in <?= round($time, 2) ?> seconds.</p>

    <p><a href="?size=5000000">5Mb load</a></p>
    <p><a href="?size=10000000">10Mb load</a></p>
    <p><a href="?phpinfo=1">phpinfo();</a></p>
</body>
</html>
