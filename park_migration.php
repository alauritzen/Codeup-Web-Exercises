<?php
require_once('db_credentials.php');
require_once('park_db_connect.php');

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$drop_table = 'DROP TABLE IF EXISTS national_parks';

$create_table = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR (70),
    location VARCHAR (70),
    date_established DATE,
    area_in_acres DOUBLE,
    description VARCHAR (300),
    photo_link VARCHAR (50),
    PRIMARY KEY (id)    
);';

$dbc->exec($drop_table);

$dbc->exec($create_table);

?>