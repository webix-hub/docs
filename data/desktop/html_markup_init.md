Initialization from HTML Markup
=============================

{{note 
See also **general rules of markup initialization** that  are described in [separate article](desktop/markup_init.md).
}}

Initialization from HTML is a nice feature for those who work in HTML mainly. By the way, a similar technology is used within JQuery Mobile framework. 

Below the peculiarities of initialization for different Webix components are listed. 

##Layout with different components 

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

##Windows and Menu

If [window](desktop/window.md) are inited from the markup, it should be set on the same level as other layout components. 

~~~html
<div data-view="rows">
	<!--layout config>-->
</div>
<div data-view="window" data-id="win1">
	<div data-view="head">Test header</div>
	<div data-view="body">
		<div data-view="template">Cell 1.2</div>
	</div>
</div>
~~~

In addition, window api/link/ui.window_show.md function should be called as it won't appear by itself:

~~~js
webix.markup.init();
$$("win1").show({ x:100, y:100});
~~~

{{sample 23_markup/01_html/09_window.html}}

If [menu](desktop/menu.md) is initialized from markup it's vital to remember that its submenus are [popups](desktop/popup.md) in essence. So they should be as well inited like windows: 

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