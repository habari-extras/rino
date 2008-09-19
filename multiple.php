<?php

/**
 * Rino theme multiple posts
 */

$theme->display('header');

?>

	<div class="column span-18 prepend-3 last">
		<div class="column span-10" id="masthead">
			<h1>habari</h1>
			<h2>spread the news</h2>
		</div>

		<div class="column span-7 last" id="subhead">
			<p><b>ha&middot;bar&middot;i - </b> noun<br>
			Definition &mdash; Swahili greeting: What's the news?
		</p>
		</div>

		<hr>

		<?php foreach ( $posts as $post ): ?>

				<div class="entry-head">
				<h2 class="entry-title"><a href="<?php echo $post->permalink; ?>"><?php echo $post->title_out; ?></a></h2>
				<small class="entry-meta">
					<span class="chronodata"><abbr class="published"><?php echo $post->pubdate_out; ?></abbr></span><?php if ( $show_author ) { ?> by <?php echo $post->author->displayname; ?> <?php } ?>
					<span class="entry-tags"><?php echo $post->tags_out; ?></span>
				</small>
				</div>

				<div class="entry-content">

				<?php echo $post->content_excerpt; ?>

				</div>

			<?php endforeach; ?>
	</div>

<?php $theme->display('footer'); ?>
