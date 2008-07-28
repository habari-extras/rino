<?php

/**
 * Rino theme home page
 */

$theme->display('header');

?>

	<div class="column span-18 prepend-3 last">
	  <div class="column span-10" id="masthead">
	  	<h1>habari</h1>
	  	<h2>spread the news</h2>
	  </div>

	  <div class="column span-8 last" id="subhead">
	  	<p><b>ha&middot;ba&middot;ri - </b> noun<br>
	  	Definition - Swahili greetings: What's the news?
			</p>
	  </div>

	  <div class="column span-18 last" id="elevator">
	  	<p>Habari is a free next-generation <a href="licensing">open-source</a> blogging platform created by the community.  <a href="http://habariproject.org/en/download">Download</a> the latest version and help define the future of blogging.</p>
	  </div>

	  <hr>

	  <div id="media">
		<div id="noUpdate">
			<p>The video content presented here requires JavaScript to be enabled and the  latest version of the Macromedia Flash Player. If you are you using a browser with JavaScript disabled please enable it now. Otherwise, please update your version of the free Flash Player by <a href="http://www.macromedia.com/go/getflashplayer">downloading here</a>. </p>
		</div>
	  </div>
	  <script type="text/javascript">
		// <!--
		$('#media').click(function(){
			var so = new SWFObject( "<?php Site::out_url( 'theme' ); ?>/habari_install2.swf", "csSWF", "720", "284", "8", "#ffffff");
			so.addParam( "quality", "best" );
			so.addParam( "allowFullScreen", "false" );
			so.addParam( "scale", "noscale" );
			so.addParam( "allowScriptAccess", "always" );
			so.addVariable( "autostart", "true" );
			so.write("media");
		});
		// -->
	  </script>

	  <hr>

	  <div class="column span-18" id="screencast">
		<p>We've created a few <a href="screencasts">screencasts</a> for you to get a better appreciation of the software in action, however we're also covered you if you're looking for some <a href="screenshots">screenshots</a> instead.</p>
	  </div>

	  <div class="column span-9" id="community-blog">
		<h2>Community Blog</h2>

		<?php foreach ( $posts as $post ): ?>
		<div class="post">
			<h3><a href="<?php echo $post->permalink; ?>"><?php echo $post->title_out; ?></a></h3>

			<?php echo $post->content_out; ?>

		</div>
		<?php endforeach; ?>
	  </div>

	  <div class="column span-9 last" id="user-mailing-list">
		<h2><a href="http://groups.google.com/group/habari-users">Users Mailing List</a></h2>

		<?php echo $feedlist[0]; ?>

	  </div>

	</div>

<?php $theme->display('footer'); ?>
