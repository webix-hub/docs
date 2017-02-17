Vue JS Integration
=====================

Webix provides the possibility of integration with [VueJS](https://vuejs.org/) framework. This union will be especially fruitful 
if you want:

- to build a Vue application with Webix widgets inside
- to create a Webix-based application with the benefits of Vue.js

We highly recommend you to use the [Webix Jet](https://webix.gitbooks.io/webix-jet/content/chapter1.html) framework for building 
web apps with Webix, as it is native for the library and will help you to manage the development stages in the most natural way. 
Thus, you will avoid possible difficulties and excessive code.

We also advise you against using Vue.js as an MVC framework for developing a Webix-based applications, since there are two main
pitfalls:

- Webix widgets won't adjust their sizes properly during layout resizing
- such implementation requires too much overhead for not many benefits

Nevertheless, there are obvious advantages in the joined usage of Webix and Vue.js. Let's consider them in detail.

####Included files

First, you should pay attention that the discussed integration isn't included into Webix library. To start using it in your project, 
you need to take the necessary sources from [GitHub](https://github.com/webix-hub/webix-vue).

Then you need to include the link to the vue.js source file in the head of your HTML page. We will use the minified 
js file for our examples:

~~~html
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
~~~

After that include the JS and CSS file of Webix:

~~~html
<script type="text/javascript" src="//cdn.webix.com/edge/webix.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.webix.com/edge/webix.css">
~~~


Use-cases Details
-------------------

Now we will consider two most common cases when integration will be really useful:

###Vue app with Webix widgets

If you are going to implement a large-scale application with Vue.js, it may require hard work with various data.
This task can be solved by using lightweight and compact Webix widgets. 

####Initializing Webix view in a Vue app

To add a Webix widget into a Vue-based app, you need to include the following file after files of libraries:

~~~html
<script type="text/javascript" src="../sources/webix-ui.js"></script>
~~~

Next you need to complete the steps below:

- initialize a new Vue and *webix-ui* inside of its template
- specify an object with a Webix UI inside of the *data* object of the vue 
- set the name of this object in the v-bind directive "config" of the template

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
				}, {
					view:"list", select:true,
					data: data
				}]
			}
		}
	});
~~~

[See the demo#1](https://github.com/webix-hub/webix-vue/blob/master/samples/01_webix_ui.html).

####Data binding

VueJs allows binding data between a Webix widget and its own template. In the example below we add a Webix datatable widget into
a Vue app and use v-model directive that stores data of the widget for updates. Also we have a button inside the template.
The button is subscribed to the event :click. When the button is clicked, this event fires and cleans data in the datatable. 

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
 
 [See the demo#2](https://github.com/webix-hub/webix-vue/blob/master/samples/01_webix_ui.html).
