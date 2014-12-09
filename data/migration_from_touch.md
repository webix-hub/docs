Migration from DHTMLX Touch
=========================

If you want to migrate to the Webix library, you should include [two additional libraries](http://docs.webix.com/packages/touch_migration.zip): **touchui_migration.js** and 
**touchui_migration.css**, and also you can  make the changes described in this article if they are needed:


You can grab those files by [the next link](http://docs.webix.com/packages/touch_migration.zip)


Data Components
---------------
(DataStore, Lists, Grid, Dataview, Chart)

The definition of sorting/grouping in the view configuration was changed. 
You need to use the scheme property and the field name without "#". For complex templates use functions

**Old usage**

~~~js
dhx.ui({
	sort: "#name#"
});
~~~

**New usage** 

~~~js
webix.ui({
	scheme:{
    	$sort: {
        	by:"name"
        }
	}
});
~~~



###Grouplist


"Back" items already contain the "<" icon by default. The **templateBack** property requires defining the text of a "back" item only 

**Old usage**

~~~js
templateBack:"&lt; #title#",
~~~

**New usage** 

~~~js
templateBack:"#title#",
~~~



DataProcessor
----------


The onDBerror event is not supported any more. Use the onAfterSaveError event instead

**Old usage**

~~~js
dp.attachEvent("onDBerror",function(response, state){
 ...
})
~~~

**New usage** 

~~~js
dp.attachEvent("onAfterSaveError",function(id,status,obj,details){ 
var state = dp.getItemState(id); 
...
});
~~~

Window and Layout
-----------

###Layout and related 


Full screen layout considers the sizes of inner views and can have smaller sizes than document body. For example, if all rows of layout have fixed height, the layout's height will be calculated like a sum of these rows' heights. 
So, if you want your layout to occupy the whole page and to consist of rows/cols with fixed height, you should add a row/col without height/width specified.

**Old usage**

~~~js
dhx.ui({
	rows:[
       {view: "text", ...}
    ]
});
~~~

**New usage** 
~~~js
webix.ui({
    rows:[
        {view: "text", ...},
        {}
    ]
});
~~~



###Window

Now window is hidden by default. To show it, call the api/link/ui.window_show.md method.

**Old usage**
~~~js
dhx.ui({
	view: "window",...
});
~~~
	
**New usage**    
~~~js
webix.ui({
	view: "window",...
}).show();
~~~



Tabbar, Segmented,Radio, Richselect, Combo
-------------------------

We should use "id" to define options keys instead of "value" and "value" to define titles instead of "label"

**Old usage**

~~~js
options: [
     {value: 1, label: "Option 1"}, ... 
]
~~~

**New usage**

~~~js
options: [
     {id: 1, value: "Option 1"}, ... 
]
~~~

###Tabbar



1) Tabbar has a new property **tabMinWidth**. It sets minimum width of tabbar buttons, the value is 100 by default. 
Options that do not fit will be put in a popup. This popup is displayed by clicking the  "..." icon.

~~~js
{view:"tabbar", tabMinWidth:90,...}
~~~

2) Parameters of the onBeforeTabClick and onAfterTabClick events were changed. Now event handlers take two paremeters: 
id of the clicked option and the native event object

**Old usage**
~~~js
$$("tabbar").attachEvent("onAfterTabClick",
 function(tabbarId, optionId) {
..
});
~~~

**New usage**
~~~js
$$("tabbar").attachEvent("onAfterTabClick", 
function(optionId, event) {
..
});
~~~

###Tabbar, Segmented


Use the "value" property instead of the "selected" one to set a button's value

**Old usage**

~~~js
{ view: "tabbar" , selected: 2, ...}
~~~

**New usage**

~~~js
{ view: "tabbar" , value: 2, ..}
~~~


###Richselect, Combo


1) Use the "suggest" view instead of the "popup" one to define a custom popup in Richselect and Combo

**Old usage**

~~~js
dhx.ui({
      view: "popup",
      id: "comboOptions",
      body:{ view:"list"}
});
dhx.ui({
      view: "combo", 
      popup:"comboOptions"
});
~~~

**New usage**
~~~js
webix.ui({
    view: "suggest",
    id: "comboOptions",
    body:{ view:"list",...}
});
webix.ui({
     view: "combo", 
     suggest:"comboOptions"
});
~~~

2) Use **control.getPopup().getList()** instead of **$$(controlId+"_list")** to get list 
 
**Old usage**

~~~js
var list = $$("myCombo_list")
~~~

**New usage**

~~~js
var list = $$("myCombo").getPopup().getList();
~~~





Form and Toolbar
----------------

1) The method setValues sets values to elements by their "name" properties. The getValues method returns hash of values by elements' names. 
The previous version accepted "id" as well as "name". Now ids are ignored.

**Old usage**

~~~js
dhx.ui({
    view: "form",
    id: "myform",
    elements:[
        { view: "text", name: "valueA", value: 1},
        { view: "text", id: "valueB", value: 2}
    ]
});


$$("myForm").getValues(); 
//same returns {valueA: 1, valueB:2}
~~~

**New usage**

~~~js
webix.ui({
    view: "form",
    id: "myform",
    elements:[
        { view: "text", name: "valueA", value: 1},
        { view: "text", id: "valueB", value: 2}
    ]
});

$$("myForm").getValues(); // returns {valueA: 1}
~~~

2) If you set an event handler (for example, onItemClick, onBeforeTabClick) for controls to
their parent Toolbar or Form, the handler will be called only for those elements that have the "name" property.  

**Old usage**

~~~js
dhx.ui({ 
    view: "toolbar", 
    id: "myToolbar",
    elements:[
       { view: "button", id: "btn1", ...},
       { view: "button", id: "btn2", ...},
       ...
    ]
});

$$("myToolbar").attachEvent("onItemClick", function(id){
       alert("Clicked item is "+id);
});
~~~

**New usage**

~~~js
webix.ui({ 
    view: "toolbar", 
    id: "myToolbar",
    elements:[
       { view: "button", name: "btn1", ...},
       { view: "button", name: "btn2", ...},
       ...
    ]
});

$$("myToolbar").attachEvent("onItemClick", function(name){
       alert("Clicked item is "+name);
});
~~~

###Toolbar

The "type" property is not supported

**Old usage**

~~~js
{ view: "toolbar", type: "SubBar" ...}
~~~

**New usage**

~~~js
{ view: "toolbar", ...}
~~~




Slider
---------

Options are not supported. Use the **min**, **step** and **max** properties to define the range

**Old usage**

~~~js
{ view:"slider", ..., 
   options:[
   {value: 1, label: 1}, 
   {value: 2, label: 2},
   ....
]}
~~~

**New usage**

~~~js
{ view:"slider", min: 1, step: 1, max: 10}
~~~

Autogenerated ids
-------------------

If you did not set the id for a certain view, it will get the id in the following format: **"$"+ViewName+ViewIndex**

**Old usage**

~~~js
// we create a list without id definition
dhx.ui({view: "list",....});
// the id is set automatically - list1 (list2,...)
$$("list1").select(id);
~~~

**New usage** 

~~~js
// we create a list without id definition
webix.ui({view: "list",....});
// the id is set automatically - $list1 ($list2,...)
$$("$list1").select(id);
~~~


webix.message() 
-----------------


(dhx.notice() in old version)

Use the "type" property instead of the "css" one to customize style of the message container

**Old usage**

~~~js
dhx.notice(css: "error",...)
~~~

**New usage** 

~~~js
webix.message(type: "error",...)
~~~


Controls
--------

###Toggle


Toggle now looks and behaves like a two-state button. It is one button that changes its style and 
label on click. If you want to use a control that is similar to the toggle used in the previous version, 
you should choose the segmented button instead.

**Old usage**

~~~js
{ view:"toggle", id:'trip', options: ["Roundtrip","Oneway"] }
~~~

**New usage**

~~~js
{ view:"segmented", name:'trip', options: ["Roundtrip","Oneway"]}
~~~


###Round button

Button with the type "round" is not supported any more

**Old usage**

~~~js
{view:"button",type: "round",...}
~~~

**New usage**

~~~js
{view:"button",...}
~~~

History
-----------

We need to use the track(id) method instead of the start() one and pass the id of the tracked element (id of tabbar for example)

**Old usage**

~~~js
dhx.history.start()
~~~

**New usage**

~~~js
webix.history.track('tabbarId')
~~~


webix.proxy
-----------

The new version requires a new proxy definition

**Old usage**

~~~js
var proxy= new dhx.proxy({
	url: "data.php",
    storage: dhx.storage.local
});
~~~

**New usage**

~~~js
var proxy = new webix.proxy( "local", "data.php" );
~~~

webix.Date
--------------

Some Date methods do not create a copy by default. If the copy parameter is not set to true, the passed Date object will be modified.

**Old usage**

~~~js
var next = dhx.Date.add(d,1,"day");
~~~

**New usage**

~~~js
var next = webix.Date.add(d,1,"day",true);
~~~

@linkclass: hidden
@index:
- additional_migration_changes.md

