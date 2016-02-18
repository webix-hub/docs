columnCount
=============

@short:
	the number of columns in the SpreadSheet

@type: number
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
    	{ view:"button", value:"reset 10x20", inputWidth:240, click:function(){
    		$$("ss").config.columnCount = 10;
    		$$("ss").config.rowCount = 20;
    		$$("ss").reset();
    	}}]
    }
});


@template:	api_config
@descr:


