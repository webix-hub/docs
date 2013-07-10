@link: api/ui.window_body_config.md

@example:
<div id="details">
	<img src='images/html5.png'>
</div>
		
<script type="text/javascript" charset="utf-8">
	var menu = webix.ui({
		view:"context",
		body:{ content:"details" },
		master:"areaA"
});

@relatedsample:
	03_menu/05_context_content.html
@relatedapi:
	api/link/ui.context_head_config.md