<!DOCTYPE html>
<html>
    <head>
        <meta charlist="utf-8">
        <title>practice</title>
        <link rel="stylesheet" href="/Templates/normal files/style.css">
    </head>
    <body>
        <a href="./.." class="parent_dir">Parent directory</a>
        <div class="main">
            <h1 class="title">php practice</h1>
            <h2 class="subtitle">equal</h2>
            <section class="html" id="prev">
            </section>
            <section class="php">
            <h3>---php start---</h3>
<?php

$a = "123";
$b =  123 ;
if ($a == $b) {
    echo "(\"123\" == 123) is true";
}
else {
    echo "(\"123\" == 123) is false";
}

echo "<span class=\"br\">";

if ($a === $b) {
    echo "(\"123\" === 123) is true";
}
else {
    echo "(\"123\" === 123) is false";
}

?>
            <h3>---php end----</h3>
            </section>
            <section class="html" id="after">
            </section>
        </div>
        <style>
        </style>
    </body>
</html>