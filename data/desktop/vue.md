Vue JS Integration
=====================

Overview
----------

Webix provides the possibility of integration with [VueJS](https://vuejs.org/) framework. You can follow one of the two approaches:
using a Webix widget in a Vue application or using a Vue template in a Webix-based application.

You can also create a custom component by wrapping a Webix widget into a Vue template.
There is a set of ready-made Vue+Webix Form controls for those who want to try using them in their Vue apps at once. 

We advise you against using Vue.js as an MVC framework for developing a Webix-based applications, since there are obvious
pitfalls. Webix widgets won't adjust their sizes properly during layout resizing. In general, such implementation requires too much overhead for not so many benefits.

We highly recommend you to use the [Webix Jet](https://webix.gitbooks.io/webix-jet/content/chapter1.html) framework for building 
web apps with Webix, as it is native for the library and will help you to manage the development stages in the most natural way. 
Thus, you will avoid facing possible difficulties and using excessive code.


Included Files
-----------------

First, you should pay attention that the discussed integration isn't included into Webix library. To start using it in your project, 
you need to take the necessary sources from [GitHub](https://github.com/webix-hub/webix-vue).

Then you need to include the link to the Vue source file in the head of your HTML page. We will use the minified JS file for our examples:

~~~html
<script type="text/javascript" 
	src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
~~~

After that include the JS and CSS file of Webix, for example from CDN:

~~~html
<script type="text/javascript" src="//cdn.webix.com/edge/webix.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.webix.com/edge/webix.css">
~~~

In order to use specific integration functions, you also need to include the following source files:

~~~html
<!--for using a Webix widget in a Vue app-->
<script type="text/javascript" src="../sources/webix-ui.js"></script>
<!--for using a Vue component in a Webix app-->
<script type="text/javascript" src="../sources/vue-view.js"></script>
<!--for using ready Vue+Webix controls-->
<script type="text/javascript" src="../sources/webix-controls.js"></script>
~~~


Vue Application with Webix Widgets {#vue_app}
-----------------------------------

If you are going to implement a large-scale application with Vue.js, it may require hard work with various data.
In this case powerful Webix data widgets will help you to deal with this task. 

###Initializing Webix view in a Vue app

To begin with, don't forget to include the necessary [source file](desktop/vue.md#includedfiles).

Next, to add a Webix widget into a Vue-based app, you need to complete the steps below:

- create a new Vue instance
- use the tag  *< webix-ui >* inside of the Vue template to define a Webix widget
- specify an object with a Webix UI configuration inside of the *data* object of the Vue instance 
- set the name of this object in the *v-bind* directive to bind the "config" attribute to the data object that contains the UI configuration

Let's consider an example. We have a layout with two columns. The first column contains a Calendar view and the second one - a List view with data.
The layout config is described in the *"ui"* object. So, we will bind this object to the *config* attribute of the < webix-ui > element located in the Vue template: 

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

The result is presented in the image below:

<img src="desktop/building_integrated_ui.png">

**Related sample**: [Building UI](https://webix-hub.github.io/webix-vue/samples/01_webix_ui.html)

###Data binding

It's possible to bind data between a Webix widget and a Vue template. For this, you just need to use common Vue technique:
the *v-bind* directive.

In the example below we will add a Webix DataTable widget into
a Vue app and add a button by click on which data in the datatable will be cleared:

~~~js
new Vue({
	el: "#demo2",
	template:`
		<div style="width:400px; height: 250px;">
			<h3>2. One way data binding,
				<button v-on:click="data=[]">Clean</button>
			</h3>
			<webix-ui :config='ui' v-bind='data'/>
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

The < webix-ui > element gets the datatable configuration and is loaded with the related data. 

The *Clean* button inside the template is subscribed to the event *click* via the *v-on* directive. 
When the button is clicked, this event fires and cleans data in the datatable. 

This is how our small app looks like after initialization:

<img src="desktop/data_binding.png">

and on the Clean button click:

<img src="desktop/data_binding2.png">


**Related sample**: [One-way Data Binding](https://webix-hub.github.io/webix-vue/samples/01_webix_ui.html)


###Two-way data binding

You can also implement two-way data binding. It means that
if you change something in a Vue component, the corresponding changes will be invoked in the bound Webix widget and vice versa.
The regular *v-model* Vue directive will help us.

For example, we can create a Vue template with an input element and add a *< webix-ui >* element that will render a Webix Layout with a Slider inside. 
If a value will be changed in an input or in a slider, it will be modified in the other component correspondingly. 
Let's see, how we can implement this use-case:

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

<img src="desktop/two_way_data_binding.png">

By using the *v-model* directive we've bound the "result" data attribute both to the input and for the slider elements.   

What happens when the value of the "result" attribute is changed in one of the components:

- When a new value is entered into the input, the following actions happen for the slider:

1) the "onChange" event fires. It's handler takes the new value from the input

2) the "onValue" event fires. It takes the new value and sets it for the slider

- When a slider handler is dragged to a new position, a new value is set in the input.

**Related sample**: [Two-way Data Binding](https://webix-hub.github.io/webix-vue/samples/01_webix_ui.html)


Webix Application with Vue Templates {#webix_app}
-------------------------

You can make use of Vue reactive templates inside of a Webix-based application. It allows updating data in an application dynamically.

There is a *view:"vue"* widget added specially for this purpose. It presents a Vue template that can be used as a native Webix widget.
The only thing you need to do to use it in your app is to [include the corresponding JS file](desktop/vue.md#includedfiles).

Let's consider the following example. We have a Webix Layout with a List view and want to display an item data in a template depending on the selected List item.

The "dynamic" part of the layout can be implemented by the Vue view: 

~~~js
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


$$("preview").bind("list");
~~~

This is how it works:

- the *data* object stores the value and the size related to this value
- the *v-if* directive inside the *template* object decides what data to display, when a value comes to the template. 
The incoming value and the corresponding size are inserted into the template and updated each time a new list item is clicked
- the *watch* property monitors what list item is selected and shows the corresponding "size" value  

The result can be used in an application like this:

<img src="desktop/view_vue.png">

**Related sample:** [view:"vue" in a Webix App](https://webix-hub.github.io/webix-vue/samples/06_vue_template.html)


Creating Custom Vue Component {#customui}
-------------------------

You can create a custom Vue component that will contain a necessary Webix widget inside. This case is rather useful when the same UI is reused 
throughout an application. It also will help you to keep all the used data together.

For example, we have an input and a slider. We want them to update their values simultaneously.

<img src="desktop/vue_webix_custom_ui.png">

Let's see how we can wrap a Webix Slider widget into a Vue component and use it as a native Vue template.

Before starting to work, don't forget to include the necessary [source file](desktop/vue.md#includedfiles).

To create a custom Vue component with a Webix control inside, you need to complete several steps:

1) register a new Vue component using **Vue.component(tagName,options)** declaration

You can find the details on registration of new components in the [Vue.js documentation](https://vuejs.org/v2/guide/components.html#Using-Components).

We will name our custom component "my-slider". So, the initial code for a component registration will look as follows:

~~~js
Vue.component("my-slider", {
	// component config options
});
~~~

2) specify the necessary Vue configuration options for the component

The full list of options is given in the [Vue.js API](https://vuejs.org/v2/api/#Options-Data).

We will use the following options for our Slider control:

- **props** - declares a list/hash of attributes that are exposed to accept data from the parent component 
- **template** - string template to be used as the markup of the new component 
- **watch** - monitors changes in the data of one of the bound components and applies necessary updates in the second one
- **mounted** - a function which is called when a new component has just been mounted
- **destroyed** - a function which is called after a component has been destroyed

The full code of a component registration will look like this:

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

The *mounted()* function will create a new instance of a Webix Slider. 
Inside of it we have also attached the handler of the *onChange* event
that will fire when a value in the bound component (an input in our case) is changed.

The *destroyed()* function will destroy the Webix Slider instance when it will be no longer needed.

3) use the registered component in the Vue instance's template as a custom element

Now we should create a new Vue instance:

~~~js
new Vue({
	el: "#demo1",
	template:`
		<div style='width:300px;'>
			<h3>Vue + Webix: Custom UI</h3>
			<my-slider v-model.number='progress' />
			<div><input type="text" v-model.number='progress' /></div>
		</div>`,
	data:{
		progress: 50
	}
});
~~~

Into the Vue template we put a Webix-based slider that we've created above. 
 
We bound the "progress" data attribute both to the slider and the input elements. Thus, when its value changes, both controls will update their values
correspondingly.

**Related sample:** [Vue+Webix Custom UI](https://webix-hub.github.io/webix-vue/samples/04_custom_ui.html)

Ready-made Webix Form Controls {#customcontrols}
--------------------------------

If you feel lazy enough to create a custom Vue component and wrap a Webix widget into it, we have prepared a set of ready Vue-wrapped Webix Form Controls.

To use integrated Form controls in a Vue app, you need to include the above-mentioned source file *webix-controls.js*. It contains all the necessary logic. 

~~~html
<script type="text/javascript" src="../sources/webix-controls.js"></script>
~~~

After that you can use any of the wrapped Webix Form Controls in a Vue template as in the code below:

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

It will provide the following result:

<img src="desktop/ready_form_controls.png">


- the "options" collection for multiple-value controls is set through the *v-bind* directive (e.g.:options='options')


**Related sample:** [Vue+Webix Form Controls](https://webix-hub.github.io/webix-vue/samples/03_form_controls.html)

In case you are still interested in creating your own custom Vue component with Webix widget inside,
read the section [Creating Custom Vue Component](desktop/vue.md#creatingcustomvuecomponent).



