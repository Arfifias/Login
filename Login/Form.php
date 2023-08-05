<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Success</title>
    <link rel = "stylesheet" href = "Style.css"><!--Linking again the css file-->
</head>
<body>
<?php
$name = $_POST["username"];//Inserting the username with a post method to a variable
echo "<br><br><h2 style = 'color: black; text-align: center;' class = 'Message'>Welcome $name " . " your password is hidden do not worry!!!</h2>";
echo "<br><br><h2 style = 'color: black;text-align: center;' class='Message2'>Hope you $name liked the design of this login page.....<h2>";
echo "<br><br><h2 style = 'color: black;text-align: center;' class='Message3'>Make sure $name you follow me on GitHub......Thanks for your attention!!!!<h2>";
/*
 * Above the user can see three possible messages which are styled with css
 * This was a small project due to the fact that I am making the next GUI app with java again
 * Probably I will upload again website stuff in the future so stay tuned
 */
?>
</body>
</html>







