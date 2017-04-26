newline
=============

@short:
	allows moving an option to a new line

@type: boolean
@example:
webix.ui({
  rows:[
     { 
    	view: "radio",
    	id: "r1", 
    	height: 200,
        value: "0",  
        label: "title 1", 
     	labelPosition: "top", options: [
      		{ id: "0", value: "Option 1"},  
      		{ id: "1", value: "Option 2"}, 
      		{ id: "2", value: "Option 3", newline:true},
      		{ id: "3", value: "Option 4", newline:true} 
    	]
     }
  ]
});


@template:	api_config
@descr:


