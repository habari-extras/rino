<?php

/**
 * Rino theme home page
 */

$theme->display('header');

?>

	<div class="column span-17 colborder last">
	  <div class="column span-10" id="masthead">
	  	<h1>habari</h1>
	  	<h2>spread the news</h2>
	  </div>

	  <div class="column span-7 last" id="subhead">
	  	<p><b>ha&middot;ba&middot;ri - </b> noun<br>
	  	Definition &mdash; Swahili greeting: What's the news?
			</p>
	  </div>

	  <div class="column span-17 last" id="elevator">
	  	<p>Habari is next-generation blogging. <a
		href="http://habariproject.org/en/download">Download</a> Habari and
		help our <a
		href="http://wiki.habariproject.org/en/Getting_Involved">community</a>
		design the future of blogs.</p>
	  <!-- old version
	  	<p>Habari is a free, next-generation blogging platform created by the <a href="http://wiki.habariproject.org/en/Getting_Involved">community</a>.  <a href="http://habariproject.org/en/download">Download</a> the latest version and help define the future of blogging.</p>
		-->
	  </div>

	  <hr>

	  <div id="media">
		<div id="noUpdate">
			<p>The video content presented here requires JavaScript to be enabled and the  latest version of the Macromedia Flash Player. If you are using a browser with JavaScript disabled please enable it now. Otherwise, please update your version of the free Flash Player by <a href="http://www.macromedia.com/go/getflashplayer">downloading here</a>. </p>
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

	  <div class="column span-17" id="screencast">
		<p>We've created a few <a href="screencasts">screencasts</a> for you to get a better appreciation of the software in action, however we're also covered you if you're looking for some <a href="screenshots">screenshots</a> instead.</p>
	  </div>

	  <div class="column span-17" id="sellingpoints">
		<?php
		// grab 'home' post
		$homepost = Posts::get( array( 'slug' => 'home' ) );
		echo $homepost[0]->content_out;
		?>
	  </div>
	</div>

	<div class="column span-6 last" id="sidebar">

	  <div id="community-blog">
		<h2>Community Blog</h2>

		<?php $post = $posts[0]; ?>
		<div class="post">
			<h3><a href="<?php echo $post->permalink; ?>"><?php echo $post->title_out; ?></a></h3>

			<?php echo $post->content_excerpt; ?>

		</div>
	  </div>

	  <div id="user-mailing-list">
		<h2><a href="http://groups.google.com/group/habari-users">Users Mailing List</a></h2>

		<?php echo $feedlist[0]; ?>

	  </div>

	  <div id="featured-extras">
		<h2>Plugins and Themes</h2>

		<p>Some popular plugins include:</p>
		<ul>
			<li>posting to twitter and receiving status updates</li>
			<li>Inserting Flickr videos and photos from the post editor</li>
			<li>Feedburner integration for customized feeds and statistics</li>
			<li>Disqus comments</li>
			<li>Defensio spam filtering</li>
			<li>lifestreaming</li>
		</ul>
	  </div>
	</div>


<?php $theme->display('footer'); ?>
