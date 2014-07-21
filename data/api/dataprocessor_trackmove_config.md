trackMove
=============


@short: enables data moving tracking

@type: boolean
@example:

var dp = new webix.DataProcessor({
   master:$$("mytable"),
   url:"some.php",
   trackMove:true
})


@template:	api_config
@related:
	desktop/dataprocessor.md
@descr:


When option enabled, dataprocessor will react on drag-n-drop and move commands.