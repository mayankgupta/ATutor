<?php
/************************************************************************/
/* ATutor																*/
/************************************************************************/
/* Copyright (c) 2002-2004 by Greg Gay, Joel Kronenberg & Heidi Hazelton*/
/* Adaptive Technology Resource Centre / University of Toronto			*/
/* http://atutor.ca														*/
/*																		*/
/* This program is free software. You can redistribute it and/or		*/
/* modify it under the terms of the GNU General Public License			*/
/* as published by the Free Software Foundation.						*/
/************************************************************************/
if (!defined('AT_INCLUDE_PATH')) { exit; }

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo $tmpl_lang; ?>">
<head>
	<title><?php echo $tmpl_title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $tmpl_charset; ?>" />
	<meta name="Generator" content="ATutor - Copyright 2004 by http://atutor.ca" />
	<base href="<?php echo $tmpl_base_href; ?>" />
	<link rel="stylesheet" href="basic_styles.css" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<?php echo $tmpl_rtl_css; ?>
</head>
<body <?php echo $tmpl_onload; ?> ><a href="#content" accesskey="c"><img src="images/clr.gif" height="1" width="1" border="0" alt="<?php echo _AT('goto_content'); ?>: ALT-c" /></a><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="bodyline" summary="">
<tr>
	<td style="background-image: url('<?php echo HEADER_IMAGE; ?>'); background-repeat: no-repeat; background-position: 0px 0px;" nowrap="nowrap" align="right" valign="top"><br />
			<?php if (HEADER_LOGO): ?>
				<img src="<?php echo HEADER_LOGO ?>" border="0" alt="<?php echo SITE_NAME ?>" />&nbsp;
			<?php endif; ?>
			<h4><?php echo stripslashes(SITE_NAME); ?>&nbsp;</h4><br /></td>
</tr>
<tr>
	<td class="cyan">
	<!-- page top navigation links: -->
	<table border="0" cellspacing="0" cellpadding="0" align="right" class="navmenu">
		<tr>
			<?php foreach ($tmpl_nav as $link): ?>
				<?php if ($tmpl_page == $link['page']): ?>
					<td align="right" valign="middle" class="navmenu selected"><a href="<?php echo $link['url'] ?>"><?php echo $link['name'] ?></a></td>
				<?php else: ?>
					<td align="right" valign="middle" class="navmenu"><a href="<?php echo $link['url'] ?>"><?php echo $link['name'] ?></a></td>
				<?php endif; ?>
			<?php endforeach; ?>
		</tr>
		</table></td>
</tr>
<tr>
	<td><a name="content"></a><h2><?php echo $tmpl_section; ?></h2>