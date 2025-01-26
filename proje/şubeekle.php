<?php include ("header.php");
?>
<!doctype html>
<html lang="tr">
<head>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<div class="card">
				<div class="card-header">
					<h5>Şube Ekleme</h5>
				</div>
                
				<div class="card-body">
					<form action="islem.php" method="POST" accept-charset="utf-8-" >
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Şehir İd Giriniz:</label>
								<input type="text" name="sehir_id" class="form-control">
							</div>
							<div class="col-md-6 form-group">
								<label>Şube Ad Giriniz:</label>
								<input type="text" name="sube_ad" class="form-control">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 form-group">
								<label>Şube Tel Giriniz:</label>
								<input type="text" name="sube_tel" class="form-control">
							</div>
							<div class="col-md-6 form-group">
								<label>Şube Adres Giriniz:</label>
								<input type="text" name="sube_adres" class="form-control">
							</div>
						</div>

						<div class="text-center mt-4">
							<button type="submit" name="musteriekle" class="btn btn-primary btn-lg">Kaydet</button>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include ("footer.php"); ?>
