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
            <h2 class="subtitle">Ternary operator</h2>
            <section class="html" id="prev">
            </section>
            <section class="php">
            <h3>---php start---</h3>
<?php

$lang = 'En';
// $lang = 'Ja';
$hello = $lang == 'Ja' ? "こんにちは" : "Hello";
echo $hello;

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