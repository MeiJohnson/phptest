<html>
<head>
<title>h1 tags</title>
</head>
<body>
<h1>Царулкова Анастасия</h1>
<?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    $data = Carbon::now() -> format('j.m.Y h:i');
    echo '<h2>' .$date. '</h2>';
    ?>
</html>
