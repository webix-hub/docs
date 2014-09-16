Additional Migration Changes
===============================


In this article you'll find the migration issues that are solved by including the **touchui_migration.js** file.

Data Components
-----------------

(DataStore, Lists, Grid, Dataview, Chart)

Some datastore methods and methods of views that based on DataStore (list,grid,dataview and others) were renamed:

<table>
<tr><td><b>Old usage</b></td><td><b>New usage</b></td></tr>
<tr><td>var count = list.dataCount();		</td><td>var count = list.count();				</td></tr>
<tr><td>var item = list.item(id);			</td><td>var item = list.getItem(id);			</td></tr>
<tr><td>list.update(id,data);				</td><td>list.updateItem(id,data);				</td></tr>
<tr><td>var index = list.indexById(id);		</td><td>var index = list.getIndexById(id);		</td></tr>
<tr><td>var id = list.idByIndex(index);		</td><td>var id = list.getIdById(index);		</td></tr>
<tr><td>var nextId = list.next(id,step);	</td><td> var nextId = list.getNextId(id,step);	</td></tr>
<tr><td>var firstId = list.first();			</td><td>var firstId = list.getFirstId();		</td></tr>
<tr><td>var lastid = list.last();			</td><td>var lastId = list.getLastId();			</td></tr>
<tr><td>var prevId = list.prev(id,step);	</td><td>var prevId = list.getPrevId(id,step);	</td></tr>
<tr><td>var id = list.getSelected();		</td><td>var id = list.getSelectedId();			</td></tr>
</table>

###Dataview

Selection is not enabled by default

**Old usage**

~~~js
{view: "dataview", ...}
~~~

**New usage**  

~~~js
{view: "dataview", select: true,...}
~~~

###Grouplist

In case of **json datasource** you should use the **item** property in it to define child collection (there was "data" before)

**Old usage**

~~~js
//JSON data source:
{ id:"root", value:"top item", data:[ ... ]}
~~~

**New usage** 
~~~js
//JSON data source:
{ id:"root", value:"top item", item:[ ... ]}
~~~

###Pagelist


Use the getActiveId() method instead of the getActive() one to get the id of the first visible item

**Old usage**

~~~js
var id = $$("list").getActive();
~~~

**New usage**

~~~js
var id = $$("list").getActiveId();
~~~


DataProcessor
---------------

If you are using connector on the server side, 
you should start definition of the url property of DataProcessor with "connector->"

**Old usage**

~~~js
var dp = new dhx.DataProcessor({
     url:"update.php", 
     ...
});
~~~

**New usage** 

~~~js
var dp = new webix.DataProcessor({
     url:"connector->update.php",
     ..
});
~~~

Views of Layout and Window
-----------------------------

Use the getParentView() method instead of the getParent() one

**Old usage**

~~~js
var parentView =  view.getParent()
~~~

**New usage** 

~~~js
var parentView = view.getParentView()
~~~

Window
------------

By default window is hidden and doesn't have fixed size. Its size is adjusted to the size of its content. Window view appears in the **left:0, top:0** position.

**Old usage**

Library sets by default for this view: **top:300, left:100, width:300, height:200**

**New usage**   

Library sets by default for this view: **top:0, left:0, autofit:true**


Scrollview
------------

Use the "body" property instead of the "content" one to define the inner view of Scrollview

**Old usage**

~~~js
{
	view: "scrolview",..., 
    content:{ view: "template",...}
}
~~~

**New usage** 

~~~js
{
	view: "scrolview",..., 
    body:{ view: "template",...}
}
~~~

Tabbar
----------

The default type of tabbar was changed. You should set the type:"bottom" if you want to show a tabbar below a multiview

**Old usage**

~~~js
{ view:"tabbar", ...}
~~~

**New usage**

~~~js
{ view:"tabbar", type: "bottom",...}
~~~

Multiview
---------

Use the getActiveId() method instead of the getActive() one to get the id of an active view

**Old usage**

~~~js
var id = $$("views").getActive();
~~~

**New usage**

~~~js
var id = $$("views").getActiveId();
~~~



Datepicker and other cases
-----------------------------
1) The default date format is set by the **dhx.i18n.parseFormat**. It is **"%Y-%m-%d"** by default. 
 
**Old usage**
 
The default date format "%d.%m.%Y".

**New usage**

The default date format is "%Y-%m-%d".

2) Use the "value" property instead of the "date" one to define the control's value

**Old usage**

~~~js
{ view:"datepicker", date:new Date(2014,7,1)}
~~~

**New usage**
~~~js
{ view:"datepicker", value:new Date(2014,7,1)}
~~~



Message Boxes
------------


###notice


Use **webix.message** instead of **dhx.notice**

**Old usage**

~~~js
dhx.notice(text)
~~~

**New usage**   
~~~js
webix.message(text)
~~~

###webix.alert, webix.confirm, webix.message

Use the **text** property instead of the **message** one to define the popup text

**Old usage**

~~~js
dhx.alert({message:'Incorrect password!"})
~~~

**New usage** 

~~~js
webix.alert({text:'Incorrect password!"})
~~~

Controls
-------------

###Imagebutton

Use the view "button" with the type "image"

**Old usage**

~~~js
dhx.ui({ view: "imagebutton", ...});
~~~

**New usage**

~~~js
webix.ui({ view: "button", type: "image", ...});
~~~

###Button

By default, a button's alignment is "left" ("center" in the previous version)

**Old usage**

~~~js
dhx.ui({view:"button",inputWidth:100,..})
~~~

**New usage**

~~~js
webix.ui({ 
view:"button",inputWidth:100, align:"center",...})
~~~

webix.KeyEvents
-------------

This module does not exist any more. The onTimedKeyPress event listening is enabled by default.

**Old usage**

~~~js
dhx.extend($$('filter'),dhx.KeyEvents);
~~~
