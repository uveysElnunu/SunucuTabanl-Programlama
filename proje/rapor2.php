<?php include ("header.php");?>
<?php
$baglanti= mysqli_connect("localhost","root","","puma_giyim");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT  Sum(a_sube_kar.kar_zarar) as 'atoplamkar' from a_sube_kar");

    
    $sorgu2 = mysqli_query($baglanti," SELECT urunler.urun_ad,a_sube_satis.satis_kazanc FROM a_sube_satis,urunler
    WHERE urunler.urun_id=a_sube_satis.urun_id ")
    
 ?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
    <title>Puma Giyim</title>

</style>
</head>
<body>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Zarar Eden Şubeler</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>A Şube Zarar</th>
                                            
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            
                                        </tr>
                                    </tbody>
                                    <?php

while($satir = mysqli_fetch_array($sorgu))
{
    ?>

    
    <tr> 
        <td><?php echo $satir['atoplamkar']; ?></td>
        
        
        
    </tr>
    

    <?php
}
?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['ürünler', 'Kazanç'],
          <?php 
            
            foreach($sorgu2 as $row) {
            
                echo "['".$row["urun_ad"]."',".$row["satis_kazanc"]."],";
            
            }
            
            
            ?>
      ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'A Şube Yıllık Kazanç',
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


              
             

</body>
</html>
              
             

</body>
</html>
<?php include ("footer.php"); ?>

