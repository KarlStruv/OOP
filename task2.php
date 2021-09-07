<?php
//Write a method named swapPoints that accepts two Points as parameters and swaps their x/y values.
//
//Consider the following example code that calls swapPoints..

class Point{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() : int
    {
        return $this->x;
    }
    public function setX($x) : void
    {
        $this->x = $x;
    }
    public function getY() : int
    {
        return $this->y;
    }
    public function setY($y) : void
    {
        $this->y = $y;
    }
}

class Points{
    private Point $first;
    private Point $second;

    public function __construct(Point $first, Point $second){
        $this->first = $first;
        $this->second = $second;
    }

    public function swapPoints(){
        $x = $this->first->getX();
        $y = $this->first->getY();
        $this->first->setX($this->second->getX());
        $this->first->setY($this->second->getY());
        $this->second->setX($x);
        $this->second->setY($y);
    }
}

$x = new Point(54, 72);
$y = new Point(31, 9);

$points = new Points($x, $y);
$points->swapPoints();

echo "{$x->getX()}, {$x->getY()}" . PHP_EOL;
echo "{$y->getX()}, {$y->getY()}" . PHP_EOL;

