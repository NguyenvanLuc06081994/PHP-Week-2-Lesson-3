<?php

class ListNode
{
    public $data = NULL;
    public $next = NULL;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
    }
}

class LinkedList
{
    private $_firstNode = NULL;
    private $_totalNodes = NULL;

    public function insert(string $data = NULL)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode === NULL) {
            $this->_firstNode = $newNode;
        } else {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return true;
    }

    public function insertAtFirst(string $data = NULL)
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode === NULL) {
            $this->_firstNode = $newNode;
        } else {
            $currentFirstNode = $this->_firstNode;
            $this->_firstNode = $newNode;
            $newNode->next = $currentFirstNode;
        }
        $this->_totalNodes++;
        return true;
    }

    public function searchNode(string $data = NULL)
    {
        if ($this->_totalNodes) {
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL) {
                if ($currentNode->data === $data) {
                    return true;
                }
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }

    public function deleteFirst()
    {
        if ($this->_firstNode !== NULL) {
            if ($this->_firstNode->next !== NULL) {
                $this->_firstNode = $this->_firstNode->next;
            } else {
                $this->_firstNode = NULL;
            }
            $this->_totalNodes--;
            return true;
        }
        return false;
    }

    public function deleteLast()
    {
        if ($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            if ($currentNode->next === NULL) {
                $this->_firstNode = NULL;
            } else {
                $previousNode = NULL;

                while ($currentNode->next !== NULL) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                $previousNode->next = NULL;
                $this->_totalNodes--;
                return true;
            }
        }
        return false;
    }

    public function display()
    {
        echo "Total book titles: " . $this->_totalNodes . "<br>";
        $currentNode = $this->_firstNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data . "<br>";
            $currentNode = $currentNode->next;
        }
    }


}

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insertAtFirst("my first!");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->insert("Programming Intelligence");
var_dump($BookTitles->searchNode("my first!"));
//$BookTitles->deleteFirst();
//$BookTitles->deleteLast();
//$BookTitles->display();