<?php

class TennisMatch
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function thingsThatShouldBePrivate()
    {
        echo 'The Private things that we should keep it private.🤐';
    }
}

// how to get a  private function

$method = new \ReflectionMethod(Person::class, 'thingsThatShouldBePrivate');
$method->setAccessible(true);
$person = new Person('Sam');
$method->invoke($person);