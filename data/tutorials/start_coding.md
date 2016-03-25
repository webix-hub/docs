Start Coding with Webix 
=========================

Working with the Webix library  you should go through typical development stages that include setting goals and understanding the requirements, 
choosing components and designing the app to foresee the result and finish it all with the coding itself, which is merely a technical side. 

- [Setting the goal](#setgoal)
- [Preparing Workspace](#coding)
- [Designing](#design)
- [Main principles of coding with the webix](#main)
- [HTML Containers](#html)
- [Code Optimization](#optim)


##Setting the goal {#setgoal}


At this stage your should determine the app's functionality and evaluate the means of achieving this goal. You should clearly see the purpose 
of your future app and try to imagine all possible features it may need to meet the requirements. 


##Preparing Workspace {#coding}

At this stage you define all the properties of your app and its components, play with event handlers and apply methods for your app to dance in the
hands of users. You can check the state of your app in the real time just as you've put the last bracket/brace/colon after the code piece. 

The lib package you [download](http://webix.com/download-webix-gpl) from the site includes two versions - **debug** and **standard** one. Debug version helps control the app during the development stage while standard script version goes for ready-made products. Both scripts are 
identical in terms of component building yet **webix_debug.js** version includes a number of handy debugging tools. Read more about the [bonuses of the debug version](desktop/debug.md). 

All the coding can be done in any text editor that is capable of syntax highlighting (just for convenience sake) and save the code to desired format
(js, html, php, xml etc.). 

At the initial stage, you need to include Webix library files into your document. It's recommended to use HTML5 doctype.  
There are 3 possible ways: 

**1) Include Webix files from Webix CDN**

You can directly set links to **webix.js** and **webix.css** files located in Webix CDN:

~~~html
<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css"> 
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>  
    </head>
    <body>
        <script type="text/javascript" charset="utf-8">
 
... // here your app will "take shelter"
        </script>
    </body>
</html>
~~~

By the way, if you need to get one of the older Webix versions, 
you can include the necessary number of version into the links to the code files:

~~~html
<link rel="stylesheet" href="http://cdn.webix.com/2.2/webix.css" type="text/css"> 
<script src="http://cdn.webix.com/2.2/webix.js" type="text/javascript"></script>
~~~

This variant is suitable only to the Webix version distributed under GPLv3.


**2) Including Webix files via Package Managers**

Webix lib can be installed via special dependency management tools. 
For now, Webix library is integrated with: 

- **NuGet** package manager for the Microsoft development platform; 
- **Bower** package manager for the web.

Installing Webix requires by means of these tools requires executing just a line of code inside them (you don't need to download anything):

{{snippet
NuGet
}}
~~~js
nuget install Webix

//If you use Microsoft Visual Studio, execute this from Package Manager Console
install-package Webix
~~~

{{snippet
Bower
}}
~~~js
bower install webix
~~~

This variant is also suitable only to the Webix version distributed under GPLv3.


**3) Including Webix Files from Downloaded Package**

Compulsory Webix files from the downloaded package are **webix.js** and **webix.css**. 
They are included via standard script and link attributes. Be attentive to specify the right relative path to the files. 

This method allows choosing between [debug](desktop/debug.md) and production version. 

~~~html
<!DOCTYPE HTML>
<html>
    <head>
    	<!-- Webix CSS file-->	
		<link rel="stylesheet" href="../../codebase/webix.css" type="text/css">
        <!-- Webix JS file-->	 
		<script src="../../codebase/webix.js" type="text/javascript"></script>  
    </head>
    <body>
    	<script>... // here your app will "take shelter"
        </script>
    </body>
</html>
~~~

##Designing {#design}

Here you think about the app's layout, its look-and-feel, build color scheme and, of course, select all the components for it. You should already 
decide how the components would be related to each other. [Building App Architecture](desktop/building_app_architecture.md) article will help you
position components and make you acquainted with layout types the library offers. 

Further on, there are a number of data-presenting [components](desktop/components.md) and special features like toolbar, menu and calendar that would
breathe life into your app and make it dynamically change to implement all the functions you wish it to perform. 

The library is supplied with a rich set of samples to show you how the components look and perform in reality. So you won't regret having spent some time 
studying them.

So, there comes time for creativity, so put on your thinking cap and pass to coding. 

##Main principles of coding with the Webix {#main}

All the components inherit from the base **[view](desktop/view.md)** component and are embedded into it to appear in the output. So, the most frequent piece of code you 
are going to write is 

~~~js
webix.ui({
	view:"...",// specifies the component name you want to create
	id:"...",
	//other parameters
});
~~~
..or 

~~~js
var table = new webix.ui({ //any var name will do
	view:"...",
	id:"...",
	//other parameters
});
~~~

**Working with Component ID**

Why is **ID** so important? Because it's the element you can refer to in order to call component methods (including the one that attaches a handler to an inner event): 

~~~js
//attaches handler to inner event
$$("component_id").attachEvent("onSomethingHappens", do_something(){...});
//forces repainting
$$("component_id").refresh(); 
~~~

Methods can be call directly from the component object: 

~~~js
var table = new webix.ui({...});
//or
table.attachEvent("onSomethingHappens", do_something(){...});
table.refresh();
~~~

However, if you don't specify the ID, it will be automatically generated with the **"$component_name1"** pattern for each instance of a component. 

{{snippet
Auto Generated ID
}}
~~~js
webix.ui({
	view:"list",
    //config options
});

$$("$list1").select(5); // $list1 is an auto-generated ID
~~~

{{sample 80_docs/autoid.html }}

Still, referring to the components by specifying the auto-generated ID is not safe as it may change in case a new instance of one and the same component is added to the application.  

**Getting Component ID at Runtime**

At any moment you can get the component ID (either custom or auto-generated one) through its configuration: 

~~~js
var id = table.config.id; 
~~~

and use it for calling methods: 

~~~js
$$(id).refresh();
~~~

##HTML Containers {#html}

You can set position, style and dimensions of the needed components with the help of javascript only (study [Layout](desktop/layout.md) and 
[Sizing Components](desktop/dimensions.md) articles) or place the into html containers to take the task to CSS. To achieve this, make up an html-layout, set 
ID to **div** elements and set this ID as the value of the component's container parameter. 

~~~js
<body>
	<div id="dataA" style="width:500px;height:150px;"></div>
	<div id="dataB" style="width:500px;height:300px;"></div>
	<script>
	webix.ui({
		view:"dataview",
    	id:"mydataview1",
		container:"dataA",
    	...
	});

	webix.ui({
		view:"dataview",
    	id:"mydataview2",
		container:"dataB",
    	...
	});
	</script>         
</body>
~~~

##Coding Tips

Components are removed from the application by simply wiping the code in the editor, but they can be as well destructed programmatically with the removal of all HTML elements and event for the component. 

~~~js
$$('mydataview1').destructor();
~~~

In addition, you can programmatically check whether the component with the specified ID was created and exists in the app: 

~~~js
if(!$$("my_dataview").exists())// -> returns boolean value
	var dataview = new webix.ui({
    	view:"dataview",
        id:"my_dataview",
        ..config
    });
~~~

##Code Optimization {#optim}

Sometimes it is recommended to take some parts of an app to separate variables and include them into the **webix.ui()** command. It makes it easy to track
mistakes and read the code later on. 

~~~js
var simple_config1 = ...;
var simple_config2 = ...;
var simple_config3 = ...;

webix.ui({
	rows:[
		simple_config1,
		simple_config2,
		simple_config3,
	]
})
~~~

In case of a really big app with lots of components, controls and functions refer to the [Structuring a Big App article](desktop/big_app_structure.md) to learn all nuances of code optimization. 

Read more about [HTML templates](desktop/html_templates.md) here. 

For further information please study [Common Tasks](desktop/basic_tasks.md) and [Event Handling](desktop/event_handling.md) articles. 

@index:
- desktop/debug.md

@complexity:1