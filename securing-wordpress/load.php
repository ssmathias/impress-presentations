<?php

define('SLIDES_DIRECTORY', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'slides' . DIRECTORY_SEPARATOR);

function ss_header_tags() {
?>
<title>Securing WordPress</title>
<?php
}

function get_slide_dimensions() {
	return array(
		'x' => 800,
		'y' => 600,
	);
}

function get_slides($short_version = false) {
	$slides = array(
		'title-slide',
	);
	
	if (!$short_version) {
		$slides[] = 'table-of-contents';
		$slides[] = 'escaping-title';
	}
	
	$slides = array_merge($slides, array(
		'what-is-escaping',
		'why-escape',
		'when-escape',
		'why-escape-late',
		'wordpress-escaping',
		'escaping-security',
		'esc-html',
		'esc-attr',
		'esc-js',
		'esc-url',
	));
	
	if (!$short_version) {
		$slides = array_merge($slides, array(
			'sanitizing-title',
			'what-is-sanitizing',
			'sanitizing-v-escaping',
			'wordpress-sanitizing',
			'wp-kses',
			'sanitizing-forms',
			'sanitizing-forms-2',
			'sanitizing-queries',
			'validating-title',
			'what-is-validation',
			'when-validation',
			'javascript-validation',
			'server-validation',
			'creating-nonces',
			'validating-nonces',
		));
	}
	
	$slides[] = 'questions';
	
	return $slides;
}

function show_slide($slide_name) {
	if (file_exists(SLIDES_DIRECTORY . $slide_name . '.php')) {
		include_once(SLIDES_DIRECTORY . $slide_name . '.php');
	}
}

?>
