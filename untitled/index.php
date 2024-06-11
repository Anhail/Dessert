<?php


class Plant
{
    public $title;
    protected $color;
    public $season;

    public function __construct($title, $color, $season)
    {


        $this->title = $title;
        $this->color = $color;
        $this->season = $season;
    }

    public function someCalculation()
    {

    }
}

class Rosa extends Plant
{

}

$plant = new Plant('Tulpan', 'Purple', 'spring');
$rosa = new Rosa('Rosa', 'Blue', 'spring');

echo $plant->;

