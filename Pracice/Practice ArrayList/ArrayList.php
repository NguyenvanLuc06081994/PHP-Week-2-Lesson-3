<?php

class ArrayList
{
    public $arrayList;

    public function __construct()
    {
    }

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    public function addObj($obj)
    {
        array_push($this->arrayList,$obj);
    }

    public function getObj($index)
    {
        if (is_int($index) && $index < count($this->arrayList)){
            return $this->arrayList[$index];
        }else{
            die("ERROR in ArrayList");
        }
    }

    public function removeObj($index)
    {
        if (is_int($index) && $index < count($this->arrayList)){
            array_splice($this->arrayList,$index,1);
        }
    }

}