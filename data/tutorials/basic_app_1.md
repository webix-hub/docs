Setting Components
==================

Here we create a **simple filmset** - a list of films, where you can add elements. 

Here you will need: 

- a list with film data;
- a form to add new items to the set;
- a toolbar with 'add' and 'delete' buttons to control the app. 

{{note
First of all, you should create the app layout and then place ui components and controls there. 
}}

Follow the guide step by step: 

Step 1.Introduction
----------------------------------------
This is a clean page: 

~~~js
webix.ui({

});
~~~

Step 2. Rows
----------------------------------------

Divide the page into <b>two rows</b> with the upper one being used
for <a href="desktop/toolbar.md">toolbar</a>. Set the width to the app - 500px.
~~~js
webix.ui({
	width:500,
	rows: [
   		{ template:"Row 1" }, // 1st row
    	{ template:"Row 2" }  // 2nd row
    ]
});
~~~
<i>The layout doesn't show empty cells. That's why we temporary put templates into rows to force the layout to display the structure.</i>

<br>

<img src="tutorials/two_rows.png"/>



Step 3. Columns
------------------------------------------
Divide the lower row into **two columns** for [list](desktop/list.md) and [form](desktop/form.md) components.

~~~js
webix.ui({
    width:500,
    rows: [
    	{ template:"Row 1" },
    	{ cols:[
    		{ template:"Column 1" }, // 1st column
        	{ template:"Column 2" }  // 2nd column
    	]}
    ]
});
~~~

<img src="tutorials/two_cols.png"/>

Step 4. Toolbar
------------------------------------------

- Place a toolbar with two [buttons](desktop/controls.md#button) into the first row;
- Define text for the buttons with the help of their api/ui.button_value_config.md property;
- Set the width of the buttons to 100 pixels (with the api/link/ui.button_width_config.md property).


~~~js
webix.ui({
    width:500,
    rows: [
    	{ view:"toolbar", elements:[
			{ view:"button", value:"Add",    width:100 },
			{ view:"button", value:"Delete", width:100 }
        ]},
    	{ cols:[
    		{ template:"Column 1" }, // 1st column
        	{ template:"Column 2" }  // 2nd column
    	]}
    ]
});
~~~

<img src="tutorials/toolbar.png"/>

Step 5. Form
------------------------------------------------
Place a form into the first column. The form will contain two [text](desktop/controls.md#text) inputs stored in the api/link/ui.form_elements_config.md array.

~~~js
webix.ui({
    width:500,
    rows: [
    	{ view:"toolbar", elements:[
			{ view:"button", value:"Add",    width:100},
			{ view:"button", value:"Delete", width:100 }
        ]},
    	{ cols:[
    		{view:"form", elements:[
				{ view:"text", placeholder:"Title"},  
				{ view:"text", placeholder:"Year"}     
			]},
        	{ template:"Column 2" } // 2nd column
    	]}
    ]
});
~~~

<img src="tutorials/form.png"/> 

Step 6. List
--------------------------------------------
- Place a list into the 2nd column;
- Use the api/link/ui.list_data_config.md property to populate the list with data in JSON format (there can be [other possibilities](desktop/data_loading.md));
- Notice, how the **title** and **year** properties are reflected in the list template. 

~~~js
webix.ui({
    width:500,
    rows: [
    	{ view:"toolbar", elements:[
		{ view:"button", value:"Add",    width:100},
		{ view:"button", value:"Delete", width:100 }
        ]},
    	{ height:120, cols:[
    		{view:"form", elements:[
			{ view:"text", placeholder:"Title"},  
			{ view:"text", placeholder:"Year"}     
                ]},
        	{
				view:"list", 
     			template:"#title# - #year#", // which data to show
				select:true, // enables selection 
        		height:400,
				data: [
					{ id:1, title:"The Shawshank Redemption", year:1994},
					{ id:2, title:"The Godfather", year:1972},
					{ id:3, title:"The Godfather: Part II", year:1974},
					{ id:4, title:"The Good, the Bad and the Ugly", year:1966},
					{ id:5, title:"My Fair Lady", year:1964},
					{ id:6, title:"12 Angry Men", year:1957}
				]
			} 
    	]}
    ]
});
~~~

<img src="tutorials/list.png"/>



{{sample
80_docs/01_basic_app.html
}}


Go further: 

- [Interaction between App Elements](tutorials/basic_app_2.md)
- [Server-Side Integration](tutorials/basic_app_3.md)

@complexity:1