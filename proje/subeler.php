<?php include ("header.php");?>
<?php
$baglanti= mysqli_connect("localhost","root","","puma_giyim");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti," SELECT * FROM subeler");
    
   
    
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
                            <h6 class="m-0 font-weight-bold text-primary">Şubeler</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Şube İd</th>
                                            <th>Şehir İd</th>
                                            <th>Şube Ad</th>
                                            <th>Şube Tel</th>
                                            <th>Şube Adres</th>
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
        <td><?php echo $satir['sube_id']; ?></td>
        <td><?php echo $satir['sehir_id']; ?></td>
        <td><?php echo $satir['sube_ad']; ?></td>
        <td><?php echo $satir['sube_tel']; ?></td>
        <td><?php echo $satir['sube_adres']; ?></td>
    </tr>
    

    <?php
}
?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

              
             

</body>
</html>
<?php include ("footer.php"); ?>