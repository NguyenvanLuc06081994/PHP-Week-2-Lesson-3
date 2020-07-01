<?php


class MyList
{
    public $size;
    public $elements;

    public function ArrayList($arr = "")
    {
        if (is_array($arr)) {
            $this->elements = $arr;
        } else {
            $this->elements = array();
        }
    }

    public function insert($index, $obj)
    {
        if (is_int($index) && $index < count($this->elements)) {
            $this->elements[$index] = $obj;
        }
    }

    public function addObj($obj)
    {
        array_push($this->elements, $obj);
    }

    public function removeObj($index)
    {
        if (is_int($index) && $index < count($this->elements)) {
            unset($this->elements[$index]);
        } else {
            die("ERROR!");
        }
    }

    public function getObj($index)
    {
        if (is_int($index) && $index < count($this->elements)) {
            return $this->elements[$index];
        } else {
            die("ERROR!");
        }
    }

    public function clear()
    {

    }

    public function indexOf($obj)
    {
        return array_search($obj, $this->elements);
    }

    public function isEmpty()
    {
        if (empty($this->elements)){
            return false;
        }else{
            return true;
        }
    }

    public function sort()
    {
        return sort($this->elements);
    }

    public function size()
    {
        return count($this->elements);
    }
}