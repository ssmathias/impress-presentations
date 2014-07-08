<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">Sanitizing Queries</h1>
	<p><strong>Note:</strong> The best way is to not write the queries yourself and use $wpdb built in queries.</p>
	<ul>
		<li><code>$wpdb->prepare($query, [$args])</code> Escape $args for $query.</li>
		<li><code>like_escape($string)</code> Escapes "%" and "_" in SQL.</li>
		<li><code>$wpdb->insert($table, $data)</code> Cleans and inserts $data into $table.</li>
		<li><code>$wpdb->update($table, $data, [$where]) Updates $data in $table based on $where.</li>
		<li><code>$wpdb->delete($table, [$where])</code> Deletes query based on array of key-value wheres.</li>
	</ul>
</div>