<!doctype HTML>
<html lang="en">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
	<title>Moja Stranka</title>
</head>

<body>

<?php include('nav.php'); ?>

	<?php
    $aud1sk = "V novom Iphone 13 je dostupných množstvo zvonení a zvukov oznámení, z ktorých si viete vybrať. Nižšie sme si dovolili pre Vás pripraviť niekoľko našich obľúbených zvonení a zvukov ktoré sú dostupné už po prvom zapnutí telefónu.";
    $aud2sk = "Ako tón budíku si môžete vybrať jeden z našich tónov, ktoré vás zaručene zobudia aj z najhlbšieho spánku. Môžete si vyskúšať jeden z našich obľúbených tónov priamo tu!";
	$aud3sk = "Pre náročných ponúkame možnosť si stiahnuť ďalšie zvonenia alebo tóny budíku z obchodu.";

	$aud1en = "The new Iphone comes with a variety of different ringtones and notification sounds from which you can choose your favorite. We chose some that you get right after purchasing your new phone for you to try right here!";
    $aud2en = "You can also choose from many different tones for your alarm clock, that will definitely wake you up. Try some of our favorites right above this paragraph!";
	$aud3en = "For our most demanding customers, we prepared many more tones for you in our store.";

    if (isset($_POST['Submit'])) {
      $aud1 = $aud1sk;
	  $aud2 = $aud2sk;
	  $aud3 = $aud3sk;
    } else {
      $aud1 = $aud1en;
	  $aud2 = $aud2en;
	  $aud3 = $aud3en;
    }
	
	if (isset($_POST['Submit2'])) {
      $aud1 = $aud1en;
	  $aud2 = $aud2en;
	  $aud3 = $aud3en;
    } else {
      $aud1 = $aud1sk;
	  $aud2 = $aud2sk;
	  $aud3 = $aud3sk;
    }
	?>
	
<div class="pad-div-30"></div>
<section class="container">
	<article class="item1-4">
		<p class="ftext cnt minus5"> <?php echo $aud1 ?> </p>
		<div class="pad-div-30"></div>
		<audio controls class="pad-div-30">
			<source src="audio/zvonenie1.mp3" type="audio/mp3">
		</audio>
		<audio controls class="pad-div-30">
			<source src="audio/zvonenie2.mp3" type="audio/mp3">
		</audio>
		<audio controls class="pad-div-30">
			<source src="audio/notif1.mp3" type="audio/mp3">
		</audio>
	</article>
	
	<article class="item1-4">
		<audio controls class="pad-div-30">
			<source src="audio/alarm1.mp3" type="audio/mp3">
		</audio>
		<audio controls class="pad-div-30">
			<source src="audio/alarm2.mp3" type="audio/mp3">
		</audio>
		<audio controls class="pad-div-30">
			<source src="audio/alarm3.mp3" type="audio/mp3">
		</audio>
		<div class="pad-div-30"></div>
		<p class="ftext cnt"> <?php echo $aud2 ?> </p>

	</article>
	
	<article class="item1-4">
	<p class="ftext cnt"> <?php echo $aud3 ?> </p>
	<div class="pad-div-30"></div>
		<audio controls class="pad-div-30">
			<source src="audio/zvonenie3.mp3" type="audio/mp3">
		</audio>
		<audio controls class="pad-div-30">
			<source src="audio/notif2.mp3" type="audio/mp3">
		</audio>
		<audio controls class="pad-div-30">
			<source src="audio/notif3.mp3" type="audio/mp3">
		</audio>
		<audio controls class="pad-div-30">
			<source src="audio/notif4.mp3" type="audio/mp3">
		</audio>
	</article>
</section>

<div  class="spacer2"> . </div>
<?php include('footer.php'); ?>
</body>
</html>