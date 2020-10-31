<!DOCTYPE html>
<html>
    <head>
        <meta charlist="utf-8">
        <title>practice</title>
        <link rel="stylesheet" href="/Templates/PHP prac/doc_style.css">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet"> -->
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

$usrname = $_GET["usrname"];
$email = $_GET["email"];

$db_se = mysqli_select_db($link, "php_prac");
if (!$db_se) {
    die ("db select faild");
}

$sql = "select * from user_data";
$result = mysqli_query($link, $sql);
if (!$result) {
    die ("query faild");
}

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'].", ".$row['email'].", ".$row['name'];
}

?>
            <h3>after php</h3>
            </section>
            <section class="html" id="after">
            </section>
        </div>
    </body>
    <style>
        /* .php {
            font-family: 'Inconsolata', monospace
        } */
    </style>
</html>