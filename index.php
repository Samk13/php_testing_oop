<?php

abstract class AcheavmentType
{
    public function name()
    {
        // get the class name
        $class = (new ReflectionClass($this))->getShortName();

        // replace capital letters
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }
    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name()) . '.png');
    }
    abstract public function qualifier($user);
}


class FirstThousandPoints extends AcheavmentType
{
    public function qualifier($user)
    {
        //
    }
}
class FirstBestAnswer extends AcheavmentType
{
    public function qualifier($user)
    {
        //
    }
}

$achievement = new FirstBestAnswer();
echo $achievement->name();
echo '<br />';
echo $achievement->icon();
echo '<br />';
echo $achievement->qualifier('usersss');
