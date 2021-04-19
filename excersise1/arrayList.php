<?php
include_once 'myList.php';

$listFinal = new MyList();
$listFinal->myArrayList();
$listFinal->add(3);
//$listFinal->add(9);
//$listFinal->add(0);

var_dump($listFinal->get(0));
