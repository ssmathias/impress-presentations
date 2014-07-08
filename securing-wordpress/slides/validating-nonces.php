<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">Validating Nonces</h1>
	<ul>
		<li><code>check_admin_referer($action, [$name])</code> Validates a nonce and that it came from a local admin page.</li>
		<li><code>check_ajax_referer($action, [$name], [$die])</code> Use this to validate AJAX nonces.</li>
		<li><code>wp_verify_nonce($nonce_val, $action)</code> Use to validate a nonce in any other circumstance.</li>
	</ul>
</div>