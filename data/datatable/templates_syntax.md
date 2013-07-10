Templates.Syntax
=================
There are several ways to define a template:


HTML text
-------------------------------------
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"col1", header:"Column1", template:"#Package# : #Version#<br/>#Maintainer#"},
	]
}); 
~~~

In the code snippet above, values within sharps are replaced with the related properties from data objects that can look like shown below:

~~~js
//for next data
[
 {Package:"Webix Connector", Version:1.1, Maintainer:"Server side Team"},
 {Package:"Webix Scheduler", Version:3.5, Maintainer:"Scheduler Team"},
...
]
//Above template will generate text as
var template ="#Package# : #Version#<br/>#Maintainer#"
var text =    "Webix Connector : 1.1 <br/>#Maintainer#"
~~~


Function
------------------------------------
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"col1", template:function(obj){ return obj.Package +"<br/>"+obj.Maintainer; }},
	]
}); 
~~~

HTML container
---------------------------
~~~js
<textarea id="template_container" style="display:none">
 #Package# : #Version# <br/>#Maintainer#</textarea>
// instead of 'textarea' can be any appropriate HTML tag
...
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"col1", header:"Column1", template:"html->template_container"},
	]
}); 
~~~

External file
-------------------------------------------
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"col1", header:"Column1", template:"http->../common/template.html"},
	]
}); 
~~~

@keyword:
	format, template