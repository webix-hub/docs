Data Object Operations
=============
 
Every UI component features inner storage for [loaded](desktop/data_loading.md) data:

- [DataStore](api/refs/datastore.md) - non-hierarchical (inline) store  for [list](desktop/list.md), [dataview](desktop/dataview.md), [datatable](datatable/index.md), [chart](desktop/chart.md);
- [Treestore](api/refs/treestore.md) - hierarchical store for [tree](datatree/index.md), [treetable](desktop/treetable.md) and [grouplist](desktop/grouplist.md) provided that they are loaded with **hierarchical** XML or JSON. 

Both of the stores feature common methods, properties and events to work with data items on client side while TreeStore offers extended API for treating data items observing hierarchy. 

While **manupulating data** items, you can: 

- apply methods directly to the **Data/TreeStore** of the component- *$$("list").data*. Only some functions require this. 
- apply methods to the component by its **ID** - *$$("list")*, which implies addressing datastore. Most methods have this pattern. 

~~~js
$$("list").data.each(){function(obj){.....} }; //iterates through items array

$$("list").count(); //counts items in the list datastore
~~~

Each **data item object** posesses the unique **ID**, **index** in the data array and set of **properties**. 

Getting the item object
-------------------------------
To get the data item object, you should use the api/datastore_getitem.md method:

~~~js
var mylist = webix.ui({
	view:"list", 
	...
	data:[
		{id:"book1", title:"The Shawshank Redemption", year:"1994"},
		{id:"book2", title:"The Godfather",            year:"1972"}			
	]
});     
 
//'item2' variable will contain an object of the related list record
var item2 = mylist.getItem("book2");
 
//you can access data members directly
var title = item2.title;//-> "The Godfather"
~~~

Getting the item id
-------------------------------------
Each data item has its ID defined in the dataset. Knowing item ID you can get to all its properties through an item object (described above). 

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Method(s) for getting the item id
	</caption>
	<thead>
	<tr>
		<th>
			Method
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-align:left;"><a href="api/datastore_id.md">id (<i>object</i>)</a></td>
		<td>gets the ID of a data item</td>
	</tr>
   	<tr>
		<td style="text-align:left;"><a href="api/datastore_getfirstid.md">getFirstId()</a></td>
		<td>gets the ID of the first data item (with the "zero" index)</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datastore_getlastid.md">getLastId()</a></td>
		<td>gets the ID of the last data item</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datastore_getnextid.md">getNextId (<i>id</i> )</a></td>
		<td>gets the ID of a data item that succeeds the one with the specified ID</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datastore_getprevid.md">getPrevId (<i>id</i> )</a></td>
		<td>gets the ID of a data item that precedes the one with the specified ID</td>
	</tr>
	<tr>
		<td style="text-align:left;"><a href="api/datastore_getidbyindex.md">getIdByIndex (<i>index</i> )</a></td>
		<td>gets the item ID by its index</td>
	</tr>
	<tr>
		<td style="text-align:left;"><a href="api/datastore_getrange.md">getRange (<i>fromId, toId</i> )</a></td>
		<td>gets an array of IDs in a predefined scope</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datastore_getindexrange.md">getIndexRange (<i>fromInd, toInd</i> )</a></td>
		<td>gets an array of IDs in a predefined scope</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_getfirstchildid.md">getFirstChildId (<i>id</i> )</a></td>
		<td>gets ID of the first child of the specified item in the hierarchical treestore</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_getparentid.md">getParentId (<i>id</i> )</a></td>
		<td>gets ID of the parent of the specified item in the hierarchical treestore</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_getnextsiblingid.md">getNextSibling (<i>id</i> )</a></td>
		<td>gets ID of the next sibling of the specified item in the hierarchical treestore</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_getprevsiblingid.md">getPrevSibling (<i>id</i> )</a></td>
		<td>gets ID of the previous sibling of the specified item in the hierarchical treestore</td>
	</tr>
	</tbody>
</table>

Getting the item index
---------------------------------
Each data item defined in a dataset has an index - the position in the dataset starting from 0.

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 2 </strong>
		Method(s) for getting the item index
	</caption>
	<thead>
	<tr>
		<th>
			Method
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-align:left;"><a href="api/datastore_getindexbyid.md">getIndexById (<i>id</i> )</a></td>
		<td>gets the item index by its ID</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_getbranchindex.md">getBranchIndex (<i>id</i> )</a></td>
		<td>gets item index in a specific branch</td>
	</tr>
	</tbody>
</table>

Checking the existence of an item
-------------------------------------------
To check whether a specific item exists in the data set, you should use the api/datastore_exists.md method:

~~~js
var mylist = webix.ui({
	view:"list", 
	...
	data:[
		{id:"book1", title:"The Shawshank Redemption", year:"1994"},
		{id:"book2", title:"The Godfather",            year:"1972"}			
	]
});      
 
mylist.exists("book2");// -> true
mylist.exists("book222");// -> false
~~~

Changing the item id
-------------------------------------------
To change the current id of an item, you should use the api/datastore_changeid.md method:

~~~js
var mylist = webix.ui({
	view:"list", 
	...
	data:[
		{id:"book1", title:"The Shawshank Redemption", year:"1994"},
		{id:"book2", title:"The Godfather",            year:"1972"}			
	]
});      
 
mylist.data.changeId("book1", "book01");
~~~


Changing data properties of an item
----------------------------------------
To change the current value of some item property, you should use the following technique:

~~~js
item2 = mylist.getItem("book2");
item2.title = "Star Wars";
 
mylist.refresh();
//or
mylist.updateItem("book2", item2);
~~~
Methods api/datastore_refresh.md and api/datastore_updateitem.md lead to one and the same result and don't have any specificity.

Manipulations with items in the data set
----------------------------------------------
<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 2 </strong>
		Method(s) and properties for manipulating items in the data set
	</caption>
	<thead>
	<tr>
		<th>
			Method
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-align:left;"><a href="api/datastore_count.md">count()</a></td>
		<td>returns the count of items in the data set</td>
	</tr>
	<tr>
		<td style="text-align:left;"><a href="api/ui.list_getvisiblecount.md">getVisibleCount()</a></td>
		<td>(just for the List component) returns the number of items that can be seen with the current view height</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datastore_each.md">data.each()</a></td>
		<td>iterates through the collection of data items</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datastore_order_other.md">data.order</a></td>
		<td>returns an array of IDs of the currently displayable items</td>
	</tr>
     <tr>
		<td style="text-align:left;"><a href="api/datastore_pull_other.md">data.pull</a></td>
		<td>returns the hash of all data items</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_eachchild.md">data.eachChild(id)</a></td>
		<td>returns the hash of all children (first-level sub items) of the specified item in the hierarchical dataset</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_eachsubitem.md">data.eachSubItem(id)</a></td>
		<td>returns the hash of all subitems (regardless of level) of the specified item in the hierarchical dataset</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/treestore_eachopen.md">data.eachOpen()</a></td>
		<td>returns the hash of all open data items in the hierarchical dataset</td>
	</tr>
	</tbody>
</table>

<br>
    
Unlike **order**, the **pull** property returns all the items whether they are displayed in the component or not. 

~~~js
var mylist = webix.ui({
	view:"list", 
	...
	data:[
		{id:"book1", title:"The Shawshank Redemption", year:"1994"},
		{id:"book2", title:"The Godfather",            year:"1972"}			
	]
}); 
mylist.data.pull["book2"];//-> {id:"book2", title:"The Godfather", year:"1972"}	

mylist.data.pull["book2"].title;//-> "The Godfather"

mylist.data.pull;
//- >[{id:"book1", title:"The Shawshank Redemption", year:"1994"},
//    {id:"book2", title:"The Godfather",            year:"1972"}]		

~~~

Iterating data items
-------------------------------
To iterate through the collection of data items, you should use the  api/datastore_each.md method of the api/refs/datastore.md class.

~~~js
var mylist = webix.ui({
	view:"list", 
	...
	data:[
		{id:"book1", title:"The Shawshank Redemption", year:"1994"},
		{id:"book2", title:"The Godfather",            year:"1972"}			
	]
});

var titles =[];
mylist.data.each(function(obj){ titles.push(obj.title); });
//-> titles=["The Shawshank Redemption", "The Godfather"]
~~~

The code is equal to a standard **for-loop**: 

~~~js
for(i = 0; i<data.length; i++ ){
	titles.push(obj.title);
}
~~~

##Moving items within the data set(s)

Basically, here we speak about changing item position in the data set. Item position is its **index** (zero-based numbering). 

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 2 </strong>
		Method for moving items within the data set
	</caption>
	<thead>
	<tr>
		<th>
			Method
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-align:left;"><a href="api/datamove_move.md">move(<i>sid, tindex, tobj, tid</i> )</a></td>
		<td>moves the specified item to a new position</td>
	</tr>
	<tr>
		<td style="text-align:left;"><a href="api/datamove_movebottom.md">moveBottom (<i>id</i> )</a></td>
		<td>moves the specified item to the last position</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datamove_movetop.md">moveTop (<i>id</i> )</a></td>
		<td>moves the specified item to the first position</td>
	</tr>
    <tr>
		<td style="text-align:left;"><a href="api/datamove_movedown.md">moveDown (<i>id, step</i> )</a></td>
		<td>increases the item index and moves the item to the new position</td>
	</tr>
     <tr>
		<td style="text-align:left;"><a href="api/datamove_moveup.md">moveUp (<i>id, step</i> )</a></td>
		<td>decreases the item index and moves the item to the new position</td>
	</tr>
	</tbody>
</table>


Moreover, the api/datamove_move.md  method makes it possible to programmatically drag an item from one component instance to another (from one list to another list):

~~~js
//moves the item with id="book1" to the second position in the same list (remember about zero-based numbering)
mylist.move("book1", 1); 

//moves the item with id="book1" to the first position in the "mylist2" 
var id = mylist.move("book1", 0, mylist2);
~~~

@complexity:1
