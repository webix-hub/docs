Template
=================

Ui-related template looks like a non-editable text field, either filled with text or empty. Its contents is set with the help of *template* parameter. Standard template has no design of it's own. 

<img  style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/template.png"/>

##Initialization

~~~js
webix.ui({
	view:"template",
	template:"Default template with some text inside" // text on the wild field
})
~~~

{{sample
98_docs/default_template.html
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
Template doesn't need to be compulsory placed inside the view. The following code goes as well. 
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
Apart from including plain text into apps, **template** exists as property of a data-presenting component. In this case it allows setting pattern to display data items as well as adding styles to components. 
The [corresponding chapter of the manual](desktop/html_templates.md) will tell you in detail how to make templates. 
}}
       
##Template Types

###Default 

With no type specified, template is a white field with predefined text (as described earlier). 

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

{{sample 98_docs/header_templates.html}}

{{note
Note that headers of [accordionitems](desktop/accordionitem.md) are set in a different way. 
}}

[API Reference](api__refs__ui.template.html)