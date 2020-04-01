<article id="trackerStatus">
	<h2 class="major">Tracker Status</h2>
	
	<?php
	$stats = file_get_contents('http://torrent:8000/stats');
	if($stats) {
		echo $stats;
	}
	else {
		echo "Der Tracker läuft nicht!";
	}
	?>
</article>