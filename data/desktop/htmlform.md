HTMLform
================

###Overview

Though the webix library has its own [form](desktop/form.md) component, there exists a possibility to create a separate form made with the help of
pure HTML.  This is done within the special **htmlform** component. 

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/htmlform.png"/>

###Initialization

There're three ways of embedding a form into the component: 

####1 . Through content property:

Content property may either point the **ID** of **DIV container** where the form lies or to **document.body** if it is included directly into your web page body. 

{{snippet
HTMLform, content
}}
~~~js
<div id="areaA">
		<input type="text" name="title" value="" placeholder="Book title" /><br/>
		<input type="text" name="author" value="" placeholder="Author" /><br/>
</div>
<script type="text/javascript">
webix.ui({
	view:"htmlform",
	content: "areaA" //coincides with ID of a *div* container 
    //or
    content: document.body // in case the form isn't included into any DIV
    ...
});
</script>
~~~

{{sample 11_htmlform/01_htmlform_body.html }}

####2 . With the help of template property:

- Template value may inlude the **ID** of a **DIV container** where form fields lie

{{snippet
HTMLform, template
}}
~~~js
<div id="tpl">
			<input type="text" name="title" value="" placeholder="Book title" /><br/>
			<input type="text" name="author" value="" placeholder="Author" /><br/>
</div>
<script type="text/javascript">
webix.ui({
	view:"htmlform",
	template: "html->tpl" //coincides with ID of a *div* container
        ...
});
</script>
~~~

{{sample 11_htmlform/02_htmlform_layout.html }}
 
 
- or it points to **external html-file** with a form:

{{snippet
HTMLform, http
}}
~~~js
webix.ui({
	id: "htmlform1",
	view:"htmlform",
	template: "http->data/form.html",
	...
});
~~~

{{sample 11_htmlform/04_htmlform_http.html }}

####3 . Initialization from HTML or XML markup {#markup}

In this case, standard rules of markup initialization are used and the **markup** slightly **alters**: 

- **HTML**: **form** tag receives new attributes;
	- **data-view** to indicate the component (here it is an *htmlform*);
    - standard htmlform properties with 'data' prefix (*data-id, data-height*, etc.);
- **XML**: There're special tags with 'x:' prefix: 
	- **< x:ui >** to indicate a webix UI constructor 
    - **< x:htmlform** > to indicate a component you want to init.

Form elements are created accirding to standard HTML.

{{snippet
HTMLform, HTML markup
}}
~~~html
<form data-view="htmlform" data-id="htmlform1" data-height="350">
	<input type="text" name="title" value="" placeholder="Book title" /><br/>
	...
</form>
~~~

{{snippet
HTMLform, XML markup
}}
~~~html
<html xmlns:x>
	<x:ui>
		<x:htmlform id="htmlform1" height="350">
			<input type="text" name="title" value="" placeholder="Book title" /><br/>
               ...
        </x:htmlform>
	</x:ui>
</html>
~~~

Script part of the document includes the initing code:

~~~js
webix.ready(function(){
	webix.markup.init(document);
});
~~~

Regardless of the initialization pattern, all the commom HTMLform functions work fine: 

{{sample 23_init_from_html/03_html_form.html }}

####4. Initialization from an external file loaded by [Ajax](helpers/ajax_operations.md). 

~~~js
webix.ui({
	view:"htmlform",
    src:"myform.php",
    ...
});
~~~

###Working with HTMLform

- [Data Validation](desktop/data_validation.md)
- [Form and Htmlform Treatment](desktop/form_tasks.md)
- [File Uploading with Form](desktop/uploader_integration.md)
- [Data Binding](desktop/data_binding.md)

###API Reference

[Methods, properties and events](api__refs__ui.htmlform.html)

###Related Articles

- [UI-related Form](desktop/form.md)
- [Initializing from HTML and XML](desktop/html_init.md)