<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">Creating Nonces</h1>
	<p>Time-sensitive, limited-use string to validate that a form has been submitted from the desired location.</p>
	<ul>
		<li><code>wp_create_nonce($action)</code> Generates a nonce for the specified action, programmatic use.</li>
		<li><code>wp_nonce_url($url, $action, [$name])</code> Adds a nonce for $action to $url.</li>
		<li><code>wp_nonce_field($action, [$name], [$referer], [$echo])</code> Creates a nonce form field, optional referer field, and returns or echoes.</li>
	</ul>
</div>