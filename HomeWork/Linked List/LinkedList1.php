<?php

include_once("Node1.php");

class LinkedList1
{
    protected $firstNode;
    protected $lastNode;

    protected $countNode;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->countNode = 0;
    }

    public function addFirst($data)
    {
        $newNode = new Node1($data);
        $newNode->next = $this->firstNode;
        $this->firstNode = $newNode;

        if ($this->lastNode === NULL) {
            $this->lastNode = $newNode;
        }
        $this->countNode++;
    }

    public function addLast($data)
    {
        $newNode = new Node1($data);
        $this->lastNode->next = $newNode;
        $newNode->next = NULL;
    }


    public function addNode($index, $data)
    {
        $newNode = new Node1($data);
        if ($index === 0) {
            $this->addFirst($data);
        }
        $current = $this->firstNode;
        $previous = $this->firstNode;

        $i = 0;
        while ($i < $index) {
            $previous = $current;
            $current = $current->next;
            $i++;
        }
        $previous->next = $newNode;
        $newNode->next = $current;
        $this->countNode++;
    }

    public function indexOf()
    {

    }

    public function removeNode($index)
    {
        if ($index === 0) {
            $this->firstNode = $this->firstNode->next;
        } else {
            $i = 0;
            $previous = $this->firstNode;
            $current = $this->firstNode;
            while ($i < $index) {
                $previous = $current;
                $current = $current->next;
                $i++;
            }
            $previous->next = $current->next;
            $this->countNode--;
        }
    }

    public function removeLast()
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while ($current->next !== NULL) {
            $previous = $current;
            $current = $current->next;
        }
        $previous->next = NULL;
        $this->countNode--;

    }

    public function getNode($index)
    {
        $previous = $this->firstNode;
        $current = $this->firstNode;
        $i = 0;
        while ($i < $index) {
            $previous = $current;
            $current = $current->next;
            $i++;
        }
        return $previous->data;
    }

    public function searchNode($obj)
    {
        $current = $this->firstNode;
        while ($current !== NULL) {
            if ($current->data === $obj) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }

    public function indexOf1($str)
    {
        $arr = $this->displayList();
        $arrIndex = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $str) {
                array_push($arrIndex, $i);
            }
        }
        return $arrIndex;
    }


    public function displayList()
    {
        $list = array();
        $current = $this->firstNode;
        while ($current !== NULL) {
            array_push($list, $current->readNode());
            $current = $current->next;
        }
        return $list;
    }
}

$list = new LinkedList1();
$list->addFirst(345);
$list->addFirst(1);
$list->addFirst(345);
$list->addFirst(456);
$list->addFirst(345);
$list->addFirst(123);
$list->addLast(9);
$list->addNode(2, 678);
var_dump($list->searchNode(7));
$list->removeLast();
echo "<pre>";
print_r($list->displayList());
echo "</pre>";
echo $list->getNode(6);
var_dump($list->indexOf1(345));