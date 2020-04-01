<!-- Torrents -->
<article id="torrents">
	<h2 class="major">Torrents</h2>
		<div class="table-wrapper">
			<table class="alt">
				<thead>
					<tr>
						<th>Name</th>
						<th>Datum</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
	<?php foreach($torrents as $key => $torrent) {
		?>

					<tr>
						<td><?php echo substr($torrent['name'], 0, 50); ?></td>
						<td><?php echo date('d.M.Y H:i', $torrent['date']); ?></td>
						<td><a href="/torrents/<?php echo $torrent['name']; ?>" class="button icon fa-download">Download</a></td>
					</tr>
					
		<?php
	}
	?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3"><?php echo count($torrents); ?> Torrents</td>
					</tr>
				</tfoot>
			</table>
		</div>
</article>