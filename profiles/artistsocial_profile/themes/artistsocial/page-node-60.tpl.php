<!DOCTYPE html>
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head> 
		<title><?php print $head_title; ?></title> 
			<?php print $head; ?>
			<meta name="author" content=<?php print $site_name ?> />
			<meta name="keywords" content="Karyn Williams, Rejoice, The Takeaway, This is My America, SESAC, music, author" />
			<meta name="description" content="<?php print $site_name ?> | <?php print $slogan ?>" />
			<?php print $styles ?>
			<?php print $scripts ?>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

<body <?php print artistsocial_body_attributes($is_front); ?>>
            <?php if ($content_top): print $content_top; endif; ?>
 
<?php print $closure; ?>
</body>
</html>
<!-- end  -->
