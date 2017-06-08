templateCopy
=============


@short:
	sets the template according to which data will be copied to clipboard from each currently selected cell
	

@type: function
@example:
webix.ui({
	view:"datatable",
    data:grid_data,
    clipboard:"selection",
    select:true,
  	columns:[
    	{id:"title", fillspace:true},
        {id:"year", width:70},
        {id:"votes"}
    ],
    templateCopy:function(text, row, col){
    	return "Copied: "+text;
    }
});


@template:	api_config
@descr:
The template function takes the following parameters:

- text - the text of the cell
- row - the row id
- col - the column id

@related:
	desktop/clipboard.md
    datatable/copying.md#customcopying