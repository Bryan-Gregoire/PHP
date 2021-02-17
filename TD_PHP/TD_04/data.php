<?php

$jours = ["lundi", "mardi", "mercredi", "jeudi", "vendredi"];
$heures = ["8h15", "9h15", "10h30", "11h30", "13h45", "14h45", "16h", "17h"];

$horaires = [
    "C111" => [
        ["CPP NVS 003", "ATL APA 404", "", "CPP NVS 003", "ALG NRI 201"],
        ["CPP NVS 003", "ATL APA 404", "", "CPP NVS 003", "ALG NRI 201"],
        ["ANLL CUV 404", "ATL APA 404", "CAI JDS 203", "ANL CUV 003", "CPPL NVS 404"],
        ["ANLL CUV 404", "ATL APA 404", "CAI JDS 203", "ANL CUV 003", "CPPL NVS 404"],
        ["PER CUV 003", "PERL ARO 401", "CAI JDS 203", "ANLL CUV 404", "ALG NRI 201"],
        ["PER CUV 003", "PERL ARO 401", "CAI JDS 203", "ANLL CUV 404", "ALG NRI 201"],
        ["", "", "DRO ART 003", "", ""],
        ["", "", "DRO ART 003", "", ""],
    ],
    "C112" => [
        ["CPP NVS 003", "ATL SRV 401", "", "CPP NVS 003", "ALG NRI 201"],
        ["CPP NVS 003", "ATL SRV 401", "", "CPP NVS 003", "ALG NRI 201"],
        ["ANLL CUV 404", "ATL SRV 401", "CAI JDS 203", "ANL CUV 003", "ANLL SDR 401"],
        ["ANLL CUV 404", "ATL SRV 401", "CAI JDS 203", "ANL CUV 003", "ANLL SDR 401"],
        ["PER CUV 003", "", "CAI JDS 203", "CPPL NVS 401", "ALG NRI 201"],
        ["PER CUV 003", "", "CAI JDS 203", "CPPL NVS 401", "ALG NRI 201"],
        ["PERL CUV 403", "", "DRO ART 003", "", ""],
        ["PERL CUV 403", "", "DRO ART 003", "", ""],
    ],
];
$grp = $_GET["group"];
echo "<br>";
echo "<table>";

echo "<tr>";
echo "<th></th>";
for ($k = 0; $k < count($jours); $k++) {
    echo "<th> " . $jours[$k] . "</th>";
}
echo "</tr>";

for ($i = 0; $i < count($horaires[$grp]); $i++) {
    echo "<tr>";
    echo "<td> " . $heures[$i] . "</td>";
    for ($j = 0; $j < count($horaires[$grp][$i]); $j++) {
        echo "<td>" . $horaires[$grp][$i][$j];
    }
    echo "</tr>";
}
echo "</table>";
?>

<style>
    table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    table tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    table th,
    table td {
        padding: 12px 15px;
    }

    table  tr {
        border-bottom: 1px solid #dddddd;
    }

    table  tr:nth-of-type(even) {
        background-color: #009879;
    }

    table tr:last-of-type {
        border-bottom: 2px solid #009879;
    }
</style>