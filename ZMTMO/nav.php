	<?php
	$sk1 = "Domov";
	$sk2 = "Hardvér";
	$sk3 = "Príslušenstvo";
	$sk4 = "Špecifikácie";
	$sk5 = "Softvér";
	$sk6 = "UI";
	$sk7 = "Audio";
	$sk8 = "Recenzie";
	$sk9 = "Porovnanie";
	$sk10 = "Kontakt";
	
	$en1 = "Home";
	$en2 = "Hardware";
	$en3 = "Accessories";
	$en4 = "Specifications";
	$en5 = "Software";
	$en6 = "UI";
	$en7 = "Audio";
	$en8 = "Reviews";
	$en9 = "Comparison";
	$en10 = "Contact";

    if (isset($_POST['Submit'])) {
	  $nav1 = $sk1;
	  $nav2 = $sk2;
	  $nav3 = $sk3;
	  $nav4 = $sk4;
	  $nav5 = $sk5;
	  $nav6 = $sk6;
	  $nav7 = $sk7;
	  $nav8 = $sk8;
	  $nav9 = $sk9;
	  $nav10 = $sk10;
    } else {
	  $nav1 = $en1;
	  $nav2 = $en2;
	  $nav3 = $en3;
	  $nav4 = $en4;
	  $nav5 = $en5;
	  $nav6 = $en6;
	  $nav7 = $en7;
	  $nav8 = $en8;
	  $nav9 = $en9;
	  $nav10 = $en10;
    }
	
	if (isset($_POST['Submit2'])) {
	  $nav1 = $en1;
	  $nav2 = $en2;
	  $nav3 = $en3;
	  $nav4 = $en4;
	  $nav5 = $en5;
	  $nav6 = $en6;
	  $nav7 = $en7;
	  $nav8 = $en8;
	  $nav9 = $en9;
	  $nav10 = $en10;
    } else {
	  $nav1 = $sk1;
	  $nav2 = $sk2;
	  $nav3 = $sk3;
	  $nav4 = $sk4;
	  $nav5 = $sk5;
	  $nav6 = $sk6;
	  $nav7 = $sk7;
	  $nav8 = $sk8;
	  $nav9 = $sk9;
	  $nav10 = $sk10;
    }
	?>
	
	<nav class="flex-container">
		<img class="logo2" src="img/logo.png">
		<h1 class="logo"> <a href="index.php">Iphone13</a></h1>
		<ul class="navigation">
			<li><a href="index.php"> <?php echo $nav1 ?> </a></li>
			<li>	
				<div class="dropdown">
					<a href="#"> <?php echo $nav2 ?> </a>
					<div class="dropdown-content">
						<a href="prislusenstvo.php"> <?php echo $nav3 ?> </a>
						<a href="tech.php"> <?php echo $nav4 ?> </a>
					</div>
				</div>
			</li>
		
			<li>	
				<div class="dropdown">
					<a href="#"> <?php echo $nav5 ?> </a>
					<div class="dropdown-content">
						<a href="ui.php"> <?php echo $nav6 ?> </a>
						<a href="audio.php"> <?php echo $nav7 ?> </a>
					</div>
				</div>
			</li>
	
			<li><a href="recenzie.php"> <?php echo $nav8 ?> </a></li>
			<li><a href="porovnanie.php"> <?php echo $nav9 ?> </a></li>
			<li><a href="kontakt.php"> <?php echo $nav10 ?> </a></li>
		</ul>
	</nav>
	
	