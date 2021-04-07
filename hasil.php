<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <div>
        <?php
        if ($_GET['tipe'] == "DDA") {
            include "dda.php";
        } else if ($_GET['tipe'] == "Bressenham") {
            include "bressenham.php";
        } else if ($_GET['tipe'] == "BressenhamLingkaran") {
            include "bressenhamLingkaran.php";
        }
        ?>
    </div>
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
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
 

    <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script>
</body>

</html>