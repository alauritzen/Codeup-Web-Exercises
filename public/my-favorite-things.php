<?php
$things=["family", "Dr. B and Limeade", "Caramel Turtle Pecan Ice Cream", "Game of Thrones (TV series)", "pizza", "Archer Farms Buffalo Wing Potato Chips", "IBC Tangerine Cream Soda"]
?>

<!DOCTYPE html>
<html>
<head>
    <title>My favorite things</title>
<style>

h1 {
    color: DarkOrange;
    font-size: 28px;
    font-family: Arial;
}
#things tr:nth-child(odd) {
    background-color: DarkOrange;
}

.thing {
    display: none;
    padding: 5px 20px 5px 20px;

}

</style>
</head>
<body>
<h1>A few of my favorite things</h1>
<table id="things">
    <?php  foreach ($things as $each) { ?>
        <tr class="stuff">
            <td class="thing"><?php echo $each; ?></td>
        </tr>
    <?php } ?>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
(function() {


    
    var i=0;
    var intervalId=setInterval(function() {
        $(".thing:eq(" + i + ")").css("display", "block").css("width", 200);
        i++;
        if (i==($(".thing").length)) {
            clearInterval(intervalId);
        }
    }, 1000);



})();
</script>
</body>
</html>