<!DOCTYPE html>
<html>
    <head>
        <meta charlist="utf-8">
        <title>practice</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <a href="./.." class="parent_dir">Parent directory</a>
        <div class="main">
            <h1 class="body-title">php practice</h1>
            <section class="html" id="prev">
            </section>
            <h3>php start</h3>
            <section class="php">
<?php

$br_s = "<span class=\"br\">";
$br_e = "</span>";
$name = "shikyou";
$old = 12;
$favorate_food = "sishi";
echo "<p>";
echo $br_s."My name is ".$name.".".$br_e;
echo $br_s."I'm ".$old." years old.".$br_e;
echo $br_s."My favorate food is ".$favorate_food.".".$br_e;
echo "</p>";

?>
            </section>
            <h3>php end</h3>
            <section class="html" id="after">
            </section>
        </div>
    </body>
</html>