<?php
for ($i = 2005; $i <= 2010; $i++) {
    $date = mktime(0, 0, 0, 5, 1, $i);
    if (date("w", $date) == 6 OR date("w", $date) == 0) {
        echo "1er Mai $i : Désolé<br />";
    } elseif (date("w", $date) == 5 OR date("w", $date) == 1) {
        echo "1er  Mai $i : Week end prolongé<br />";
    }
}
?>