Template
=================

##Overview

Ui-related **template** looks like a non-editable area for rendering plain text or a single data record. Its contents is set with the help of the same-name *template* parameter. 

<img  style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/template.png"/>

##Initialization

~~~js
webix.ui({
	view:"template",
	template:"Default template with some text inside" //text content
});
~~~

{{sample
80_docs/default_template.html
}}

Template's content can be as well defined by the **content** property that points to an HTML container by its ID. As a result, contents from HTML is
placed inside the view: 

~~~js
<div id="myDiv">Default Template with some text inside</div>

webix.ui({
	view:"template",
	content:"myDiv"
}); 
~~~

Dymanic content setting can be implemented with the [setContent](api/ui.template_setcontent.md) method.

{{note
Template doesn't need to have **view** attribute. The following code goes as well. 
}}

~~~js
webix.ui({
	container:"layout_div",
	rows:[
		{ template:"Default Template with some text inside"},
		{...}
	]
})
~~~

{{note
The same-name property of the component, **template**, is also used by Webix data components. It allows setting pattern to display texts and render data items from multiple datasets alongside with adding styling to them. 
The [Data Templates article](desktop/html_templates.md) covers all the rules of templating.
}}

##Template Content

Template content is set with the **template** property that can be:

- **plain text**:

~~~js
{template:"Plain text"}
~~~

- **text** with **HTML** markup:

~~~js
{template:"Text with <b>HTML</b> markup"}
~~~

- **single data element** defined as **data**:

~~~js
{ template:"#title#", data:{title:"Image One", src:"imgs/image001.jpg"}} 
//shows "Image One"
~~~

Above, template property contains **data key** in **hash** signs to define which data from the data record should be displayed. 

In some cases, **template** property of template component can be a **function**:

~~~js
{
	data:{title:"Image One", src:"imgs/image001.jpg"},
	template:function(obj){ //obj is a data record object
		return '<img src="'+obj.src+'"/>'
	}
}
~~~

{{sample 26_carousel/01_init.html}}
       
##Template Types

###Default 

Default template is a white non-editable area with some text or HTML content. It's surrounded by a grey border. 

~~~js
{ view:"template", template:"Text"}
~~~

###Clean 

Clean template looks very much like default one, but features no borders. 

~~~js
{ view:"template", template:"Text", type:"clean"}
~~~

{{sample 80_docs/header_templates.html}}

###Header

Header template is used to set headers for layout rows/columns. Looks as a blue bar above the main contents. 

<img src="desktop/header_tpl.png"/>

~~~js
webix.ui({
	rows:[
		{view:"template", template:"Header Template", type:"header"},
        {view:"...", ...} 
	]
});
~~~ 

{{sample 80_docs/header_templates.html}}

{{note
Note that headers of [accordionitems](desktop/accordionitem.md) are set in a different way. 
}}    

###Section

Section template places header within the line that encircles a row/column thus making it possible to neatly divide the webpage into blocks. As there's a line in this template type, it would be nice to 
resort to [borderless](desktop/borders.md) layout design. 


<img src="desktop/section_tpl.png"/>
    
~~~js
{view:"template", template:"Header template", type:"section"}
~~~

{{sample 80_docs/header_templates.html}}


##API Reference

[Methods, properties and events](api__refs__ui.template.html)