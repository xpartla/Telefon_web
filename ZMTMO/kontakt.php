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
    $kon1sk = "Pokiaľ chcete mať vždy najnovšie a najaktuálnejšie informácie o nás, otváracích hodinách našich predajní alebo informácie o nových produktoch, dajte nám like na náš Facebookový účet.";
    $kon2sk = "Nenechajte si ujsť naše najnovšie posty na našom Instagrame. Neváhajte a dajte nám follow, každý týždeň totiž rozdávame zľavové kódy na produkty, niekedy v hodnote až cez 100€.";
	$kon3sk = "Máte otázku ohľadom dostupnosti niektorého z našich produktov? Potrebujete poradiť pri rozhodovaní? Kontaktujte nás cez e-mail support@obchod.sk";
    $kon4sk = "Ak sa s nami nutne potrebujete telefonicky skontaktovať alebo chcete využiť našu bezplatnú zákaznícku podporu neváhajte a vzužite telefónne číslo 0911 123 456";
	$kon5sk = "Pokiaľ s nami potrebujete niečo riešiť osobne, neváhajte a navštívte nás na našej adrese. V predajni na Vás bude čakať náš vždy usmiaty personál.";

	$kon1en = "If you want to always have the latest and most up-to-date information about us, the opening hours of our stores or information about new products, give us a like on our Facebook account.";
    $kon2en = "Don't miss our latest posts on our Instagram. Feel free to follow us, because every week we give away discount codes for products, sometimes worth over 100€.";
	$kon3en = "Do you have a question about the availability of one of our products? Do you need help deciding with something? Contact us via email en-support@obchod.sk";
    $kon4en = "If you urgently need to contact us by phone or would like to take advantage of our free customer support please do not hesitate to call 0911 123 456";
	$kon5en = "If you need to communicate with us in person, feel free to visit us at our address. Our always smiling staff will be waiting for you in the shop.";

    if (isset($_POST['Submit'])) {
      $kon1 = $kon1sk;
	  $kon2 = $kon2sk;
	  $kon3 = $kon3sk;
	  $kon4 = $kon4sk;
	  $kon5 = $kon5sk;
    } else {
      $kon1 = $kon1en;
	  $kon2 = $kon2en;
	  $kon3 = $kon3en;
	  $kon4 = $kon4en;
	  $kon5 = $kon5en;
    }
	
	if (isset($_POST['Submit2'])) {
      $kon1 = $kon1en;
	  $kon2 = $kon2en;
	  $kon3 = $kon3en;
	  $kon4 = $kon4en;
	  $kon5 = $kon5en;
    } else {
      $kon1 = $kon1sk;
	  $kon2 = $kon2sk;
	  $kon3 = $kon3sk;
	  $kon4 = $kon4sk;
	  $kon5 = $kon5sk;
    }
	?>

<section class="container">
	
	<article class="item1-p">
		<div class="pad-div-30"></div>
		<img class="ikona" src="img/ikona1.png" alt="ikona">
		<br>
		<p class="etext cnt"> <?php echo $kon1 ?> </p>
		<div class="pad-div-30"></div>
		<img class="ikona" src="img/ikona2.png" alt="ikona">
		<br>
		<p class="etext cnt"> <?php echo $kon2 ?> </p>
	</article>
	
	<article class="item1-p">
		<div class="pad-div-30"></div>
		<img class="ikona" src="img/ikona3.png" alt="ikona">
		<br>
		<p class="etext cnt"> <?php echo $kon3 ?> </p>
		<div class="pad-div-30"></div>
		<img class="ikona" src="img/ikona4.png" alt="ikona">
		<br>
		<p class="etext cnt"> <?php echo $kon4 ?> </p>
	</article>
	
	
	<article class="item3-p">
		<p class="dtext cnt"> <?php echo $kon5 ?> </p>
		<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5323.355815073083!2d17.072541740798968!3d48.15501452558812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8bec79f0f3a9%3A0x8b585229fc0ae860!2sFakulta%20informatiky%20a%20informa%C4%8Dn%C3%BDch%20technol%C3%B3gi%C3%AD%20Slovenskej%20technickej%20univerzity!5e0!3m2!1ssk!2ssk!4v1637522723352!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<p class="credits"> Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></p>
	</article>

</section>		


	<div  class="spacer5"> . </div>
<?php include('footer.php'); ?>
</body>
</html>