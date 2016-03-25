Initialization from XML Markup
=======================

{{note
See also general rules of markup initialization that are described in a [separate article](desktop/markup_init.md).
}}



Initialization from XML is simpler in terms of syntax while at the same time tags feature greater semantic value than HTML, yet XML is not that popular due to its "strict" nature. 

To intergrate this functionality with IE8, set the initial page tag as **< html xmlns:x >** instead of < html >.  

Below the peculiarities of initialization for different Webix components are listed. 

##Layout with different components

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

##Accordion

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

##Datatable

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

##Form {#XMLform}

If placed in layout rows or cols, form can be initialized with standard HTML tags. **Standalone form** not placed in layout requires tags with **x:** prefix.

~~~xml
<x:form id="log_form" width="300">
	<x:text label="Email"></x:text>
	<x:button value="Login" type="form"></x:button>
</x:form>
~~~

{{sample 23_markup/02_xhtml/07_fieldset.html}}

HTMLform has its own [initializing patterns](desktop/htmlform.md) including via webix markup class.

##Tabview

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

##Altering Namespace

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

@edition:pro