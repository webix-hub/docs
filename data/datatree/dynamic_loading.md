Dynamic Loading for Hierarchical Data Structures
================================================

{{note
This article discusses dynamic loading for [tree](datatree/index.md), [treetable](desktop/treetable.md) and [TreeCollection](api/refs/treecollection.md).
Refer to the main [Dynamic Loading](desktop/dynamic_loading.md) article if needed.
}}

Data can be loaded dynamically into hierarchical components as follows:

- First, the top parent nodes are loaded. Initially, they are collapsed (unless their `open` property is true).
- Then, data is loaded under each node when it is expanded.

~~~js
var tree = webix.ui({
  view: "tree",
  url: "data/data_dyn.php"
}); 
// or
var tree = webix.ui({});
tree.load("data/data_dyn.php");
~~~

By default, Webix expects JSON data. The server can also return XML - see [Loading Tree Data](datatree/loading_data.md).

Dynamic loading can be implemented in three different ways:

- by setting the `webix_kids` property to `true` on nodes that are expected to have children
- by calling the [loadBranch()](api/treedataloader_loadbranch.md) method
- by setting a custom handler for the `onDataRequest` event

##Using the webix_kids flag

On parent data items that can have children, you can set the **webix_kids** flag to `true`. When the user expands these nodes, Webix will automatically
send XHR requests to the server for more data.

~~~js
webix.ui({
  view: "tree",
  url: "data/data_dyn.php",
  data: [
    // parent node below
    { id: "1", value: "Branch", webix_kids: true }
  ]
});
~~~

Webix will automatically generate the request URL to dynamically load data, based on the `url` property specified when initializing the component - **"data/data_dyn.php?continue=true&parent=1"**, where:

- **parent** - ID of the node that has just been opened;
- **continue** - flag indicating that it is an auto-generated request.

If `url` is specified, Webix will also make an initial request for that URL, without parameters. Make sure the server-side script can handle both situations:
the initial loading of data (top-level parent nodes), and loading children under a given parent node.

While you can write custom scripts for this, you can check the [ready-made ServerSide connectors](#dynamic_connector).

##Using the `loadBranch()` function

You can catch the **node expansion events** ([onBeforeOpen](api/treeapi_onbeforeopen_event.md) or [onAfterOpen](api/treeapi_onafteropen_event.md))
to load branch data using the **api/treedataloader_loadbranch.md** method. Let's assume that we have initial data loaded:

~~~js
webix.ui({
  view: "tree",
  data: [
    { id:1, value: "Layout Branch", webix_kids: true },
    { id:2, value: "Data Branch", webix_kids: true },
  ],
  on: {
    onBeforeOpen: function (id) {
      // if children have not been loaded yet
      if (this.getItem(id).$count === -1)
        this.loadBranch(id, null, "data/data_dyn.php");  // null means no callback
    }
  }
});
~~~

{{sample 17_datatree/16_dyn_loading/02_load_branch.html}}

The URL of the new request will be based on the `url` property of the tree, which can be overridden by the api/treedataloader_loadbranch.md method - **"data/data__dyn.php?continue=true&parent=1"**. The parameters are the same as above:

- **parent** - ID of the node that has just been opened;
- **continue** - flag indicating that it is an auto-generated request.

If you want to use the same data source, omit the last parameter to `loadBranch()`:

~~~js
var tree = webix.ui({
  view: "tree",
  url: "data/data_dyn.php",
  ...
});

this.loadBranch(id, null);  // "data/data_dyn.php" will be used
~~~

Be sure the branch data sent by the server is an object with **parent** and **data** properties. A JSON response should look like this:

~~~js
{ parent: 1, data: [ ...array of child items... ] }
~~~

##Redefining onDataRequest Event

Set the **api/treedataloader_ondatarequest_event.md** event handler to redefine the default dynamic loading behavior and use any desired method to get the data from the server:

The [event](api/link/ui.tree_ondatarequest_event.md) fires when the user expands a node that has the **webix_kids** property set:

~~~js
{ id: "1", value: "Layout Branch", webix_kids: true }
~~~

As it is stated above, this event triggers dynamic loading. In other words, if a component features a data source (defined either by 
[url](api/link/ui.tree_url_config.md) property or [load](api/link/ui.tree_load.md) method) a request is issued using this url. 

Still, the **onDataRequest** event makes it possible to redefine the logic in favor of custom one.

Let's assume that we have initial data loaded in some of the ways:

~~~js
webix.ui({
  view: "tree",
  data: [
    { id: 1, value: "Layout Branch", webix_kids: true },
    { id: 2, value: "Data Branch", webix_kids: true },
     ],
  on: {
    onDataRequest: function (id) {
    webix.message("Getting children of " + id);
    this.parse(
      webix.ajax().get("data/data_dyn_json.php?parent=" + id).then(function (data) {
        return data = data.json();
      })
    );
    // canceling default behavior
    return false;
    }
  }
});    
~~~

{{sample 17_datatree/16_dyn_loading/03_on_data_request.html}}

Here you completely redefine the default event handling and cancel default dynamic loading behavior. 

Be sure the branch data you get is returned with **parent** and **data** properties. For JSON the returned data looks like this:

~~~js
{ parent:1, data:[ ..array of child items..]}
~~~


##Dynamic Loading with ServerSide Connectors {#dynamic_connector}

In case you use [Data Connector](http://docs.dhtmlx.com/connector__index.html) to load data from a database into a Tree or TreeTable dynamically,
you should call **dynamic_loading()** on the server side: 

{{snippet
Dynamic loading from a server database. Server-side code.
}}
~~~php
require_once("../connector-php/codebase/data_connector.php");  // includes the connector file
$conn = mysql_connect('localhost', "root","");  // creates a connection
mysql_select_db("sampleDB");// selects a database

$data = new TreeDataConnector($conn, "MySQL");  // initializes the connector object
$data->dynamic_loading(30);  // enables dynamic loading
// loads data from the specified database table
$data->render_table("packages_tree", "id", "value, state", "", "parent_id");
~~~


Note, inside **dynamic_loading()** you should specify a number of records that will be loaded at once.

Everything else is the same as in case of [usual loading from a database](datatree/loading_data.md#loadingfromadatabase).

{{snippet
Dynamic loading from the server. Client-side code.
}}
~~~js
webix.ui({
  url: "data/data_dyn.php"
});    
~~~

Note that each data item is supplied with the **webix_kids** flag to ensure dynamic loading.

{{sample 17_datatree/16_dyn_loading/01_dyn_loading.html }}

###Related Articles

- desktop/plain_dynamic_loading.md
