<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">URLs</h1>
	<p><strong>Note:</strong> The esc_url and esc_url_raw functions do not URL encode query string values.</p>
	<ul>
		<li><code>esc_url($text)</code> : Checks approved protocol and structure, escapes HTML entities, and returns.</li>
		<li><code>esc_url_raw($text)</code> : Checks approved protocol and structure, but does not escape HTML entities, and returns.</li>
		<li><code>urlencode($string)</strong> : Converts URL-reserved characters to URL entities for inclusion in query strings.</li>
		<li><code>urlencode_deep($array)</code> : urlencode iteratively and recursively through an array.</li>
	</ul>
</div>