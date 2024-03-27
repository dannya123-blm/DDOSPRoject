<?php
require 'dbconnections.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Whiteboard</title>
</head>
<body>
<canvas id="whiteboard" height='500' style="border: 3px solid blue;"></canvas>
<button id="clear">Wipe All</button>

<button style="color: red" id="red">RED</button>
<button style="color: blue" id="blue">BLUE</button>
<button style="color: green" id="green">GREEN</button>
<button style="color: black" id="black">BLACK</button>

<script src="js/Whiteboard.js" ></script>
</body>
</html>
