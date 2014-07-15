Checkbox and radio in DataTable
===================================================
DataTable allows you to add any HTML elements inside of it (using the **template** attribute of the api/ui.datatable_columns_config.md parameter).<br>
Besides, the library provides ready-to-use solutions for popular checkbox and radio controls to save your time.

The controls are specified through the same **template** attribute of the  api/ui.datatable_columns_config.md parameter.

~~~js
webix.ui({
	view:"datatable",
    ...
	columns:[
		{ id:"ch1", header:"", template:"{common.checkbox()}"},
		{ id:"ra1", header:"", template:"{common.radio()}"}
	]
});
~~~

checkbox
-------------------------------------
A standard checkbox.

<img src="datatable/checkbox_column.png"></img>

To define a checkbox column, set  the **template** attribute to *"{common.checkbox()}"*:

{{snippet
Creating a checkbox column
}}
~~~js
columns:[
		{ id:"ch1", header:"", template:"{common.checkbox()}"}
        ...
]
~~~
{{sample 15_datatable/04_editing/07_checkbox.html }}

radio
-----------------------------------------
A radio button.

<img src="datatable/radio_column.png"></img>

To define a radio column, set  the **template** attribute to *"{common.radio()}"*:

{{snippet
Creating a radio column
}}
~~~js
columns:[
		{ id:"ch1", header:"", template:"{common.radio()}"}
        ...
]
~~~

{{sample 15_datatable/04_editing/09_inline_editors.html }}

Custom checkbox
--------------------------------
Shortly,a technique of creating a custom checkbox is the following:

1. [Create a function defining a new checkbox](#checkbox_step1).
2. [Set it as the value of the **template** attribute](#checkbox_step2).
3. [Set the **checkboxRefresh** parameter to *true* to force the table getting refreshed after each change of the checkbox value](#checkbox_step3).

<i>Take a look at the image below and learn how to create the checkboxes displayed in the first column.</i>

<img src="datatable/custom_checkbox_column.png"></img>


<h3 id="checkbox_step1">1. Create a function that will define your custom checkbox.</h3>

The function will accept 3 parameters and be called for each data item:

- **obj** - (*object*) the data item object
- **common** - (*object*) the predefined checkbox template
- **value** - (*boolean*) the value of the checkbox. *true*, if the box is checked. Otherwise, *false*. Initially, the parameter is *null* and take the boolean value just when you check the checkbox.

**Please, pay your attention at a very important thing - the 'webix_table_checkbox' css class**.<br> This very class forces a standard DIV to behave as a checkbox. Therefore, defining a look of your checkbox don't forget to 
apply the 'webix_table_checkbox' css class to it.


{{snippet
Function defining a custom checkbox
}}

~~~js
function custom_checkbox(obj, common, value){
	if (value)
		return "<div class='webix_table_checkbox checked'> YES </div>";
	else
		return "<div class='webix_table_checkbox notchecked'> NO </div>";
};
~~~

~~~js
<style type="text/css">
	.checked{
		color:green;
		font-weight: bold; cursor:pointer;
	}
	.notchecked{
		color:red;
		font-weight:bold; cursor: pointer;
	}
</style>
~~~

<h3 id="checkbox_step2">2. Set the 'template' attribute of the related column to the name of the function.</h3>
Once you do this, the column will display data returned by the function defined above.

{{snippet
Setting custom template for the column
}}
~~~js
columns:[
		{ id:"ch1",		header:"",	template:custom_checkbox}
        ...
]
~~~

<h3 id="checkbox_step3"> 3. Specify the 'checkboxRefresh' parameter and set it to <i>true</i>.</h3>
The checkboxRefresh parameter answers for repainting the related data record. When it set to *true*, each time the checkbox value is changed DataTable will repaint the related record.

{{snippet
Making DataTable getting refreshed after each change of the checkbox value
}}

~~~js
webix.ui({
	view:"datatable",
    ...
	columns:[
		{ id:"ch1",		header:"",	template:custom_checkbox},
        ...
	],
	checkboxRefresh:true
});
~~~
{{sample 15_datatable/04_editing/08_custom_checkbox.html }}





Custom radio
--------------------------------
Shortly,a technique of creating a custom radio is the following:

1. [Create a function defining a new radio](#radio_step1).
2. [Set it as the value of the **template** attribute](#radio_step2).


<i>Take a look at the image below and learn how to create the radio buttons displayed in the first column.</i>

<img src="datatable/custom_radio_column.png"></img>

<h3 id="radio_step1">1. Create a function that will define your custom radio.</h3>

The function will take 3 parameters and be called for each data item:

- **obj** - (*object*) the data item object
- **common** - (*object*) the predefined radio template
- **value** - (*boolean*) the value of the radio. *true*, if the radio is checked. Otherwise, *false*. Initially, the parameter is *null* and take the boolean value just when you check the radio.

**Please, pay your attention to a very important thing - the 'webix_table_radio' css class**.<br> This very class forces a standard DIV to behave as a radio. Therefore, defining a look of your radio don't forget to 
apply the 'webix_table_radio' css class to it.


{{snippet
Function defining a custom radio
}}

~~~js
function custom_radio(obj, common, value){
	if (value)
		return "<div class='webix_table_radio checked'></div>";
	else
		return "<div class='webix_table_radio notchecked'></div>";
};
~~~

~~~js
<style type="text/css">
	.checked{
		background:green;
		width:16px; height:16px; margin-top:3px;
	}
	.notchecked{
		background:orange;
		width:16px; height:16px; margin-top:3px;
	}
</style>
~~~

<h3 id="radio_step2">2. Set the 'template' attribute of the related column to the name of the function.</h3>
As you specify the template attribute in such a way, the column will display data returned by the function defined above.

{{snippet
Setting custom template for the column
}}
~~~js
webix.ui({
	view:"datatable",
    ...
	columns:[
		{ id:"ch1",		header:"",	template:custom_radio},
        ...
	]
});
~~~

{{sample 15_datatable/04_editing/08_custom_checkbox.html }}





