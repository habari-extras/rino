<?php

/**
 * Rino theme download page
 */

$theme->display('header');

?>

	<div class="column span-18 prepend-3 last">
	  <div class="column span-10" id="masthead">
		<h1><a href="<?php Site::out_url('habari'); ?>">habari</a></h1>
	  	<h2>spread the news</h2>
	  </div>

	  <div class="column span-8 last" id="subhead">
	  	<p><b>ha&middot;bar&middot;i - </b> noun<br>
	  	Definition - Swahili greetings: What's the news?
			</p>
	  </div>

	  <hr>

	  <div class="column span-18 content last">
		<div id="downloading">
<?php
/*
Options::set('download_url', 'http://habariproject.org/dist/habari-0.5.2.zip');
Options::set('download_version', '0.5.2');
*/
?>
		<h3><a href="<?php Options::out('download_url'); ?>">Download The Current Stable Version</a></h3>
		<p>The current stable version of Habari is <b><?php echo Options::out('download_version'); ?></b></p>
		</div>
		<div id="releasenotes">
			<h4>Release Notes</h4>
			<?php echo $post->content_out; ?>
		</div>
		<div id="alternate-downloads">
			<h4>Alternate Downloads</h4>
			<p>A snapshot of the current development version is available for <a href="http://habariproject.org/dist/habari_head.zip">down
load</a>.</p>
			<p><b>Beware:</b> Using the development snapshot may cause breakage on your site.  If dealing with in-development glitches is 
not your cup of tea, try the latest stable download, above.</p>
			<h4>Subversion Access</h4>
			<p>The Habari subversion repository is located here:<br />
			<a href="http://svn.habariproject.org/habari/">http://svn.habariproject.org/habari/</a>
			</p>
			<p>To check out only the files required for your web root, execute this command within your web root directory:<br />
			<code>svn co http://svn.habariproject.org/habari/trunk/htdocs/ .</code>
			</p>
			<p>Learn more <a href="http://wiki.habariproject.org/en/Subversion_and_applying_patches">about subversion access</a> to Habari
 source.</p>
		</div>
	</div>

<?php $theme->display('footer'); ?>
