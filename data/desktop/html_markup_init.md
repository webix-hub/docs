Initialization from HTML Markup
=============================

{{note 
See also **general rules of markup initialization** that  are described in [separate article](desktop/markup_init.md).
}}

Initialization from HTML is a nice feature for those who work in HTML mainly. By the way, a similar technology is used within JQuery Mobile framework. 

##Basic principles

###1. DIV blocks as components

The page is divided into **div** blocks that house [Webix components](desktop/components.md) defined by their **data-view** attribute:

- *data-view="component_name"* to initialize most of Webix components;
- *data-view="cols" or data-view="rows"* to initialize Webix [layout](desktop/layout.md);

~~~html
<div data-view="rows"> <!--layout-->
	<div data-view="template" data-height="35"> My header</div> <!--template-->
</div>    
~~~

###2. "Data" attributes as component properties

DIV "data" attributes set other properties of the component: 

~~~html
<div data-view="text" data-name="email" data-label="Email"></div>
~~~

In other words, you use the same properties as in JSON configuration, but prefix them with "data-".

Pay attention that while parsing from HTML, camelCase attributes must be replaced with dashed ones: "minWidth" => "data-min-width":

~~~html
<div data-view="list" data-width="320" data-max-width="500" data-min-width="100">
	#id#: #value#
	<ul data-view="data">
		<li id="9998">Item 1</li>
		<li id="9999" class='myitem'>Item 2</li>
    </ul>
</div>
~~~

###3. Inner HTML matters

Inner HTML of a DIV block defines visible text: 

- text of a button, template, text, textarea, etc.: 

~~~html
<div data-view="button" data-width="150">Button</div>
<div data-view="text" data-label="Phone">123456789</div>
<div data-view="template" data-height="35"> My header</div>
~~~

- text of a window head: 

~~~html
<div data-view="window" data-id="win1">
	<div data-view="head">Test header</div>
    ...
</div>    
~~~

{{sample 23_markup/01_html/09_window.html}}

- data template for data management components: 

~~~html
<div data-view="list" data-url="data/data.json" data-select="true">
	Package: #Package# (#Version#)
</div>
~~~

{{sample 23_markup/01_html/01_init.html}}

###4. Specific tags and attributes

- **data-stack** - defines array or sub items such as rows or cols for [layout](desktop/layout.md) and the like, and [headerlayout (accordion)](desktop/accordion.md) components: 

~~~html
<div data-view="layout" data-stack="cols">
	<div data-view="template">Cell 1.1</div>
	<div data-view="template">Cell 1.2</div>
</div>
~~~

{{sample 23_markup/01_html/08_layouts.html }}

~~~html
<div data-view="headerlayout" data-stack="cols">
	<div data-view="body" data-header="Section A">
		<div data-view="list" data-url="data/data.json"> #id#: #Package# </div>
	</div>
	<div data-view="body" data-header="Section B">
		<div data-view="list" data-url="data/data.json"> #id#: #Package# </div>
	</div>
</div>
~~~

{{sample 23_markup/01_html/05_accordion.html }}

By default, the sub items will be treated as **rows** for layouts and form and **cols** for toolbar.

~~~html
<div data-view="toolbar"> <!--data-stack="cols"-->
	<div data-view="button" data-width="150">Button</div>
	<div data-view="label" data-label="Press the button to run App"></div>
</div>
~~~

{{sample 23_markup/01_html/01_init.html}}

- **config** - defines configuration for a complex property that contains several settings in itself: 

~~~html
<div data-view="list">
  <config name="type" height="50" width="200"></config>
	#id#: #value#
  <ul data-view="data">
  	<li id="9998">Item 1</li>
	<li id="9999" class='myitem'>Item 2</li>
  </ul>
</div>
~~~


###5. Standard HTML 

Standard HTML is used for: 

- [form](desktop/form.md) and its elements: 

~~~html
<form>
	<input type="text" name="title" value="" placeholder="Book title" /><br/>
	<textarea name="annotation" id="annotation" rows="4">some book annotation is here</textarea><br/>
</form>
~~~

Such code can be easily turned into Webix [Htmlform](desktop/htmlform.md) component:

~~~html
<form data-view="htmlform" data-id="formView">..
~~~

{{sample 23_markup/01_html/02_form.html}} 

- inline data within data presenting components: 

~~~html
<div data-view="list" data-width="320">
	#id#: #value#
	<ul data-view="data">
		<li id="9998">Item 1</li>
		<li id="9999" class='myitem'>Item 2</li>
	</ul>
</div>
~~~

Note that inline **datasource** is marked by *data-view* attribute with *data* value. 

{{sample 23_markup/01_html/01_init.html}} 

##Datatable

[Datatable](datatable/index.md) and [treetable](desktop/treetable.md) columns are built from child DIVs of the main component container: 

~~~html
<div data-view="datatable" data-autoheight="true" data-width="400">
	<div data-view="column" data-width="150" data-id="firstname">
		First Name
	</div>
	<div data-view="column" data-width="150" data-id="lastname">
		Last Name
	</div>
    ...
</div>    
~~~

- "data" attributes are used to set column properties;
- inner HTML of column DIVs is turned into their headers. 

{{sample 23_markup/01_html/03_datatable.html}} 

##Pager

When initialized from markup Webix [pager](desktop/paging.md) should be placed into a separate DIV block while the master component should refer to it by its ID:

~~~html
<div data-view="datatable" data-pager="mypager">
...
</div>
<div data-view="pager" data-id="mypager" group="10" size="3"></div>
~~~

Note that pager properties are not prefixed with "data-".

{{sample 23_markup/01_html/11_pager.html}}

##Tabview and Accordion

Webix [tabview](desktop/tabview.md) and [accordion](desktop/accordion.md) are made of separate blocks, each of which featuring **header** with title and **body** with content inside.

In markup you need to place each block into a separate DIV with the attributes: 

- **data-view** with **"body"** value;
- **data-header** with header text.

####Tabview

~~~html
<div data-view="tabview">
	<div data-view="body" data-header="List 1">
		<div data-view="list" data-url="data/data.json"> #id#: #Package# </div>
	</div>
	<div data-view="body" data-header="Text 2">
		<div data-view="template">Just some text here</div>
	</div>
</div>    
~~~

{{sample 23_markup/01_html/06_tabbar.html}}

####Accordion

~~~html
<div data-view="accordion">
	<div data-view="body" data-header="Section A">
		<div data-view="list" data-width="320" data-url="data/data.json"> #id#: #Package# </div>
	</div>
	<div data-view="body" data-header="Section B">
		<div data-view="list" data-width="320" data-url="data/data.json"> #id#: #Package# </div>
	</div>
</div>
~~~

{{sample 23_markup/01_html/05_accordion.html}}

##Chart

[Chart](desktop/chart.md) axes are defined by **config** tags in HTML markup: 

~~~html
<div data-view="chart" data-type="stackedArea" data-color="#58dccd" data-value="#sales#" 
  data-alpha="0.7" data-url="data/chart.json">
	<config name="xAxis" template="#year#"></config>
	<config name="yAxis"></config>   
</div>    
~~~

Axis names are defined by **name** attributes while other attributes are not prefixed by "data-" and are the same as in JSON configuration. 

####chart Series

If **series** are needed for the chart they are initialized via a separate **config** object: 

~~~html
<div data-view="chart" data-type="stackedArea" alpha="0.7" eventRadius="5" data-url="data/chart.json">
	<config name="xAxis" template="#year#"></config>
	<config name="yAxis"></config>
	<config stack='series'>
		<config  value="#sales#" color="#58dccd">
			<config name="tooltip" template="#bottom#"></config>
		</config>
		<config  value="#sales2#" color="#dc58cd">
			<config name="tooltip" template="#bottom#"></config>
		</config>
		...
	</config>
</div>
~~~

The attributes of series are not prefixed by "data-" and are the same as in JSON configuration. 

{{sample 23_markup/01_html/10_chart.html}}

##Windows and Menus

####Window peculiarities

When initializing Webix [window](desktop/window.md) from markup, you need to remember the following things:

- window should be set on the same level as other layout components;
- window is comprised of two parts - **head** and **body** that should be defined via separate DIV blocks. 

~~~html
<div data-view="rows">
	<!--layout config>-->
</div>
...
<div data-view="window" data-id="win1">
	<div data-view="head">Test header</div>
	<div data-view="body">
		<div data-view="template">Cell 1.2</div>
	</div>
</div>
~~~

- in addition, window api/link/ui.window_show.md method should be called as it won't appear by itself:

~~~js
webix.markup.init();
$$("win1").show();
~~~

{{sample 23_markup/01_html/09_window.html}}

####Menu and submenu peculiarities

If [menu](desktop/menu.md) is initialized from markup it's vital to remember that its submenus should be as well initialized the same way as windows: 

~~~html
<div data-view="submenu" data-id="submenu1">
    <ul data-view="data">
       <li data-id="1.1" data-submenu="submenu3">Item 1.1</li>
       <li data-id="1.2">Item 1.2</li>
    </ul>
</div>
~~~

And then they should be included into the main menu (or other submenus) with the help of their **submenu** property (submenu ID should be specified):

~~~html
<div data-view="menu" data-height="50">
	<ul data-view="data">
    	<div data-view="menu">
    		<ul data-view="data">
    			<li data-id="1" data-submenu="submenu1">Item 1</li>
    			<li data-id="2" data-submenu="submenu2">Item 2</li>
    		</ul>
    	</div>
    	<li data-id="3">Item 3</li>
    </ul>
</div>
~~~

Any level of nesting is possible. 

{{sample 23_markup/01_html/12_menu.html}}