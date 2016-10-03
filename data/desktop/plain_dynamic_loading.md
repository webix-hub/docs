Dynamic Loading for Plain Structures
==========================

Data can be loaded to non-hierarchical components in portions:

-  Firstly, a limited number of records is loaded;
-  Then, data is loaded at the moment when: 
	- user **scrolls** the component;
    - user switches to the new **page** within the component (in case [pager](desktop/paging.md) is defined);
    - api/dataloader_loadnext.md method is applied;
    
Currently dynamic loading for linear data is implemented for the following components: datatable/index.md, desktop/treetable.md and desktop/dataview.md.

##Configuring Dynamic Loading Behavior

To enable dynamic data loading you need to: 

1 . Set the component datasource that will load initial data. It can be done either with the help of api/atomdataloader_url_config.md property or api/atomdataloader_load.md method;

~~~js
var dview = webix.ui({
	view:"dataview",
    url:"data/data_dyn.php"
});
//or 
dview.load("data/data_dyn.php");
~~~

2 .  Optionally, define various aspects of dynamic loading such as: 

- api/virtualrenderstack_datafetch_config.md - the number of records that should be loaded from server side during each dynamic loading request. **50** by default;
- api/link/ui.proto_datathrottle_config.md - time in milliseconds between subsequent dynamic loading calls, which helps to minimize the quantity of requests during quick paging or scrolling;
- api/virtualrenderstack_loadahead_config.md - the number of records that should be loaded ahead of the "datafetch" parameter. 
~~~js
webix.ui({
	view:"dataview", 
    datafetch:50,
    datathrottle: 500,
    loadahead:100
});
~~~

####Related Samples

- {{sample 06_dataview/16_dyn_loading/03_datafetch.html }}
- {{sample 06_dataview/16_dyn_loading/04_datathrottle.html }}
- {{sample 15_datatable/16_dyn_loading/04_db_dyn_loadahead.html}}


##Serverside Request

When scolling or pagination occurs, the component will automatically issue a request based on the datasourse, e.g. **"data/data_dyn.php?continue=true&count=100&start=130"** where: 

- **continue** -  flag that indicates that this request was formed automatically;
- **count** - value of *datafetch* parameter;
- **start** - ID of the last data item in the data component before issuing a request. 

{{note
Note that your server script should be able to handle these parameters.
}}

##Serverside Response

Serverside response should include the following information:

- **data**  - the array of data records; 
- **pos** - position in the data component to add the loaded data to (*required during each dynamic loading call*);
- **total_count** - the total number of records available on the server (*required only for initial loading call*);

{{snippet
Sample of JSON response
}}
~~~js
{
	"data":[ 
    	{"id":1,"package":"acx100-source"},
    	{"id":2,"package":"acx200-source"}
    ],
    "pos":0,
    "total_count":999
}
~~~

##Dynamic Loading by Api

The **api/dataloader_loadnext.md** method can be used to send a request that loads the specified number of records and parses them into the component. The arguments are:

- **count** - the number of records that will be loaded on function execution; 
- **start** - the start position to insert the loaded data to;
- **callback** - function to be executed after the response comes ( or *null* if you don't need the one);
- **url** - the loading url (if it wasn't specified in the component constructor);
- **now** - boolean to ignore *datathrottle* and start loading data immediately on *loadNext()* execution. 

{{snippet
Using url set in the component constructor
}}
~~~js
grida = webix.ui({
	view:"datatable",
    url:"data/data_dyn.php"
});
grida.loadNext(10, 0); 
~~~

{{sample 15_datatable/16_dyn_loading/06_load_next_replace.html}}

{{snippet
Using given url
}}
~~~
gridb.loadNext(50,900,function(){
	this.showItem(903);
}, "data/data_dyn.php");
~~~

{{sample 15_datatable/16_dyn_loading/02_db_dyn_start.html}}

###Use Cases

The method allows the following scenarios: 

- new data may be added to the end of current component data: 

~~~js
grida.loadNext(30, pos, function(){
	this.showItemByIndex(pos);
	pos += 30;
});

//pos - index of the last data item
~~~

{{sample 15_datatable/16_dyn_loading/05_load_next_add.html }}

- new data may substitute current component data (it should be cleared beforehand);

~~~js
webix.ui({
	view:"datatable",
	"data->onParse":function(){
    	this.clearAll();
    	this.data.url = "data/data.php";
	}
});
grida.loadNext(10, base);

//base - index of the last data item
~~~

{{sample 15_datatable/16_dyn_loading/06_load_next_replace.html}}

##Dynamic Loading Events

You can capture the moment just before a dynamic loading request is sent to server with the help of an api/dataloader_ondatarequest_event.md event. 

It can be used to cancel the default behavior and issue a custom data request: 

~~~js
dtable.attachEvent("onDataRequest", function (start, count) {
  var data = custom_load_data(start, count);
  dtable.parse(data, "json");
  return false;
));
~~~


###Related articles

- [Dynamic Loading for Tree and Treetable](datatree/dynamic_loading.md)