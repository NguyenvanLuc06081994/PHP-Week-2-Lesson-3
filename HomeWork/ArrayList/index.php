<?php
include_once ("MyList.php");
$myList = new MyList();
$myList->ArrayList();
$myList->addLast(12);
$myList->addLast(23);
$myList->addLast(33);
$myList->addObj(1,10);
echo "<pre>";
print_r($myList->elements);
