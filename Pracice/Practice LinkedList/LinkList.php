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

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode = NULL) {
            $this->lastNode = $link;
        }
        $this->countNode = $this->countNode + 1;
    }

    public function insertLast($data)
    {
        if ($this->firstNode !== NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->countNode++;
        }else{
            $this->insertFirst($data);
        }
    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current!= NULL){
            array_push($listData,$current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function getTotalNode()
    {
        return $this->countNode;
    }
}