{{memo A suggest control with a multiple-choice list. }}

Offers select options in the form of Webix [list](api/refs/ui.list.md) component with the ability to select multiple items at a time.

Can be used standalone or as a suggest list for [text](api/refs/ui.text.md), [combo](api/refs/ui.combo.md) and [richselect](api/refs/ui.richselect.md) controls as well as component [editors](api/refs/editors.md).

### Constructor

~~~js
webix.ui({ 
	view:"richselect", 
  	label:"Data", 
  	value:1, options:{
    	view:"multisuggest",
		data:[
      		{ id:1, value:"Alex Brown" },
      		{ id:2, value:"Dan Simons" },
      		{ id:3, value:"Gron Alanski" },
      		{ id:4, value:"Dan Alanski" }
		]
	}		
});
~~~

### Where to start

- [Overview of the Multisuggest Control](desktop/suggest.md#advancedsuggestlists)
- [Samples](http://docs.webix.com/samples/60_pro/02_form/02_multiselect.html)
