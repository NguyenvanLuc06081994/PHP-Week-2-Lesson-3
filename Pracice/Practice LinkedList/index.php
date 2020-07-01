<?php
include_once ("LinkList.php");
$linkList = new LinkList();
$linkList->insertFirst(11);
$linkList->insertFirst(22);
$linkList->insertLast(55);
var_dump($linkList);
//$linkList->insertFirst(44);
echo $total = $linkList->getTotalNode();