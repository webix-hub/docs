Template
=================

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
The same-name property of the component, **template**, is also used by Webix data components. It allows setting pattern to display data items from multiple dataset as well as adding styles to components. 
The [corresponding chapter of the manual](desktop/html_templates.md) will tell you in detail how to define templates. 
}}
       
##Template Types

###Default 

With no type specified, template is a white field with predefined value that can be:

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
{ template:"#title#", data:{title:"Image One", src:"imgs/image001.jpg"}} //shows "Image One"
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
        

###Section

Section template places header within the line that encircles a row/column thus making it possible to neatly divide the webpage into blocks. As there's a line in this template type, it would be nice to 
resort to [borderless](desktop/borders.md) layout design. 


<img src="desktop/section_tpl.png"/>
    
~~~js
{view:"template", template:"Header template", type:"section"}
~~~

{{sample 80_docs/header_templates.html}}

{{note
Note that headers of [accordionitems](desktop/accordionitem.md) are set in a different way. 
}}

[API Reference](api__refs__ui.template.html)