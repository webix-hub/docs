Initialization from HTML and XML
============

##Component nature

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

##Initializing from Markup

XML and HTML markup initialization can totally replace JSON configuration for people more used to working with markup languages. It has simpler syntax so you are less likely to get lost among 
brakets and commas. Such functionality can be useful when you code the page with the help of server scripts since it's easier to get XML (HTML) data  from them than JSON. 

In general, the markup can be taken from:

- any **node** of this document including **body**;
- **separate file** with HTML or XML markup;
- response of **server script**;

{{note
HTML and XML markup get **peculiar tags** to serve the needs of Webix object initing (described later). 
}}

Webix [HTMLform](desktop/htmlform.md) component is more likely to [initialized from HTML and XML](desktop/htmlform.md#markup), yet any component is subject to this technique. 

###Webix Markup

To init Webix components from HTML or XML, you should work with **webix.markup** class that offers a pattern for markup processing. 

The main methods here are **init**(node, target) and **parse**(node) where arguments mean: 

- **node** - which data to use for initialization. By default data is taken from **document.body**.
- **target** - where should the newly created component be placed. By default it's placed into the HTML node defines by **node** (document.body, if it's not defined as well).

Initing and parsing serve different purposes: 

- **Init()** inits Webix object in HTML layout.
- **Parse()** inits the component in Webix layout. 

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

**Bonuses of Markup Initialization**

- you needn't define [template](desktop/html_templates.md) to enable data rendering).Still, you should use property names in hash signs;
- datasource can be defined in frames of unordered lists or HTML tables. 

###HTML

Initialization from HTML is a nice feature for those who work in HTML mainly. By the way, a similar technology is used within JQuery Mobile framework. 

{{snippet
HTML Toolbar, List and Form
}}
~~~html
<body>
	<div data-view="rows">
		<div>
			My header
		</div>
		<div data-view="toolbar" data-role="elements">
			<div data-view="button" data-width="150">Button</div>
			Press the button to run App
		</div>
		<div data-view="cols">
			<div data-view="list" data-url="data/data.json" data-select="true">
				Package: #Package# (#Version#)
			</div>
			<div data-view="list" data-width="320">
				#id#: #value#
		       <ul data-role="datasource">
		             <li id="9998">Item 1</li>
		             <li>Item 2</li>
		       </ul>
			</div>		
		</div>
		<div>
			My footer
		</div>
    </div>
</body>
~~~

{{sample 23_markup/01_html/01_init.html }}

####Comments: 

- the page is divided into **div** blocks that house **layout** elements and Webix **components**;
- DIV attributes set views for components and define their properties. The pattern here is 'data-property'; 
- standard HTML for form and Webix list records. 

###XML

Initialization from XML is simpler in terms of syntax while at the same time tags feature greater semantic value than HTML, yet XML is not that popular due to its "strict" nature. 

To intergate this functionality with IE8, set the initial page tag as **< html xmlns:x >** instead of < html >.  

{{snippet
XML Toolbar, List and Form
}}
~~~xml
<x:ui>
		<x:rows>
			<x:template>My header</x:template>
			<x:toolbar>
				<x:button width="150">Button</x:button>
				<x:label>Press the button to run App</x:label>
			</x:toolbar>
			<x:cols>
				<x:list url="data/data.json" select="true">
					<x:template>Package: #Package# (#Version#)</x:template>
				</x:list>
				<x:htmlform>
					<input type="submit" />
				</x:htmlform>
				<x:list width="320">
					<x:template>#id#: #value#</x:template>
				   <x:data>
						<li id="9998">Item 1</li>
						<li>Item 2</li>
				   </x:data>
				</x:list>
			</x:cols>
			<x:template>My footer</x:template>
		</x:rows>
	</x:ui>
~~~

{{sample 23_markup/02_xhtml/01_init.html}}

####Comments: 

- semantially rich tags coincide with component names. The pattern such for tags is as follows: **< x:name >**;
- **x:** namespace for tags that form Webix component including Webix **ui** constructor(**< x:ui >**);
- component properties come as tag attributes;
- standard HTML tags perform their function in the way they do it in HTML (< li >);
- Form in layout comes in standard HTML tags while **form** not placed in layout requires specific tags as well ([see later](#XMLform)). 

####Altering Namespace

You can change the default **x:** namespace as well as completely get rid of it. You need to define the new namespace before initialization from markup:

~~~js
webix.markup.namespace = ""; //empty namespace
webix.markup.namespace = "wx"; //new namespace

webix.markup.init();
~~~

From now on, you can use initialize Webix components using standard tags, or tag with your custom namespace:

{{snippet
Empty Namespace
}}
~~~xml
<ui>
	<form id="log_form" width="300">
		<text label="Email"></text>
	</form>
</ui>
~~~

{{sample 23_markup/03_xml/02_without_namespace.html}}

{{snippet
Custom Namespace
}}
~~~xml
<wx:ui>
	<wx:form id="log_form" width="300">
		<wx:text label="Email"></wx:text>
	</wx:form>
</wx:ui>
~~~

{{sample 23_markup/03_xml/01_custom_namespace.html}}

Some UI components that multiple items defined by an array in their constructor, require the following XML:

####Accordion

Accordion features an array of **accordionitems**, each of which has a **header** and **body** where any Webix component can be placed.

**JS initialization** 

~~~js
{
	view:"accordion", rows:[
    	{header:"Section A", body:{view:"list", url:"data/data.json", template:"#id#: #Package#"} },
        {...}
    ]
    
}
~~~

**XML initialization**

Remember that anything you init from XML, should be among **< x:ui >** tags!

~~~xml
<x:accordion>
	<x:body header="Section A">
		<x:list width="320" url="data/data.json"> #id#: #Package# </x:list>
	</x:body>
</x:accordion>
~~~

Or:

~~~xml
<x:headerlayout stack="cols">
	<x:body header="Section A">
		<x:list url="data/data.json"> #id#: #Package# </x:list>
	</x:body>
</x:headerlayout>
~~~

{{sample 23_markup/02_xhtml/05_accordion.html}}
{{sample 23_markup/01_html/05_accordion.html}}

####Datatable

Datatable features an array of columns each of which has a set of congiguration options: 

**JS Initialization**

~~~js
{
	view:"datatable", 
    autowidth:true, autoheight:true,
    columns:[
    	{id:"rank", header:"", width:250, sort:"int"},
        {id:"title", header:"Film title", width:200, sort:"string"}
    ]
}
~~~

**XML Initialization**

~~~xml
<x:datatable autowidth="true" autoheight="true">
		<x:column id="rank"  header="" 			 width="50"  sort="int"></x:column>
		<x:column id="title" header="Film title" width="200" sort="string"></x:column>
</x:datatable>
~~~

{{sample 23_markup/02_xhtml/03_datatable.html}}

####Form {#XMLform}

If placed in layout rows or cols, form can be inited with standard HTML tags. **Standalone form** not placed in layout requires tags with **x:** prefix.

~~~xml
<x:form id="log_form" width="300">
	<x:text label="Email"></x:text>
	<x:button value="Login" type="form"></x:button>
</x:form>
~~~

{{sample 23_markup/02_xhtml/07_fieldset.html}}

HTMLform has its own [initing patterns](desktop/htmlform.md) including via webix markup class.

####Tabview

Tabview is a hybrid layout that features several view cells and dedicated tabs to switch between these cells. 

**JS initialization**

Tabs and cells are connected by their **IDs** that must coincide. 

~~~js
{
 view:"tabview", 
 tabs:[
 	{ value: 'List 1', id: '1'},
    { value: 'Text 2', id: '2'}],
 cells:[
 	{ view: 'list', id: '1', url:"ata/data.json", template:"#id#: #Package#"}
    { view: 'template', id: '2', template:"Just some text here"}]
}
~~~

**XML Initialization**

During XML init you needn't define IDs - just place necessary conponents within **body tags** that substitute **cells**. At the same time, **header attrbute** of this tag defined **text value** for a **tab**. 

~~~xml
<x:tabview>
	<x:body header="List 1">
		<x:list url="data/data.json"> #id#: #Package# </x:list>
	</x:body>
	<x:body header="Text 2">
		<x:template>Just some text here</x:template>
	</x:body>
</x:tabview>
~~~

{{sample 23_markup/02_xhtml/06_tabbar.html}}

Related Articles: 
- [HTMLform](desktop/htmlform.md)

@complexity:3
