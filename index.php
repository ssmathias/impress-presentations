<?php

$show = (!empty($_REQUEST['show'])) ? explode('/', $_REQUEST['show']) : '';

$short_show = false;
if (!empty($show[1]) && preg_match('~^short(/|\?)?~', $show[1])) {
	$short_show = true;
}

if (!empty($show[0])) {
	$show = $show[0];
}
else {
	$show = '';
}

if (empty($show)) :
	$ignore_dirs = array(
		'css',
		'js',
	);

	$show_dirs = glob(dirname(__FILE__) . DIRECTORY_SEPARATOR . '*', GLOB_ONLYDIR);
	$show_dirs = array_map('basename', $show_dirs);

	$show_dirs = array_diff($show_dirs, $ignore_dirs);
?>
<html>
<head>
<title>Presentation List</title>
</head>
<body>
	<h1>Presentation List</h1>
	<ul>
<?php foreach ($show_dirs as $dir) : ?>
		<li><a href="/<?php echo htmlentities($dir); ?>/"><?php echo htmlentities(ucwords(implode(' ', explode('-', $dir)))); ?></a>
<?php endforeach; ?>
	</ul>
</body>
<?php
	return;
endif;

$load_file = dirname(__FILE__) . DIRECTORY_SEPARATOR . $show . DIRECTORY_SEPARATOR . 'load.php';

if (!empty($show) && !file_exists($load_file)) :
	header('HTTP/1.0 404 Not Found');
?><html>
<head>
<title>Presentation Not Found</title>
</head>
<body>
	<h2>Presentation Not Found</h2>
	<p>A presentation by that name does not currently exist.</p>
</body>
<?php
	return;
endif;

include_once($load_file);

?><html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/base.css"></script>
	<?php ss_header_tags(); ?>
</head>
<body class="impress-not-supported">
	<div class="fallback-message">
		<p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
		<p>For the best experience, please use the latest <b>Chrome</b>, <b>Safari</b>, or <b>Firefox</b> browser.</p>
	</div>
	<div id="impress">
	<?php
	$slides = get_slides($short_show);
	$slide_dimensions = get_slide_dimensions();
	$position = 0;
	foreach ($slides as $slide) :
	?>
	<div id="<?php echo htmlentities($slide); ?>" class="step slide" data-x="<?php echo $position; ?>" data-y="0">
		<?php echo show_slide($slide); ?>
	</div>
	<?php
		$position += $slide_dimensions['x'] * 1.2;
	endforeach;
	?>
	</div>
	<script type="text/javascript" src="/js/impress.js"></script>
	<script>impress().init()</script>
</body>
</html>
