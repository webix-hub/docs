TypeScript Integration
=======================

The Webix library provides the possibility to use Webix widgets with TypeScript.

{{note You can find [an example of using Webix with TypeScript](https://github.com/webix-hub/typescript-demo) on GitHub}}

You can find a thorough tutorial on creation of the provided demo and more details on using Webix with TypeScript
in the [related blog article](http://webix.com/blog/typescript-types-in-webix-ui-framework/).

How to Start
--------------

Webix types definitions of widgets and mixins interfaces are stored in the *index.d.ts* declaration file. 
So, to use static typing with Webix, you need to include this file into your TypeScript application. 

You can get the Webix TypeScript declaration file as follows:

- [Fetch from Github](https://github.com/DefinitelyTyped/DefinitelyTyped/tree/master/types/webix)
- [Install via npm package manager](https://www.npmjs.com/package/@types/webix)


As a result, you will get a catalog with the following files:

- *index.d.ts* file – the declaration file that should be included into each .ts file within Webix application
- *webix-tests.ts* – the test file with basic syntax examples
- *tsconfig.json* – config file for launching the *webix.tests.ts* file

###Working with TypeScript via npm

**npm** users can take the steps below to work with TypeScript:

- install TypeScript on the local machine

~~~js
npm install -g typescript
~~~

- prepare the *tsconfig.js* file where the source and declaration files should be specified

~~~js
{ "files": [ "index.d.ts", "app.ts" ]}
~~~

- write Typescript code in the *app.ts* file
- compile the ready code in a command shell

~~~js
tsc app.ts
~~~

- include the compiled *app.js* file into your project


Running the Demo
-----------------

Grab the above mentioned demo [from Github](https://github.com/webix-hub/typescript-demo). Then, choose one of the ways given below to run the demo:

###How to run standalone

~~~js
npm install
npm run server
~~~

After that, open *http://localhost:8080* in the browser.

###How to run with Apache

~~~js
npm install
npm run watch
~~~

###How to build codebase

~~~js
npm install
npm run codebase
~~~

{{note Note that you need to have latest versions of Node.js and npm installed.}}

Typing within Webix Widgets
---------------------------

You need to explicitly set the type of a Webix widget during initialization as **webix.ui.{widget}**:

~~~js
var layout = <webix.ui.layout> webix.ui({
	rows:[ toolbar, datatable, pager] 
});
~~~

And for using its methods and events after initialization:

~~~js
var grid:webix.ui.datatable = layout.getChildViews()[1];
grid.add({ title:"New film"}, 0);

//or

var grid = (<webix.ui.datatable>layout.getChildViews()[1]);
grid.add({ title:"New film"}, 0);
~~~

Or, when accessing the widget by its id:

~~~js
(<webix.ui.datatable>webix.$$("mygrid")).add({ title:"New film"}, 0);
~~~

You also need to set a widget type while attaching handler functions to widget's events:

~~~js
var grid:webix.ui.datatable = layout.getChildViews()[1];
grid.attachEvent("onAfterSelect", function(){...});
~~~

Typing for Widgets Configuration
-----------------------------

You can provide correct types for widgets' properties with the related **webix.ui.config{Widget}** types:

~~~js
var datatable:webix.ui.datatableConfig = {
	view:"datatable",
	editable:true,
	editaction:"dblclick",
	autoConfig:true,
	url:"..",
	pager:"pagerA",
	scrollX:"false"
};

var pager:webix.ui.pagerConfig = {
	view:"pager",
	id:"pagerA",
	group:10,
	size:30
}; 

var layout= <webix.ui.layout> webix.ui({
	rows:[ datatable, pager] 
}); 
~~~

Creating Custom Widget with Strict Typing
------------------------------

You can specify strict types while creating a custom widget, namely:

- Adding a custom property to configuration:

~~~js
interface iconcheckConfig extends webix.ui.checkboxConfig{
	icon?:string;
}
~~~

- Adding or overriding methods and properties in the prototype:

~~~js
interface IconCheckApi{
	name:string;
	$init(config:iconcheckConfig):void;
	getIconLabel(icon:string, label:string):string;
}

interface IconCheckView extends webix.ui.checkbox, IconCheckApi {}
~~~

- Creating a new proto UI:

~~~js
const api:IconCheck = { 
name:"iconcheck",
	$init:function(config){
		config.label = (<IconCheckView>this).getIconLabel(config.icon, config.label);
		config.labelWidth = 100;
	},
	getIconLabel:function(icon, label){
		return "<span class='webix_icon fa-"+icon+"'></span>"+label;
	}
};

webix.protoUI(api, webix.ui.checkbox);
~~~

- Using the custom widget:

~~~js
var iconcheckbox = <IconCheckView> webix.ui({
	view:"iconcheck",
	icon:"cog",
	label:"Settings"
});
~~~