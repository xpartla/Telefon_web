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
	$pris1sk = "Náš smartphone disponuje jedinečnou zostavou magnetov na zadnej strane, vďaka ktorým je možné využívať ";
	$pris2sk = "bezdrôtové nabíjanie";
	$pris3sk = " s výkonom až 15W a počas toho stále využívať telefón";
	$pris4sk = "Vďaka našim elegantným krytom dokážete ochrániť svoj nový smartfón v štýle, odporúčame najmä naše ";
	$pris5sk = "silikónové obaly";
	$pris6sk = ", ktoré prichádzajú vo rôznych farbách a zaistia bezpečnosť pre váš smartphone v každej situácii";
	$pris7sk = "Nechcete si poškodiť nový displej nechtami alebo sa bojíte poškodenia pri páde? Zaobstarajte si ";
	$pris8sk = "ochranné sklo";
	$pris9sk = " na obrazovku. Sklo je hrubé len 0,4 mm takže ani nespoznáte že tam je.";
	
	$pris1en = "The new Iphone 13 comes with unique set of magnets on its back side, that allow the usage of ";
	$pris2en = "wireless charging";
	$pris3en = "with performance up to 15W. And you can still use your phone while its charging.";
	$pris4en = "Thanks to our elegant cases you can protect your new smartphone in style. We recommend especially our ";
	$pris5en = "sillicone cases ";
	$pris6en = ", which come in many different vibrant colors, or see-through model. ";
	$pris7en = "Are you afraid of scratching the display of your new phone with your nails? Are you scared that your display will shatter when you drop it on an accident? Then get our 0.4mm thin ";
	$pris8en = "protective screen";
	$pris9en = ". So thin, you won’t even know it’s there.";

    if (isset($_POST['Submit'])) {
	  $pris1 = $pris1sk;
	  $pris2 = $pris2sk;
	  $pris3 = $pris3sk;
	  $pris4 = $pris4sk;
	  $pris5 = $pris5sk;
	  $pris6 = $pris6sk;
	  $pris7 = $pris7sk;
	  $pris8 = $pris8sk;
	  $pris9 = $pris9sk;
    } else {
	  $pris1 = $pris1en;
	  $pris2 = $pris2en;
	  $pris3 = $pris3en;
	  $pris4 = $pris4en;
	  $pris5 = $pris5en;
	  $pris6 = $pris6en;
	  $pris7 = $pris7en;
	  $pris8 = $pris8en;
	  $pris9 = $pris9en;
    }
	
	if (isset($_POST['Submit2'])) {
	  $pris1 = $pris1en;
	  $pris2 = $pris2en;
	  $pris3 = $pris3en;
	  $pris4 = $pris4en;
	  $pris5 = $pris5en;
	  $pris6 = $pris6en;
	  $pris7 = $pris7en;
	  $pris8 = $pris8en;
	  $pris9 = $pris9en;
    } else {
	  $pris1 = $pris1sk;
	  $pris2 = $pris2sk;
	  $pris3 = $pris3sk;
	  $pris4 = $pris4sk;
	  $pris5 = $pris5sk;
	  $pris6 = $pris6sk;
	  $pris7 = $pris7sk;
	  $pris8 = $pris8sk;
	  $pris9 = $pris9sk;
    }
	?>
	
	<div class="pad-div-30"></div>
	<section class="container">
	
		<article class="item1-3">
			<p class="ctext"> <?php echo $pris1 ?> <span class="hook"> <?php echo $pris2 ?> </span> <?php echo $pris3 ?> </p>
		</article>
		
		<article class="item1-3">
			<img class="acc-img" src="img/obr5.png">
		</article>
		
		<article  class="item1-3">
			<p class="ctext"> <?php echo $pris4 ?> <span class="hook"> <?php echo $pris5 ?> </span> <?php echo $pris6 ?> </p>
		</article>
		
		<article class="item1-3">
			<img class="acc-img" src="img/obr4.png">
		</article>
		
		<article class="item1-3">
			<p class="ctext"> <?php echo $pris7 ?> <span class="hook"> <?php echo $pris8 ?> </span> <?php echo $pris9 ?> </p>			
		</article>
		
		<article class="item1-3">
			<img class="acc-img" src="img/obr6.png">
		</article>
	
	</section>


<div  class="spacer2"> . </div>
<?php include('footer.php'); ?>
</body>
</html>