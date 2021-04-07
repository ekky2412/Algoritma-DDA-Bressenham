<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>

<body>
    <?php
    if ($_GET['tipe'] == "DDA") {
        include "dda.php";
    } else if ($_GET['tipe'] == "Bressenham") {
        include "bressenham.php";
    } else if($_GET['tipe'] == "BressenhamLingkaran"){
        include "bressenhamLingkaran.php";
    }
    ?>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1",
                title: {
                    text: "Algoritma <?= $_GET['tipe'] ?>"
                },
                axisX: {
                    title: "X",
                    suffix: ""
                },
                axisY: {
                    title: "Y",
                    suffix: ""
                },
                data: [{
                    type: "scatter",
                    markerType: "square",
                    markerSize: 10,
                    toolTipContent: "Y : {y} <br>X: {x}",
                    dataPoints: <?php echo json_encode($nilai, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>

    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>

</html>