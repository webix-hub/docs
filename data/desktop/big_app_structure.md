Structuring a Big Application
==================================

{{note
The article tells about **logic-based app structuring** and shows how to divide the application code into semantic blocks, which enhances its readability and simplifies code amends including the addition of some new functionality. 
}}

For better undertanding, please study the following articles: 

- [Start Coding with the Webix Library](tutorials/start_coding.md)
- [Quick Start Guide, or How to Initialize a Component](tutorials/quick_start.md)
- [Building App Architecture - Layout and its Types](desktop/building_app_architecture.md)

Here everything is about logic, structure and optimized coding. The **basic pronciples** are: 

- store big code snippets in variables;
- put apart application design and inner functionality. 

For samples, please look through the demo applications provided with this library. 

##Constructing Methods

The two main functions to construct the application are as follows: 

- **webix.ui()** - the object constructor that creates a new instance of the specified view. Must be used anyway. 
- **webix.ready()** - optional - a handler that is called just after the page has been completely parsed. The alternative to the **onload()** method annd **onDocumentReady** event. 

{{snippet
In short, it look like this: 
}}
~~~js
webix.ready(function(){
	webix.ui({
    	view:"list", ... //any component including "layout"
    });
});
~~~

Inside the **webix.ui** constructor you define the layout of your app, divide it into rows and columns and place UI component into it. [Details here](desktop/building_app_architecture.md)

##Putting Apart Logic and Design

**Design** here means layout type ([layout](desktop/layout.md), [mutliview](desktop/multiview.md), [accordion](desktop/accordion.md)) as well as the [UI components](desktop/components.md) 
you've chosen for your application and the [controls](desktop/controls.md) you insert into them.

**Logic** here means any functions you attach to the components and controls as well as those establishing links between components. 

For a clear code it's recommended to store logic and design separately in variables (call them **logic** and **ui_scheme**), or in case of really big apps - in separate files. 

Three-file application includes: 

- **index.html** file that contains:
	- standard **HTML markup** with head and body sections;
	- **library scripts** included into the document head;
    - **webix.ready** function with **webix.ui** constructor in the script part of the document body;
    - links to **ui** and **logic** javascript files (look below);
    - links to CSS files and those storing inline JSON and XML data;
- **webix.js** file that contains all the components included into the **ui_scheme** variable(any name can be used); 
- **logic.js** file with all the functions you need to build a fully interactive app. All of them are stored in the **logic** variable (again, the variable name is to your choice).

{{note
You can store the whole application in one and the same index file, but the division of the script  into logic and design sections is a must. Just put components in the 
**ui_scheme** variable and functions into the **logic** variable. 
}}

##webix.ready Function - "index.html" File Contents

HTML for such file looks like this:

~~~html
<!DOCTYPE html>
	<head>
    	<!--must-have files-->
    	<link rel="stylesheet" href="../webix.css" type="text/css" media="screen" charset="utf-8">
		<script src="../webix.js" type="text/javascript" charset="utf-8"></script>
        
        <!--additional files-->
        <script type="text/javascript" src='./logic.js'></script>
		<script type="text/javascript" src='./webix.js'></script> 
        
        <link rel="stylesheet" type="text/css" href="./styles.css">
    </head>
    
    <body>
    	<script>
        ... place for you app
        </script>
    </body>
</html>
~~~

The app is placed into document body embraced by script tags. Everything lies within the **webix.ready** function: 

~~~js
webix.ready(function(){
	webix.ui(ui_scheme); 
    logic.init(); //reference to logic section 
 }); 
~~~  
 
- If there any **dates** in your app - define common formatting methods for them right now. 
- If you have components that are **beyound the application layout** (e.g. a popup [window](desktop/window.md) called on a [button](desktop/controls.md#button) clicking) - put it into another *webix.ui* constructor right now. 

~~~js
webix.ready(function(){
	webix.ui(ui_scheme); 
    webix.ui(ui_window);
    logic.init(); //reference to logic section 
    webix.i18n.parseFormatDate = webix.Date.strToDate("%m/%d/%Y");
 });
~~~

Inside the webix.ui constructor layout as well as components are placed. Here, we've put a variable there, to be exact - the ui_scheme and ui_window variables that store these components. 
    
##Design Section - "webix.js" File Contents

The variables from above are declared separately, **outside the webix.ui constructor**, either in the same file within the *webix.ready* fucntion, or (better) in a separate **webix.js** file. 

They should also be as short as possible: 
~~~js
var ui_scheme = {
	rows:[grid, footer],
	maxWidth:800
};
~~~

*Grid* and *footer* and variables declared separately and placed into the two-row [layout](desktop/layout.md). This is rather a simple application. 

It's recommended that components with options ([tabbar](desktop/controls.md#tabbar), [toolbar](desktop/toolbar.md)), [forms](desktop/form.md), non-visible [dataCollections](desktop/nonui_objects) 
should be included into the main app in the form of variables declared beforehand. 

Any component or several connected components can be stored in the variable that is later on included into the main layout variable(here:*ui_scheme*) that is placed into the webix.ui constructor. 

##Logic Section - "logic.js" File Contents

Logic block is stored in a **logic variable** declared either in a separate **logic.js** file (better), or somewhere outside the *webix.ui* constructor but within the *webix.ready* function. 

Logic block is divided into the functions called during component initialization and the definition of all the fucntion used for the application. 

The **init()** function includes:

- all the events attached to the components (except for those attached to them within their bodies). See [Event Handling](desktop/event_handling.md) for better understanding. 
- links between components  - [binding and syncing](desktop/data_binding.md). 

~~~js
var logic = {
	init: function(){
    	//ties between views
    	$$("form1").bind($$("datatable1"));
        $$("datatable1").sync($$("list1"));
        
        //biult-in functions
        $$("list1").attachEvent("onAfterSelect", function(id){
		 	$$("datatable1").select(id);
		});
        
        //custom functions
        $$("datatable1").attachEvent("onItemClick", logic.delete_row); 
     }
  }
~~~

For custom functions attached either within component/control body or within init block (see above) use the following reference:

~~~js
logic:function_name //since they are placed into the "logic" var
~~~

Outside the init block you should describe all the custom functions attached to application components either in the init block or within their bodies:

~~~js
delete_row: fucntion(){
	$$("datatable1").remove(id);
}
~~~

##Other Possibilities

Sometimes the variable that stores main layout structure (ui_scheme ) is included into the init function of the logic block and the whole script in the index file contains just a line:

{{snippet
ui.html
}}
~~~js
logic.init();.
~~~

{{snippet
logic.js
}}
~~~js
var logic = {
	init:function(){
		webix.ui(ui_scheme);
        logic.init_filtering(); //some additional logic defined outside the init block (if needed)
~~~

It goes without saying that a long list of custom **styles** is taken out into a separate file that is included into an index file with a help of a **link** in its head section (together with library styles). 

Images for the application as well as custom icons (exept for [built-in ones](desktop/icon_types.md)) are stored in a separate folder, as a rule, in the same directory as the index file or somewhere nearby. 

@complexity:2