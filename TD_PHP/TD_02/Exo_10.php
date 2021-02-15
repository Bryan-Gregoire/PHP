<?php
class Cercle {
    private $rayon;
    private $point;

    public function __construct($aRayon = 1, $aPoint)
    {
        $this->rayon = $aRayon;
        $this->point = $aPoint;
    }

    public function __toString()
    {
        return "Rayon du cercle = $this->rayon en point : ". $this->point->__toString();
    }

    public function getRayon() {
        return $this->rayon;
    }

    public function getPoint() {
        return $this->point;
    }

    public function superficie() {
        return pi()*pow($this->radius,2);
    }
}

require_once "Exo_9.php";
$p1 = new Point(700,250);
$circle = new Cercle(180,$p1);
echo $circle->__toString() . "<br>";

?>
<div style="width: <?=$circle->getRayon()?>px; height: <?=$circle->getRayon()?>px; background-color:crimson;border-radius: 50%; margin-left: <?= $circle->getPoint()->getX()?>px; margin-top: <?= $circle->getPoint()->getY()?>px;"></div>
