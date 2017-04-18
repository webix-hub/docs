Vue JS Integration
=====================

Overview
----------

Webix provides the possibility of integration with [VueJS](https://vuejs.org/) framework. There are two good use-cases, when such kind of integration will be useful:

- you have a Vue-based app, where you want to place one or a few complex widgets (datatable, chart, spreadsheet, etc.)
- you have a Webix-based app, where you want to add a reactive Vue component

We advise you against using Vue.js as an MVC framework for developing a Webix-based applications, since there are obvious
pitfalls. Webix widgets won't adjust size to Vue layouts and such approach adds too much overhead for not so many benefits.

Instead, we highly recommend you to use the [Webix Jet](https://webix.gitbooks.io/webix-jet/content/chapter1.html) framework for building 
web apps with Webix, as it is native for the library and will help you to manage the development stages in the most natural way. 

To achieve Vue+Webix integration we provide the following tools:

- [webix-ui component for Vue based apps](#vue_app)
- [view:"vue" for Webix based apps](#webix_app)
- [set of ready-made Vue+Webix Form controls](#customcontrols)

If it's not enough, you can create a [custom component by wrapping a Webix widget](#customui) into a Vue component. 


Included Files
-----------------

{{note
Pay attention that the discussed integration isn't included into Webix library. To start using it in your project, 
you need to take the necessary sources from [GitHub](https://github.com/webix-hub/webix-vue). Besides, they are available from CDN.
}}

You need to include the link to the Vue source file in the head of your HTML page. We will use the minified JS file for our examples:

~~~html
<script type="text/javascript" 
	src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
~~~

Then include Webix JS and CSS files, for example from CDN:

~~~html
<script type="text/javascript" src="//cdn.webix.com/edge/webix.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.webix.com/edge/webix.css">
~~~

In order to use specific integration features, you also need to include the following source files:

~~~html
<!--for using a Webix widget in a Vue app-->
<script type="text/javascript" src="//cdn.webix.com/libs/vue/webix-ui.js"></script>
<!--for using a Vue component in a Webix app-->
<script type="text/javascript" src="//cdn.webix.com/libs/vue/vue-view.js"></script>
<!--for using ready Vue+Webix controls-->
<script type="text/javascript" 
	src="//cdn.webix.com/libs/vue/webix-controls.js"></script>
~~~


Creating Vue Application with a Webix Widget {#vue_app}
-----------------------------------

If you are going to implement a large-scale application with Vue.js, it may require hard work with various data.
In this case powerful Webix data widgets will help you to deal with data. 

###Initializing Webix view in a Vue app

To begin with, don't forget to include the necessary [source file](desktop/vue.md#includedfiles).

Next, to add a Webix widget into a Vue-based app, you need to complete the steps below:

- create a new Vue instance
- use the tag *< webix-ui >* inside of the Vue template to define a Webix widget
- specify an object with the Webix UI configuration inside of the *data* object of the Vue instance 
- bind the "config" attribute of *< webix-ui >* to the data object that contains the UI configuration via the *v-bind* directive

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

It's possible to bind data of a Webix widget and a Vue template. For this, you just need to use common Vue technique:
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
			<webix-ui :config='ui' v-bind:value='data'/>
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


#### Implementation details

The way, how component will try to parse incoming value depends on component.
The top level widget of webix-ui block will try to call .parse/.setValues/.setValue method if such method presents. Additionally, for all webix widgets in the block "onValue" event will be triggered, so you can define a custom value handler ( check the sample below )  

###Two-way data binding

You can also implement two-way data binding. It means that
if you change something in a Vue component, the corresponding changes will be invoked in the bound Webix widget and vice versa.
The regular *v-model* Vue directive can be used for this task.

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

The result is presented in the image below:

<img src="desktop/two_way_data_binding.png">

We've bound the "result" data attribute both to the input and the slider elements. 

When the *v-model* bound value is modified, the *onValue* event fires in the Webix view.
When the value of the Slider view is changed, its native event *onChange* fires and informs Vue about value change.

The declaration *this.$scope* inside of the onChange event handler points to the < webix-ui > element, i.e. on a Webix view as a Vue component. 

**Related sample**: [Two-way Data Binding](https://webix-hub.github.io/webix-vue/samples/01_webix_ui.html)


Creating Webix Application with a Vue Template {#webix_app}
-------------------------

You can make use of a Vue reactive template inside of a Webix-based application. There is a *view:"vue"* widget added specially for this purpose.
It presents a Vue template that can be used as a native Webix widget.

The only thing you need to do to use it in your app is to [include the corresponding JS file](desktop/vue.md#includedfiles).

Let's consider the following example. We have a Webix Layout with a List view and want to display an item data in a template depending on the selected List item.

The code sample below shows how a Webix List and a Vue template can be bound:

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

- the *data* object receives the value taken from the selected item of List
- the *watch* property monitors when size changed inside of Vue component and updates data in the list

The result can be used in an application as follows:

<img src="desktop/view_vue.png">

**Related sample:** [view:"vue" in a Webix App](https://webix-hub.github.io/webix-vue/samples/06_vue_template.html)


Creating a Custom Vue+Webix Component {#customui}
-------------------------

You can create a custom component by wrapping a Webix widget in a Vue component and use it as a native Vue template. 
This case is rather useful when the same UI is reused throughout an application and will help you to keep all the used data together.

For example, we have an input and a slider. We want them to update their values simultaneously.

<img src="desktop/vue_webix_custom_ui.png">

Before starting to work, don't forget to include the necessary [source file](desktop/vue.md#includedfiles).

After that you need to complete several steps below:

1) register a new Vue component using usual *Vue.component(tagName,options)* declaration

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
  //always an empty div
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

The *destroyed()* function will destroy the Webix Slider instance when it will be no longer needed.

3) use the registered component in the Vue instance's template as a custom element

For this we should create a new Vue instance:

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

We put a Webix-based slider created above into the Vue template. 
 
Also we bound the "progress" data attribute both to the slider and the input elements. Thus, when its value changes, both controls will update their values
correspondingly.

**Related sample:** [Vue+Webix Custom UI](https://webix-hub.github.io/webix-vue/samples/04_custom_ui.html)

Ready-made Webix Form Controls {#customcontrols}
--------------------------------

If you feel lazy enough to wrap a Webix widget into a Vue template by yourself, we have prepared a set of ready Vue-wrapped Webix Form Controls.
The available controls are enumerated in the list below:

- < webix-text >
- < webix-datepicker >
- < webix-colorpicker >
- < webix-slider >
- < webix-select >
- < webix-richselect >
- < webix-combo >
- < webix-multicombo >
- < webix-radio >
- < webix-segmented	>
- < webix-tabbar >
- < webix-textarea >
- < webix-checkbox >

To use integrated Form controls in a Vue app, you need to include the [above-mentioned source file](desktop/vue.md#includedfiles) - <br> *webix-controls.js*.

After that you can use any of the Vue-wrapped Webix Form Controls in a Vue application as in the code below:

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

The "options" collection for multiple-value controls is set through the *v-bind* directive (e.g.:options='options'), as follows:

~~~js
new Vue({
	el: "#demo1",
	template:`
		<div>
			<webix-select  	label='Select' 	:options='options' v-model.string='cval' />						
		</div>`,
	data:{
		options:["One", "Two", "Three"],
		cval:"Two"
	}
});
~~~


**Related sample:** [Vue+Webix Form Controls](https://webix-hub.github.io/webix-vue/samples/03_form_controls.html)

In case you are still interested in creating your own custom Vue component with Webix widget inside,
read the section [Creating Custom Vue Component](desktop/vue.md#creatingcustomvuecomponent).



