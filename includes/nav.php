<ul>
	<?php 

	foreach ($navItems as $key => $item) {
		echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
	}

	?>
</ul>