<?php

class calendrier {

    function nomMois($mois) {

        $nom = "";

        switch ($mois) {
            case 1:
                $$nom = "janvier";
                break;
            case 2:
                $nom = "fevrier";
                break;
            case 3:
                $nom = "mars";
                break;
            case 4:
                $nom = "avril";
                break;
            case 5:
                $nom = "mai";
                break;
            case 6:
                $nom = "juin";
                break;
            case 7:
                $nom = "juillet";
                break;
            case 8:
                $nom = "aout";
                break;
            case 9:
                $nom = "septembre";
                break;
            case 10:
                $nom = "octobre";
                break;
            case 11:
                $nom = "novembre";
                break;
            case 12:
                $nom = "decembre";
                break;
            default:
                if ($mois < 1 || $mois > 12) {
                    throw new Exception("Numéro de mois impossible " . $mois);

                }

        }
        return $nom;
    }

    function afficherTitre($mois, $année) {
        $this->nomMois($mois);
        if ($mois < 1 || $mois > 12) {
            throw new Exception("Numéro de mois impossible; " . $mois);

        }
        echo "<tr><th colspan = 7>" . $this->nomMois($mois) . " " . $année . "</th></tr>";
    }

    function afficherEntête() {
        echo "<tr> <td> Lu </td> <td> Ma </td> <td> Me </td> <td> Je </td> <td> Ve </td> <td> Sa </td> <td> Di </td> </tr>";
    }

    function afficherMois($décalage, $nombreJours) {
        if ($décalage < 0 || $décalage > 6) {
            throw new Exception("le décalage impossible; " . $décalage);
        }
        if ($nombreJours < 1 || $nombreJours > 31) {
            throw new Exception("nombre de jour impossible; " . $nombreJours);

        }
        echo "<tr>";
        for ($i = 0; $i < $décalage; $i++) {
            echo "<td> </td>";
        }
        for ($i = 1; $i <= $nombreJours; $i++) {
            if ($i < 10) {
                echo "<td> 0" . ($i) . "</td>";
            } else {
                echo "<td>" . $i . "</td>";
            }
            if (($décalage + $i) % 7 == 0) {
                echo("</tr>");
            }

        }

    }

    function estBissextile($année) {
        return ($année % 4 == 0) && ($année % 100 != 0 || $année % 400 == 0);
    }

    function nombreJours($mois, $année) {
        if ($mois < 1 || $mois > 12) {
            throw new Exception("les mois sont incohérent; " + $mois);

        }
        $nbJours = 31;

        if ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) {
            $nbJours = 30;

        } elseif ($mois == 2) {
            if ($this->estBissextile($année)) {
                $nbJours = 29;

            } else {
                $nbJours = 28;
            }
        }
        return $nbJours;
    }

    function numéroJour($jour, $mois, $année) {
        if ($mois < 1 || $mois > 12) {
            throw new Exception("Numéro du mois incohérent " + $mois);
        }

        if ($jour < 1 || $jour > $this->nombreJours($mois, $année)) {
            throw new Exception("Numéro du jour impossible pour ce mois $jour $mois");
        }
        $h = 0;
        $nouvelAnnée = $année;
        $jour = 1;
        $q = $jour;
        $m = $mois;

        if ($mois == 1 || $mois == 2) {
            $nouvelAnnée = $année - 1;
            $m = $mois + 12;
        }
        $j = $nouvelAnnée / 100;
        $k = $nouvelAnnée % 100;
        $h = (($q + (((($m + 1) * 13)) / 5) + ($k) + (($k) / 4) + (($j) / 4) + (5 * ($j)) + 5) % 7);

        return $h;
    }
}
        //echo "Veuillez entrer un numero de mois <br> " ;
        $mois = 9;
        //echo "Veuillez entrer le numero de l'année <br>";
        $année = 1992;

        $cal = new calendrier();
        echo "<table>";
        $cal->afficherTitre($mois,$année);
        $cal->afficherEntête($mois,$année); 
        $nbJours = $cal->nombreJours($mois, $année);
        $décalage = $cal->numéroJour($nbJours, $mois, $année);
        $cal->afficherMois($décalage, $nbJours);
        echo "</table>";
?>

<style>
table, th, td {
  border: 3px solid red;
  color: white;
  font-style: italic;
  font-weight: bold;
  font-variant: small-caps;
  font-size: 25px;
}
table {
    background-color: black;
    width: 30%;
    text-align: center;
}
</style>
