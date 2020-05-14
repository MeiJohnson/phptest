<?php
    $data = file_get_contents('https://kodaktor.ru/j/rates');
    $response = json_decode($data, true);
    $dollar = $response[0]['sell'];
    $res = $dollar*$_GET["dollars"];
    echo $res;