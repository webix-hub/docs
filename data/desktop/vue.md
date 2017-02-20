Vue JS Integration
=====================

Webix provides the possibility of integration with [VueJS](https://vuejs.org/) framework. This union will be especially fruitful 
if you want:

- [to build a Vue application with Webix widgets inside](desktop/vue.md#vue_app)
- [to create a Webix-based application with the benefits of Vue.js](desktop/vue.md#webix_app)

We highly recommend you to use the [Webix Jet](https://webix.gitbooks.io/webix-jet/content/chapter1.html) framework for building 
web apps with Webix, as it is native for the library and will help you to manage the development stages in the most natural way. 
Thus, you will avoid possible difficulties and excessive code.

We also advise you against using Vue.js as an MVC framework for developing a Webix-based applications, since there are two main
pitfalls:

- Webix widgets won't adjust their sizes properly during layout resizing
- such implementation requires too much overhead for not many benefits

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

After that include the JS and CSS file of Webix:

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

- initialize a new Vue and use the tag  *< webix-ui >* inside of its template to define a Webix widget
- specify an object with a Webix UI inside of the *data* object of the vue 
- set the name of this object in the *v-bind* directive "config" of the template

Let's consider an example. Here we have placed a "ui" object with a Webix layout into a Vue template:

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
a Vue app and add a button by clikc on which data in the datatable will be cleared:

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

There is a *view:"vue"* widget added specially for this purpose. It can be used as a native Webix widget. The only thing you need is to include the 
corresponding JS file [after the source files of two libraries](desktop/vue.md#includedfiles):

~~~js
<script type="text/javascript" src="../sources/vue-view.js"></script>
~~~

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
	view:"vue",
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

**Related sample:** [view:"vue" in a Webix app](https://github.com/webix-hub/webix-vue/blob/master/samples/02_webix_datatable.html)
