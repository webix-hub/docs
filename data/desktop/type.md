Type Implementation
==================

Type property allows treating each of the component's items separately - specify its **dimensions**, set **CSS** class, define [data template](desktop/html_templates.md)
and include elements that will be **common** for all the items.

Type is applicable to the following data components: 

- [dataview](desktop/dataview.md);
- [list](desktop/list.md);
- [grouplist](desktop/grouplist.md);
- [unitlist](desktop/unitlist.md);
- [menu](desktop/menu.md);
- [tree](datatree/index.md);
- [datatable](datatable/index.md) and [treetable](desktop/treetable.md) to define 
[common properties](desktop/type.md#definingcommonelements) for cells; 

Webix **item type** is an object that is constructed of parameters you'd like to apply to each item of the component. These parameters can be native properties of Webix components or user-defined ones.

**Native properties** are described in the component API and may differ from component to component. They may include:

- **template** - the [template of data visualization](desktop/html_templates.md) of each item;
- **templateStart** and **templateEnd** - wrappers for each data item, are not redefined, as a rule. [More Info](#redefiningdefaulttemplateelements).
- **width** and **height** - width and height of each data item;
- **css** - item styling;
- **headerHeight** ([unitlist](desktop/unitlist.md) specific) - the height of unit headers.

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
});
~~~
{{sample 06_dataview/02_templates/01_jshtml.html }}

{{note 
Note that the template set for the whole component will override the template defined within the component **type**.
}}

~~~js
// the "#rank#. #value#" template will be used
webix.ui({
	view: dataview,
    template: "#rank#. #value#",
    data: ... ,
    type:{ 
		template: "<div class='rank'>#rank#.</div><div class='title'>#title#</div>",
	}
});
~~~

At the same time you can define the type separately by using **webix.type constructor** and then apply it to the necessary component: 

~~~js
webix.type(webix.ui.dataview,{
	name:"typeA",
	template: "<div class=''>#rank#.</div><div class='title'>#title#</div>",
	width: 261,
	height: 90,
	css: "movie"
});

webix.ui({
	view: "dataview",
	type: "typeA", //name of the new object created in the first step
	...
});
~~~

{{sample 06_dataview/02_templates/05_named.html }}

##Defining Common Elements

Common elements can be included in either of the two ways: 

- **{common.property}** - allows including a constant value for all the items into the template:

~~~js
webix.ui({
	view:"list",
	template:"{common.itemIcon} #rank#. #title#",
	type:{
   		itemIcon:"<span class='webix-icon fa-film'></span>"
	} 
});    
~~~

- **{common.method()}** - allows including result of a function call into the template:

~~~js
webix.ui({
	view:"list",
	template:"#rank#. #title# {common.itemYear()}",
	type:{
		itemYear:function(obj, common){
       		if(obj.year>=2000){
       	   		return "<span class='newtime'>"+obj.year+"</span>";
       		} else if(obj.year<1970){
           		return "<span class='oldtime'>"+obj.year+"</span>";
       		} else
           		return obj.year;
    	}
	}
});    
~~~

{{sample 05_list/17_advanced_template.html}}

The **type** function takes item object as parameter, so all its properties are accessible in it. 

{{note
[Datatable](datatable/index.md) and [treetable](desktop/treetable.md) already feature some common elements out of the box. 
}}

- [Datatable built-in type templates](datatable/templates.md#builtintemplates);
- [Treetable biult-in type templates](datatree/node_templates.md#predefinedtemplates).

##Redefining default template elements

You can completely change the component's look and feel inside the **type** by altering HTML for the items. Type properties subject to altering are as follows: 

- **template** - standard item template, can be used outside the **type** configuration with the same result. Includes data properties in #hash# signs and optionally, HTML content;
- **templateStart** - container element for data item, wraps the elements defined by **template**. Opening element;
- **templateEnd** - closing element for **templateStart**.

In other words, each data item HTML content includes *templateStart - template - templateEnd*. TemplateStart and templateEnd are not normally changed, but still the possibility exists. 

This is how standard [list](desktop/list.md) can be redefined: 

<img src="desktop/list_template.png"/>

~~~js
webix.ui({
   view:"list",      
   type:{
      templateStart:"<div item_id='id' class='custom_item'>",
      template:"#rank#. #title#<br><div style='text-align:right;'>#year#</div>",
      templateEnd:"</div>"
   }
});
~~~

{{sample 05_list/17_advanced_template.html}}



@complexity:2