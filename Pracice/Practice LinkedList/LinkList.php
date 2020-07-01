<?php

include_once("Node.php");

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $countNode;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->countNode = 0;
    }

    public function getLastNode()
    {
        return $this->lastNode;
    }

    public function insertFirst($data)
    {
//        $link = new Node($data);
//        $link->next = $this->firstNode;
//        $this->firstNode = $link;
//
//        if ($this->lastNode === NULL) {
//            $this->lastNode = $link;
//        }
//        $this->countNode++;
        $newNode = new Node($data);
        $newNode->next = $this->firstNode;
        $this->firstNode = $newNode;
        if ($this->lastNode === NULL) {
            $this->lastNode = $newNode;
        }
        $this->countNode++;

    }

    public function insertLast($data)
    {

        $newNode = new Node($data);
        if ($this->lastNode !== NULL) {
            $this->lastNode->next = $newNode;
            $newNode->next = NULL;
            $this->lastNode = $newNode;
            $this->countNode++;
        } else {
            $this->insertFirst($data);
        }

    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function getTotalNode()
    {
        return $this->countNode;
    }
}