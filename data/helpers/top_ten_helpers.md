Top 10 Helpers You Should Know About
====================================

## webix.ui

This method is used mainly to **instantiate Webix component** of any complexity level, whether it is a control or a complete application layout. 

It converts a **JSON structure** passed into it as a parameter to client-side layout objects - this is what Webix is used for:) 

~~~js
webix.ui({ view:"", ... });
~~~

Normally, you need one **webix.ui()** constructor for the whole application while any **window** or **popup** needs an extra one as windows lie above page layout.

~~~js
webix.ui({ view:"window", ... }).show();
~~~

More opportunities of using this method are described in the chapter [Rebuilding Application Layout]( desktop/dynamic_layout.md#rebuildingapplicationlayout).

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

This method allows you to make a full (independent) copy of an object:

~~~js
var new_obj = webix.copy(source_obj)// full copy
~~~

[API reference](api/_copy.md)


## webix.extend

Adds methods and properties of the source object to the target object:

~~~js
var target_obj = new webix.ui.toolbar(config);
webix.extend(target_obj, webix.Movable);
~~~

Also, it can be used as one more method to get an object copy. In such a case, you must specify an **empty object**  as the second parameter.

~~~js
var new_obj = webix.extend({},source_obj) //object based copy
~~~

[API reference](api/_extend.md)

## webix.exec

This helper allows executing code string at runtime.
  
~~~js
webix.exec(" var t = 2; ");
~~~

It has an advantage over eval: variables defined in code will be defined in the global scope, the same as in case of a normal js code. 

[API reference](api/_exec.md)

## webix.delay

Delays routine. If you need to delay some code from executing at runtime you are at the right place. 
**webix.delay** waits for the specified number of milliseconds and then executes the specified code.

~~~js
webix.delay(webix.animate, webix,[node,animation],10)
~~~

[API reference](api/_delay.md)

## webix.uid

A tool for getting a unique id (id is unique per session, not globally unique).

~~~js
var name = webix.uid();
~~~

[API reference](api/_uid.md)

## webix.event

**webix.event** is used to attach event handlers and **webix.eventRemove** - to remove them. 
  
~~~js
var display_handler = webix.event(document.body,'click',function(e){})
...
webix.removeEvent(display_handler);
~~~

[API reference](api/_event.md)

## webix.html.offset

With the help of this method you can get the position of any HTML element.

~~~js
var offset = webix.html.offset(ev.target)
~~~

[API reference](api/html_offset.md)

## webix.html.addCss

Two methods implementing CSS manipulations. **webix.html.addCss** allows adding a CSS class to an element, **webix.html.removeCss** - removes some defined CSS class.
  
~~~js
webix.html.addCss(this._headbutton, "collapsed");
...
webix.html.removeCss(this._headbutton, "collapsed");
~~~
[API reference](api/html_addcss.md)


{{note
All Webix helpers are listed in the related [API Reference section](api/refs/common_helpers.md). 
}}

@complexity:2