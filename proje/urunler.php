<?php include ("header.php");?>
<?php
$baglanti= mysqli_connect("localhost","root","","puma_giyim");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT * FROM urunler");
    
 ?>
 

<!doctype html>
<html>
<head>

<meta charset="utf-8">
    <title>Market KDS</title>

</style>
</head>
<body>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ürünler Tablosu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Ürün İd</th>
                                            <th>Ürünler</th>
                                            <th>Kategori</th>
                                           
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
        <td><?php echo $satir['urun_id']; ?></td>
        <td><?php echo $satir['urun_ad']; ?></td>
        <td><?php echo $satir['kategori']; ?></td>
        
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
