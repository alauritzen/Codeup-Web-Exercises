<!DOCTYPE html>
<html>
<head>
    <title>Name Generator</title>
</head>

<style>
h1 { color: salmon; text-align: center }

</style>
<body>

<?php
    $adjectives=["randy", "illegitimate", "manic", "complete", "what?", "amateur", "wintry", "fishy", "quixotic", "lucid", "heartwarming"]
?>

<?php
    $nouns=["amateur", "monument", "village", "hero", "pharmacy", "north", "monkey", "1987 Plymouth Voyager minivan with faux wood panelling", "season", "funeral", "cobbler"]
?>

<?php
    function selectWord ($array) {
        $index = mt_rand(0, (count($array)-1));
        return $array[$index];
    }
?>

<?php { ?>


    <h1> <?php echo selectWord($adjectives) . " " . selectWord($nouns); ?></h1>

<?php } ?>
    







</body>
</html>