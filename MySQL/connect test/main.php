<!DOCTYPE html>
<html>
    <head>
        <meta charlist="utf-8">
        <title>practice</title>
        <link rel="stylesheet" href="/Templates/normal files/style.css"
    </head>
    <body>
        <a href="./.." class="parent_dir">Parent directory</a>
        <div class="main">
            <h1 class="body-title">php practice</h1>
            <section class="html" id="prev">
            </section>
            <section class="php">
            <h3>befor php</h3>
<?php

$password = null;

if (isset($_GET["comment"])) {
    $password = $_GET["comment"];
    if (mysqli_connect("localhost","root",$password)) {
        echo "connect success!";
    }
    else {
        echo "connect fail!";
    }
}
else {
    print "ERROR";
}

?>
            <h3>after php</h3>
            </section>
            <section class="html" id="after">
            </section>
        </div>
    </body>
</html>