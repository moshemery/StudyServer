<?php
/**
 * Created by IntelliJ IDEA.
 * User: moshe.maor
 * Date: 5/15/2017
 * Time: 12:09 AM
 */

class s1
{
    function __construct ($task,$result)
    {
        $this->task = $task;
        $this->result=$result;
        $this->steps=array();
        $this->grade=0;
    }
    function checkResult($tryResult)
    {
        if($tryResult==$this->result)
        {
            return true;
        }
        return false;
    }
    function showTask()
    {

    }
    function saveSteps($step)
    {
        $this->steps[]=$step;
    }
    function getGrade()
    {
        return $this->grade;
    }
    function gradeIt($answer)
    {
        $this->grade = $this->grade=$this->evaluateAnswer($answer);
        return $this->grade;
    }
}