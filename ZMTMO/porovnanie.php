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
	$por1sk = "Parameter";
	$por2sk = "Hodnota";
	$por3sk = "Rozlíšenie";
	$por4sk = "Operačná pamäť";
	$por5sk = "Rozlíšenie zadnej kamery";
	$por6sk = "Rozlíšenie prednej kamery";
	$por7sk = "Max. výkon bezdrôtového nabíjania";
	$por8sk = "Počet jadier procesora";
	$por9sk = "Označenie procesora";
	$por10sk = "Iphone 13 je zaručene najlepší smartphone na trhu, pozrite sa ako sa popasuje v porovnaní s konkurenčnými značkami ako napríklad Samsung alebo Xiaomi. Náš Smartphone je najvýkonnejší s najostrejšou kamerou a najmodernejšími technológiami. ";
	
	$por1en = "Parametre";
	$por2en = "Value";
	$por3en = "Resolution";
	$por4en = "Memory";
	$por5en = "Rear camera resolution";
	$por6en = "Front camera resolution";
	$por7en = "Max output - wireless charging";
	$por8en = "Number of processor cores";
	$por9en = "Processor name";
	$por10en = "We guarantee that the new Iphone 13 is the best smartphone on the market right now. Look yourself, how it compares to newest devices made by Samsung or Xiaomi. Our smartphone is the best performing, has the best camera and comes with the most modern technologies.";

    if (isset($_POST['Submit'])) {
	  $por1 = $por1sk;
	  $por2 = $por2sk;
	  $por3 = $por3sk;
	  $por4 = $por4sk;
	  $por5 = $por5sk;
	  $por6 = $por6sk;
	  $por7 = $por7sk;
	  $por8 = $por8sk;
	  $por9 = $por9sk;
	  $por10 = $por10sk;
    } else {
	  $por1 = $por1en;
	  $por2 = $por2en;
	  $por3 = $por3en;
	  $por4 = $por4en;
	  $por5 = $por5en;
	  $por6 = $por6en;
	  $por7 = $por7en;
	  $por8 = $por8en;
	  $por9 = $por9en;
	  $por10 = $por10en;
    }
	
	if (isset($_POST['Submit2'])) {
	  $por1 = $por1en;
	  $por2 = $por2en;
	  $por3 = $por3en;
	  $por4 = $por4en;
	  $por5 = $por5en;
	  $por6 = $por6en;
	  $por7 = $por7en;
	  $por8 = $por8en;
	  $por9 = $por9en;
	  $por10 = $por10en;
    } else {
	  $por1 = $por1sk;
	  $por2 = $por2sk;
	  $por3 = $por3sk;
	  $por4 = $por4sk;
	  $por5 = $por5sk;
	  $por6 = $por6sk;
	  $por7 = $por7sk;
	  $por8 = $por8sk;
	  $por9 = $por9sk;
	  $por10 = $por10sk;
    }
	?>

<section class="container">

	<article class="item1-p">
		<h1 class="cnt atext">Apple</h1>
		<div class="pad-div-30"></div>
		<table class="tabulka">
			<tr>
				<th> <?php echo $por1 ?> </th>
				<th> <?php echo $por2 ?> </th>
			</tr>
			<tr>
				<td> <?php echo $por3 ?> </td>
				<td>2532 × 1170</td>
			</tr>
			<tr>
				<td> <?php echo $por4 ?> </td>
				<td>4 GB</td>
			</tr>
			<tr>
				<td> <?php echo $por5 ?> </td>
				<td>12 Mpx</td>
			</tr>
			<tr>
				<td> <?php echo $por6 ?> </td>
				<td>12 Mpx</td>
			</tr>
			<tr>
				<td> <?php echo $por7 ?> </td>
				<td>15 W</td>
			</tr>
			<tr>
				<td> <?php echo $por8 ?> </td>
				<td>6</td>
			</tr>
			<tr>
				<td> <?php echo $por9 ?> </td>
				<td>Apple A15 Bionic</td>
			</tr>
		</table>
	</article>
	
	<article class="item1-p">
		<h1 class="cnt atext">Samsung</h1>
		<div class="pad-div-30"></div>
		<table class="tabulka">
			<tr>
				<th> <?php echo $por1 ?> </th>
				<th> <?php echo $por2 ?> </th>
			</tr>
			<tr>
				<td> <?php echo $por3 ?> </td>
				<td>2400 × 1080</td>
			</tr>
			<tr>
				<td> <?php echo $por4 ?> </td>
				<td>6 GB</td>
			</tr>
			<tr>
				<td> <?php echo $por5 ?> </td>
				<td>12 Mpx</td>
			</tr>
			<tr>
				<td> <?php echo $por6 ?> </td>
				<td>32 Mpx</td>
			</tr>
			<tr>
				<td> <?php echo $por7 ?> </td>
				<td>-</td>
			</tr>
			<tr>
				<td> <?php echo $por8 ?> </td>
				<td>8</td>
			</tr>
			<tr>
				<td> <?php echo $por9 ?> </td>
				<td>Qualcomm Snapdragon 720G</td>
			</tr>
		</table>
	</article>
	
	<article class="item1-p">
		<h1 class="cnt atext">Xiaomi</h1>
		<div class="pad-div-30"></div>
		<table class="tabulka">
			<tr>
				<th> <?php echo $por1 ?> </th>
				<th> <?php echo $por2 ?> </th>
			</tr>
			<tr>
				<td> <?php echo $por3 ?> </td>
				<td>2340 × 1080</td>
			</tr>
			<tr>
				<td> <?php echo $por4 ?> </td>
				<td>6 GB</td>
			</tr>
			<tr>
				<td> <?php echo $por5 ?> </td>
				<td>64 Mpx</td>
			</tr>
			<tr>
				<td> <?php echo $por6 ?> </td>
				<td>16 Mpx</td>
			</tr>
			<tr>
				<td> <?php echo $por7 ?> </td>
				<td>-</td>
			</tr>
			<tr>
				<td> <?php echo $por8 ?> </td>
				<td>8</td>
			</tr>
			<tr>
				<td> <?php echo $por9 ?> </td>
				<td>Qualcomm Snapdragon 720G</td>
			</tr>
		</table>
	</article>
	
	<article class="item2-p">
		<p class="dtext cnt"> <?php echo $por10 ?> </p>
		<img class="acc-img" src="img/gif1.gif" alt="gif">
	</article>

</section>	
	


<div  class="spacer6"> . </div>
<?php include('footer.php'); ?>
</body>
</html>