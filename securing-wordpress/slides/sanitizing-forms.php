<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">Sanitizing Forms</h1>
	<p><strong>Note:</strong> This is for sanitization, and does not validate. It simply cleans.</p>
	<ul>
		<li><code>sanitize_email($text)</code> Removes invalid address characters.</li>
		<li><code>sanitize_filename($text)</code> Converts spaces to dashes</li>
		<li><code>sanitize_key($text)</code> Only alphanumeric, hyphen, and underscore.</li>
		<li><code>sanitize_meta($key, $val, $type)</code> Runs filtered sanitization based on key and type.</li>
		<li><code>sanitize_option($opt, $val)</code> Filtered sanitization by option.</li>
	</ul>
</div>