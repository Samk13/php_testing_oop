<?php
class Task
{
    protected $description;
    protected $completed;

    public function __construct()
    {
        // automatically triggered
        $this->description ;
        $this->completed;

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