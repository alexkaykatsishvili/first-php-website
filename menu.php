<?php 
	define('TITLE', 'Menu | Franklin\'s Fine Dinning');
	include("includes/header.php");

?>

	<div id="menu-items">

		<h1>Our Delicious Menu</h1>

		<hr>

		<ul>
			
			<?php foreach ($menuItems as $dish => $item) { ?>

			<li><a title="<?php echo $item['title']; ?>" href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a> <sup>$</sup> <?php echo $item['price']; ?></li>

			<?php } ?>

		</ul>

	</div>

<?php

	include("includes/footer.php");

?>