Start Coding with Webix 
=========================

Working with the Webix library  you should go though typical development stages that include setting goals and understanding the requirements, 
choosing components and designing the app to foresee the result and finish it all with the coding itself, which is merely a technical side. 

- [Setting the goal](#setgoal)
- [Designing](#design)
- [Coding](#coding)
- [Main principles of coding with the webix](#main)
- [HTML Containers](#html)
- [Code Optimization](#optim)


##Setting the goal {#setgoal}


At this stage your should determine the app's functionlity and evaluate the means of achieving this goal. You should clearly see the purpose 
of your future app and try to imagine all possible features it may need to meet the requirements. 

##Designing {#design}

Here you think about the app's layout, its look-and-feel, build color scheme and, of course, select all the components for it. You should already 
decide how the components would be related to each other. [Building App Architecture](desktop/building_app_architecture.md) article will help you
position components and make you acquainted with layout types the library offers. 

Further on, there're a number of data-presenting [components](desktop/components.md) and special features like toolbar, menu and calendar that would
breathe life into your app and make it dynamically change to implement all the functions you wish from it. 

The library is supplied with a rich set of samples to show you how the components look and perform in reality. So you won't regret having spent some time 
studying them.

So, there comes time for creativity, so put on your chinking cap and pass to coding. 

##Coding {#coding}

At this stage you define all the properties of your app and its components, play with event handlers and apply methods for your app to dance in the
hands of users. You can check the state of your app in the realtime just as you've put the last braket/brace/colon after the code piece. 

The lib package includes two versions - **debug** and **standard** one. Debug version helps control the app during the development stage while standard script version goes for ready-made products. Both scripts are 
identical in terms of component building yet **ui_debug.js** version includes a number of handy debugging tools. Read more about the [bonuses of the debug version](desktop/debug.md). 

All the coding can be done in any text editor that is capable of syntax highlighting (just for convenience sake) and save the code to desired format
(js, html, php, xml etc.). 

At the initial stage, don't forget to include Webix library files (standard or debug script version) into your html-document, to be more precise - into its head section. Be attentive to 
specify the right relative path to the files from app directory to their one. It's recommended to use HTML5 doctype.  

  

~~~html
<!DOCTYPE HTML>// specifies document type
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

##Main principles of coding with the Webix {#main}

All the components inherit from the base **[view](desktop/view.md)** component and are embedded into it to appear in the output. So, the most frequent piece of code you 
are going to write is 

~~~js
webix.ui({
	view:"...",// specifies the component name you want to create
	id:"...",
	//other parameters
});

//or 
var table = new webix.ui({ //any var name will do
	view:"...",
	id:"...",
	//other parameters
});
~~~

Why is **ID** so important? Besauce it's the very element you can refer to in order to attach different methods to the object. Or you can call methods 
(which are functions) from the variable that stores the object - like in the second example. 

{{snippet
The syntax here is as follows:
}}
~~~js
$$("component_id").attachEvent("onSomethingHappens", do_something(){...};) 

//or
table.attachEvent("onSomethingHappens", do_something(){...};) 

~~~

However, if you don't specify the ID, it will be automatically generated with the **'component_name1'** pattern for each instance of a component. This ID can be later on referred to in functions: 

{{snippet
Auto Generated ID
}}
~~~js
webix.ui({
	view:"list",
    config options.. 
});

$$('list1').select(5); //list1 is an auto-generated ID
~~~

{{sample 98_docs/autoid.html }}

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

Components are removed from the application by simply wiping the code in the ditor, but they can be as well detructed programmatically with the removal of all HTML elements and event for the component. 

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

For further information please study [Common Tasks](desktop/basic_tasks.md) and [Event Hadling](desktop/event_handling.md) articles. 

@index:
- desktop/debug.md

@complexity:1