Dynamic Loading
=====================

Dynamic loading is all about loading data from server. It isn't connected with client side since it is enabled on server. Here data is loaded with the 
help of a **php-script**. 

Dynamic loading is useful for long datasets since data populates the component in smaller portions. Initially data fills the view to some extent and 
later on it is dynamically loaded each time you scroll up and down the view or switch between [pages](desktop/paging.md). 

For **plain structures** used in the majority of webix data components you can control the process by specifying: 

- item position to start loading wiht;
- how many data items should be loaded each time users scroll/page the element. 

Continue reading the  desktop/plain_dynamic_loading.md article.

For **hierarchical structures** like [tree](datatree/index.md) and [treetable](desktop/treetable.md) you can specify: 

- the node ID for which you need to load child data.

Continue reading the  datatree/dynamic_loading.md article. 

{{note
Note that dynamic loading works only in case this functionality is **enabled on server**. If not, any communication between client and server is senseless 
since all data has already been loaded the moment you inilialize the component. 
}}

Here's a sample how dynamic loading can be enabled using [ServerSide Connectors](desktop/dataconnector.md). 

{{snippet
Using PHP connector
}}
~~~php
<?php
   require_once("../../common/config.php");
   $data = new JSONDataConnector($conn, $dbtype);
   
   // setting the number of records loaded initially
   $data->dynamic_loading(30); 
   
   //specifying database table and its fields to get the data from
   $data->render_table("packages_plain","id","package, size, architecture, section");
?>
~~~

PHP, Java, .Net and ColdFusion versions of the connector are available. 

[More into about DHTMLX PHP Connector](http://docs.dhtmlx.com/connector__php__index.html).

###Related Articles
- desktop/plain_dynamic_loading.md
- datatree/dynamic_loading.md

@index: 
	desktop/plain_dynamic_loading.md
    datatree/dynamic_loading.md

@complexity:2