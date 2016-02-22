subbar
=============

@short:
	adds a view between the toolbar and the datatable

@type: object
@example:
webix.ui({
    view:"spreadsheet",
    data: base_data,        
    subbar:{
        view:"toolbar", 
        elements:[
            { view:'label', template:"Custom cell editor: ", width:190},
            { view:'text', id:'text', width:250 }  
        ]
    },  
});

@template:	api_config
@descr:


