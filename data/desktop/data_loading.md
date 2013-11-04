Data Loading 
===================

After a data component has been inited, you need to populate it with data in any of supported [formats](desktop/data_types.md): JSON, XML, CSV, JSArray, HTMLtable.  

There we have two major possibilities that are true for all the data components.

- [Loading from External Resourse - File or Database](#file)
- [Parsing from String](#parse)

After data has been pushed to component (loaded or parsed) it should be rendered within the component width the help of [Webix templates](desktop/html_templates.md). 

##Loading from External Resourse

To load data from an external file or database, you should specify the **path** to this file/or serverside script that fetches data: 

1 . As value of the component **url** property. Data will be loaded right after component initialization. [Type](desktop/data_types.md) of incoming data should be specified (if it's not JSON) as well.

~~~js
{
	view:"list"
	url:"data.xml"
    datatype:"xml"
}
~~~

2 . As a parameter to the [load()](api/link/dataloader_load.md) function you apply to the component on the necessary event. 

~~~js
$$("mylist").load("data.xml");
~~~

**Load** function has three parameters:

- **path** to the necessary file or script;
- [datatype](desktop/data_types.md) - in case of JSON data this parame can be omitted;
- **callback** function if needed. 

~~~js
$$('component_id').load(".../data.xml", "xml", function(){
  //callback function
});
~~~

{{sample 40_serverside/01_php_vanila/06_form_loading.html}}

It can be called on the necessary page event (button clicking, etc.) as well as on component inner event. 

{{snippet
As soon as the component is parsed: 
}}
~~~js
webix.ui({
view:"list",
ready:function(){
	this.load("data/books2.xml","xml");
    this.select(this.getFirstId());
	}
});
~~~

###Loading via Proxy Objects 

At the same time, you can set rather a complicated loading pattern in a **proxy object** you pass into the **url** property or **load()** function. 

Webix features predefined proxy objects for [offline support](desktop/server_offline.md), [connector usage](desktop/dataconnector.md), etc. To learn more about proxy functionality, 
consult the [dedicated article](desktop/server_proxy.md). 

~~~js
view:"list"
url:{
	$proxy:true, 
    load: function(self){
    	self.load(a.json);
    },
     save:function(){
     ...
    }
}
~~~

Furthermore, if a serverside dataset is too big, [dynamic loading](desktop/dynamic_loading.md) allows to load limited quantity of data items first and then load new data only as you scroll or 
[page](desktop/paging.md) through the component.

{{note
Note that there's a separate article dedicated to [Serverside Integration](desktop/serverside.md). There you'll also find customization patterns for loading from server.
}}

###Setting an Alternative Datasource for a Bound Component

With **bound components** you can enable data loading not from master component (as expected by default), but directly from server. 

~~~js
{
	view:"list"
	url:"data/list.php" //the default datasource
},
{ 
    view:"form", 
    id:"form11",
    ...  
    dataFeed: "data/form.php" //datasource for the form only 
}

// form takes data from selected record in list
$$('form1').bind($$('list1')); 
~~~

More on [Data Binding](desktop/data_binding.md)

Interaction with Users during Loading - Overlay Boxes 
--------------------

Overlay boxes are info boxes that are laid over the component for a while to display desired data.

With data loading you can use overlay boxes:

- to inform users that data is beling loaded (in case of big datasets);
- to inform users that there's no data for this component. 

~~~js
webix.ui({
	view:"list", 
    url:"...",
	ready:function(){
		if (!this.count()){ //if no data is available
			webix.extend(this, webix.OverlayBox);
			this.showOverlay("<div style='margin:75px; font-size:20px;'>There is no data</div>");
		}
    }
});
~~~

{{sample 05_list/07_empty_list.html}}

Data Loading Events
------------------------

Webix offers the following events to control the beginning and the end of the loading process:

- **onBeforeLoad** - fires just the moment XML data loading begins;
- **onAfterLoad** - fires when XML data loading is complete;
- **onStoreLoad** - fires when raw external data is fully loaded (regardless of data type).

~~~js
mygrid.attachEvent("onAfterLoad", function(){
    webix.message("Data loaded");
})
~~~

{{sample 15_datatable/01_loading/05_load_message.html}}


Note that **datatable** featurs [prebuilt overlay support](datatable/loading_data.md#loadingscreen) while other components should be extended with this functionality:

~~~js
webix.extend($$(list1), webix.OverlayBox); // on "this" pointer if the method is called within the component
~~~

Common overlay box methods are as follows: 

- **showOverlay**(text);
- **hideOverlay()**;

Read more about [Component Copying and Extending](desktop/extend.md) in the dedicated article. 

{{note
In case something goes wrong with loading (and sometimes it does!) learn how to handle errors on the client side in the 
[Processing loading errors](desktop/loadingerror.md) article.
}}

Parsing {#parse}
------------------

Here the data in supported formats comes as it is (string or array). 

Firstly, it may be the value of data parameter.

{{snippet
JSON array within the Dataview object
}}
~~~js
webix.ui({
	view:"dataview",
	template:"#title# Year: #year#, rank: #rank#",
	data:[
		{ id:1, title:"The Shawshank Redemption", year:1994, rank:1},
		{ id:2, title:"The Godfather", year:1972,  rank:2},
		{ id:3, title:"The Godfather: Part II", year:1974, rank:3}
	]
});
~~~

{{snippet
JSON object is stored in a variable declared beforehand
}}

~~~js
var tabledata=[
	{ id:1, title:"The Shawshank Redemption", year:1994, rank:1},
	{ id:2, title:"The Godfather", year:1972,  rank:2},
	{ id:3, title:"The Godfather: Part II", year:1974, rank:3},
	{ id:3, title:"The Godfather: Part II", year:1974, rank:3}
];
    
webix.ui({
	view:"dataview",
	template:"#title# Year: #year#, rank: #rank#",
	data: tabledata
});
~~~

{{note
The variable may be declared either in the same file or in an external js-file you refer to in the document's head.
}}

Secondly, data can be parsed with the help of **parse();** method that takes data and datatype as parameters.

{{snippet
Data Parsing from XML string 
}}

~~~js
webix.ui({
	view:"dataview",
    id:"dataview",
    datatype:"xml",
});
        
 //function is executed on pre-defined event, e.g. on button click
 
function parse(){ 
     var str = "<data>
     		<item id='10'><title>The Lord of the Rings</title> 
    		<year>2003</year><rank>10</rank></item>";
		</data>";
     $$("dataview").clearAll();
     $$("dataview").parse(str,"xml");
   }

~~~

{{sample 06_dataview/03_loading/01_xml.html }}

##Data Parsing Events

- **onParse** - fires when the component is ready to receive inline data

~~~js
dtable.attachEvent("onParse", function(driver, data){
    //for json data
    webix.message("Count of records "+data.length);
});
~~~

@index:
  - desktop/data_types.md
  - desktop/dynamic_loading.md
  - desktop/loadingerror.md

@complexity:1