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
    'area_in_acres'=>'64701.22'],

    ['name'=>'Congaree',
    'location'=>'South Carolina',
    'date_established'=>'2003-11-10',
    'area_in_acres'=>'26545.86'],
    
    ['name'=>'Carlsbad Caverns',
    'location'=>'New Mexico',
    'date_established'=>'1930-05-14',
    'area_in_acres'=>'46766.45'],
    
    ['name'=>'Death Valley',
    'location'=>'California and Nevada',
    'date_established'=>'1994-10-31',
    'area_in_acres'=>'3372401.96'],
    
    ['name'=>'Theodore Roosevelt',
    'location'=>'North Dakota',
    'date_established'=>'1978-11-10',
    'area_in_acres'=>'70446.89'],
    
    ['name'=>'Yellowstone',
    'location'=>'Wyoming, Montana and Idaho',
    'date_established'=>'1872-03-01',
    'area_in_acres'=>'2219790.71'],
    
    ['name'=>'Voyageurs',
    'location'=>'Minnesota',
    'date_established'=>'1971-01-08',
    'area_in_acres'=>'218200.17'],
    
    ['name'=>'Mammoth Cave',
    'location'=>'Kentucky',
    'date_established'=>'1941-07-01',
    'area_in_acres'=>'52830.19'],
    
);

foreach ($parks as $park) {
    $populate_records = 
        "INSERT INTO national_parks (name, location, date_established, area_in_acres)
        VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}','{$park['area_in_acres']}');";
    $dbc->exec($populate_records);
};



?>