<!DOCTYPE html>
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head> 
		<title><?php print $head_title; ?></title> 
			<?php print $head; ?>
			<meta name="author" content="<?php print $site_name ?>" />
			<meta name="keywords" content="" />
			<meta name="description" content="<?php print $site_name ?> | <?php print $slogan ?>" />
			<?php print $styles ?>
			<?php print $scripts ?>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <meta name="google-site-verification" content="LE05daLQC-OyKmP9v-D6uiEzaZ-2FccXgkJxSSE8yd4" />
	</head>

<body <?php print artistsocial_body_attributes($is_front); ?> class="<?php print $body_classes; ?>">
    <?php if ($messages): ?><div id="msg-wrap"><div id="messages" class="container_12 clearfix"><?php print $messages; ?></div></div><?php endif; ?>
    <div id="header-wrap">
        <div id="header" class="container_12 clearfix">
        	<a class="logo" href="<?php print $base_path ?>">Home</a>
    		<?php if ($header): print $header; endif; ?>
    		<a id="mp3" href="/mp3">Gaither Radio</a>
        </div><!--header-->
    </div><!--header-wrap-->
   <div id="content-wrap">
       <span class="bg"></span>
       <div id="content" class="container_12 clearfix">
          <?php if ($right): ?><div id="sidebar" class="grid_4 push_8"><?php print $right; ?></div><?php endif; ?>
          <div id="content-inner" class="<?php if ($right) { ?>grid_8 pull_4<?php } else { ?>grid_12<?php } ?>">
    			<?php if ($title): ?><h1 class="title"><?php print $title; ?></h1><?php endif; ?>
                <?php if ($content_top): ?><div id="content-top"><?php print $content_top; ?></div><?php endif; ?>
                <?php if ($tabs): ?><div id="tabs"><?php print $tabs; ?></div><?php endif; ?>
                <?php if ($help): print $help; endif; ?>
                <?php if ($content): print $content; endif; ?>
                <?php if ($content_bottom): ?>
                    <div id="content-btm">
                        <?php if ($is_front): ?><span class="left-corner corner"></span><span class="right-corner corner"></span><?php endif; ?>
                        <?php print $content_bottom; ?>
                    </div>
                <?php endif; ?>
          </div><!--content-inner-->
    	</div><!--content-->
	</div><!--content-wrap-->
	 <?php if ($post_content): ?>
    	<div id="post-content-wrap">
    	   <div id="post-content" class="container_12">
    	       <?php print $post_content; ?>
    	   </div><!--post-content-->
    	</div><!--post-content-wrap-->
    <?php endif; ?>
    <div id="footer-wrap">
    	<div id="footer" class="container_12 clearfix">
    	        <a class="logo" href="<?php print $base_path ?>">Home</a>
    			<?php if ($footer): print $footer; endif; ?>
                <div id="footermsg"><p>All Contents &copy; <?php echo date("Y"); ?> <?php print $site_name ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/privacy-policy">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;Powered by </p><a href="http://mcninteractive.com" class="musiccitynetworks" id="mcn" target="_blank">MCN Interactive</a>
                </div><!--footer-msg-->
    	</div><!--footer-->
	</div><!--footer-wrap-->
    <?php if ($admin): ?><div id="admin-wrapper">
        <div id="admin-bar" class="container_12 clearfix">
        	<a id="social-logo" href="/community">Gaither Social</a>
        	<?php print $admin; ?>
    	</div><!--admin-bar-->
	</div><!--admin-wrapper--><?php endif; ?>
<?php print $closure; ?>
</body>
</html>
