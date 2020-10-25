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
            <h2 class="subtitle"><?php echo basename(__FILE__, ".php"); ?></h2>
            <section class="html" id="prev">
            </section>
            <section class="php">
            <h3>---php start---</h3>
<?php

$array[0] = 1;
$array[1] = 2;
$array[4] = 5;
$array[2] = 3;
$array['str'] = "str";
print_r($array);

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