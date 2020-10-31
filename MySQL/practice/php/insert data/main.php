<!DOCTYPE html>
<html>
    <head>
        <meta charlist="utf-8">
        <title>practice</title>
        <link rel="stylesheet" href="/Templates/PHP prac/doc_style.css">
        <!-- <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet"> -->
        <link rel = "icon" href="/icon.ico">
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

$sql = "SELECT * from user_data";
$result = mysqli_query($link, $sql);
if (!$result) {
    die ("query faild2");
}

$sm_email_flag = false;

while ($row = mysqli_fetch_assoc($result)) {
    if ($email == $row['email']) {
        $sm_email_flag = true;
    }
}

if ($sm_email_flag) {
    die ("email overlapping");
}

$sql = "INSERT into user_data (email, name) values (\"$email\", \"$usrname\");";

$result = mysqli_query($link, $sql);

if (!$result) {
    echo mysqli_error($link);
    die ("query faild1");
}

$sql = "SELECT * from user_data";
$result = mysqli_query($link, $sql);
if (!$result) {
    die ("query faild2");
}

$sm_email_flag = false;

echo '<table border="1" cellspacing="0" bordercolor="#000" class="user_data">';
echo "<tr><th>id</th><th>email</th><th>name</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['name'];
    echo "</td></tr>";
}

echo "</table>";

mysqli_close($link)

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
        .user_data td{
            text-align: center;
        }
    </style>
</html>