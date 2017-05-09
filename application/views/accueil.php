<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div id="container">
			<h1>Bienvenue sur le gestionnaire VoCore</h1>
			<div id="body">
				<p>Le gestionnaire de musique ce trouve ici :</p>
				<code><a href='musique'>Musique</a></code>
				<p>Gestionnaire de LED</p>
				<code><a href= 'LED'>LED</a></code>
			</div>
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>