<?<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "dbsepeda";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
	// Untuk Submit
	if(isset($_POST['csimpan']))
	{
		$simpan = mysqli_query($koneksi, "INSERT INTO importir_tb (name_importir, phone, address)
							VALUES 	('$_POST[ni]',
									'$_POST[tlp]',
									'$_POST[alm]')

			");
		// if($simpan)
		// {
		// 	echo "<script>
		// 		alert('Submit Data Sukses');
		// 		document.location='index.php';
		// 	</script>";
		// }
		// else
		// {
		// 	echo "<script>
		// 		alert('Submit Data Gagal');
		// 		document.location='index.php';
		// 	</script>";
		// }
	}
  // submit sepeda
  if(isset($_POST['bsimpan']))
  {
    if($_GET['hal'] == "edit")
    {
    $edit = mysqli_query($koneksi, "UPDATE produk_tb set 
               name_sepeda ='$_POST[namese]',
               importir_id ='$_POST[idimp]',
               photo =   '$_POST[foto]',
                qty = '$_POST[jml]',
                price =      '$_POST[hrg]'
                WHERE id_sepeda = '$_GET[id]'

      ");
  } else $simpan = mysqli_query($koneksi, "INSERT INTO produk_tb (name_sepeda, importir_id, photo, qty, price)
              VALUES  ('$_POST[namese]',
                      '$_POST[idimp]',
                      '$_POST[foto]',
                      '$_POST[jml]',
                      '$_POST[hrg]')

      ");
  
  }
  if (isset($_GET['hal']))
  {
    if($_GET['hal'] == "edit")
    {
      $tampil = mysqli_query($koneksi, "SELECT * FROM produk_tb WHERE id_sepeda = '$_GET[id]'");
      $data = mysqli_fetch_array($tampil);
      if($data)
        {
          $vnamese = $data['name_sepeda'];
          $vidimp = $data['importir_id'];
          $vjml = $data['qty'];
          $vhrg = $data['price'];
        }
    }
    else if ($_GET['hal'] == "hapus")
    {
      $hapus = mysqli_query($koneksi, "DELETE FROM produk_tb WHERE id_sepeda = '$_GET[id]' ");

    }

    
  }
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Database Sepeda</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Database Sepeda</h1>
<!-- Awal card Sepeda -->
		<div class="card text-center mt-3">
  			<div class="card-header bg-primary text-white">
    		Input Sepeda
  			</div>
  		<div class="card-body text-justify">
   		<form method="post" action="">
   			<div class="form-group">
		   		<label>Nama</label>
		   		<input type="text" name="namese" value="<?=@$vnamese?>" class="form-control" placeholder="Input Nama Sepeda" required="">
		   		<label>ID Importir</label>
		   		<input type="text" name="idimp" value="<?=@$vidimp?>" class="form-control" placeholder="Input ID Importir Sepeda" required="">
		   		<label>Jumlah</label>
		   		<input type="text" name="jml" value="<?=@$vjml?>" class="form-control" placeholder="Input Jumlah Sepeda" required="">
		   		<label>Harga</label>
		   		<input type="text" name="hrg" value="<?=@$vhrg?>" class="form-control" placeholder="Input Harga Sepeda" required="">
		   		<label>Foto</label><br>
   			   <input type='file' name="foto" /><br><br>
      			<button type="submit" class="btn btn-success" name="bsimpan">Submit</button>
      			<button type="reset" class="btn btn-danger" name="breset">Clear</button>
     
</form>
   	</div>
  </div>
  <div class="card-footer text-muted">
   </div>
</div>
<!-- Akhir card Sepeda -->
<!-- Awal card Importir -->
<div class="card text-center mt-3">
  <div class="card-header bg-primary text-white">
    Input Importir
  </div>
  <div class="card-body text-justify">
   <form method="post" action="">
   	<div class="form-group">
   		<label>Nama</label>
   		<input type="text" name="ni" class="form-control" placeholder="Input Nama Importir" required="">
   		<label>Phone</label>
   		<input type="text" name="tlp" class="form-control" placeholder="Input No. Telpon Sepeda" required="">
   		<label >Alamat</label><br>
   		<textarea name="alm" class="form-control" placeholder="Alamat Importir"></textarea><br>
	      <button type="submit" class="btn btn-success" name="csimpan">Submit</button>
	      <button type="reset" class="btn btn-danger" name="creset">Clear</button>
     
</form>
   	</div>
  </div>
  <div class="card-footer text-muted">
   </div>
</div>
<!-- Akhir card Importir -->
<!-- Awal card Importir -->
<div style="display: none" class="card text-center mt-3">
  <div  class="card-header bg-primary text-white">
    Blank
  </div>
  <div class="card-body text-justify">
   
   	</div>
  </div>
  <div class="card-footer text-muted">
   </div>
</div>
<!-- Akhir card Importir -->
<!-- Awal data sepeda -->
<div class="card text-center mt-3">
  <div class="card-header bg-success text-white">
    Data Sepeda
  </div>
  <div class="card-body text-justify">
   <table class = "table table-bordered">
   	<tr>
   		<th>ID Sepeda</th>
   		<th>Nama Sepeda</th>
   		<th>Importir Sepda</th>
   		<th>Photo</th>
   		<th>Jumlah</th>
   		<th>harga</th>
   		<th>Aksi</th>
   	</tr>
   	<?php 
   		$tampil = mysqli_query($koneksi, "SELECT * from produk_tb order by id_sepeda asc");
   		while ($data = mysqli_fetch_array($tampil)) :


   	 ?>
   	<tr>
   		<th><?=$data['id_sepeda']?></th>
   		<th><?=$data['name_sepeda']?></th>
   		<th><?=$data['importir_id']?></th>
   		<th><img src="img/<?=$data['photo']?>" onclick="return confirm('Anda yakin akan Menghapus?')" style="width:100px"></th>
   		<th><?=$data['qty']?></th>
   		<th><?=$data['price']?></th>
   		<td>
   			<a href="index.php?hal=edit&id=<?=$data['id_sepeda']?>" class="btn btn-warning">Edit</a>
   			<a href="index.php?hal=hapus&id=<?=$data['id_sepeda']?>" class="btn btn-danger">Delete</a>
   		</td>
   	</tr>
   <?php endwhile ?>
   </table>
   	</div>
  </div>
  <div class="card-footer text-muted">
   </div>
</div>
<!-- Akhir data sepeda -->
<!-- Awal data importir -->
<div class="card text-center mt-3">
  <div class="card-header bg-success text-white">
    Data Sepeda
  </div>
  <div class="card-body text-justify">
   <table class = "table table-bordered">
   	<tr>
   		<th>ID Importir</th>
   		<th>Nama Importir</th>
   		<th>Alamat</th>
   		<th>Phone</th>
   		<th>Aksi</th>
   	</tr>
   	<?php 
   		$tampil = mysqli_query($koneksi, "SELECT *from importir_tb order by id_importir asc");
   		while ($data = mysqli_fetch_array($tampil)) :


   	 ?>
   	<tr>
   		<th><?=$data['id_importir']?></th>
   		<th><?=$data['name_importir']?></th>
   		<th><?=$data['address']?></th>
   		<th><?=$data['phone']?></th>
   		<td>
   			<a href="#" class="btn btn-warning">Edit</a>
   			<a href="#" class="btn btn-danger">Delete</a>
   		</td>
   	</tr>
   <?php endwhile ?>
   </table>
   	</div>
  </div>
  <div class="card-footer text-muted">
   </div>
</div>
<!-- Akhir data importir -->

</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>