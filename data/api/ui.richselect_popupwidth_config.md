popupWidth
=============


@short: width of the popup window
	

@type: number
@example:
var myPopup = webix.ui({
	view:"popup",
	id:"popup1",
	...
	body:{
		view:"list",
		...
	}
});

webix.ui({
		view:"combo", 
        ...
        popup: myPopup, // or popup:'popup1'	
        popupWidth: 300
});


@template:	api_config
@related:
	desktop/popup.md
@descr:


