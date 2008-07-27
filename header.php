<?php

/**
 * Rino theme header
 */

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta name="generator" content="Habari">
	<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} :: "; } ?><?php Options::out( 'title' ) ?></title>
	<meta http-equiv="Content-Type" content="text/html">
	<meta name="generator" content="Habari">
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php $theme->feed_alternate(); ?>">
	<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url( 'habari' ); ?>/3rdparty/blueprint/screen.css">
	<!--[if lte IE 6]>
	<link rel="stylesheet"  type="text/css" media="screen" href="<?php Site::out_url( 'habari' ); ?>/3rdparty/blueprint/ie.css">
	<![endif]-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url( 'theme' ); ?>/style.css">
	<?php $theme->header(); ?>
  </head>
  <body>
  	<div id="menu">
	  	<ul>
	  		<li><a href="http://wiki.habariproject.org/">Documentation</a></li>
	  		<li><a href="http://wiki.habariproject.org/en/FAQ">FAQ</a></li>
			<li><a href="http://wiki.habariproject.org/en/Getting_Involved">Community</a></li>
	  		<li><a href="http://habariproject.org/en/download">Download</a></li>
	  		<!--<li id="searchbox"><input type="text"><button>Search</button></li>-->
		</ul>
	</div>

	<div class="container">
