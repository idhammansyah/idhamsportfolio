<!DOCTYPE html>
<html>
	<head>
		<title>My Design Website</title>

		<meta charset="utf-8">
		<meta name="viewport"
		 content="width=device-width, initial-scale=1 , shrink-to-fit = no">

		<!-- Icon shortcut -->
		<icon rel="shortcut icon" href="">
		
		<!-- Bootstrap Stylesheet-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Font Use -->
		<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

		<!-- CSS Style -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container" id="container1">
			<h5>Upload Foto</h5>
			<hr>
			<form method="post" action="upload.php">
	        	<div class="form-group">
		            <label>Nama foto</label><br>
		            <input type="text" name="noitem" size="25" maxlength="20" placeholder="Input Nomor Item Arsip" autocomplete="off" 
		            required>
		        </div>
	        
	        	<div class="form-group mt-3">
		            <label>Kode Klasifikasi</label><br>
		            <input type="text" name="kode" size="25" maxlength="20" placeholder="Input Kode" autocomplete="off"
		            required>
		        </div>

		        <div class="form-group mt-3">
		        	<label>Uraian Informasi Berkas</label>
		        	<textarea class="form-control" name="info" size="20" cols="20" rows="3" placeholder="Input Uraian Informasi Berkas" required></textarea>
		        </div>
	            
	        	<div class="form-group mt-3">
		            <label>Jumlah Berkas</label><br>
		            <input type="text" name="berkas" size="5" maxlength="10" placeholder="Input" required>Berkas
		        </div>
	    
		        <div class="form-group mt-3">
		        	<label>Lokasi Simpan</label><br>
		        	<input type="text" name="map"  placeholder="Input Map" autocomplete="off" required>Map
		        	<input type="text" name="boks" placeholder="Input Boks" autocomplete="off" required>Boks
		        </div>
		       
		        <div class="form-group mt-3">
		        	<label>Keterangan</label>
		        	<textarea class="form-control" name="ket" cols="30" rows="3" placeholder="Input Keterangan" required></textarea>
		        </div>
		        <br>
		        <!-- <div class="mt-4"> -->
		        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
		        <button type="reset" class="btn btn-danger" name="breset">Reset</button>
	    	</form>
	    </div>

		<!-- Javascript Query Bootstrap -->
		<script src=
		"https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
		</script>
		<script src=
		"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
		</script>
		<script src=
		"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
		</script>

	</body>
</html>