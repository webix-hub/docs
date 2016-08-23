Template
=================

##API Reference

- [Methods, properties and events](api/refs/ui.template.md)
- [Samples](http://docs.webix.com/samples/04_template/index.html)


##Overview

Ui-related **template** looks like a non-editable area for rendering plain text or a single data record. Its content is set with the help of the same-name *template* parameter. 

<img style="display:block; margin-left: auto; margin-right: auto;" src="desktop/template.png"/>

##Initialization

###Simple template

The **template** property of the component sets its content: 

~~~js
webix.ui({
  view: "template",
  template: "Default template with some text inside" // text content
});
~~~

{{sample
80_docs/default_template.html
}}

###External Template

Template's content can as well be taken from an HTML node pointed to by:


- the **content** property that links to a visible container: 

~~~html
<div id="myDiv">Default Template with some text inside</div>
~~~

~~~js
webix.ui({
  view: "template",
  content: "myDiv"
}); 
~~~

{{sample 80_docs/default_template.html }}

- the **template** property that points to the container ID prefixed by "html->". The container should be invisible initially:

~~~html
<div id="my_box1" style='display:none;'>Some text here</div>
~~~

~~~js
{ template: "html->my_box1", autoheight: true },
~~~

{{sample 04_template/02_autoheight.html}} 


As a result, contents from HTML is placed inside the view. 

###Loaded Template

~~~js
{ view: "template", src: "loadtext.php" }
~~~


###Notes

{{note
Specifying the `view` type as "template" is optional. The following code works as well. 
}}

~~~js
webix.ui({
  container: "layout_div",
  rows: [
    { template: "Default Template with some text inside" },
    { ... }
  ]
})
~~~

{{note
The same-name property of the component, **template**, is also used by Webix data components. It allows setting pattern to display texts and render data items from multiple datasets alongside with adding styling to them.
The [Data Templates article](desktop/html_templates.md) covers all the rules of templating.
}}

##Template Content

The template content is set with the **template** property, which can be:

- **plain text**:

~~~js
{ template: "Plain text" }
~~~

- **text** with **HTML** markup:

~~~js
 {template: "Text with <b>HTML</b> markup" }
~~~

- **an individual data item** specified by the **data** property:

~~~js
{ template: "#title#", data: { title: "Image One", src: "imgs/image001.jpg" } }
// shows "Image One"
~~~

If a template is used as an individual data item (as shown above) the data fields should be interpolated in either of the two ways:

- using a string template containing **data keys** between **hash** signs to define which fields from the data record should be displayed;
- using a template **function** that takes the data record (`obj`) as parameter:

~~~js
{
  data: {title: "Image One", src: "imgs/image001.jpg" },
  template: function (obj) {
    // obj is a data record object
    return '<img src="'+obj.src+'"/>'
  }
}
~~~

{{sample 26_carousel/01_init.html}}

{{note
The rules of data templating can be studied in detail in the [dedicated documentation article](desktop/html_templates.md).
}}

##Changing Template Text Dynamically

Dynamic content setting can be implemented with the help of:

- a [setHTML](api/ui.template_sethtml.md) method to change text or HTML content of a template;
- a [define](api/link/ui.template_define.md) method used in lots of the components to [reset property values](desktop/redefinition.md);
- a [setValues](api/ui.template_setvalues.md) method that allows to define template data;
- a template-specific [setContent](api/ui.template_setcontent.md) method that can set the contents of an existing HTML node as template value.
       
##Template Types

###Default 

The default template is a white non-editable area with some text or HTML content. It's surrounded by a gray border.

~~~js
{ view: "template", template: "Text" }
~~~

###Clean 

The `clean` template looks very much like the default one, but has no borders.

~~~js
{ view: "template", template: "Text", type: "clean"}
~~~

###Header

Header template is used to set headers for layout rows/columns. Looks like a blue bar above the main contents.

<img src="desktop/header_tpl.png"/>

~~~js
webix.ui({
  rows: [
    { view: "template", template: "Header Template", type: "header" },
    { view: "...", ... }
  ]
});
~~~ 

{{note
Note that headers of [accordionitems](desktop/accordionitem.md) are set in a different way. 
}}    

###Section

Section template places header within the line that encircles a row/column thus making it possible to neatly divide the web page into blocks. As there's a line in this template type, it would be nice to 
resort to [borderless](desktop/borders.md) layout design. 


<img src="desktop/section_tpl.png"/>
    
~~~js
{view: "template", template: "Header template", type: "section" }
~~~

{{sample 80_docs/template_types.html}}

@spellcheck:accordionitems
