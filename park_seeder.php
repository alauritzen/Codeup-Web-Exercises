<?php
require_once('db_credentials.php');
require_once('park_db_connect.php');

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$delete_records = 'TRUNCATE national_parks';
$dbc->exec($delete_records);


$parks = array(
    ['name'=>'Joshua Tree',
    'location'=>'California',
    'date_established'=>'1994-10-31',
    'area_in_acres'=>'789745.47'],
    ['name'=>'Dry Tortugas',
    'location'=>'Florida',
    'date_established'=>'1992-10-26',
    'area_in_acres'=>'64701.22']
);

foreach ($parks as $park) {
    $populate_records = 
        "INSERT INTO national_parks (name, location, date_established, area_in_acres)
        VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}','{$park['area_in_acres']}');";
    $dbc->exec($populate_records);
};



?>