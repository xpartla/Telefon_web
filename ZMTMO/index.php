<!doctype HTML>
<html lang="en">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
	<title>Moja Stranka</title>
</head>

<style>
img{
	 max-width: 100%;
	 vertical-align: top;
}
</style>

<body>

	<?php include('nav.php'); ?>
	
	<?php
    $index1sk  = "Čo môžete očakávať od smartfónu Iphone 13?";
    $index1en = "What can you expect from our brand new Iphone 13?";
	$index2sk  = "Dokonalý 6,1 palcový displej s rozlíšením až 2532 × 1170, najlepšiu dostupnú kameru, výkonný A15 Bionic procesor a mnoho ďalšieho v ikonickom flat edge designe. Najnovší model disponuje vybavením ako Face ID, bezdrôtové nabíjanie, a mnoho viac.";
    $index2en = "Perfect 6,1 inch display with 2532 x 1170px resolution, best camera on the market, powerful new A15 Bionic processor and much more in our iconic Flat edge design. Our newest model comes with Face ID, wireless charging and more.";

    if (isset($_POST['Submit'])) {
      $index1 = $index1sk;
	  $index2 = $index2sk;
    } else {
      $index1 = $index1en;
	  $index2 = $index2en;
    }
	
	if (isset($_POST['Submit2'])) {
      $index1 = $index1en;
	  $index2 = $index2en;
    } else {
      $index1 = $index1sk;
	  $index2 = $index2sk;
    }
	?>
	
		<section class="container">

			<section class="galeria">
				<?php
					$images = glob("img/galeria/*.{png}", GLOB_BRACE);
					foreach($images as $i){printf("<article class='galeria__item'>
					<input type='radio' id='img-%s' checked name='galeria' class='galeria__selector'/>
					<img class='galeria__img' src='img/galeria/%s'/>
					<label for='img-%s' class='galeria__nahlad'><img src='img/galeria/%s'/></label>
				</article>",basename($i), basename($i), basename($i), basename($i));}
				?>
			</section>
			
			<article class="item2">
				<p class="xtext"><span class="hook2"><?php echo $index1 ?></span><br> <?php echo $index2 ?> </p>
			</article>
			<div class="fuga"></div>
			
		</section>

<div  class="spacer"> . </div>
<?php include('footer.php'); ?>
</body>
</html>