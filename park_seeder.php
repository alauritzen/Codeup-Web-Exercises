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
    'area_in_acres'=>'789745.47',
    'description'=>'Named after the Mar 7, 2016 cohort at Codeup.',
    'photo_link' => 'img/NPS_JoshuaTree.jpg'],

    ['name'=>'Dry Tortugas',
    'location'=>'Florida',
    'date_established'=>'1992-10-26',
    'area_in_acres'=>'64701.22',
    'description'=>'A great place to bring your overly wet turtles.',
    'photo_link' => 'img/NPS_DryTortugas.jpg'],

    ['name'=>'Congaree',
    'location'=>'South Carolina',
    'date_established'=>'2003-11-10',
    'area_in_acres'=>'26545.86',
    'description'=>'Kinda like the Congo, but with a southern twist!',
    'photo_link' => 'img/NPS_Congaree.jpg'],
    
    ['name'=>'Carlsbad Caverns',
    'location'=>'New Mexico',
    'date_established'=>'1930-05-14',
    'area_in_acres'=>'46766.45',
    'description'=>'I think I\'ve been here.',
    'photo_link' => 'img/NPS_CarlsbadCaverns.jpg'],
    
    ['name'=>'Death Valley',
    'location'=>'California and Nevada',
    'date_established'=>'1994-10-31',
    'area_in_acres'=>'3372401.96',
    'description'=>'Formerly deadly, now just uncomfortable, but that doesn\'t have the same ring to it.',
    'photo_link' => 'img/NPS_DeathValley.jpg'],
    
    ['name'=>'Theodore Roosevelt',
    'location'=>'North Dakota',
    'date_established'=>'1978-11-10',
    'area_in_acres'=>'70446.89',
    'description'=>'Named after Teddy Roosevelt.',
    'photo_link' => 'img/NPS_TheodoreRoosevelt.jpg'],
    
    ['name'=>'Yellowstone',
    'location'=>'Wyoming, Montana and Idaho',
    'date_established'=>'1872-03-01',
    'area_in_acres'=>'2219790.71',
    'description'=>'If you\'re picknicking, beware of bears.',
    'photo_link' => 'img/NPS_Yellowstone.jpg'],
    
    ['name'=>'Voyageurs',
    'location'=>'Minnesota',
    'date_established'=>'1971-01-08',
    'area_in_acres'=>'218200.17',
    'description'=>'Sounds exciting.',
    'photo_link' => 'img/Voyageurs.jpg'],
    
    ['name'=>'Mammoth Cave',
    'location'=>'Kentucky',
    'date_established'=>'1941-07-01',
    'area_in_acres'=>'52830.19',
    'description'=>'Ancient mammoth living quarters. The walls are adorned with early drawings by mammoths detailing the awful murder of their kin by humans.',
    'photo_link' => 'img/NPS_MammothCave.jpg'],
);

$sqlInsert="INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
    VALUES (:name, :location, :date_established, :area_in_acres, :description)";

$stmt=$dbc->prepare($sqlInsert);

foreach ($parks as $park) {
    // $populate_records = 
    //     "INSERT INTO national_parks (name, location, date_established, area_in_acres)
    //     VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}','{$park['area_in_acres']}');";
    // $dbc->exec($populate_records);

    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
    $stmt->execute();
};



?>