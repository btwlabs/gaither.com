<!DOCTYPE html>
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head> 
		<title><?php print $head_title; ?></title> 
			<?php print $head; ?>
			<meta name="author" content=<?php print $site_name ?> />
			<meta name="keywords" content="" />
			<meta name="description" content="<?php print $site_name ?> | <?php print $slogan ?>" />
			<?php print $styles ?>
			<?php print $scripts ?>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

<body <?php print artistsocial_body_attributes($is_front); ?> class="<?php print $body_classes; ?>">
<?php if (!empty($admin)) print $admin; ?> 
	<div id="header" class="container_12 clearfix">
    	<?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
		<?php if ($header): print $header; endif; ?>
    </div>	
   <div id="content" class="container_12 clearfix">
      <div id="content-inner" class="<?php if ($right) { ?>grid_8<?php } else { ?>grid_12<?php } ?>">
			<?php if ($title): ?><h1 class="title"><?php print $title; ?></h1><?php endif; ?>
            <?php if ($content_top): print $content_top; endif; ?>
            <?php if ($tabs): ?><div id="tabs"><?php print $tabs; ?></div><?php endif; ?>
            <?php if ($show_messages): print $messages; endif; ?>
            <?php if ($help): print $help; endif; ?>
            <?php if ($content): print $content; endif; ?>
            <?php if ($content_bottom): print $content_bottom; endif; ?>
      </div><!--content-inner-->
      <?php if ($right): ?><div id="sidebar" class="grid_4"><?php print $right; ?></div><?php endif; ?>
	</div><!--content-->
	<div id="footer" class="container_12 clearfix">
		<div id="ftLeft">
			<?php if ($footer): print $footer; endif; ?>
		</div>
		<div id="ftRight"> <!-- this div can have any ID or CLASS, just lately it's been put in a right floated div -->
        	<ul id="footermsg">
            	<li>All Contents &copy; <?php echo date("Y"); ?> <?php print $site_name ?> &nbsp;&nbsp;|</li>
                <li class="powered"><p>Powered by</p></li>
                <li class="mcnLogo"><a href="http://musiccitynetworks.com" target="_blank">MusicCityNetworks</a></li>
            </ul>
		</div>
	</div><!--footer-->
<?php print $closure; ?>
</body>
</html>
