<!-- New Torrent -->
	<article id="newTorrent">
		<h2 class="major">Neuer Torrent</h2>
		
		<h3>Anleitung zum Torrent einstellen:</h3>
		<ol>
			<li>Ihr müsst qBittorrent <a href="/downloads/qbittorrent_4.1.0_setup.exe">32-Bit</a> - <a href="/downloads/qbittorrent_4.1.0_x64_setup.exe">64-Bit</a> installiert haben!</li>
			<li>Packt das Spiel mit Winrar <a href="/downloads/wrar550d.exe">32-Bit</a> - <a href="/downloads/winrar-x64-550d.exe">64-Bit</a> in eine Rar Datei.</li>
			<li>Öffnet qBittorrent und klickt auf <code>Werkzeuge -> Torrent Ersteller</code></li>
			<li>Pfad: Wählt eure fertige Rar Datei aus</li>
			<li>Gebt bei <code>Felder -> Tracker-URLs</code> diesen Tracker an: <code>http://torrent:8000/announce</code></li>
			<li>Klickt auf <code>Torrent erstellen</code></li>
			<li>Ladet die fertige Torrent Datei mit dem <a href="#torrentUploadForm">Formular</a> auf den Server</li>
			<li>Euer Torrent taucht nun in der <a href="#torrents">Torrent Liste</a> auf = )</li>
			<li>Seedet euer Spiel, ansonsten kann es keiner Laden!</li>
		</ol>
		

		<?php $this->load->helper(array('form', 'url')); ?>
		
		<?php echo form_open_multipart('torrent/upload', array('id' => 'torrentUploadForm'));?>
			
			<div class="field">
				<label for="torrent">Torrent</label>
				

				<?php echo form_upload(array('name' => 'torrent')); ?>
			</div>
			
			<ul class="actions">
				<li><?php echo form_submit('submit', 'Torrent einstellen'); ?></li>
			</ul>
			
		<?php echo form_close(); ?>
		
	</article>