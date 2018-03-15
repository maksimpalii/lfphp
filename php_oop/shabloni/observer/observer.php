<?php

interface IObserver
{
    public function onChanged($sender, $args);
}

interface IObservable
{
    public function addObserver($observer);
}

class userList implements IObservable
{
    private $observers = [];

    public function addCustomer($name)
    {
        //добавляем в бд
        foreach ($this->observers as $obs) {
            $obs->onChanged($this, $name);
        }
    }

    public function addObserver($observer)
    {
        $this->observers [] = $observer;
    }
}

class UserListLogger implements IObserver
{
    public function onChanged($sender, $args)
    {
        echo("'$args' added to user list\n");
    }
}

$ul = new userList();
$ul->addObserver(new UserListLogger());
$ul->addCustomer("Игорян");

new stdClass();
