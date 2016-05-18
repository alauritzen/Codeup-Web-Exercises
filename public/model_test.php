<?php
require_once '../Model.php';

$town_country=new Model();

$town_country->type='minivan';
$town_country->seats=7;

print_r($town_country);

?>