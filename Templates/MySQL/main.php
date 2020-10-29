<!DOCTYPE html>
<html>
    <head>
        <meta charlist="utf-8">
        <title>practice</title>
        <link rel="stylesheet" href="/Templates/PHP prac/doc_style.css">
    </head>
    <body>
        <a href="./.." class="parent_dir">Parent directory</a>
        <div class="main">
            <h1 class="title">php practice</h1>
            <section class="html" id="prev">
            </section>
            <section class="php">
            <h3>befor php</h3>
<?php

$password = null;

$password = $_GET["pass"];
$link = mysqli_connect("localhost","root",$password);
if ($link) {
}
else {
    die ('mysql connect faild<span class="br"></span>');
}

?>
            <h3>after php</h3>
            </section>
            <section class="html" id="after">
            </section>
        </div>
    </body>
</html>