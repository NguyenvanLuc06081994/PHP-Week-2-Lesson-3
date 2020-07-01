<?php


class Node1
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    public function readNode()
    {
        return $this->data;
    }
}