
<!-- Header -->
<header id="header">
	<div class="logo">
		<a href="http://torrent"><span class="icon fa-users"></span></a>
	</div>
	<div class="content">
		<div class="inner">
			<?php 
			if($messages) {
				foreach ($messages as $message) {
					echo '<h2>'.$message.'</h2>';
				}
			}
			else if($errors) {
				foreach ($errors as $error) {
					echo '<h2>'.$error.'</h2>';
				}
			}
			else {
			?>
			<h1>LAN-Party bei Timo</h1>
			<h3>Anleitung zum Spiele Laden:</h3>
			<ol>
				<li>Ladet euch den qBittorrent Client herunter <a href="/downloads/qbittorrent_4.1.1_setup.exe">32-Bit</a> - <a href="/downloads/qbittorrent_4.1.1_x64_setup.exe">64-Bit</a></li>
				<li>Installiert qBittorrent ;)</li>
				<li>Sucht euch die Torrent Datei für euer Spiel raus und öffnet diese mit qBittorrent. <a href="#torrents">Torrents</a></li>
				<li>Entpackt das Spiel mit Winrar <a href="/downloads/wrar550d.exe">32-Bit</a> - <a href="/downloads/winrar-x64-550d.exe">64-Bit</a></li>
			</ol>
			<?php
			}
			?>
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="#torrents">Torrents</a></li>
			<li><a href="#newTorrent">Torrent einstellen</a></li>
			<li><a href="#trackerStatus">Tracker Status</a></li>
			<!--<li><a href="#elements">Elements</a></li>-->
		</ul>
	</nav>
</header>

<!-- Main -->
<div id="main">

<?php $this->load->view('templates/torrents'); ?>
<?php $this->load->view('templates/newTorrent'); ?>
<?php $this->load->view('templates/trackerStatus'); ?>
<?php //$this->load->view('templates/elements'); ?>

</div>
