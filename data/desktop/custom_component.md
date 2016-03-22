Creating a Custom Component
=============

You can create a custom component from any of the existing ones, assigning properties, methods and events to it. 

The library allows extending functionality of any component by adding [building modules](api__toc__ui_mixins.html)
to it (however, most components feature all the necessary functionality by default) as well as creating a totally custom component that inherits from the basic [view](desktop/view.md).

Simply put, the technique uses the **protoUI();** command to construct the new component with it own name, properties and functions. All the new components must be based on existing ones. 

~~~js
webix.protoUI({
   name:"newComponent", // the name of a new component
   $init:function(config){ 
  		this.load(data.xml)
        //functions executed on component initialization
   },
   defaults: 
   		{width:200}
   on:{'onItemClick' : function(){}}, //attached events
   custom_func:function(){..function description..}, //any custom function
   $getSize: function(){..}, 
   $setSize:function(){..},
}, webix.Movable, // extended functionality 
webix.ui.list); //the name of the base component 
~~~

As a result, we get a **custom component** that 

- inherits from [ui.list](desktop/list.md);
- on its initialization loads data from the 'data.xml' file
- can be moved over the screen (thanks to the [webix.Movable module](api__refs__movable.html)); 
- has a default width of 200px;
- has a *custom_func* function;
- is sized with the help of $getSize and $setSize methods (will be described later).

Later on, the component is inserted into the app the same way you do with library components: 

~~~js
webix.ui({
	view:"newComponent",
    ..config options..

})
~~~

The must-have elements for such constructor are new component's name and the component it inherits from. Additional functionality can be included to your choice. 

{{snippet
Editable List
}}
~~~js
webix.protoUI({
	name:"editlist", 
		}, 
webix.EditAbility, webix.ui.list); 
~~~


The **protoUI constructor** eliminates the need of repeated usage of the **extend();** method each time you want to initialize a new instance of your custom component. Read more about
[extended component functionality](desktop/extend.md). 


Main Methods and Properties
------------------------------

Before we describe how the mentioned technique works, it will be helpful to summarize the main methods and properties you may use while developing a component.

###Properties:

- **$view** - the HTML (&#60;div&#62;) component container.
- **$width** - the width of the component container.
- **$height** - the height of the component container.
- **$ready** - an array of commands. You may use this property to call some function as soon as the **$init** method and all the setters are executed. 
The functions are added to the array through the command **push** (call this command in the method **$init**):

~~~js
this.$ready.push(...);
~~~

###Methods:

- **defaults** - defines default settings of the component.
- **$init** - for the most part defines component initialization. Called at the very beginning.

In this method you add HTML elements, specify event handlers. 
As a parameter the method takes the object 'config' that contains all the properties which a user set in the constructor. 
Inside the method you can refer to the HTML object of the component through **this.$view**.<br>
Note, the method doesn't take properties set in the method **'defaults'**. 
They are available just after initialization is finished completely (i.e. **$init** and all the property setters are executed).

- **$getSize** - defines the size of the whole component. 
You should use this method to set the size of the component that differs from the size allocated by the parent view. 
Called when inner code inquires about height or width which should be set for the component.

The method returns the array *&#91;gravW;width;gravH;height&#93;* (width gravity, fixed width, height gravity, fixed height).

**The values of the array conform to the following rules:**

- Width(height) can take the next values:
	- any natural number;<br>
	This value is used as width(height) of the component.
	- -1;<br>
	This value tells the script to ignore the parameter.
- GravW(gravH) can take any natural value. The value '1' tells the script to ignore the parameter.
- When width(height) is set to any natural value, gravW(gravH) is ignored. When width(height) is set to -1, the script asks for gravW(gravH) value.

**The possible scenarios:**

**Sc.1** You want the parent container to set the size automatically (autosizing).

Solution: don't redefine the function or return &#91;1;-1;1;-1&#93;

**Sc.2** You want to set relative width(height).

Solution: 

a)for relative width return &#91;yourValue;-1;1;-1&#93; <br>
b)for relative height return &#91;1;-1;yourValue;-1&#93;
    
**Sc.3** You want to set fixed width(height).

Solution:

a)for fixed width return &#91;1;yourValue;1;-1&#93; <br>
b)for fixed height return &#91;1;-1;1;yourValue&#93;
    
- **$setSize** - defines behaviour and sizes of the specific elements of the component. You should use this method if your component has a complex structure. Called as soon as the size of the whole component is set (after **$getSize** method).

Let's consider some existing component, for example, window. 
It has a header and a body. Assume, you hide the header. 
The body of the window will keep the previous size but instead of the header you'll see empty space. 
To prevent this, you should specify a logic defining behaviour of the elements in such the situation. 
The appropriate logic must be specified in the method **$setSize**.

##A Custom Component

Fully custom components inherit from view, as a rule, which is an empty container for library components. Basic modules are also included into your component to support app-user interaction. 

Let's see how we can create a multi-colored header for a three-column app. 

<img src="desktop/custom_component.png"/>

~~~js
webix.protoUI({
	name:custom",
    ..configuration..},  
    webix.MouseEvents, webix.EventSystem, webix.ui.view);
~~~

- **webix.MouseEvent** - a module that makes your component support mouse events such as *'onItemClick'*;
- **webix.EventSystem** - to support event handling functionality, such as *attachEvent()* method;

It's also possible to reuse the CSS class of some other view in order to apply it to your custom component. To do this, you need to use the **$cssName** property:

~~~js
webix.protoUI({
	// a custom component
    name:"liveEditor",
    // inherits CSS class from the text component
    $cssName:"text",
}, webix.ui.text);
~~~

##Adding Functionality to the Component: 

1 . For a component you can set **CSS classes** with the help of the *className();* method defined for *$view* property that points to an HTML container of the component. It is included into the **$init** function alongside
with the **innerHTML** method to set containers for component items. 

~~~js
$init:function(config){
	this.$view.className = "my_control";
    this.$view.innerHTML = "<div class='item1'></div><div class='item2'></div>
    <div class='item3'></div>";
}
~~~

2 . Define default properties:
 
~~~js
defaults:{ controlHeight:50 }
~~~

3 . Create component items by defining item setter functions: 

~~~js
item1_setter:function(value){
	if(value)
		this.$view.childNodes[0].innerHTML = value;
	return value;
}
~~~
 
 These functions are used in the component code to set inner HTML for component items:
 
~~~js
webix.ui({
 	view:"custom", 
    item1:"Reg Form", 
    item2:"Filmset", 
    item3:"Details"
})
~~~
 
4 . Size the component. Here two methods are used: 
 
- **$getSize** - returns the current size of the component in the form of an array (min width, max width, min height, max height, gravity).  The method is optional here;
	- Use **-1** if you want to ignore any of these parameters.
- **$setSize(x, y)** - takes width and height as arguments and sets component dimensions. 
  
Both of them are used for inner logic. To size and resize existing components refer to the [dedicated article](desktop/dimensions.md).  
  
~~~js
 
$getSize:function(){
	return [1,100000,this.config.controlHeight,this.config.controlHeight,1];
},
 
$setSize:function(x,y){ 
	if (webix.ui.view.prototype.$setSize.call(this,x,y)){
		var itemWidth = Math.round(this.$width/3);
		for(var i=0;i<3;i++){
			this.$view.childNodes[i].style.width = (i==2?this.$width-
            (itemWidth*2):itemWidth) +"px";
			this.$view.childNodes[i].style.height = this.$height+"px";
		}
	}
}
~~~
 
5 . Attach events to the component

~~~js
on: {'onMouseOver': function(){...);}}
~~~

As a result, we've got a multi-colored header template within a three-columnn design and 'elastic' sizing, which means that the app can adjust its size to the current window size. 

{{sample 80_docs/new.html }}


@complexity: 3