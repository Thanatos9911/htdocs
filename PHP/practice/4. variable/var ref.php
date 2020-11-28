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
            <h3>befor php</h3>
            <section class="php">
<?php

$num1 = 12;
$num_ref = & $num1;
print "num1 = $num1, num_ref = $num_ref<br>";
$num1 = 13;
print "num1 changed<br>";
print "num1 = $num1, num_ref = $num_ref<br>";
$num_ref = 14;
print "num_ref changed<br>";
print "num1 = $num1, num_ref = $num_ref";


?>
            </section>
            <h3>after php</h3>
            <section class="html" id="after">
            </section>
        </div>
    </body>
</html>