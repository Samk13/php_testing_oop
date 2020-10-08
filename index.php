<?php

// Object Composition means: combining types to build more complex objects
// it's when one class has a pointer into another class

class Subscription
{
    /**
     * @var \Gateway
    */
    protected Gateway $gatway;

    public function __construct(Gateway $gatway)
    {
        $this->gatway = $gatway;
    }

    public function swap($newPlan)
    {
        //
    }
    protected function findStripCustomer($newPlan)
    {
        //
    }
}

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class SripeGatway implements Gateway
{
    public function findCustomer()
    {
        //
    }

    public function findSubscriptionByCustomer()
    {
        //
    }
}

new Subscription(new SripeGatway());