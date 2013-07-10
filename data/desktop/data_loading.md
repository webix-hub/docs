Data Loading 
===================

After the initialization of components you need to populate them with data coming in various [formats](desktop/data_types.md): JSON, XML, CSV, JSArray.  

There we have three major possibilities, depending on where you have the data stored. All of them are true for all the data-presenting components.

- [Loading from File](#file)
- [Parsing from String](#parse)
- [Loading from Database](#db)

Basically, here you make use of either of the two methods - **load()** and **parse()**. 

- The usage of the **load()** method makes the same effect as the **url** property in the component constructor since they both link 
to a file with data. 
- **Parse()** method can be by analogy substituted by the **data** property. Both data and parse refer to a string with data values. 

###Load() Function 

It is called from the component object and takes data **url** and data **type** as arguments. Optionally, a callback function is specified. JSON data type is default; hence, the *datatype* argument can be omitted if 
you load JSON data. 

~~~js
$$('component_id').load(".../data.xml", "xml", function(){
  //callback function
});
~~~

{{sample 40_serverside/01_php_vanila/06_form_loading.html}}

At the same time, loading pattern can be set in the **url** object that may contain a loading function of any complexity. It is used when additional functionality is required. 

~~~js
url:{
	$proxy:true, 
    load: function(self){
    	self.load(a.json);
    }
}
~~~

This is a simplified example of **proxy** usage. To learn more about proxy functionality for application offline support consult the [dedicated article](desktop/offline.md). 


Loading from File {#file}
---------------

You can load data after the component has been initialized: 

{{snippet
Loading data using load method
}}
~~~js 
 webix.ui({
    id:"data",
	view:"dataview",
    template: "#item1#</br>#item2#"
  });

$$("data").load("path/someurl.xml")
//here data is stored in the ready-made xml file
~~~

You can also specify data source during component initialization: 

{{snippet
As value of url parameter:
}}
~~~js
	webix.ui({
		view:"dataview",
		template:"#Package##Maintainer#",
		url:"data/data.xml",
		datatype:"xml"
	});	
~~~

{{snippet
With the function called when the page is fully loaded: 
}}
~~~js
webix.ui({
view:"list",
ready:function(){
				this.select(this.getFirstId());
				this.load("data/books2.xml","xml");
				}
      })
~~~

Words between hash symbols (#) in a component [template](desktop/html_templates.md) correspond to the properties of data objects, or XML-tags. Their values will be displayed on the page. 


Speaking about **ui.tree**, the template appears to be more complicated since we need file and folder icons to finish tree branches. 

{{snippet
Tree initialization
}}

~~~js
webix.ui({
	view:"tree",
	id:"tree",
	select: true,
	url:"domeurl.json",
	template:"{common.icon()} {common.folder()}#name#", 
    //differentiates between directory and file automatically
	width:310
	})
~~~

Look up for more details on data templates in the [corresponding chapter of the documentation](desktop/html_templates.md).

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
		{ id:3, title:"The Godfather: Part II", year:1974, rank:3},
		{ id:4, title:"The Good, the Bad and the Ugly", year:1966, rank:4}
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
		{ id:4, title:"The Good, the Bad and the Ugly", year:1966, rank:4}
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
        id:"data",
		view:"dataview",
		container:"data",
         type:{
              width: 261,
              height: 90,
              css: "movie",
              template:"#rank#</br>#year#
            },
         datatype:"xml",
         url:"movies.xml"
		});
        
 //function is executed on pre-defined event, e.g. on button click
 
 function parse(){ 
     var str = "<data><item id='10'><title>The Lord of the Rings</title> 
     <year>2003</year><rank>10</rank></item>";
     str += "<item id='11'><title>Star Wars: Episode V - The Empire Strikes Bac</title> 
     <year>1980</year><rank>11</rank> </item></data>";
     $$("data").clearAll();
     $$("data").parse(str,"xml");
   }

~~~

{{sample 06_dataview/03_loading/01_xml.html }}

XML Data Loading Control
------------------------

During XML data loading you can resort to the following events to control the beginning and the end of the loading process:

- **onBeforeLoad** - fires when XML loading has begun;
- **onAfterLoad** - fires when XML loading is complete.

~~~js
mygrid.attachEvent("onAfterLoad", function(){
    webix.message("Data loaded");
})
~~~

{{sample 15_datatable/01_loading/05_load_message.html}}

Loading from the Database {#db}
-------------------

If you deal with server-side data, you should initialize [Dataprocessor](desktop/dataprocessor.md) and make use of the [dedicated connector](desktop/serverside.md#conn) that will get data from the database, turn it to either 
of supported formats and populate the necessary component.

Furthermore, in case a sever-side dataset is too big you can make use of [dynamic loading](desktop/dynamic_loading.md) to load a predefined quantity of data items and then load new data only as you scroll or 
[page](desktop/paging.md) through the component. Since dynamic loading is a server-side feature, study the [corresponding documentation](desktop/serverside.md) on this issue. 

~~~js
webix.ui({
	view:"dataview", 
    template:"#..#"
	load:"path/someurl.php"
});

$$("data").
//here php script generates data in the necessary format
~~~

With **bound components** you can enable data loading not from master component (as expected by default), but directly from server. 

~~~js
webix.ui ({ 
    container:"box",
    view:"form", 
    id:"form11",
    ...  
    dataFeed: "data/form.php" //datasource for tyhe form
});

$$('form1').bind($$('list1')); //the default datasource
~~~

More on [Data Binding](desktop/data_binding.md).

{{note
In case something goes wrong with loading (and sometimes it does!) learn how to handle errors on the client side in the 
[Processing loading errors](desktop/loadingerror.md) article.
}}

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


Note that **datatable** featurs [prebuilt overlay support](datatable/loading_data.md#loadingscreen) while other components should be extended with this functionality:

~~~js
webix.extend($$(list1), webix.OverlayBox); // on "this" pointer if the method is called within the component
~~~

Common overlay box methods are as follows: 

- **showOverlay**(text);
- **hideOverlay()**;

Read more about [Component Copying and Extending](desktop/extend.md) in the dedicated article. 

@index:
  - desktop/data_types.md
  - desktop/dynamic_loading.md
  - desktop/loadingerror.md

@complexity:1