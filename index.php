<?php
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    echo '<h1>Tsarulkova Anastasia</h1>';
    $date = Carbon::now() -> format('j.m.Y h:i');
    echo '<h2>' . $date . '</h2>';
    
