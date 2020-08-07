<?php

namespace App\Shapes;

class Extrude
{
    private $shapeInterface;
    private $depth;

    public function __construct(ShapeInterface $si, float $depth) 
    {
        $this->shapeInterface = $si;
        $this->depth = $depth;
    }

    public function volume() : float
    {
        return $this->depth * $this->shapeInterface->area();
    }
}