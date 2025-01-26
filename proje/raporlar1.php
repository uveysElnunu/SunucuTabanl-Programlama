<?php include ("header.php");?>
<?php
$baglanti= mysqli_connect("localhost","root","","puma_giyim");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT urunler.urun_ad,aslan_tedarik.satis_fiyat FROM aslan_tedarik,urunler
    WHERE urunler.urun_id=aslan_tedarik.urun_id   ");
    
?>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Ürünler', 'Fiyat'],
          <?php 
            
            foreach($sorgu as $row) {
            
                echo "['".$row["urun_ad"]."',".$row["satis_fiyat"]."],";
            
            }
            
            
            ?>
      ]);
        

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Aslan Tedarik',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 800px; height: 600px;"></div>
  </body>
</html>




















<?php include ("footer.php"); ?>   