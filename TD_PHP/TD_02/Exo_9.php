<?php
class Point
{
    private $x;
    private $y;

    public function __construct($ax= 0, $ay = 0)
    {
        $this->x = $ax;
        $this->y = $ay;
    }

    public function __toString()
    {
        return "($this->x,$this->y)";
    }

    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }

    public function dist($ax, $ay) {
        return sqrt(pow(($ax - $this->x), 2) + pow(($ay - $this->y),2));
    }

    public function pointMilieu($ax,$ay) {
        return new point(($this->x + $ax) / 2,($this->y + $ay) / 2 ); 
    }
}
?>

<?php
 $p1 = new Point(1,2);
 ?>
 <h1>Test de Point</h1>

 <p>Le point: <?= $p1 ?></p>
 <p>Sa composante X : <?= $p1->getX() ?></p>
