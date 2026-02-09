<?php
// for ($i = 0; $i <= 20; $i++) {
//     echo 1 * $i;
// }

for ($n = 1; $n <= 10; $n++) {
    echo "Tabuada do $n";
    echo "<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . $i * $n;
        echo "<br>";
    }
}

for ($i = 1; $i < 7; $i++) {
    for ($n = 1; $n < $i; $n++) {
        echo "*";
    }
    echo "<br>";

}
