<?php

// $skip[] = "";

$f_ds = array_slice(scandir("./"), 2);

$index = 0;

foreach ($f_ds as $INDEX => $f_d) {
    if (!is_dir("./$f_d")) {
        $index = $INDEX;
        break;
    }
}

echo "<ul :is>";
foreach (array_slice($f_ds, $index) as $f_d) {
    if (is_dir("./$f_d")) {
        $index = $INDEX;
        continue;
    }
    // if (array_search($f_d, $skip) !== false) {
    //     continue;
    // }
    echo "<li><a href=\"$f_d\">$f_d</a></li>";
}
echo "</ul>";

?>