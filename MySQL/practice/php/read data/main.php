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
if (isset($_GET["comment"])) {
    $password = $_GET["comment"];
    $link = mysqli_connect("localhost","root",$password);
    if ($link) {
    }
    else {
        die ('mysql connect faild<span class="br"></span>');
    }
}
else {
    print "ERROR";
}
$link = mysqli_connect("localhost","root",$password);

$db_se = mysqli_select_db($link, 'php_prac');
if (!$db_se) {
    die ('db connect faild<span class="br"></span>');
}

$sql = 'SELECT * from user_data';

$result = mysqli_query($link, $sql);
if (!$result) {
    die ('query faild<span class="br"></span>');
}

echo "<h4>data of php_prac.user_data</h4>";
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="contents">';
    echo "id = ".$row['id']."<span class=\"br\">"."email = ".$row['email']." <span class=\"br\" /> name = ".$row['name'].'<span class="br" \></div>';
}

mysqli_close($link);

?>
            <h3>after php</h3>
            </section>
            <section class="html" id="after">
            </section>
        </div>
        <style>
            .contents {
                margin: 20px 0px;
            }
        </style>
    </body>
</html>