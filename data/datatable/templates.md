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

{{sample 15_datatable/20_templates/01_string.html }}

Templates can be used for presenting almost any content in DataTable (anything that can be done through HTML 
can be placed in DataTable cell) such as: images, links, numbers, string, dates.

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

{{sample 15_datatable/20_templates/06_dates_string.html }}


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

You can insert any custom html to the row elements, which gives an easy way for adding buttons or similar controls to DataTable rows

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
{{sample 15_datatable/14_events/02_click_css.html }}

## Built-in templates

Through the template you can define common elements for the cells belonging to one and the same column, namely:

- checkboxes;
- radio buttons;
- "edit" cons;
- "trash" icons;
- [sparklines](datatable/sparklines.md).

{{note
You can define additional common elements within the [component type](desktop/type.md#definingcommonelements). 
}}

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
{{sample
15_datatable/04_editing/07_checkbox.html
}}

Learn more about checkboxes and radios in a separate article - datatable/controls.md 

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
- datatable/sparklines.md

@seolinktop: [best ui framework](https://webix.com)
@seolink: [datatable](https://webix.com/widget/datatable/)