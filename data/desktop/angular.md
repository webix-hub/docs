Angular JS Integration
========================== 

Webix-Angular App Structure
---------------------------

To use **Angular JS framework** for <a href="http://webix.com/widgets/" title="javascript widget">Webix component</a> you should:

- include **Angular** and **Webix** scripts into the document. Note that order does matter here - Angular JS script must come first;
- set **ngApp directive** to the document root to bootstrap an application. For convenience means, it's recommended to use **"webixApp"** as **module name**.  
- **create a new module** passing module name from the previous step and *"webix"* required parameter to connect it to Webix library.

~~~html
<!doctype html> <!--setting directive-->
<html lang="en" ng-app="webixApp"> 
<head>
  <meta charset="utf-8">
  <title>Webix-Angular App</title>
  <script src="js/angular.min.js"></script>
  <script type="text/javascript" src="../../codebase/webix.js"></script>
  <link rel="stylesheet" type="text/css" href="../../codebase/webix.css">
  
  <script type="text/javascript">
  	var app = angular.module('webixApp', [ "webix" ]); //creating module
  	..//app's js code (controllers)
  </script>
</head>
<body>
	<!-- app's html -->
</body>
</html>
~~~

However, since app logic is typically complex, it's a good practice to store controllers separately:

~~~html
<script type="text/javascript" src="controllers.js">
~~~

##Initializing Webix Components

Bound to Angular JS, Webix offers a special **webix-ui** directive that bootstraps an application. Here two methods are possible:

- [initializing from HTML markup](#html) - the directive is used without an argument, the application is initialized via HTML:
~~~html
<div webix-ui type="space"> <!-- app html --> </div>
~~~

- [initializing from a JS configuration object](#config) - the directive is used with the app's config object as an argument, no additional markup is used. Config object is stored in the app's controller:
~~~html
<div webix-ui="config" webix-ready="doSome(root)" style="width:450px; height:300px;">
~~~

Two patterns are equal in functionality yet differ in the way this functionality is implemented. 

##Initializing from from HTML markup {#html}

This method resembles Webix [HTML Initialization technique](desktop/html_markup_init.md) but has its own peculiarities:

- Webix application lies in a div block with **webix-ui** directive:
	- **view** attribute of such block specifies Webix [component](desktop/components.md) you want to init;
    - if you don't specify the view attribute - a [layout](desktop/layout.md) row will be created;
- all div blocks within "webix-ui block" are Webix views([components](desktop/components.md)):
	- **view** attribute of a div specifies Webix component you want to init;
    - a div block without the view attribute inits Webix [template](desktop/template.md);
    - other attributes of div blocks are component **properties**;
- As with standard Angular JS, you can easily insert Angular directives into tags including inputs and buttons (like in standard HTML).

###Layout with Tabbar and Multiview

<img src="desktop/angular_layout.png"/>

~~~html
<body>
  <div webix-ui type="space"> <!--layout rows with type "space" are created-->
	<div height="35">Header { {app} }</div> <!--Webix template is initialized -->
	<div view="cols" type="wide" margin="10"> <!--Webix layout cols are initialized-->
		<div width="200"> 
			<input type="text" placeholder="Type here" ng-model="app">
		</div>
		<div view="resizer"></div>
		<div view="tabview">
			<div header="Tab1">
				1. Some content here
			</div>
			<div header="Tab2">
				2. Other content here
			</div>
		</div>
	</div>
	<div height="35">Footer</div>
  </div>
</body>
~~~

{{sample 33_angular/01_layout.html}}

The input and header template are bound together by **ng-model** directive. 

You can check how these views are initialized in Webix: [layout](desktop/layout.md), [resizer](desktop/layout.md#resizer), [tabview](desktop/tabview.md), [template](desktop/template.md).

###Datatable Component

Webix [datatable](datatable/index.md) is a complex component for working with large amounts of data. The table below features **four columns**, **row selection** and **auto height**. Each column has its own
 **ID**, **sorting method** and **header** (the latter is defined by innerHTML). 
 
~~~html
<div style="width:750px;">
 <div webix-ui view="datatable" webix-data="records" autoheight="true" select="row">
   <div view="column" id="rating" sort="int" css="rating">Rating</div>
   <div view="column" id="year"   sort="int">Year</div>
   <div view="column" id="votes"  sort="int">Votes</div>
   <div view="column" id="title"  sort="string" fillspace="true">Title</div>  
 </div>
</div>
~~~	

{{sample 33_angular/02_grid.html }}

Note that any HTML outside "webix-ui" block is parsed as standard markup while a div with **webix-ui** attribute constructs Webix app. 

Data loading issues are explained [separately](desktop/angular_controllers.md).

###Chart Component

Webix [chart](desktop/chart.md) is a handy data visualization tool. The chart below is of a **bar** type, shows sale rates and comes without borders.

~~~js
<div style="width:500px; height:200px;">
  <div webix-ui view="chart" id="mychart" webix-data="lines" type="bar" value="#sales#" borderless="true"></div>
</div>
~~~

{{sample 33_angular/03_chart.html }}

Note that any HTML outside "webix-ui" block is parsed as standard markup while a div with **webix-ui** attribute starts Webix app. 

Data loading issues are explained [separately](desktop/angular_controllers.md).

###Rendering Arrays 

Webix to Angular integration allows for rendering both arrays of components as well as arrays in component configuration with Angulat **ng-repeat** directive.

**Rendering an array of the same Webix components**

**Webix-ui** directive can be combined with Angular **ng-repeat** to render an arry of views

~~~html
<div webix-ui>
    <div ng-repeat="chart in charts" view="chart">
</div>
~~~

where *chart* is a scope variable that includes an array of component configurations:

~~~js
$scope.charts = [
    { data:chart_data, series:[...] },
    { data:chart_data, series:[...] }
  ];
~~~

**Rendering arrays within component configuration**

Arrays in component config are denoted by **stack** property. Inside array notation you can use **ng-repeat** to iterate through it and specify the information to display:

~~~html
<config stack='series'>
    <config ng-repeat="serie in chart.series" value="#{{serie.template}}#"></config>
</config>
~~~

where *series* is a property of scope *chart* variable that contains an object with chart series config:

~~~js
{ 
	data:chart_data, 
	series:[ 
    	{ template:"sales3", color:"#ff8" }, 
        { template:"sales", color:"#f8f" }
    ] 
}
~~~

{{sample 33_angular/07_ng_repeat.html}}

###Rendering Complex Layouts

Webix-Angular integration allows for complex application design with different inter-related Webix components in it. 

For more details, study the dedicated sample {{sample 33_angular/08_complex.html}}

###Further Reading

- [Angular Controllers and Data Loading](desktop/angular_controllers.md) **Webix-data** directive;
- [Event Handling during Webix-Angular Integration](desktop/angular_events.md) **Webix-event** directive; 
- [Changing Visibility of Components in the App](desktop/angular_visibility.md) **Webix-show** directive;

##Initializing from Config Object {#config}

Initialization via config object helps **get rid of markup** and hence, markup-specific directives, and move the entire application code to **Angular controller**.

The only markup line you need is: 

~~~html
<body ng-controller="webixTestController">
	<div webix-ui="config" webix-ready="doSome(root)"></div>
</body>
~~~

- This method is closer to Webix initialization pattern. **Config** object is JSON object you would pass into **webix.ui()** constructor if you were working with Webix alone;
- Event handlers are attached with the help of **webix-ready** directive that executes a controller function taking **config root** as parameter. [Described later](#events).  

{{snippet
Controller Code
}}
~~~js
var app = angular.module('webixApp', [ "webix" ]);

app.controller("webixTestController", function($scope){
    var header = { type:"header", template:"App header" };
	var left = { view:"list", id:"a1", select:true, data:["One", "Two", "Three"] };
	var right = { template:"Right area", id:"a2" };
	
    //config object
 	$scope.config = {
   	 	isolate:true, rows:[ //two rows
     		header,
     		{ cols:[ 
     			left,  //list
        		{ view:"resizer" }, //resizer line
        		right //template
     		]}
    	]
	};
};
~~~

<img src="desktop/angular_config_app.png"/>

{{sample 33_angular/06_controller.html}}

- Components used in the sample are [list](desktop/list.md), [template](desktop/template.md), [layout](desktop/layout.md), [resizer line](desktop/layout.md#resizer).
- **Top parent view** of the config object (here: two-row layout) should have an **isolate** property to **avoid ID mess** in a situation when there're same IDs in another config object on the page. 
Similar functionality is offered by [Webix IdSpace mixin](api/refs/idspace.md). 

###Attaching Events with webix-ready Directive

**Webix-ready** directive executes a controller function with a **config root** as an argument and makes it possible to attach event handlers for all components in current configuration. If you [init from HTML markup](#html), 
use [webix-event](desktop/angular_events.md) directive for these needs.

~~~html
<body ng-controller="webixTestController">
	<div webix-ui="config" webix-ready="doSome(root)"></div>
</body>
~~~

**Root** is a **top parent view** of your application config. Here root is a *two-row layout*. 

Root has an **isolate** property, which means that the IDs of its child views (header, list, template) can be not unique within the page (there can be same IDs in another config object). But, when attaching event handlers, 
you should refer to components via their root. 

{{snippet
Controller Code
}}
~~~js
app.controller("webixTestController", function($scope){
    $scope.doSome = function(root){
    var list = root.$$("a1"); //referring to list via root object
    var template = root.$$("a2"); //referring to template via root object
    
    list.attachEvent("onAfterSelect", function(id){
      template.setHTML(this.getItem(id).value); 
    });

    list.select(list.getFirstId());
  };
};
~~~

Inside the fucntion invoked by **webix-ready** directive, Webix-Angular integrated app complies to standard Webix [event handling pattern](desktop/event_handling.md).

Angular 2 Compatibility
-----------------------

You can use Webix together with Angular 2. You will find a demo and a related tutorial [on GitHub](https://github.com/webix-hub/angular2-demo).

@index:
	- desktop/angular_controllers.md
    - desktop/angular_events.md
    - desktop/angular_visibility.md
