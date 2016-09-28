Component Copying and Extending
=============

Components in Webix UI library are objects that can be cloned and copied. They can also inherit properties from each other. 

Let's take for instance the Toolbar component and play around with it. It has three properties - width, height and cols object with three buttons. 

~~~js
var barA = { view:"toolbar", width:500, paddingY:2, cols:[
	{ view:"button", value:"Load" },
	{ view:"button", value:"Save" },
	{ view:"button", value:"Info" }
]};
~~~

##Copying

####Shallow Copying

Shallow copying is implemented via the **clone();** method. A clone of an object is an empty object with a prototype reference to the original one.

It doesn't go deep during copying and clones the structure of the source component. All the changes you make in the source object are reflected in the target object. 

~~~js
var barB = webix.clone(barA);

barA.width = 400; 

barA.width --> 400
barB.width --> 400
~~~

This is how a new [pager](desktop/paging.md) is created on the base of the *pagerA* one. 

~~~js
$$("pagerA").clone({
	container:"pagingB_here", //own parameters
	size:50,				
	group:5
});
~~~

{{sample 25_pager/05_twoareas.html}}


####Deep Copying

During deep copying, which is implemented via the **copy();** method, a physical copy of a parent object is being made. 

The copy is fully independent. So,if later on you make changes in the source object, the properties of the target object remain unchanged. 
However, the method doesn't work for structures with inner loops.

~~~js
var barB = webix.copy(barA);

barA.width = 400;

barA.width --> 400
barB.width --> 500 // initial value from the source object
~~~

The method is useful when you'd like to create two independent instances of one and the same object on the page.

##Inheritance

New components can be created based on pre-existing ones. There is an **extend();** function that merges the properties of two objects into a 
new one. If any of the shared properties gets changed in the target object, it is changed as well in the source one. Native properties of the two 
objects are independent. 

{{note
extend(object **target**, object **source**, [boolean **overwrite**])
}}

- **Target** is an object that is being extended. It receives new properties.
- **Source** is a component that acts as a source for the target component;
- **Overwrite** is *false* by default, yet it can be set to *true*. In this case, the properties that coincide are overwritten to the values of the 
source object (sometimes you can get a full copy). 

~~~js

barB = {view:"toolbar", cols: [{view:"button", value:"Accept"}]};

webix.extend(barB, barA); 

//here we get: 

barB = {view:"toolbar", width:500, paddingY:2, cols: [{view:"button", value:"Accept"}]};
//width and padding are inherited properties
~~~

Full (object-based) copy with the help of extend();

~~~js 

webix.extend(barB, barA, true); 

//here we get a copy with all the properties overwritten: 

var barB = {view:"toolbar", width:500, paddingY:2, cols:[
	{ view:"button", value:"Load" },
	{ view:"button", value:"Save" },
	{ view:"button", value:"Info" }
]};
~~~

##Extended Functionality

####Late Binding

Here we try to find how to extend component functionality with properties that aren't typical of it and not stated in its API. For instance, we want a component to be movable. 
It can be enabled with the **extend();** method while the source object here is **webix.Movable** module. 

~~~js
webix.ui({
	view:"toolbar",
    ...
});
webix.extend($$("my_toolbar"),webix.Movable);
~~~

Now our toolbar can can be moved across the screen. 

It is a so-called **late binding**. In fact the target object here is supplied with some properties from the source object while preserving its native properties. Moreover, inherited methods won't overwrite
existing methods with the same name.

####Early Binding

If you want to put apart inherited and native methods of the same name, you should refer to **early binding**, where prototypes of two objects are merged. 

{{snippet
Movable Toolbar
}}
~~~js
mytoolbar = webix.proto({webix.Movable},webix.ui.toolbar);
var obj = new mytoolbar({ view:"toolbar",... });
// outputs a movable toolbar
~~~

To extend component's existing functionality you can as well use **api/_protoui.md** method that creates the new view based on some of the existing ones.
This is how it looks in case you want to make your list editable. 

{{snippet
Editable List
}}
~~~js
webix.protoUI({
	name:"editlist"
}, webix.ui.list, webix.EditAbility);
            
webix.ui({
	view:"editlist", 
	...
});         
~~~

{{sample 05_list/05_editable.html }}

@complexity:3