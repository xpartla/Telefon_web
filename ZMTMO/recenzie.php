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
    $re1sk = "Nemusíte veriť len nám, pozrite sa čo o novom Iphone 13 hovoria naši zákazníci, alebo pokiaľ už ste jedným z nich, môžete sa podeliť o vaše skúsenosti s ostatnými.";
    $re2sk = "Odoslať";
	$re3sk = "Meno: ";
	$re4sk = "Vaša recenzia: ";

	$re1en = "You don’t need to trust only us while choosing your new smartphone. Look what our customers said about the product, or share some of your experiences. Don't hesitate and write them down below!";
    $re2en = "Submit";
	$re3en = "Name: ";
	$re4en = "Your review: ";

    if (isset($_POST['Submit'])) {
      $re1 = $re1sk;
	  $re2 = $re2sk;
	  $re3 = $re3sk;
	  $re4 = $re4sk;
    } else {
      $re1 = $re1en;
	  $re2 = $re2en;
	  $re3 = $re3en;
	  $re4 = $re4en;
    }
	
	if (isset($_POST['Submit2'])) {
      $re1 = $re1en;
	  $re2 = $re2en;
	  $re3 = $re3en;
	  $re4 = $re4en;
    } else {
      $re1 = $re1sk;
	  $re2 = $re2sk;
	  $re3 = $re3sk;
	  $re4 = $re4sk;
    }
	?>	
	
	<section class="container">
		<section class="itemr">
			<article>
				<p class="dtext cnt"> <?php echo $re1 ?> </p>
			</article>
			<article>
				<form action="zapis.php" method="post">
					<input autocomplete="off" class="meno" type="text" id="meno" name="meno" placeholder="<?php echo $re3 ?>">
					<textarea name="text" placeholder="<?php echo $re4 ?>"></textarea>
					<input type="submit" class="submit" value="<?php echo $re2 ?>">
				</form>
			</article>
		</section>
		<?php
			$str = file_get_contents('data.txt');
			$out = explode("*",$str);
		?>
		<section class="itemr">
			<?php 	
				if(!empty($out[0])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[0]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[1])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[1]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[2])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[2]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[3])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[3]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[4])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[4]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[5])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[5]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[6])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[6]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[7])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[7]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[8])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[8]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[9])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[9]; ?></p>
			<?php 	
				}
			?>
			<?php 	
				if(!empty($out[9])){ 
			?>
			<p class="dtext cnt rectext"><?php 	echo $out[10]; ?></p>
			<?php 	
				}
			?>
		</section>
	</section>

<div  class="spacer4"> . </div>

<?php include('footer.php'); ?>

</body>
</html>