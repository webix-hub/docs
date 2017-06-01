HTMLForm
================

##API Reference

- [Methods, properties and events](api/refs/ui.htmlform.md)
- [Samples](http://docs.webix.com/samples/11_htmlform/index.html)

##Overview

Though the Webix library has its own [Form](desktop/form.md) component, there exists a possibility to create a separate form made with the help of
pure HTML. This is done within the special **HTMLForm** component. 

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/htmlform.png"/>


##Initialization

There are three ways of embedding a form into the component: 

####1 . Through the "content" property:

Content property may either point the **ID** of **DIV container** where the form lies or to **document.body** if it is included directly into your web page body. 

{{snippet
HTMLForm, content
}}
~~~html
<div id="areaA">
	<input type="text" name="title" value="" placeholder="Book title" /><br/>
	<input type="text" name="author" value="" placeholder="Author" /><br/>
</div>
<script type="text/javascript">
webix.ui({
	view:"htmlform",
    //coincides with id of a *div* container 
	content: "areaA",
    //or, in case the form isn't included into any div
    content: document.body
});
</script>
~~~

{{sample 11_htmlform/01_htmlform_body.html }}

####2 . With the help of the "template" property:

- Template value may include the **ID** of a **DIV container** where form fields lie

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
	template: "html->tpl", //coincides with id of a *div* container
    ...
});
</script>
~~~

{{sample 11_htmlform/02_htmlform_layout.html }}
 
 
- or it points to **external HTML file** with form markup:

{{snippet
HTMLform, HTTP
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

{{pronote
The initialization from **XML markup** is available in **Webix Pro** edition only.
}}

In this case, standard rules of markup initialization are used and the **markup** slightly **alters**: 

- **HTML**: **form** tag receives new attributes;
	- **data-view** to indicate the component (here it is an *htmlform*);
    - standard htmlform properties with 'data' prefix (*data-id, data-height*, etc.);
- **XML**: There are special tags with 'x:' prefix: 
	- **< x:ui >** to indicate a webix UI constructor 
    - **< x:htmlform** > to indicate a component you want to initialize.

Form elements are created according to standard HTML.

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

Script part of the document includes the initializing code:

~~~js
webix.ready(function(){
	webix.markup.init(document);
});
~~~

Regardless of the initialization pattern, all the common HTMLform functions work fine: 

{{sample 23_markup/01_html/02_form.html  }}

####4. Initialization from an external file loaded by [Ajax](helpers/ajax_operations.md). 

~~~js
webix.ui({
	view:"htmlform",
    src:"myform.php",
    ...
});
~~~

##Working with HTMLform

- [Data Validation](desktop/data_validation.md)
- [Form and HTMLForm Treatment](desktop/form_tasks.md)
- [File Uploading with Form](desktop/uploader_integration.md)
- [Data Binding](desktop/data_binding.md)

##Sending Form Data

Form data can be sent to server in either of the following ways: 

1 . Using Webix [Ajax helper](helpers/ajax_operations.md):

~~~js
webix.ajax().post("some.php", form.getValues()); 
//with callback
webix.ajax().post("some.php", form.getValues(), function(text, data, xhr){ });
~~~

2 . Using [webix.send](api/_send.md) method that emulates HTML form submitting: 

~~~js
webix.send("come.php", form.getValues());
~~~

3 . Indirectly, via the **bound master** component or DataCollection: 

The method is good when the form is used for editing the data of the main component (datatable, tree, list, etc.). In this case not the form data matters
but the data of the main component. Form saves the data to the master component while the master handles the server side part. 

~~~js
//data from selected list item is pushed to the form
form.bind(list);

//pushes the data back to list item
form.save()
~~~

Data binding concept is described in a [separate documentation article](desktop/data_binding.md#databinding). 



##Related Articles

- [UI-related Form](desktop/form.md)
- [Initializing from HTML and XML](desktop/markup_init.md)