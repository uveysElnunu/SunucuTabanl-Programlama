<?php include ("header.php");?>
<?php
$baglanti= mysqli_connect("localhost","root","","puma_giyim");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti," SELECT urunler.kategori,COUNT(urunler.urun_id) FROM urunler 
    GROUP BY urunler.kategori order by urunler.kategori ");
    $satiss = mysqli_query($baglanti," SELECT * from asatiskazanc, aalismaliyet ");
?>

                          
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            
            foreach($sorgu as $row) {
            
                echo "['".$row["kategori"]."',".$row["COUNT(urunler.urun_id)"]."],";
            
            }
            
            
            ?>
      ]);
 

        var options = {
          title: 'Ürün Kategorileri',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 800px; height: 600px;"></div>
  </body>
</html>
                        <?php include ("footer.php"); ?>