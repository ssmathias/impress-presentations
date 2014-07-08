<div class="slide-content" style="position:absolute;z-index:1;width:800px;height:600px;">
	<h1 class="slide-title" style="text-align:center;">When Should Data Be Escaped?</h1>
	<ol>
		<li>
			<strong>On output</strong> to the user. Do this <em>as late as possible</em>, never trust the variable at the time it is output.
		</li>
		<li>
			<strong>You can't trust it</strong> to be clean data. This includes data from the database, file contents, or <em>even some WordPress core functions</em>.
		</li>
		<li>
			<strong>Always escape</strong>, when in doubt.
		</li>
	</ol>
</div>