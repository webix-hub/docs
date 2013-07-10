Type Implementation
==================

Type property allows for treating each of the component's items separately - specify its dimensions, set CSS class and define [data template](desktop/html_templates.md).

Type is an object that is constructed of parameters you'd like to apply to each item of the component. 

In the sample below it is shown how you size the dataview itself and how the dimensions of dataview cells are sized. 

~~~js
webix.ui({
	view: dataview,
    width: 550,
    data: ... ,
    type:{ 
		template: "<div class='rank'>#rank#.</div><div class='title'>#title#</div>",
		width: 261,
		height: 90,
		css: "movie"
	}
})
~~~
{{sample 06_dataview/02_templates/01_jshtml.html }}

At the same time you can define the type separately by using **webix.type constructor** and then apply it to the necessary component: 

~~~js
webix.type(webix.ui.dataview,{
	name:"typeA",
	template: "<div class=''>#rank#.</div>
    <div class='title'>#title#</div>
    <div class='year'>#year# year</div>",
	width: 261,
	height: 90,
	css: "movie"
});

webix.ui({       
	view: "dataview",
	type: "typeA", //name of the new object created in the first step
	...
})
~~~

{{sample 06_dataview/02_templates/05_named.html }}

@complexity:2