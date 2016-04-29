<?php 
require_once "functions.php";
function pageController() {
    
    $count=inputGet("count");
    
    $score["count"]=$count;
    return $score;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pong</title>
</head>
<body>
<h1>Counter: <?= $count ?></h1>
<a href="ping.php?count=<?= $count+1 ?>">Hit</a>
<a href="ping.php?count=<?= $count=0 ?>">Miss</a>
</body>
</html>