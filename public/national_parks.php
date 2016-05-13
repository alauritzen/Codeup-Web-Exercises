<?php
require_once('../db_credentials.php');
require_once('../park_db_connect.php');

$limit=3;
$offset=inputGet("results");
$selection = "SELECT * FROM national_parks LIMIT $limit OFFSET $offset";

function getAllRows($dbc, $selection) {
    $data = [];

    $data['array']=$dbc->query($selection)->fetchAll(PDO::FETCH_ASSOC);

    return $data;

}

function inputGet($key) {
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : 0;
}

extract(getAllRows($dbc, $selection));
// var_dump($array);
?>


<!DOCTYPE html>
<html>
<head>
    <title>National Parks output</title>
</head>
<body>

<h1>Some National Parks</h1>

<?php foreach($array as $park) { ?>
    <p>Name: <?= $park['name'] ?> </p>
    <p>Location: <?= $park['location'] ?> </p>
    <p>Date established: <?= $park['date_established'] ?> </p>
    <p>Area (in acres): <?= $park['area_in_acres'] ?> </p>
    <p>=====================</p>
<?php }; ?> <!-- end foreach -->

<p><a href="?results=<?= $offset+$limit ?>">Next</a></p>
<p><a href="?results=<?= $offset-$limit ?>">Previous</a></p>

</body>
</html>