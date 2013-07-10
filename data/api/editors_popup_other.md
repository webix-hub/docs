popup
=============


@short: a popup text editor for long texts 
	

@type:string 

@example:
	//for a datatable column
	{ id:"title",	header:"Film title", editor:"popup", width:200},

@template:	api_config
@descr:

There exist **color** and **date** popup editors. They are defined as *editor:"color"* and *editor:date* respectively. 

Popup text editor features a **textarea** input in tis body. To configure the popup use the following code: \

~~~js
   webix.editors.$popup = {
        text:{
            view:"popup", 
            body:{view:"textarea", width:250, height:50}
        }
    };
~~~

@relatedsample:
	98_docs/editors.html
    15_datatable/04_editing/12_text_popup.html
@related:
	desktop/editing.md
	
