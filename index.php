<?php

class Team
{
    /**
     *  @param $name
     * @param $members
     *
     */
    protected $name;
    protected $members;
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }
    public function members()
    {
        return $this->members;
    }
    public function add($name)
    {
        $this->members[] = $name;
    }
    public function cancel()
    {
        //
    }
}

class member
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$acme = Team::start('Sam', [
    new member('SamFriend'),
    new member('SamFriend2'),
    new member('SamFriend3'),
]);

var_dump($acme->members());
