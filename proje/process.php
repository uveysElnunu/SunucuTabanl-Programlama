<?php include ("header.php");?>
<?php
$baglanti= mysqli_connect("localhost","root","","puma_giyim");
    mysqli_set_charset($baglanti, "utf8");
    $sorgu = mysqli_query($baglanti,"SELECT  Sum(b_sube_kar.kar_zarar) as 'btoplamkar' from b_sube_kar");
    $sorgu2= mysqli_query($baglanti,"SELECT tedarikciler.tedarikci_ad FROM tedarikciler,b_sube_alis
    WHERE c_sube_alis.tedarikci_id=tedarikciler.tedarikci_id
    GROUP by tedarikciler.tedarikci_ad 
    ORDER BY tedarikciler.tedarikci_ad ");
    $sorgu3=mysqli_query($baglanti,"SELECT max(b_sube_kar.kar_zarar) as 'encokkaredilenay' from b_sube_kar")
    ?>
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">En Çok Kar Ettiğimiz Şube</h1>
</div>

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            En Çok Kar Edilen Ay</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> 2021-12-07</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-lira-sign"></i>
                    </div>
                    <?php

while($satir3 = mysqli_fetch_array($sorgu3))
{
    ?>

    
    <tr> 
        <td><?php echo $satir3['encokkaredilenay']; ?></td>
        
        
        
    </tr>
    

    <?php
}
?>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            B Şube Kar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">İzmir</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-lira-sign"></i>
                        <?php

while($satir = mysqli_fetch_array($sorgu))
{
    ?>

    
    <tr> 
        <td><?php echo $satir['btoplamkar']; ?></td>
        
        
        
    </tr>
    

    <?php
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tasks Card Example -->
  <!--  <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">B Şube Tedarikcisi
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                
                            </div>
                            <div class="col">
                               
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        
                    </div>
                    <?php

while($satir2 = mysqli_fetch_array($sorgu2))
{
    ?>

    
    <tr> 
        <td><?php echo $satir2['tedarikci_ad']; ?></td>
        
        
        
    </tr>
    

    <?php
}
?>
                </div>
            </div>
        </div>
    </div> -->

    <?php include ("footer.php"); ?>