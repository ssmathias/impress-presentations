<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">KSES (KSES Strips Evil Scripts)</h1>
	<p>The KSES family of functions in WordPress is used to remove potentially dangerous or harmful tags from content, including post content.</p>
	<p><strong>Note:</strong> This can be slow, and should be used only on storage when possible.</p>
	<ul>
		<li><code>wp_kses($fragment, [$tags], [$protocols])</code> Removes unsafe tags and protocols (safe values passed in).</li>
		<li><code>wp_kses_post($fragment)</code> wp_kses in a post or page context</li>
		<li><code>wp_kses_data($fragment)</code> wp_kses for current context</li>
		<li><code>wp_kses_allowed_html($context)</code> Context-approved tags.</li>
		<li><code>wp_rel_nofollow($fragment)</code> Adds rel="nofollow" to links.</li>
	</ul>
</div>