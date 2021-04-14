<?php

function circlePlotPoints($xCenter, $yCenter, $x, $y, &$k, &$nilai)
{
    $nilai[$k] = array("x" => $xCenter + $x, "y" => $yCenter + $y);
    $k++;
    $nilai[$k] = array("x" => $xCenter - $x, "y" => $yCenter + $y);
    $k++;
    $nilai[$k] = array("x" => $xCenter + $x, "y" => $yCenter - $y);
    $k++;
    $nilai[$k] = array("x" => $xCenter - $x, "y" => $yCenter - $y);
    $k++;
    $nilai[$k] = array("x" => $xCenter + $y, "y" => $yCenter + $x);
    $k++;
    $nilai[$k] = array("x" => $xCenter - $y, "y" => $yCenter + $x);
    $k++;
    $nilai[$k] = array("x" => $xCenter + $y, "y" => $yCenter - $x);
    $k++;
    $nilai[$k] = array("x" => $xCenter - $y, "y" => $yCenter - $x);
    $k++;
    // echo "<pre>".var_dump($nilai)."<pre>";
}
$nilai[0] = 0;
$iterasi = 0;
$k = 0;
$xCenter = $_GET['x1'];
$yCenter = $_GET['y1'];
$x = 0;
$y = $_GET['r'];
$p = 1 - $_GET['r'];

?>
<table class="table table-bordered" id="table_id">
    <thead>
        <th>k</th>
        <th>pk</th>
        <th>Rumus</th>
        <th>xk+1</th>
        <th>yk+1</th>
        <th>2xk+1</th>
        <th>2yk+1</th>
        
    </thead>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><?= $x ?></td>
        <td><?= $y ?></td>
    </tr>
        <?php

        while ($x < $y) {
            ?>
            <tr>
            <?php
        ?>
            <td><?= $iterasi ?></td>
            <td><?= $p ?></td>
            
        <?php
            $x++;
            if ($p < 0) {
                echo "<td> Pk + 2x<sub>k+1</sub> + 1  </td>";
                $p = $p + 2 * $x + 1;
            } else {
                echo "<td> Pk + 2x<sub>k+1</sub> + 1  </td>";
                $y--;
                $p = $p + 2 * ($x - $y) + 1;
            }

            circlePlotPoints($xCenter, $yCenter, $x, $y, $k, $nilai);
            ?>
            <td><?= $x ?></td>
            <td><?= $y ?></td>
            <td><?= $x * 2 ?></td>
            <td><?= $y * 2 ?></td>
            </tr>
            <?php
            $iterasi++;
        }
        ?>
</table>
