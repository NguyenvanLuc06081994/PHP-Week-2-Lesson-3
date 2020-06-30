<?php
include_once ("LinkList.php");
$linkList = new LinkList();
$linkList->insertFirst(11);
$linkList->insertFirst(22);
$linkList->insertLast(33);
$linkList->insertFirst(44);
echo $total = $linkList->getTotalNode();