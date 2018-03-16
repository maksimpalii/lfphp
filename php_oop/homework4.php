<?php

trait TransDirectionBack
{
    function _TransDirectionBack()
    {
        echo 'TransDirectionBack';
    }
}

trait mechanism
{
    use TransDirectionBack;

    function Engine($speed, $distance)
    {
        //echo ' dvishok rabotaet ' . $speed;
    }

    function EngineStart()
    {
        echo 'вы включаете двигатель' . PHP_EOL;
    }

    function Cooler()
    {

    }

    function TransmissionAuto($direction)
    {
        if ($direction === 'вперед') {
            $this->EngineStart();
        }
    }

    function TransmissionManual()
    {
        echo 'transManual';
    }

}


class Car
{
    public $name;
    use mechanism;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function moveCar($distance, $speed, $direction)
    {
        $this->TransmissionAuto($direction);
        // echo $this->name . $distance . $speed . $direction;
        //$this->Engine($speed);
        // $this->_TransDirectionBack();
    }

}


$Niva = new Car('Niva');
$Niva->moveCar(200, 10, 'вперед');
//$Niva->workEngine();
//$Niva->TransmissionAuto();