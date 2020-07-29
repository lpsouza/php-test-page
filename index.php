<?php
    $time_start = microtime(true);
    $hostname = php_uname('n');
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
        file("https://via.placeholder.com/1920x1080");
        $time_end = microtime(true);
        $time = $time_end - $time_start;
    ?><p>Page loaded in <?= round($time, 2) ?> seconds.</p>
</body>
</html>
