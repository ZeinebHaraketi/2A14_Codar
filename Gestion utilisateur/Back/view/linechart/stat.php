<?php 

$connection= mysqli_connect('localhost','root','','fagito');
$result=mysqli_query($connection,"SELECT*FROM produit")

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['id_produit', 'categorie', 'quantite'],

                <?php

                    if(mysqli_num_rows($result)> 0){

                        while($row = mysqli_fetch_array($result)){

                            echo "['".$row['id_produit']."', '".$row['categorie']."', ['".$row['quantite']."']],";

                        }


                    }



                ?>

            ]);
            var options = {
                chart: {
                    title: 'Statistique Produit',
                    subtitle: ' Statisques selon id_produit,categorie et quantite',
                    width: 5000,
                    height: 2500
                }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

</head>
<body>

<div id="columnchart_material"></div>


</body>
</html>
