<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">Sanitizing Forms (Cont'd)</h1>
	<p><strong>Note:</strong> This is for sanitization, and does not validate. It simply cleans.</p>
	<ul>
		<li><code>sanitize_text_field($text)</code> Cleans UTF-8, removes markups and extra whitespace.</li>
		<li><code>sanitize_title($title, $fallback, $context)</code> Remove HTML/PHP for context, use fallback on empty title.</li>
		<li><code>sanitize_user($username)</code> Sanitizes the given string to be a valid user login.</li>
	</ul>
</div>