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

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statment = $this->pdo->prepare("select * from {$table}");
        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}