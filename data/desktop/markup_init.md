Initialization from Markup
============

Library components are JSON objects in essence. Each of them is constructed with a set of **key:value** pairs that describe its properties. 

~~~js
webix.ui({
	view:"toolbar", 
    width: 300,
    elements:[
    	{view:"button", value:"OK", inputWidth:100},
    	{view:"button", value:"No", inputWidth:100}
    	]
});
~~~

The toolbar from above is made of three members (*view, width, elements*), the last one containing an array of two members (*two buttons*). 

At the same time, components can be initialized not only by literal notation, but also within HTML and XML markup. 

**Bonuses of markup initialization**

- you needn't define [template](desktop/html_templates.md) to enable data rendering).Still, you should use property names in hash signs;
- datasource can be defined in frames of unordered lists or HTML tables. 

**License restrictions**

- **XML** initialization is available in **Webix Pro** edition only;
- **HTML** initialization can be used with **any** Webix edition. 

##Initializing from Markup

XML and HTML markup initialization can totally replace JSON configuration for people who are more used to working with markup languages. It has simpler syntax so you are less likely to get lost among 
brackets and commas. Such functionality can be useful when you code the page with the help of server scripts since it's easier to get XML (HTML) data  from them than JSON. 

In general, the markup can be taken from:

- any **node** of this document including **body**;
- **separate file** with HTML or XML markup;
- response of **server script**;

{{note
HTML and XML markup get **peculiar tags** to serve the needs of Webix object initializing (described later). 
}}

Webix [HTMLform](desktop/htmlform.md) component is more likely to [initialized from HTML and XML](desktop/htmlform.md#markup), yet any component is subject to this technique. 

##Working with Webix Markup Class

To init Webix components from HTML or XML, you should work with **webix.markup** class that offers a pattern for markup processing. 

The main methods here are **init**(node, target) and **parse**(node) where arguments mean: 

- **node** - which data to use for initialization. By default data is taken from **document.body**.
- **target** - where should the newly created component be placed. By default it's placed into the HTML node defines by **node** (document.body, if it's not defined as well).

Initializing and parsing serve different purposes: 

- The **init()** method inits Webix object in HTML layout.
- The **parse()** method inits the component in Webix layout. 

The simplest initialization script looks as follows: 

~~~js
// data is taken from document body and component is inited there
webix.ready(function(){ 
	webix.markup.init(); 
});
~~~

**External-file** or **serverside data** is loaded to the page by **Ajax**. Here you should specify path to the file(script) and set initialization pattern in a callback. 

In the code below, data comes from external XML file, the **node** is incoming data while the **target** is body of the current document. 


~~~js
webix.ajax("data/config.xml?!", function(text, data){
	var config = webix.markup.parse(text, "xml");
	webix.ui(config);
});
~~~

{{sample 23_markup/02_xhtml/04_by_ajax.html }}


You can use markup initialization by **parsing markup** to the neccessary part of the Webix script thus creating a Webix object.

~~~js
webix.ui({
	rows:[ {}, {id:"placeholder", template:"html->dummy" }
    ]
});

function load_grid() {
	webix.ajax("data/gridconfig.xml", function(text, data){
		webix.ui(
			webix.markup.parse(text, "xml"), //source 
			$$("placeholder")) //target 
	})
};
~~~

Target is not defined within the **parse()** function yet it is specified in the **webix.ui()** constructor as *$$('placeholder')*. 


##Markup Peculiarities 

The rules of HTML and XML initialization differ, so you should consult dedicated articles to learn them. 

- [Initialization from HTML](desktop/html_markup_init.md);
- [Initialization from XML](desktop/xml_markup_init.md) - available **Webix Pro** edition only. 


##Related Articles

- [HTMLform](desktop/htmlform.md)

@index:
- desktop/html_markup_init.md
- desktop/xml_markup_init.md

@complexity:3
