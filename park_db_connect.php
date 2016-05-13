<?php

$dbc=new PDO ('mysql:host=' . PARK_HOST . ';dbname=' . PARK_NAME, PARK_USER, PARK_PASS);

    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>