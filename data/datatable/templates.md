Cells Templates
===========================================

String templates
-----------------

To customize data content and specify which data will be presented in DataTable and how, you can use templates. 
Data templates are set in the related column by attribute **template**.

{{note
By value wrapped in the hash signs (e.g. "#title#") you refer to the definite property of a data item. 
}}


You can read about templates syntax in article [Templates.Syntax](datatable/templates_syntax.md).


{{snippet
Specifying data template for a specific column
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"title", header:"Film title",    template:"<strong>#title#</strong>",
		{ id:"year",  header:"Release year" , template:"at #year#",}
	]
});    
~~~

{{editor http://webix.com/snippet/fb017270	Using String Templates}}

Templates can be used for presenting almost any content in DataTable ( anything which can be done through HTML - can be placed in DataTable's cell) such as: images, links, numbers, string, dates.

<table class="list">
	<caption class="caption">
		<strong>Table 1 </strong>
		Templates for different types of content
	</caption>
	<thead>
	<tr>
		<th>
			Content
		</th>
		<th>
			Example of template
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>strings</td>
		<td>
~~~html
template:"<strong>#title#</strong>"
~~~
		</td>
	</tr>
	<tr>
		<td>images</td>
		<td> 
~~~html
template:"<img src='.imgs/#id#.jpg'/>"
~~~
		</td>
	</tr>
	<tr>
		<td>links</td>
		<td>
~~~html
template:"<a href='http://google.com?q=#title#'>#title#</a>"
~~~
		</td>
	</tr>
	</tbody>
</table>


Complex templates
-----------------

You can set custom template for a column by presenting the **template** attribute as a function
(function accepts raw object and returns the result string).

~~~js
grid = new webix.ui({
    view:"datatable",
    columns:[
      {id:"title", header:"Film title"},
      {id:"votes", header:"Votes", template:function(obj){ return obj.votes/1.2547}};
    ],
    ...
})
~~~

{{editor http://webix.com/snippet/7148848d	Converting Strings to Dates }}


For more on styling, read article datatable/styling.md

### Combining templates and formats

If you want to use both *template* and *format* for the same column, you should include the formatting method into a template function: 

~~~js
grid = new webix.ui({
    view:"datatable",
    columns:[
      {id:"votes", header:"Votes", template:function(obj, common){
           return "no more than "+ webix.i18n.numberFormat(obj.votes);
      }}
    ],
    ...
})
~~~

### Adding buttons in templates

You can insert any custom html to the row elements, which gives an easy way for adding buttons or similar controls to Datatable's rows

~~~js
grid = new webix.ui({
    view:"datatable",
    columns:[
      {id:"votes", header:"Votes",  template:"#votes# 
      		<input type='button' value='Show details' class='details_button'>'"}
    ],
    onClick:{
    	details_button:function(id, ev){
            //will be called on button click
        	some_custom_method(id.row, id.column);
        }
    }
    ...
})
~~~
{{editor http://webix.com/snippet/1a2c45cf	DataTable: Custom Handler }}

## Built-in templates

Through the template you can define common elements for the cells belonging to one and the same column, namely:

- checkboxes;
- radio buttons;
- "edit" icons;
- "trash" icons.

{{note
You can define additional common elements within the [component type](desktop/type.md#definingcommonelements). 
}}

###Checkboxes and Radio Buttons

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
{{editor
http://webix.com/snippet/b3456826	Checkbox and Radio in a DataTable
}}

Learn more about checkboxes and radios in a separate article - datatable/controls.md 

###"Edit" and "Trash" icons

<img src="datatable/edit_trash_icons_in_grid.png">

~~~js
webix.ui({
    view:"datatable",
    ...
    columns:[
        { id:"edit", header:"", template:"{common.editIcon()}"},
        { id:"trash", header:"", template:"{common.trashIcon()}"}
    ]
});
~~~

{{editor http://webix.com/snippet/eb42427a	"Edit" and "Trash" Icons in a DataTable}}

###Specifying built-in templates in a function

You can set built-in template via a function: 

~~~js
webix.ui({
    view:"datatable",
    ...
    columns:[
    	//for radio and checkbox
        { id:"ra1", template:function(obj, common, value, config){
             return common.radio(obj, common, value, config);
		}}, 
        //for editIcon and trashIcon
        { id:"edit", header:"", template:function(obj, common){
        	return common.editIcon(obj, common);
        }}
    ]
});
~~~

As you can see, **common.checkbox()** and **common.radio()** functions take four parameters: 

- **item object** with its properties from the dataset;
- **common** object with four methods: 
	- common.checkbox(*obj, common, value, config*);
    - common.radio(*obj, common, value, config*);
    - common.editIcon(*obj, common*);
    - common.trashIcon(*obj, common*);
- **value** - current checkbox/radio state;
- **config** - column configuration object. 

@keyword:
	format, template, button

@index:
- datatable/templates_syntax.md