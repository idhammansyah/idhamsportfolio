<!DOCTYPE html>
<html lang="en">
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
		<!-- navbar head -->
		<!-- Jika mau jadi hamburger menu, maka di bagian "navbar-expand-lg" dihapus-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="index.html">My Design Portofolio</a>
					<!-- toggler kanan navbar -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    			<span class="navbar-toggler-icon"></span> 
	    		</button>

	    		<div class="collapse navbar-collapse" id="navbarText">
	    			<div class="navbar-nav ml-auto">
	        			<a class="nav-item nav-link active" href="index.php">Home</a>
	      				<a class="nav-item nav-link" href="images.html">Images</a>
	      				<a class="nav-item nav-link" href="introductions.html">About</a>
	      				<a class="nav-item nav-link"></a>
	    			</div>
	    			<!-- Search Engine-->
	    			<form class="form-inline">
    					<input class="form-control mr-sm-2" type="search" placeholder="Search Here" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
					</form>
	  			</div>
	  		</div>
		</nav>
		<br>
		<!-- Contents jumbotron -->
		<div class="jumbotron jumbotron-fluid">
		</div>

		<!-- Contents -->
		<div class="container-fluid">
			<div class="row justify-content-center">
		      <div class="col-lg-10">
		        <div class="row row-card">
		          <div class="col-lg">
		            <div class="card card1">
		              <div class="card-body">
		                <h5 class="card-title">Introductions</h5>
		                <p class="card-text">My Curriculum Vitae</p>
		                <a href="introductions.html" class="btn btn1">Click Here!</a>
		              </div>
		            </div>
		          </div>
		          <div class="col-lg">
		            <div class="card card2">
		              <div class="card-body">
		                <h5 class="card-title">My Photo</h5>
		                <p class="card-text">Wanna know me more?</p>
		                <a href="images.html" class="btn btn1">Click Here!</a>
		              </div>
		            </div>
		          </div>
		          <div class="col-lg">
		            <div class="card card1">
		              <div class="card-body">
		                <h5 class="card-title">Already seen this Website ?</h5>
		                <p class="card-text">Comment here!</p>
		                <a href="komentar.html" class="btn btn1">Click Here!</a>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		</div>
		<br>

		<!-- footer -->
		<footer class="text-center text-lg-start bg-dark">
  			<div class="container p-3 bg">
  				<h5 class="text-uppercase text-light">My Design Portofolio</h5>
			        <p class="p1">
			          This Website created by Idham Mansyah Awwalu
			        </p>   
			</div>

			<!-- Copyright -->
			<div class="text-center p-3 text-light">
				Copyright &copy;
				<script>
					document.write(new Date().getFullYear());
				</script>
				<a class="text-light" href="https://instagram.com/">Idham Mansyah Awwalu</a>
			</div>
			  <!-- Copyright -->
		</footer>


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
