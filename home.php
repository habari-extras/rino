<?php

/**
 * Rino theme home page
 */

$theme->display('header');

?>
	<div class="column span-18">
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
	  	<p>Habari is a <a href="#">free</a> next-generation <a href="#">open-source</a> software blogging platform created by the community for the community.  <a href="#">Download</a> the latest stable version.</p>
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

		<div class="column span-18 last" id="screencast">
			We've created a few <a href="#">screencasts</a> for you to get a better appreciation of the software in action, however we're also covered you if you're looking for some <a href="#">screenshots</a> instead.
		</div>


	</div>
	<div class="column span-6 last">
		<?php $theme->display('sidebar'); ?>
	</div>

<?php $theme->display('footer'); ?>