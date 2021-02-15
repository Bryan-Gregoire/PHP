<?php
function myMax(...$nbs) {
    $max = $nbs[0];
    foreach ($nbs as $values) {
        if($max < $values) {
            $max = $values;
        }
    }
    return $max;
}
?>

<?= myMax(3,2,7,12,4) ?>