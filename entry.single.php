<?php

/**
 * Rino theme home page
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

		<div class="entry-head">
		<h2 class="entry-title"><a href="<?php echo $post->permalink; ?>"><?php echo $post->title_out; ?></a></h2>
		<small class="entry-meta">
			<span class="chronodata"><abbr class="published"><?php echo $post->pubdate_out; ?></abbr></span><?php if ( $show_author ) { ?> by <?php echo $post->author->displayname; ?> <?php } ?>
			<span class="entry-tags"><?php echo $post->tags_out; ?></span>
		</small>
		</div>

		<div class="entry-content">

		<?php echo $post->content_out; ?>

		</div>

		<?php $theme->display( 'comments' ); ?>

	  </div>

	</div>

<?php $theme->display('footer'); ?>
