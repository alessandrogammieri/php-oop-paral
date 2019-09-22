<?php 

    header('Content-type: application/json');
    include "api-oop.php";

    $par_one = $_GET['par_one'];
    $par_two = $_GET['par_two'];
    $par_three = $_GET['par_three'];

    $paral = [
        $par_one, 
        $par_two, 
        $par_three
    ];

    $res = [];

    foreach ($paral as $para) {
        $x = $paral[0];
        $y = $paral[1];
        $z = $paral[2];
    }

    $myParal = new Para($x, $y, $z);
    $res[] = $myParal;

    $area = $myParal -> getArea();
    $res[] = $area;

    $volume = $myParal -> getVolume();
    $res[] = $volume;

    echo json_encode($res);

?>