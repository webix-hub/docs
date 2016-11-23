Drag-and-Drop between Different Components 
=============

## External Data Functionality

During drag-n-drop operations between different components as well as different instances of a component it's vital to ensure that data items from the source component 
receive adequate representation in the target one. 

**externalData** property features a function responsible for dragging as value (in case you work with different components). 

~~~js
{	view:"tree", 
	drag:true, 
    select:true,
	data:[],
	externalData:grid2tree
};

~~~

The property function takes two parameters - **data** and **id:**

- **data** (object) - the data item to move;
- **id** (string) - the item id in the source element.

When moved to the target component the item retains the ID it had in the source component unless the target already has an item with this ID.
In this case, the ID will be set randomly while the initial ID will be stored in the function. 

Take for instance, an app containing two trees, a dataview and datatable. The tree dataset includes items with **data.value** items while dataview and datatable 
have **data.title** and **data.rank**. To enable drag-n-drop within the whole group, you need two functions: 

1 . The function that will populate dataview and datatable.

~~~js
function tree2grid(data, id){
	data.rank = data.rank || -1;
	data.title = data.title || data.value;
	return data;
}

~~~

Notice the "or" logic here: 

- If you drag data from datatable to dataview and vice versa, native data and external data have the same parameters, so *data.title* value from the 
datatable becomes *data.title* of the dataview. The same is true about *data.rank*. 
- If you drag data from any of the trees to datatable and dataview, you need to redefine *data.title* parameter and take its value to the **data.value** of the
tree. Then, since in the sample data for both trees has  no *data.rank* parameter, its value will be displayed as "-1". 

2 .The function that will populate tree with dragged data. 

~~~js
function grid2tree(data, id){
	data.value = data.value || data.title;
	return data;
}
~~~

Here only *data.value* matters. The tree will take the dragged-and-dropped *data.value* value from the other tree, or the *data.title* 
value from either of the datatables. 

{{sample 22_dnd/01_basic_dnd.html }}

## Related Articles


- [Defining Drag Area](desktop/dnd_drag_area.md) 
- [Defining Drag Marker](desktop/dnd_drag_marker.md) 
- [DnD with Tree and TreeTable Components](desktop/dnd_hierarchy.md) 

@complexity:3