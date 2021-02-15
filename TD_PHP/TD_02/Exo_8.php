<?php
function jour_val($jour)
{
    $tab_asso = ["lundi" => 1, "mardi" => 2, "mercredi" => 3, "jeudi" => 4, "vendredi" => 5, "samedi" => 6, "dimanche" => 7];
    return array_key_exists($jour, $tab_asso) ? $tab_asso[$jour] : -1;
}

echo "Lundi = " . jour_val("lundi") . " <br>";
echo "Mardi = " . jour_val("mardi") . " <br>";
echo "Mercredi = " . jour_val("mercredi") . " <br>";
echo "Jeudi = " . jour_val("jeudi") . " <br>";
echo "Vendredi = " . jour_val("vendredi") . " <br>";
echo "Samedi = " . jour_val("samedi") . " <br>";
echo "Dimanche = " . jour_val("dimanche") . " <br>";
echo "Lundedi = " . jour_val("lundedi") . " <br>";
echo "Mercrendi = " . jour_val("mercrendi") . " <br>";
?>

<style>
body {
font-size: 25px;
font-weight: bold;
}
</style>