getColumnConfig
=============

@short: returns the configuration object of the specified column
	

@params:
- id	string	the column id


@returns:
- config	object	the configuration object

@example:
dtable.getColumnConfig("title");

@template:	api_method
@relatedapi:
	api/ui.datatable_columns_config.md
@related:
	datatable/columns_configuration.md

@descr:

The  method let's you to know attributes that are specified for a certain column. 

<br>
For example, if you have the following configuration:
~~~js
columns:[
	{ id:"rank",	editor:"text",		header:"", 	 			width:50},
	{ id:"title",	editor:"text",		header:"Film title",	width:200},
	{ id:"votes",	editor:"text",		header:"Votes", 		width:100}
]
~~~
<br>
calling <code>getColumnConfig("title")</code> will return the object as in:

~~~js
{
	id:"title",
	editor:"text",
    header:[{
    	text:"Film title"
    }],
    width:200
}
~~~

{{note
Note that the method works for **hidden** column as well.
}}