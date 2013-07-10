Dynamic Loading
=====================

Dynamic loading is all about loading data from server. It isn't connected with client side since it is enabled on server. Here data is loaded with the 
help of a **php-script**. 

Dynamic loading is useful for long datasets since data populates the component in smaller portions. Initially data fills the view to some extent and 
later on it is dynamically loaded each time you scroll up and down the view or switch between [pages](desktop/paging.md). 

You can control the process by specifying item posititon to start loading with as well as how many data items should be loaded each time users scroll/page the element. 
These parameters are send to server. 

With datatree/index.md dynamic loading is implemented in a bit different way. Initially only first-level items are loaded. Then, each time, 
you open a tree branch, the ID of the branch is sent to server and data is dynamically loaded. 

{{note
Note that dynamic loading works only in case this functionality is enabled on server. If not, any communication between client and server is senseless 
since all data has already been loaded the moment you inilialize the component. 
}}

{{snippet
Server Script "data_dyn.php"-file
}}
~~~php
<?php
   require_once("../../common/config.php");
   $data = new JSONDataConnector($conn, $dbtype);
   $data->dynamic_loading(30); // the number of records loaded initially
   $data->render_table("packages_plain","id","package, size, architecture, section");
?>
~~~

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
   })
~~~

####Comments

- **datafetch** (number) - defines the start position of loading. In the sample above, the items will be loaded beginning with the fiftieth one;
{{sample 06_dataview/16_dyn_loading/03_datafetch.html }}
- **datathrottle** (number) - defines the interval in milliseconds between data requests. It means that when you scroll slowly, the server wouldn't be 
overloaded with requests, since they are triggered only once in 200 milliseconds(as it goes in the code piece above);
{{sample 06_dataview/16_dyn_loading/04_datathrottle.html }}
- **loadahead** (number) - defines the number of items to be loaded each time as you scroll down or up the view, or switch to the next page;
{{sample 15_datatable/16_dyn_loading/04_db_dyn_loadahead.html }}

####Methods within Dynamic Loading 

**loadNext()** - enables dynamic loading with appending content. 

The arguments are:

- the **number of records** that will be loaded on function execution; 
- the **start position** to insert;
- **callback** (*null* if you don't need it);
- the **loading url** (if it wasn't specified in thecomponent constructor);
- boolean **'now' flag** to ignore datathrottle and load files immediately on *loadNext()* executiion. 

~~~js
grida.loadNext(10,0,null,"data/data.php");
~~~

{{sample 15_datatable/16_dyn_loading/05_load_next_add.html }}

@complexity:2