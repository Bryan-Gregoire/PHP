<?php 

function calcRacineCubique($x,$n = 2) {
    return pow($x, 1 / $n);
}
echo calcRacineCubique(4,3);

?>