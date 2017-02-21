Vue JS Integration
=====================

Overview
----------

Webix provides the possibility of integration with [VueJS](https://vuejs.org/) framework. This union will be especially fruitful 
if you want:

- [to build a Vue application with Webix widgets inside](desktop/vue.md#vue_app)
- [to create a Webix-based application with the benefits of Vue.js](desktop/vue.md#webix_app)

You can also [create a custom Vue component with a Webix control inside](desktop/vue.md#creatingcustomvuecomponent). 
There is a set of [ready-made Vue+Webix Form controls](desktop/vue.md#readymadewebixformcontrols) 
for those who want to try using them in their Vue apps at once. 

We highly recommend you to use the [Webix Jet](https://webix.gitbooks.io/webix-jet/content/chapter1.html) framework for building 
web apps with Webix, as it is native for the library and will help you to manage the development stages in the most natural way. 
Thus, you will avoid facing possible difficulties and using excessive code.

We also advise you against using Vue.js as an MVC framework for developing a Webix-based applications, since there are two main
pitfalls:

- Webix widgets won't adjust their sizes properly during layout resizing
- such implementation requires too much overhead for not so many benefits

Nevertheless, there are obvious advantages in the joined usage of Webix and Vue.js. Let's consider them in detail.

Included Files
-----------------

First, you should pay attention that the discussed integration isn't included into Webix library. To start using it in your project, 
you need to take the necessary sources from [GitHub](https://github.com/webix-hub/webix-vue).

Then you need to include the link to the vue.js source file in the head of your HTML page. We will use the minified 
js file for our examples:

~~~html
<script type="text/javascript" 
	src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
~~~

After that include the JS and CSS file of Webix, for example from CDN:

~~~html
<script type="text/javascript" src="//cdn.webix.com/edge/webix.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.webix.com/edge/webix.css">
~~~

Vue Application with Webix Widgets {#vue_app}
-----------------------------------

If you are going to implement a large-scale application with Vue.js, it may require hard work with various data.
This task can be solved by using lightweight and compact Webix widgets. 

###Initializing Webix view in a Vue app

To add a Webix widget into a Vue-based app, you need to include the following file after files of libraries:

~~~html
<script type="text/javascript" src="../sources/webix-ui.js"></script>
~~~

Next you need to complete the steps below:

- create a new Vue instance
- use the tag  *< webix-ui >* inside of its template to define a Webix widget
- specify an object with a Webix UI inside of the *data* object of the Vue instance 
- set the name of this object in the *v-bind* directive to bind the "config" attribute to data object that contains the UI configuration

Let's consider an example. We have a layout with two columns. The first column contains a Calendar view and the second one - a List view with data.
The layout config is described in the *ui* object. So, we will bind this object to the *config attribute* of the < webix-ui > tag located in the Vue template: 

<img src="desktop/building_integrated_ui.png">

~~~js
new Vue({
	el: "#demo1",
	template:`
		<div style="width:400px; height: 350px;">
			<h3>1. Building UI</h3>
			<webix-ui :config='ui'/>
		</div>
	`,
	data:{
		ui:{
			cols:[{
				view:"calendar",
			},{
				view:"list", select:true,
				data: data
			}]
		}
	}
});
~~~

**Related sample**: [See the demo#1](https://github.com/webix-hub/webix-vue/blob/master/samples/01_webix_ui.html).

###Data binding

VueJS allows binding data between a Webix widget and a Vue template. In the example below we will add a Webix datatable widget into
a Vue app and add a button by click on which data in the datatable will be cleared:

<img src="desktop/data_binding.png">

~~~js
new Vue({
	el: "#demo2",
	template:`
		<div style="width:400px; height: 250px;">
			<h3>2. One way data binding,
				<button v-on:click="data=[]">Clean</button>
			</h3>
			<webix-ui :config='ui' v-model='data'/>
		</div>
	`,
	data:{
		data:data,
		ui:{
			view:"datatable", autoheight:true, select:"row",
			columns:[
				{ id:"value", header:"Section Index" },
				{ id:"name", header:"First Name" },
				{ id:"last", header:"Last Name" },
				{ id:"address", header:"Address", fillspace:1 }
			]
		}
	}
});
~~~

The *v-model* directive stores an object with data of the widget. The *Clean* button inside the template
is subscribed to the event *click* via the *v-on* directive. When the button is clicked, this event fires and cleans data in the datatable. 
 
**Related sample**: [See the demo#2](https://github.com/webix-hub/webix-vue/blob/master/samples/01_webix_ui.html).

###Two-way data binding

You can also implement data binding that will allow applying modifications in the data of components in both directions. 
If you change something in a Vue component, it will invoke corresponding changes in the bound Webix widget and vice versa.

For example, we can create a Vue template with an input and use < webix-ui > tag to specify a Webix layout widget with a slider inside. 
If a value will be changed in an input or in a slider, it will be modified in the other component correspondingly. 
Let's see, how we can implement this use-case:

<img src="desktop/two_way_data_binding.png">

~~~js
new Vue({
	el: "#demo3",
	template:`
	  <div style="width:400px; height: 250px;">
		<h3>3. Two-way data binding, try to change <input v-model.number='result'></h3>
	    <webix-ui :config='ui' v-model.number='result'/>
	  </div>
	`,
	data:{
		result:50,
		ui:{
			margin:20, rows:[{
				view:"template", type:"header", template:"Webix UI" 
			},{
				view:"slider", 
                label:"Change me", labelWidth:120, inputWidth:300,
                value:50,
				on:{
					onChange:function(){
						this.$scope.$emit("input", this.getValue());
					},
					onValue:function(value){
						this.setValue(value);
					}
				}
			}]
		}
	}
});
~~~

By using the *v-model* directive we've specified a common variable "result" for the input and for the slider. It contains the value entered into the input
and set for the slider.  

What happens when the result value is changed in one of the components:

- When a new value is entered into the input, the following actions happen for the slider:

1) the onChange event fires. It's handler takes the new value from the input

2) when the value is received, the onValue event fires. It takes the new value and sets it for the slider

3) the slider handle moves to the related position

- When a slider handler is placed to a new position, a new value is set in the input.

**Related sample**: [See the demo#3](https://github.com/webix-hub/webix-vue/blob/master/samples/01_webix_ui.html).

Webix Application with Vue Templates {#webix_app}
-------------------------

You can make use of Vue reactive templates inside of a Webix-based application. It allows updating data in Webix widgets dynamically.

There is a *view:"vue"* widget added specially for this purpose. It presents a Vue template that can be used as a native Webix widget.
The only thing you need to do to use it in your app is to include the corresponding JS file [after the source files of two libraries](desktop/vue.md#includedfiles):

~~~html
<script type="text/javascript" src="../sources/vue-view.js"></script>
~~~

Let's consider the following example. We have a Webix layout that consists of two rows. The full structure is presented below:

-  a row with a Toolbar view that has a button inside. A click on the button will invoke a message
-  a row with two columns inside:
	- a column with a List view
    - a column with two rows 
    	- the upper row displays the data of the selected list item 
        - the lower row shows some static data

<img src="desktop/view_vue.png">

Both the static and dynamic parts of the second column can be implemented with the help of the Vue view. Let's have a look at the full code:

~~~js
var toolbar = {
	view:"toolbar",
	elements:[
		{ 
        	view:"button", label:"Info", 
        	click:() => webix.message("Select something in the list") 
        },
		{}
	]
};

var list = {
	view:"list", id:"list", select:true,
	template:"#value# (#size#)",
	data:[
		{ id:1, value:"Record 1", size:92 },
		{ id:3, value:"Record 2", size:120 },
		{ id:2, value:"Record 3", size:15 }
	]
};

var preview = {
	view:"vue", id:"preview",
	template:`
		<div>
			<p>This part is rendered by VueJS, data from the list</p>
			<div v-if='value'>
				<p>Selected: {{value}}</p>
				<p>Size: <input v-model='size'></p>
			</div>
		</div>
	`,
	data:{
		value:"",
		size:""
	},
	watch:{
		size:function(value){
			$$("list").updateItem($$("list").getSelectedId(), { size: value });
		}
	}
};

var stats = {
	view:"vue", id:"stats",
	template:`
		<div>
			<p>This part is rendered by VueJS, static data</p>
			<p>Average Weight: {{weight}}lbs</p>
		</div>
	`,
	data:{
		weight: 244
	}
};

webix.ui({
	rows:[
		toolbar,
		{ cols:[
			list,
			{ rows:[ preview, stats ]}
		]}
	]
});

$$("preview").bind("list");
~~~

The dynamic part of the second column is implemented by the Vue view with the "preview" id. This is how it works:

- the *data* object stores the value and the size related to this value
- the *v-if* directive inside the *template* object decides what data to display, when a value comes to the template. 
The incoming value and the corresponding size are inserted into the template and updated each time a new list item is clicked
- the *watch* property monitors what list item is selected and shows the corresponding "size" value  

The static part also includes a Vue view. It has the "stats" id and renders the value of the property specified in the *data* object using a template.

**Related sample:** [view:"vue" in a Webix app](https://github.com/webix-hub/webix-vue/blob/master/samples/02_webix_datatable.html)


Creating Custom Vue Component
-------------------------

You can create a custom Vue component that will contain a necessary Webix widget inside. This case is rather useful when the same UI is reused 
throughout an application. It also will help you to keep all the used data together.

<img src="desktop/vue_webix_custom_ui.png">

In the above image we have an input and a slider. Let's see how we can wrap a Webix Slider widget into a Vue component and use it as a native Vue template.

Before starting to work, we need to include the necessary source file that allows using Webix controls inside Vue-based apps:

~~~html
<script type="text/javascript" src="../sources/webix-controls.js"></script>
~~~

Don't forget that it should be included [after the source files of the two libraries](desktop/vue.md#includedfiles).

To create a custom Vue component with a Webix control inside, you need to complete several steps:

1) register a new Vue component using **Vue.component(tagName,options)** declaration

We will name a tag for the new component "my-slider". So, the initial code for a component registration will look as follows:

~~~js
Vue.component("my-slider", {
	// component config options
});
~~~

2) specify the necessary Vue configuration options for the component

We will use the following options for our slider control:

- **props** - declares the a list/hash of attributes that are exposed to accept data from the parent component 
- **template** - string template to be used as the markup of the new component 
- **watch** - monitors changes in the data of one of the bound components and applies necessary updates in the second one
- **mounted** - a function which is called when a new component has just been mounted
- **destroyed** - a function which is called after a component has been destroyed

The code of a component registration with the full configuration will look like this:

~~~js
Vue.component("my-slider", {
  props: ['value'],
  template:"<div></div>",
  watch:{
  	// updates component when the bound value changes
  	value:{
    	handler:function(value){
        	webix.$$(this.webixId).setValue(value);
      	}
    }
  },
  mounted:function(){
  	// initializes Webix Slider
    this.webixId = webix.ui({ 
      	// container and scope are mandatory, other properties are optional
      	container: this.$el, 
      	$scope: this,
     	view: "slider", 
      	value: this.value 
    })

    // informs Vue about changed value in case of 2-way data binding
    $$(this.webixId).attachEvent("onChange", function(){
    	var value = this.getValue();
      	// you can use a custom event here
      	this.$scope.$emit("input", value)
    });
  },
  // memory cleaning
  destroyed:function(){
	webix.$$(this.webixId).destructor();
  }
});
~~~

The *mounted()* function will initialize a Webix slider after a new Vue instance will be created. Inside of it we have also attached the handler of the *onChange* event
that will fire when a value in the bound component (an input in our case) is changed.

The *destroyed()* function will destroy the Webix slider after destruction of the Vue intstance.

3) use the registered component in the Vue instance's template as a custom element

Now we should create a new Vue instance. We need to specify the following options in the constructor:

- **el** - provides an existing DOM element for the Vue instance to mount on
- **template** - string template to be used as the markup of the Vue instance
- **data** - the data object for the Vue instance

~~~js
new Vue({
	el: "#demo1",
	template:`
		<div style='width:300px;'>
			<h3>Vue + Webix: Custom UI</h3>
			<my-slider v-model.number='progress' />
			<div><webix-text v-model.number='progress' /></div>
		</div>`,
	data:{
		progress: 50
	}
});
~~~

Here we have provided an HTML container with the "demo1" id to place a new Vue instance inside.

Into the Vue template we put a Webix-based slider that we've created above. Besides we've added a *webix-text* custom control. It is a text input in its essence.
You can read about custom form controls below.

For both the slider and the webix-text controls we have specified that they will take their value from the "progress" property of the *data* object. 

**Related sample:** [Vue+Webix custom control](https://github.com/webix-hub/webix-vue/blob/master/samples/04_custom_ui.html)

Ready-made Webix Form Controls
--------------------------------

If you feel lazy enough to create a custom Vue component and wrap a Webix widget into it, we have prepared a set of ready Vue-wrapped Webix Form Controls.

To use integrated Form controls in a Vue app, you need to include the above-mentioned source file *webix-controls.js*. It contains all the necessary logic. 

~~~html
<script type="text/javascript" src="../sources/webix-controls.js"></script>
~~~

After that you can use any of the wrapped Webix Form Controls in a Vue template. 

<img src="desktop/ready_form_controls.png">

~~~js
new Vue({
	el: "#demo1",
	template:`
		<div style='width:500px'>
			<fieldset>
				<legend>User</legend>
					<webix-text 		label='First Name' 	v-model.string='fname' />
					<webix-text 		label='Last Name'  	v-model.string='lname' />
					<webix-datepicker  	label='Birthdate' 	v-model.date='birthdate' />
					<webix-colorpicker 	label='Color'      	v-model.string='color' />
					<webix-slider 		label='Level' 		v-model.number='level' />
			</fieldset>													
		</div>`,
	data:{
		fname:"Reno",
		lname:"Abrams",
		birthdate:new Date(1992,10,24),
		color:"#aaaff0",
		level:20			
	}
});
~~~

- all the necessary data properties are defined in the *data* object 
- to point to the specific data property for a control, the *v-model* directive is used 
- the "options" collection for multiple-value controls is set through the *v-bind* directive (e.g.:options='options')


**Related sample:** [Vue+Webix Form controls](https://github.com/webix-hub/webix-vue/blob/master/samples/03_form_controls.html)

In case you are still interested in creating a Webix widget wrapped into a custom Vue component,
read the section [Creating Custom Vue Component](desktop/vue.md#creatingcustomvuecomponent).



