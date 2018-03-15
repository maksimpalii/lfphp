<?php
/**
 * В кратце: Возмжоно прятать часть кода в "капсулы"
 */
class Capsule
{
    private $hidden = 123;
    protected $partiallyhidden = 'abc';
    protected $changes = 0;
    public $open = 'OPEN';
    public $idea;

    /**
     * Возвращает значение. Так называемый геттер
     * @return int
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Выставляет значение. Так называемый сеттер
     * @param $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
        $this->changes++;
    }

    public function getChanges()
    {
        echo $this->changes;
    }
}

$object = new Capsule();
$asd = $object->getHidden();
$asd = 2;
$again = $object->getHidden();
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->setHidden(25);
$object->getChanges();
