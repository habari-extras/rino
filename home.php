<?php

/**
 * Rino theme home page
 */

$theme->display('header');

?>

	<div class="column span-17 colborder">
		<div class="column span-10" id="masthead">
			<h1>habari</h1>
			<h2>spread the news</h2>
		</div>

		<div class="column span-7 last" id="subhead">
			<p><b>ha&middot;bar&middot;i - </b> noun<br>
			Definition &mdash; Swahili greeting: What's the news?
		</p>
		</div>

	  <div class="column span-17 last" id="elevator">
	  	<p>Habari is next-generation blogging.<br> <a href="download">Download</a> Habari or try the <a href="http://demo.habariproject.org">demo</a> and help our <a href="http://wiki.habariproject.org/en/Getting_Involved">community</a> design the future of blogs.</p>
	  </div>

		<hr>

		<div id="media">
		<div id="noUpdate">
			<p>The video content presented here requires JavaScript to be enabled and the  latest version of the Macromedia Flash Player. If you are using a browser with JavaScript disabled please enable it now. Otherwise, please update your version of the free Flash Player by <a href="http://www.macromedia.com/go/getflashplayer">downloading here</a>. </p>
		</div>
		</div>
		<script type="text/javascript">
		// <!--
		var so = new SWFObject('<?php Site::out_url('theme')?>/player.swf','mpl','595','295','9');
		so.addParam('allowscriptaccess','always');
		so.addParam('allowfullscreen','true');
		so.addParam('flashvars','&file=http://blip.tv/file/get/Ringmaster-HabariInstall846.flv');
		so.write('media');
		// -->
		</script>

		<hr>

		<div class="column span-17" id="screencast">
		<p>We've created a few <a href="screencasts">screencasts</a> for you to get a better appreciation of the software in action. We also have <a href="screenshots">screenshots</a> if you are looking for those, instead.</p>
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
			<a href="<?php echo Site::get_url( 'habari' ) . '/page/1'; ?>">Previous Posts</a>
		</div>

		<div id="user-mailing-list">
		<h2><a href="http://groups.google.com/group/habari-users" class="discuss-link">Users Mailing List</a></h2>

		<?php if ( isset($feedlist) && is_array($feedlist) ) {
			echo $feedlist[0];
		} else { ?>
			<p>Feed not available</p>
		<?php } ?>

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
