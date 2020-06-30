<?php
include_once "ArrayList.php";
$listInterger = new ArrayList();
$listInterger->ArrayList();
$listInterger->addObj(1);
$listInterger->addObj(2);
$listInterger->addObj(3);
$listInterger->addObj(4);
$listInterger->addObj(5);
echo $listInterger->getObj(0);
$listInterger->removeObj(1);
echo "<pre>";
print_r($listInterger->arrayList);
echo "</pre>";