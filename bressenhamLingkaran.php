<?php

    function circlePlotPoints($xCenter,$yCenter,$x,$y,&$k,&$nilai){
        $nilai[$k] = array("x" => $xCenter+$x,"y" => $yCenter+$y); $k++;
        $nilai[$k] = array("x" => $xCenter-$x,"y" => $yCenter+$y); $k++;
        $nilai[$k] = array("x" => $xCenter+$x,"y" => $yCenter-$y); $k++;
        $nilai[$k] = array("x" => $xCenter-$x,"y" => $yCenter-$y); $k++;
        $nilai[$k] = array("x" => $xCenter+$y,"y" => $yCenter+$x); $k++;
        $nilai[$k] = array("x" => $xCenter-$y,"y" => $yCenter+$x); $k++;
        $nilai[$k] = array("x" => $xCenter+$y,"y" => $yCenter-$x); $k++;
        $nilai[$k] = array("x" => $xCenter-$y,"y" => $yCenter-$x); $k++;
        // echo "<pre>".var_dump($nilai)."<pre>";
    }
    $nilai[0] = 0;
    $k = 0;
    $xCenter = $_GET['x1'];
    $yCenter = $_GET['y1'];
    $x = 0;
    $y = $_GET['r'];
    $p = 1 - $_GET['r'];
    while($x<$y){
        $x++;
        if($p<0){
            $p = $p + 2*$x + 1;
        }
        else{
            $y--;
            $p = $p + 2*($x-$y) + 1;
        }
        circlePlotPoints($xCenter,$yCenter,$x,$y,$k,$nilai);
    }

    

?>