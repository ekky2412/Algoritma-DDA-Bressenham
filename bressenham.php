<?php
    $x1 = $_GET['x1'];
    $x2 = $_GET['x2'];
    $y1 = $_GET['y1'];
    $y2 = $_GET['y2'];

    $dx = abs($x2-$x1);
    $dy = abs($y2-$y1);
    $p = 2*$dy-$dx;

    $duaDy = 2*$dy;
    $duaDyDx = 2*($dy-$dx);
    
    if($x1 > $x2){
        $x = $x2;
        $y = $y2;
        $xEnd = $x1;
    }
    else{
        $x = $x1;
        $y = $y1;
        $xEnd = $x2;
    }
    $nilai[0] = array("x" => $x,
    "y" => $y);

    $k = 1;

    while($x<$xEnd){
        $x = $x+1;
        if($p<0){
            $p = $p + $duaDy;
        }
        else{
            $y = $y+1;
            $p = $p + $duaDyDx;
        }
        $nilai[$k] = array("x" => $x,
        "y" => $y);
        $k = $k+1;
    }
    // echo "<pre>".var_dump($nilai)."<pre>";
?>