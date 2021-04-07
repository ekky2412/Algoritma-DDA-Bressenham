<?php
    $x1 = $_GET['x1'];
    $x2 = $_GET['x2'];
    $y1 = $_GET['y1'];
    $y2 = $_GET['y2'];

    $step = 0;
    $k = 0;
    $dx = $x2-$x1;
    $dy = $y2-$y1;
    $x = $x1;
    $y = $y1;

    if(abs($dx)>abs($dy)){
        $step = abs($dx);
    }
    else{
        $step = abs($dy);
    }

    $x_inc = $dx/$step;
    $y_inc = $dy/$step;

    $nilai[0] = array("x" => $x,
    "y" => $y);

    for($k=1; $k<$step;$k = $k+1){
        $x = $x + $x_inc;
        $y = $y + $y_inc;
        
        $nilai[$k] = array("x" => round(abs($x)),
        "y" => round(abs($y)));
    }
    // echo "<pre>".var_dump($nilai)."<pre>";
?>