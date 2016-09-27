<!DOCTYPE HTML>
<html>
	<?php
		$js_root = "../../";
		if (is_file("../madoka.local.json")){
			$config = file_get_contents("../madoka.local.json");
			$config = json_decode($config, true);
			if (array_key_exists("webroot", $config))
				$js_root = $config["webroot"];
		}
	?>
	<script src="./freid/scripts/freid.js" type="text/javascript" charset="utf-8"></script>
	<script src="./freid/scripts/jung.js" type="text/javascript" charset="utf-8"></script>
	<script src="./freid/scripts/berne.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="./freid/scripts/freid.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="<?php echo $js_root; ?>webix/codebase/webix.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $js_root; ?>webix/codebase/core/docs_add.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $js_root; ?>webix/codebase/core/docs_remove.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $js_root; ?>spreadsheet/codebase/spreadsheet.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $js_root; ?>pivot/codebase/pivot.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $js_root; ?>filemanager/codebase/filemanager.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $js_root; ?>kanban/codebase/kanban.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $js_root; ?>kanban/codebase/googlemap.js" type="text/javascript" charset="utf-8"></script>
	<script src="../index.php?action=freid" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript">
		webix.ready(function(){
			if (webix.Touch &&  webix.Touch.disable)
				webix.Touch.disable();

			Freid.root = "ui";
			Freid.hideView = {
				"webix.ui.baselayout" : true,
				"webix.ui.baseview"	: true,
				"webix.ui.baseview"	: true,
				"webix.ui.proto"		: true,
				"webix.ui.vscroll"	: true,
				"webix.ui.view"		: true,
				"webix.ui.resizearea" : true,
				"webix.ui.checksuggest" : true
			};
			Freid.analize();
		});
	</script>
	<body>
	<div style="border-bottom: 1px dashed #909090; margin-bottom: 10px; padding-bottom: 10px;">
		<input type='button' value='Generate Docs' onclick="Freid.generate('touch')">
		<input type='button' value='Log Patients' onclick="Berne.checkProblems();">
	</div>
	<div id="berne_report"></div>
	<div id="stat" style='float:right'></div>	
	</body>
</html> 