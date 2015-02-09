Dynamic Loading
===============

Dynamic loading means loading data on request, from the server. For example, a PHP script could supply data dynamically
to a Webix component.

Dynamic loading is useful for long datasets since data populates the component in smaller portions. Initially data fills the view to some extent and 
later on it is dynamically loaded each time you scroll up and down the view or switch among [pages](desktop/paging.md).

For **linear structures** (used in the majority of Webix data components) you can control the process by specifying:

- the item position to start loading with;
- how many data items should be loaded each time the user scrolls/pages the element.

Read more at desktop/plain_dynamic_loading.md.

For **hierarchical structures** like [Tree](datatree/index.md) and [TreeTable](desktop/treetable.md) you can specify:

- the node ID for which you need to load child data.

Read more at datatree/dynamic_loading.md.

{{note
Note that dynamic loading works only if the functionality is **supported by the server**.
}}

Here's an example of dynamic loading using [ServerSide Connectors](desktop/dataconnector.md).

{{snippet
Server Script "data_dyn.php"-file
}}
~~~php
<?php
  require_once("../../common/config.php");
  $data = new JSONDataConnector($conn, $dbtype);
  $data->dynamic_loading(30);  // the number of records loaded initially
  $data->render_table("packages_plain", "id", "package, size, architecture, section");
?>
~~~

###Related Articles
- desktop/plain_dynamic_loading.md
- datatree/dynamic_loading.md

@index: 
	desktop/plain_dynamic_loading.md
	datatree/dynamic_loading.md

@complexity:2
