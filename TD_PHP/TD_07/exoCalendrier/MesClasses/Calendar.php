<?php

namespace G53735;

use Exception;

class Calendar
{

    static function nomMois($mois)
    {
        if ($mois < 1 || $mois > 12) {
            throw new Exception("Numéro de mois impossible " . $mois);
        }

        $nomMois = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
        return $nomMois[$mois - 1];
    }

    static function afficherTitre($mois, $année)
    {
        self::nomMois($mois);
        if ($mois < 1 || $mois > 12) {
            throw new Exception("Numéro de mois impossible; " . $mois);
        }
        echo "<tr><th colspan = 7>" . self::nomMois($mois) . " " . $année . "</th></tr>";
    }

    static function afficherEntête()
    {
        echo "<tr> <td> Lu </td> <td> Ma </td> <td> Me </td> <td> Je </td> <td> Ve </td> <td> Sa </td> <td> Di </td> </tr>";
    }

    static function afficherMois($décalage, $nombreJours)
    {
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
                echo ("</tr>");
            }
        }
    }

    static function estBissextile($année)
    {
        return ($année % 4 == 0) && ($année % 100 != 0 || $année % 400 == 0);
    }

    static function nombreJours($mois, $année)
    {
        if ($mois < 1 || $mois > 12) {
            throw new Exception("les mois sont incohérent; " + $mois);
        }
        $nbJours = 31;

        if ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) {
            $nbJours = 30;
        } elseif ($mois == 2) {
            if (self::estBissextile($année)) {
                $nbJours = 29;
            } else {
                $nbJours = 28;
            }
        }
        return $nbJours;
    }

    static function numéroJour($jour, $mois, $année)
    {
        if ($mois < 1 || $mois > 12) {
            throw new Exception("Numéro du mois incohérent " + $mois);
        }

        if ($jour < 1 || $jour > self::nombreJours($mois, $année)) {
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
        $j = intdiv($nouvelAnnée, 100);
        $k = $nouvelAnnée % 100;
        $h = (($q + intdiv(((($m + 1) * 13)), 5) + ($k) + (intdiv(($k), 4)) + (intdiv(($j), 4)) + (5 * ($j)) + 5) % 7);
        return $h;
    }

    static function displayCalender($mois, $année)
    {
        echo "<table>";
        self::afficherTitre($mois, $année);
        self::afficherEntête($mois, $année);
        $nbJours = self::nombreJours($mois, $année);
        $décalage = self::numéroJour($nbJours, $mois, $année);
        self::afficherMois($décalage, $nbJours);
        echo "</table>";
    }
}
