<?php
$h = date("H");

if($h >= 4 && $h <= 12) {
    echo "Bonne journée !";
} elseif ($h > 12 && $h <= 16) {
    echo "Bonne après midi !";
} elseif ($h >= 16 && $h <= 20) {
    echo "Bonne soirée !";
} else {
    echo "Bonne nuit !";
}
