<?php
/**
 * Created by IntelliJ IDEA.
 * User: moshe.maor
 * Date: 5/17/2017
 * Time: 11:29 PM
 */

class math1
{
    function _constructor($rangeLow,$rangeHigh)
    {
        $this->rangeLow=$rangeLow;
        $this->rangeHigh=$rangeHigh;
        $this->x=rand($rangeLow,$rangeHigh);
        $this->y=rand($rangeLow,$rangeHigh);
    }

    function multiple()
    {
        $x=$this->x;
        $y=$this->y;
        $task="$x * $y = ";
        return array($task,$x*$y);
    }

    function divideTask()
    {
        $x=$this->x;
        $y=$this->y;
        $xy=$x*$y;
        $task="$xy / $y = ";
        return array($task,$x);
    }

    function plus()
    {
        $x=$this->x;
        $y=$this->y;
        $task="$x + $y =";
        return array($task,$x+$y);
    }

    function minus()
    {
        $x=$this->x;
        $y=$this->y;
        $xplusy=$x+$y;
        $task="$xplusy - $y =";
        return array($task,$x);
    }
}

$a = new math1(5,10);
print $a->multiple();