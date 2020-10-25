<?php

$f_ds = array_slice(scandir("./"), 2);

echo "<ul :is>";
echo "<li><a href=\"./..\">Parent directory</a></li>";
foreach ($f_ds as $index => $f_d) {
    if (!is_dir("./$f_d")) {
        continue;
    }
    echo "<li><a href=\"$f_d\">$f_d</a></li>";
}
echo "</ul>";

?>