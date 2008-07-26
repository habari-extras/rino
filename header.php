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
		<script type="text/javascript" src="<?php Site::out_url( 'habari' ); ?>/scripts/jquery.js"></script>
		<?php Stack::out('template_header_javascript', '<script type="text/javascript" src="%s"></script>'); ?>
		<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/swfobject.js"></script>

		<style type="text/css">
		body {
			font-family: Helvetica, Arial;
		}
		</style>

  </head>
  <body>
  	<div id="menu">
	  	<ul>
	  		<li><a href="#">Documentation</a></li>
	  		<li><a href="#">Get Support</a></li>
	  		<li><a href="#">Community</a></li>
	  		<li><a href="#">News</a></li>
	  		<li><a href="#">Download</a></li>
	  		<li style="width:220px;text-align:right;padding-top:4px"><input type="text" style="width:100px"><button>Search</button></li>
			</ul>
		</div>


		<div class="container">