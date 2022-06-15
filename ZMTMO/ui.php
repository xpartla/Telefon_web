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
    $ui1sk = "Operačný systém";
    $ui1en = "New operating system";
	$ui2sk = "ponúka nový design oproti predošlým modelom. Zo zamknutej obrazovky sa potiahnutím dá dostať hneď do fotoaparátu alebo zapnúť baterku.";
    $ui2en = "15 comes with some changes in design. You can directly go to the camera app from your lock-screen.";
	$ui3sk = "Na domovskej obrazovke sa nachádzajú zväčšené ikony s počasím a galériou. Na spodnej lište sú aplikácie ako telefón, správy, prehliadač a hudba. pri potiahnutí hornej lišty sa zobrazí menu kde je vidno jas, zvuk, hudbu, pripojenie na sieť kalkulačka alebo baterka.";
	$ui3en = "There are highlighted icons of the weather app and gallery on your home page. On the bottom bar are apps such as phone, messages, web browser and music. After you swipe down, you will see a menu where you can change the brightness, sound level, music, network connection or turn on the calculator.";
    if (isset($_POST['Submit'])) {
      $ui1 = $ui1sk;
	  $ui2 = $ui2sk;
	  $ui3 = $ui3sk;
    } else {
      $ui1 = $ui1en;
	  $ui2 = $ui2en;
	  $ui3 = $ui3en;
    }
	
	if (isset($_POST['Submit2'])) {
      $ui1 = $ui1en;
	  $ui2 = $ui2en;
	  $ui3 = $ui3en;
    } else {
      $ui1 = $ui1sk;
	  $ui2 = $ui2sk;
	  $ui3 = $ui3sk;
    }
	?>
	
		<section class="container">
			<section class="item4">
				<video class="uiimg" autoplay loop muted controls>
					<source src="img/video1.mp4" type="video/mp4">
				</video>
			</section>
			<section class="item4-t">
				<p class="dtext"> <?php echo $ui1 ?> <span class="hook">IOS 15</span> <?php echo $ui2 ?> </p>	
				<p class="dtext"> <?php echo $ui3 ?> </p>
			</section>
			<section class="item42">
				<img class="uiimg" src="img/obr14.jpg" alt="obr">
			</section>
			<section class="item4">
				<img class="uiimg" src="img/obr15.jpg" alt="obr">
			</section>
		</section>	
	<div  class="spacer3"> . </div>
	
<?php include('footer.php'); ?>

</body>
</html>