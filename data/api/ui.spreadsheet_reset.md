reset
=============

@short:
	resets the SpreadSheet settings to the initial state

@params:


@example:
webix.ui({
	view:"spreadsheet", 
    id:"ss",
	data:{
		data:[
			[1,1,"Webix"],
			[1,2,"SpreadSheet"],
		]
	},
	subbar:{
		view:"toolbar", css:"webix-ssheet-toolbar", elements:[
			{ view:"button", value:"reset 5x10", width:240, click:function(){
				$$("ss").config.columnCount = 5;
				$$("ss").config.rowCount = 10;
				$$("ss").reset();
			}}
		]
	}
});
		

@template:	api_method
@descr:

