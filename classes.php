<?php


class Task
{
    protected $description;
    protected $completed;

    public function __construct($description)
    {
        // automatically triggered
        $this->description = $description;
        $this->completed = false;

    }

    public function complete( )
    {
        $this->completed = true;
    }

    function get_description ()
    {
        return $this->description;
    }

    function get_completed ()
    {
        return $this->completed;
    }
    function set_completed ()
    {
        return $this->completed = true;
    }

}

$task = new Task('go to the gym');

$tasks = [
    new Task('Go to the store 😀'),
    new Task('code as fuck 😁'),
    new Task('code more as duck 😂'),
    new Task('fuck as fuck 🤣'),
];

$tasks[2]->set_completed();
// var_dump($task->complete());