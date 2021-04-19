<?php

class MyList
{
    public $arrayList;

    public function myArrayList($array = "")
    {
        if (is_array($array) == true)
            $this->arrayList = $array;
        else
            $this->arrayList = array();
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }

    public function size()
    {
        return count($this->arrayList);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function get($index)
    {
        if ($this->isInteger($index) == true && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die('error');
        }
    }

    public function isEmpty()
    {
        if (empty($this->arrayList)) {
            return true;
        } else
            return false;
    }

    public function reset()
    {
        return reset($this->arrayList);
    }

    public function sort()
    {
        return sort($this->arrayList);
    }

    public function indexOf($value)
    {
        return array_search($this->arrayList,$value);
    }

}