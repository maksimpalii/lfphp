<?php
/**
 * Краткая суть: каждый объект гарантировано может выполнять некую работу.
 * Иными словами, Если это фигура, то мы ее можем нарисовать.
 * Если это тарелка, то ее можно наполнить. И разбить. Таким образом абстрактный класс
 * Тарелка будет иметь два абстрактных метода - наполнить и разбить.
 */
abstract class Figure
{
    abstract public function Draw(); // абстрактный метод «Нарисовать фигуру»     }
}

class Triangle extends Figure
{
    public function Draw()
    {
        echo 'рисуем треугольник';
    }
}


class Circle
{
    public function Draw()
    {
        echo 'рисуем круг';
    }
}


function drawFigure($fig)
{
    if ($fig instanceof Figure) {
        $fig->Draw();
    } else {
        echo 'Неизвестная фигура';
    }
}

$triangle = new Triangle();
$circle = new Circle();
drawFigure($triangle);
drawFigure($circle);



