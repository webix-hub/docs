Dynamic Loading for Plain Structures
==========================

Data can be loaded to non-hierarchical components in portions:

- Firstly, a limited number of record is loaded;
- Then, data is loaded at the moment when: 
	- user scrolls the component;
    - user switches to the new page within the component (in case [pager](desktop/paging.md) is defined).

##Configuring Dynamic Loading Behavior

So specify the above mentioned php-script as value of **url** parameter and (optionally) include the **datafetch** and **datathrottle** properties into the 
component's constructor (except for the tree).

~~~js
webix.ui({
	view:"dataview", // any data-presenting component
    datatype:"..",
    url:data_dyn.php,
    datafetch:50,
    datathrottle: 200,
    loadahead:50
});
~~~

####Comments

- **datafetch** (number) - defines the start position of loading. In the sample above, the items will be loaded beginning with the fiftieth one;
{{sample 06_dataview/16_dyn_loading/03_datafetch.html }}
- **datathrottle** (number) - defines the interval in milliseconds between data requests. It means that when you scroll slowly, the server wouldn't be 
overloaded with requests, since they are triggered only once in 200 milliseconds(as it goes in the code piece above);
{{sample 06_dataview/16_dyn_loading/04_datathrottle.html }}
- **loadahead** (number) - defines the number of items to be loaded each time as you scroll down or up the view, or switch to the next page;
{{sample 15_datatable/16_dyn_loading/04_db_dyn_loadahead.html }}

##Dynamic Loading by Api

The **api/link/ui.datatable_loadnext.md** method can be used to send a request to load the specified number of records and show them in the component. The arguments are:

- the **number of records** that will be loaded on function execution; 
- the **start position** to insert;
- **callback** (*null* if you don't need it);
- the **loading url** (if it wasn't specified in the component constructor);
- boolean **'now' flag** to ignore datathrottle and load files immediately on *loadNext()* executiion. 

~~~js
grida.loadNext(10,0,null,"data/data.php"); //uses given url

grida.loadNext(10, 0); //uses url set in the component constructor
~~~

The method allows for the following scenarios: 

- new data may be added to the end of current component data: 

~~~js
grida.loadNext(10,0,null,"data/data.php");
~~~

{{sample 15_datatable/16_dyn_loading/05_load_next_add.html }}

- new data may substitute current component data that should be cleared beforehand;

~~~js
this.clearAll();
grida.loadNext(10, 0, null,"data/data.php");
~~~

{{sample 15_datatable/16_dyn_loading/06_load_next_replace.html}}

- data can be loaded from the specified position while further scrolling or paging will result in serverside requests for the needed data.

~~~js
var gridb = webix.ui({
	view:"datatable", 
    dfatafetch:50,
    ready:function(){
		this.showItemByIndex(900);
	}
});
gridb.loadNext(50,900,null,"data/data_dyn.php");
~~~

{{sample 15_datatable/16_dyn_loading/02_db_dyn_start.html}}

###Related articles

- [Dynamic Loading for Tree and Treetable](datatree/dynamic_loading.md)