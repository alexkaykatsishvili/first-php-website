<?php 
	define('TITLE', 'Team | Franklin\'s Fine Dinning');
	include("includes/header.php");

?>

<div class="team-members">

	<h1>Our Team at Franklin's</h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perferendis expedita vero iure, exercitationem quaerat totam dignissimos, qui quisquam, quam in et optio alias voluptatem praesentium nostrum aliquid necessitatibus temporibus!
	</p>

	<hr>

	<?php foreach ($teamMembers as $key => $member) { ?>

	<div class="member">
		<img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
		<h2><?php echo $member['name']; ?></h2>
		<p><?php echo $member['position']; ?></p>
		<p><?php echo $member['bio']; ?></p>
	</div>
	<!-- member -->
	
	<?php } ?>

</div>

<hr>

<?php

	include("includes/footer.php");

?>