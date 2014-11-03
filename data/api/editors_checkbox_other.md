checkbox
=============

@short: a checkbox editor for a two-value choice

@type:string

@example:
        
 //for a datatable column
{ id:"ch1", editor:"checkbox", template:"{common.checkbox()}", width:40}

@template:	api_config
@related:
	desktop/editing.md
@relatedsample:
	80_docs/editors.html
    15_datatable/04_editing/07_checkbox.html

@descr:

**Customizing Value Display**

Checkbox editor can be customized to show predefined values for each of checkbox states.

The component shows On/Off values, but as you click on the item a checkbox appears and you can check/uncheck it. When editing is finished, the cell value turns into "On"/"Off" text depending on the checkbox state.

~~~js
bool_set = {  
	"true":"On",
	"false":"Off",
	"undefined":"Off" //initial checkbox state
};
..
{header:"", options:bool_set, template:"{common.checkbox()}", 
		editor:"checkbox", width:40}
~~~

Option for a checkbox can be set in a variable beforehand (as shown above) or inside the component constructor. 

**Customizing Return Values**

You can redefine the states of the checkbox and set other values for default *true* and *false*

~~~js
{ id:"ch1", checkValue:'on', uncheckValue:'off', template:"{common.checkbox()}"}
~~~