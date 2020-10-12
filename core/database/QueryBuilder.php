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

    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("select * from {$table}");
        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert ($table, $params)
    {


       $sql =  sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ',array_keys($params)),
            ':' . implode(', :',array_keys($params)),
        );


        try {
            $statment = $this->pdo->prepare($sql);

            $statment->execute($params);

        } catch (Exception $e){
            die('somthing went wrong! '. $e);
        }
    }
}