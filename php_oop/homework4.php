<?php

trait MoveDirection
{
    public function MoveDirection()
    {
        switch ($this->GetDirection()) {
            case 'назад':
                echo 'Включаете передачу назад ' . PHP_EOL;
                break;
            case 'вперед':
                echo 'Включаете передачу вперед ' . PHP_EOL;
                break;
        }
    }
}

trait mechanism
{
    use MoveDirection;

    abstract public function Engine();

    public function GetHorsePower()
    {
        echo 'Двигатель: ' . $this->GetSpeed() / 2 . ' лошадиных сил' . PHP_EOL;
    }

    public function TransmissionAuto()
    {
        $this->MoveDirection();
    }

    public function TransmissionManual()
    {
        $this->MoveDirection();
        $speed = $this->GetSpeed();
        if ($speed > 0 && $speed <= 20) {
            echo 'Включаем 1-ю передачу' . PHP_EOL;
        } else {
            echo 'Включаем 2-ю передачу' . PHP_EOL;
        }
    }
}

interface EngineWork
{
    public function EngineStart();

    public function EngineStop();

    public function EngineWork();
}

abstract class Car
{
    public $name;

    abstract public function __construct();

    abstract public function moveCar($distance, $speed, $direction);

    abstract public function GetSpeed();

    abstract public function GetDistance();

    abstract public function GetDirection();

}

class Niva extends Car implements EngineWork
{
    private $speed;
    private $direction;
    private $distance;
    protected $temperatur;
    use mechanism;

    public function __construct($name = 'Niva')
    {
        $this->name = $name;
    }

    public function moveCar($distance, $speed, $direction)
    {
        $this->distance = $distance;
        $this->speed = $speed;
        $this->direction = $direction;
        $this->GetHorsePower();
        if ($speed >= 1) {
            $this->Engine();
        }
    }

    public function GetSpeed()
    {
        return $this->speed;
    }

    public function GetDistance()
    {
        return $this->distance;
    }

    public function GetDirection()
    {
        return $this->direction;
    }

    public function Engine()
    {
        $this->EngineStart();
        $this->TransmissionAuto();
        //$this->TransmissionManual();
        $this->EngineWork();

    }

    public function EngineStart()
    {
        echo 'Вы включаете двигатель' . PHP_EOL;
    }

    public function EngineStop()
    {
        echo 'Выключаете двигатель' . PHP_EOL;
    }

    public function EngineWork()
    {
        $distance = $this->distance;
        for ($distanceNull = 0, $this->temperatur = 0; $distanceNull <= $distance; $distanceNull += 10, $this->temperatur += 5) {
            echo 'Машина проехала:  ' . $distanceNull . PHP_EOL;
            echo $this->Cooler($this->temperatur) . PHP_EOL;
            if ($distanceNull === $distance) {
                $this->EngineStop();
            }
        }
    }

    private function Cooler()
    {
        echo 'Температура двигателя :' . $this->temperatur . PHP_EOL;
        if ($this->temperatur == 90) {
            echo 'Включить куллер' . PHP_EOL;
            $this->temperatur = 80;
        }
    }
}

$Niva = new Niva();
echo $Niva->name . PHP_EOL;
$Niva->moveCar(250, 10, 'вперед');
