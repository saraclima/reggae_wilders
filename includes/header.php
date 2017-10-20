<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Reggae Wilders</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

	

	<link rel="stylesheet" type="text/css" href="assets/css/footer2style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
	<!-- BARRE DE NAVIGATION -->
		<nav>
			<div class="container_fluid container_nav">		
				<div class="row row_nav">
					<div class="col-md-2 col-xs-12 item_nav">
						<a href="index.php"> Reggae Wilders</a>
					</div>
					<div class="col-md-2 col-xs-12 item_nav">
						<a href="quoideneuf.php"> Quoi de Neuf</a>
					</div>
					<div class="col-md-2 col-xs-12 item_nav">
						<a href="playlist.php"> Sound System</a>
					</div>
					<div class="col-md-2 col-xs-12 item_nav">
						<a href="lesorigines.php"> Origins</a>
					</div>
					<div class="col-md-2 col-xs-12 item_nav">
						<a href="contact.php"> Contact</a>
					</div>
				</div>
			</div>
		</nav>

	<!-- LOGO -->
	<header>
		<div class="slider_page">
			<div class="w3-content w3-section" style="max-width:100%">
			  <img class="mySlides" src="assets/images/1.jpg" style="width:100%">
			  <img class="mySlides" src="assets/images/3.jpg" style="width:100%">
			  <img class="mySlides" src="assets/images/5.png" style="width:100%">
			  <img class="mySlides" src="assets/images/4.jpg" style="width:100%">
			</div>

			<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			    var i;
			    var x = document.getElementsByClassName("mySlides");
			    for (i = 0; i < x.length; i++) {
			       x[i].style.display = "none";  
			    }
			    myIndex++;
			    if (myIndex > x.length) {myIndex = 1}    
			    x[myIndex-1].style.display = "block";  
			    setTimeout(carousel, 4000); // Change image every 2 seconds
			}
			</script>
		</div>
		
	</header>








