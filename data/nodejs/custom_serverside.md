Custom Server Scripts
======================


In case of custom server scripts you write all the logic of database connection, execute queries that get data from the necessary tables as well as queries for data inserting, updating and deleting. 

Basic client-side loading and saving pattern remains unchanged:

~~~js
webix.ui({
	view:"list",
    url:"load.php", 
    save:"save.php"
})
~~~

**Url** loads data returned by dedicated script while **save** points to script that saves data to database each time you make changes on client side.

The following basic instructions will help you tune your scripts to return data and provide responses for editing operations. <p style="color:purple;">Here we work on Node.js with SQLite3 database.</p>

- [Data Loading](#load)
- [Data Saving](#save)
- [Tuning serverside response](#response)

If you are unsure what to do in case you need to get data from a **different domain** with relations to your app's one, consult our solution to [cross-domain data loading](desktop/crossdomain_loading.md).

##Data Loading {#load}

<p style="color:purple;"> Webix components support incoming data in JSON [formats](desktop/data_types.md), so ensure that your script returns data properly formatted. 

For JSON, encode the resulting data array with the dedicated function(**json_encode()** in PHP)</p>

~~~php
//connect to database
$db = new SQLite3('../../../common/testdata.sqlite');

//select data
$res = $db->query("SELECT * FROM films");

//convert data to json
$data = array();
while ($rec = $res->fetchArray(SQLITE3_ASSOC)) // each row
	$data[] = $rec;
//output json
echo json_encode($data);
~~~

###Datatree loading

[Datatree](datatree/index.md) can be populated with inline data [grouped](desktop/grouping.md) on client side or with **hierarchical data** grouped by server-side script. 

For hierarchical data you need to have: 

- **relation_id** field in database table that for each record will store the ID of a record that will be **parent** for this one. For **root** record this parameter will be **0**;
- (optionally) - **open** field for each record indicating whether this record will be initially opened (1) or not (0)  - if it has children, of course.

Dataset is compiled with a function that contains SQL query with WHERE clause, which gets data from root record (parent = 0) down to all its children. JSON data for datatree should store children for an item in its **data** property:

~~~php
function get($id = 0) {
	$db = new SQLite3('../../../common/testdata.sqlite');
    //connect to database

	//select data
	$res = $db->query("SELECT * FROM films_tree WHERE parent={$id}");

	//convert data to json
	$data = array();
	while ($rec = $res->fetchArray(SQLITE3_ASSOC)) {
		$rec["data"] = get($rec["id"]); //putting children into item "data" property
		$data[] = $rec;
	}
	//output json
	return $data;
}

//formatting output
echo json_encode(get());
~~~



##Data Saving {#save}

In essence defining **save** initializes DataProcessor that gets data ready for sending to server and triggers script executing each time changes are made. Default DataProcessor logic can be [customized](desktop/dataprocessor.md).

Script gets changed data in body of POST request. For each inserted, updated and deleted record, all properties of its object are sent together with **webix_operation**

~~~js
id	8
rank	99
rating	
title	New
votes	100
webix_operation	delete
year	2012
~~~

Additional item properties can be set as well by updating this item on client side:

~~~js
var item = this.getItem(id);
item.old_rank = some; //setting new property and value for it
this.updateItem(id);
~~~

The new property *old_rank* will be passed in POST like native item properties. 

{{sample 40_serverside/01_php_vanila/03_datatable_reordering.html}}

You can easily get to these parameters to use them for making corresponding database queries. 

~~~php
$operation = $POST['webix_operation'];

if($operation=="insert")
	$db->query("INSERT SQL query");
~~~

Don't forget to escape user data to avoid SQL injections:

~~~php
$title = $db->escapeString($_POST["title"]);
~~~

And convert data to JSON according to common pattern above.

###Datatree Saving 

With [datatree](datatree/index.md) use the same pattern as above and don't forget to update **parent** field with **parent** item value in INSERT and UPDATE queries.  

It goes without saying that you should render this field during loading (SELECT * guarantees this for sure) and update it on client side while working with tree data. 

~~~php
$parent = $_POST["parent"];

//queries
~~~

{{sample 40_serverside/01_php_vanila/05_datatree_saving.html}}



##Customizing Server-Side Response {#response}

For each query you should tune response, which can be either **plain text** or **JSON object** with necessary parameters:

~~~php
//plain text on failure
echo "Data saving was not performed";

//JSON with item ID and status for failure
echo '{ "id":"'.$id.'", "status":"error" }';

//JSON with item ID and status for success
echo '{ "id":"'.$id.'", "status":"success" }';

//JSON for successful inserting operation 
echo '{ "id":"'.$id.'", "status":"success", "newid":"'.$db->lastInsertRowID().'" }';

$res = $db->query(SQL query);

if($res)
	//response for success
else
	//response for failure
~~~

For INSERT operations, new ID is important as on client side any newly added item gets **temporary ID** randomly generated by **webix.uid()** method (something like 1369905287157). 

After adding this item to database table it gets normal ID generated by auto increment, and this ID will be loaded to client side on page refresh. So, you might require this new ID at once to work with recently added item. 

If you use **Ajax** request, these responses are easily derived in **callback**. If response is a JSON object, any of its properties can be treated separately. 

~~~js
webix.ajax().post("server/save.php", {}, function(response) {
		webix.message(response.status);
});
~~~

More about [Ajax operations in Webix](helpers/ajax_operations.md).

@complexity:3



