Top 10 Helpers You Should Know About
====================================

## webix.ui

This method is used mainly to **instantiate Webix component** of any complexity level, either it is a control or the complete application layout. 

It converts a **JSON structure** passed into it as parameter to client-side layout objects - this is what Webix is used for:) 

~~~js
webix.ui({ view:"", ... });
~~~

Normally, you need one **webix.ui()** contructor for the whole application while any **window** or **popup** needs an extra one as windows lie above page layout.

~~~js
webix.ui({ view:"window", ... }).show();
~~~

In addition, the method can be used to

- **redraw layouts** (layout, multiview, form, accordion) that feature arrays in their structure:

~~~js
webix.ui({
	view:"form", id:'myform', elements:[...]
});

//redraw form with new elements
webix.ui([..new elements..], $$('myform'));
~~~

- **replace** any existing object:

~~~js
webix.ui({
	id:'mylayout',
	rows:[
    	{view:'toolbar', ...}
    	{view:'datatable', id:'mydatatable' ...},
    ]
});

//replace datatable
webix.ui({..new config..}, $$('mylayout'), $$('mydatatable'));
~~~

In this case **webix.ui()** takes the following **parameters**:

- component configuration (JSON object);
- parent component ID;
- ID or index of the component being replaced.

BTW, if you don't specify the ID for the component, it will be generated automatically. You can always get the component ID  by using:

~~~js
var id = component.config.id;
~~~

## webix.ready

This method is a cross-browser alternative to the **onDocumentReady** event and can be used instead of **onload()** method. 
Code, which was put inside of it, will be called just after the complete page has parsed, protecting you from potential errors. 
The thing is optional but we recommend to use it.

It can be used multiple times. 

~~~js
 webix.ready(function(){ 
     webix.ui({
         container:"box",
         view:"window",
                ...
     });
 })
~~~
[API reference](api/_ready.md)


## webix.bind

An easy way to bind a function to an object (inside bound function, **this** will point to an object instance). 
  
~~~js
var t = webix.bind(function(){
    alert(this);
}, "master");

t(); //will alert "master"
~~~


## webix.copy
This method allows you to make a full (independent) copy of object

~~~js
var new_obj = webix.copy(source_obj)// full copy
~~~
[API reference](api/_copy.md)

## webix.extend
Adds method and properies of source object to the target object

~~~js
var target_obj = new webix.ui.toolbar(config);
webix.extend(target_obj, webix.Movable);
~~~

Also, it can be used as one more method to get an object copy. In such case, you must specify an **empty object**  as second  parameter.
~~~js
var new_obj = webix.extend({},source_obj) //object based copy
~~~
[API reference](api/_extend.md)

## webix.exec

Next helper allows to execute code string at runtime.
  
~~~js
webix.exec(" var t = 2; ");
~~~
It is have advantage over eval - variables defined in code will be defined in global scope, the same as in case of normal js code. 

[API reference](api/_exec.md)

## webix.delay
Delay routine. If you need to delay some code from executing at runtime you are at the right place. **webix.delay** waits for the specified number of milliseconds and then executes the specified code.

~~~js
webix.delay(webix.animate, webix,[node,animation],10)
~~~

[API reference](api/_delay.md)

## webix.uid
A tool for getting an unique id. ( id is unique per session, not globally unique )

~~~js
var name = webix.uid();
~~~

[API reference](api/_uid.md)

## webix.event
**webix.event** is used to attach event handler and **webix.eventRemove** - to remove it. 
  
~~~js
var display_handler = webix.event(document.body,'click',function(e){})
...
webix.removeEvent(display_handler);
~~~
[API reference](api/_event.md)

## webix.html.offset
With the help of this method you can get the position of any html element.

~~~js
var offset = webix.html.offset(ev.target)
~~~
[API reference](api/html_offset.md)

## webix.html.addCss
Two methods implementing css manipulations. **webix.html.addCss** lets to add css class to element, **webix.html.removeCss** - removes some defined css class.
  
~~~js
webix.html.addCss(this._headbutton, "collapsed");
...
webix.html.removeCss(this._headbutton, "collapsed");
~~~
[API reference](api/html_addcss.md)


{{note
All Webix helpers are listed in the related  of [API Reference section](api/refs/common_helpers.md). 
}}

@complexity:2