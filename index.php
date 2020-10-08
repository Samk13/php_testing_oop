<?php

class CoffeMaker
{
    public function brew()
    {
        var_dump('brew caffe');
    }
}

class specialtyCoffeeMaker extends CoffeMaker
{
    public function brewlatte()
    {
        var_dump('Latte caffe');
    }
}

// (new specialtyCoffeeMaker())->brewlatte();
// (new CoffeMaker())->brew();

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // return array_sum(array_map(function ($item) use ($key) {
        //     return $item->$key;
        // }, $this->items));

        // refactor the code above if you use php 7.4
        // return array_sum(array_map(fn ($item) => $item->$key, $this->items));

        // more elegent way is to remove array_map
        return array_sum(array_column($this->items, $key));
    }
}

// is a relationship

class VideoCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $video;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideoCollection([
    new Video('video1', 2000),
    new Video('video2', 2001),
    new Video('video3', 2002),
    new Video('video4', 2003),
]);


// echo $videos->length();
