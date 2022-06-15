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
	$tech1sk = "Pamäť";
	$tech2sk = "V novom Iphone 13 je zvýšená základná pamäť na 128GB, samozrejme prichádza aj v 256GB a 512GB";
	$tech3sk = "Kamera";
	$tech4sk = "Kvalita fotoaparátu je až 12Mpx so zlepšeným snímaním v noci oproti predošlému modelu";
	$tech5sk = "Procesor";
	$tech6sk = "A15 Bionic s 5-jadrovou grafikou je najmodernejší a najrýchleší procesor dostupný v smartfónoch na trhu";
	$tech7sk = "5G";
	$tech8sk = "Iphone 13 sa dokáže pripojiť na 5G siete, a vďaka nízkej spotrebe energie dokonca efektívnejšie ako WiFi";
	$tech9sk = "Batéria";
	$tech10sk = "Batéria nášho najnovšieho smartphonu má kapacitu  viac ako 3200mAh čo vám zaručí cez 10 hodín aktívneho používania";
	$tech11sk = "IOS 15";
	$tech12sk = "IOS 15 disponuje mnoho novými funkciami, zlepšenie Face ID, spoľahlivejšia bezpečnosť a efektívna práca s batériou";
	$tech13sk = "Displej";
	$tech14sk = "6,1 2532 x 1170 odolný a ostrý. Displej s ešte jasnejším jasom ako ste si predstavovali a krásnymi sýtymi farbami";
	$tech15sk = "Nabíjanie";
	$tech16sk = "Najnovší Iphone 13 môžete nabíjať pomocou káblu s výkonom až neuveriteľných 20W alebo bezdrôtovo s výkonom do 15W";
	
	
	$tech1en = "Storage";
	$tech2en = "The storage in our newest Iphone 13 is default on 128GB. It also comes as usual in 256GB and 512GB.";
	$tech3en = "Camera";
	$tech4en = "The quallity of both front and back camera is 12Mpx with even better quality shots at night than before.";
	$tech5en = "Processor";
	$tech6en = "Brand new A15 Bionic comes with 5-core graphics and it’s the newest, fastest and highest quality processor on the market.";
	$tech7en = "5G";
	$tech8en = "Iphone 13 can connect to 5G networks, and thanks to lowered energy consumption it’s even more effective than using Wi-Fi.";
	$tech9en = "Battery";
	$tech10en = "Battery in our new smartphone has the capacity of 3200mAh, what means up to 10 hour of active on-screen time.";
	$tech11en = "IOS 15";
	$tech12en = "New IOS 15 comes with many new functions, such as improved functionality of Face ID, better security and effective energy consumption.";
	$tech13en = "Display";
	$tech14en = "6,1“ 2532 x 1170 Px. Durable and sharp. Even higher brightness and deep saturated colors.";
	$tech15en = "Charging";
	$tech16en = "Our newest Iphone can be charged by cable with performance up to 20W, but it can be also charged by up to 15W with a wireless charger.";

    if (isset($_POST['Submit'])) {
	  $tech1 = $tech1sk;
	  $tech2 = $tech2sk;
	  $tech3 = $tech3sk;
	  $tech4 = $tech4sk;
	  $tech5 = $tech5sk;
	  $tech6 = $tech6sk;
	  $tech7 = $tech7sk;
	  $tech8 = $tech8sk;
	  $tech9 = $tech9sk;
	  $tech10 = $tech10sk;
	  $tech11 = $tech11sk;
	  $tech12 = $tech12sk;
	  $tech13 = $tech13sk;
	  $tech14 = $tech14sk;
	  $tech15 = $tech15sk;
	  $tech16 = $tech16sk;
    } else {
	  $tech1 = $tech1en;
	  $tech2 = $tech2en;
	  $tech3 = $tech3en;
	  $tech4 = $tech4en;
	  $tech5 = $tech5en;
	  $tech6 = $tech6en;
	  $tech7 = $tech7en;
	  $tech8 = $tech8en;
	  $tech9 = $tech9en;
	  $tech10 = $tech10en;
	  $tech11 = $tech11en;
	  $tech12 = $tech12en;
	  $tech13 = $tech13en;
	  $tech14 = $tech14en;
	  $tech15 = $tech15en;
	  $tech16 = $tech16en;
    }
	
	if (isset($_POST['Submit2'])) {
	  $tech1 = $tech1en;
	  $tech2 = $tech2en;
	  $tech3 = $tech3en;
	  $tech4 = $tech4en;
	  $tech5 = $tech5en;
	  $tech6 = $tech6en;
	  $tech7 = $tech7en;
	  $tech8 = $tech8en;
	  $tech9 = $tech9en;
	  $tech10 = $tech10en;
	  $tech11 = $tech11en;
	  $tech12 = $tech12en;
	  $tech13 = $tech13en;
	  $tech14 = $tech14en;
	  $tech15 = $tech15en;
	  $tech16 = $tech16en;
    } else {
	  $tech1 = $tech1sk;
	  $tech2 = $tech2sk;
	  $tech3 = $tech3sk;
	  $tech4 = $tech4sk;
	  $tech5 = $tech5sk;
	  $tech6 = $tech6sk;
	  $tech7 = $tech7sk;
	  $tech8 = $tech8sk;
	  $tech9 = $tech9sk;
	  $tech10 = $tech10sk;
	  $tech11 = $tech11sk;
	  $tech12 = $tech12sk;
	  $tech13 = $tech13sk;
	  $tech14 = $tech14sk;
	  $tech15 = $tech15sk;
	  $tech16 = $tech16sk;
    }
	?>
	
	
	<div class="pad-div-30"></div>
	<section class="container">
	
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech1 ?> </h2>
				<p class="dtext"> <?php echo $tech2 ?> </p>	
		</article>
		
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech3 ?> </h2>
				<p class="dtext"> <?php echo $tech4 ?> </p>
		</article>
		
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech5 ?> </h2>
				<p class="dtext"> <?php echo $tech6 ?> </p>
		</article>
		
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech7 ?> </h2>
				<p class="dtext"> <?php echo $tech8 ?> </p>
		</article>
		
		
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech9 ?> </h2>
				<p class="dtext"> <?php echo $tech10 ?> </p>
		</article>
		
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech11 ?> </h2>
				<p class="dtext"> <?php echo $tech12 ?> </p>
		</article>
		
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech13 ?> </h2>
				<p class="dtext"> <?php echo $tech14 ?> </p>
		</article>
		
		<article class="item2-4">
			<h2 class="atext"> <?php echo $tech15 ?> </h2>
				<p class="dtext"> <?php echo $tech16 ?> </p>
		</article>
		
		
	
	</section>
	
<?php include('footer.php'); ?>
</body>
</html>