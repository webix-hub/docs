Data Filtering and Sorting
======================
Sometimes you need to view definite items rather then the whole dataset. Here you play around with the **filter()** method. 

The task is as follows: you have a film set and want to filter it by title and year, with the possibility to enter the text criterion into the input area. 
At the same time filtration should start with the first letter while newly added letters would trigger data re-filtering. 

Two major possibilities of data filtering are **content filtering and sorting** using built-in means and **custom filtering** where you should write 
your own function with the *filter()* method. 

##Content Filtering and Sorting 

Available for [datatable](datatable/index.md) and [treetable](desktop/treetable.md) only. Filtering and sorting parameters are set for each column separately. 

The **content** parameter set to *'textFilter'*, *'selectFilter'*, *'numberFilter'* or *'dateFilter'* value enables filtering. The former filters data as you type values into the input while the latter allows selecting from the predefined list 

Data is sorted  thanks to the **sort** parameter that may take *'int', 'date', 'string'* and *'string_strict'* (for case-sensitive filtering) values. You click headers of the dedicated columns to enable 
both ascending and descending sorting patterns. 

~~~js
webix.ui({
	view:"datatable",
    id:"films",
	columns:[
		{ id:"title",	header:["Title", {content:"textFilter"}], sort:"string"},
		{ id:"year",	header:["Year",  {content:"selectFilter" ], sort:"int"},
		{ id:"votes",	header:"Votes", 	sort:"int"}
	],
	...
});	
~~~

{{sample 15_datatable/03_filtering/02_and.html }}

If you want to include an additional criterion to the built-in filter, use the **compare** property to define the additional filtering 

Datatable is a peculiar component and has a number API peculiarities. That's why, refer to the corresponding articles:

- [Datatable Filtering](datatable/filtering.md)
- [Datatable Sorting](datatable/sorting.md)

{{note
[Treetable](desktop/treetable.md) shares features of both [datatable](datatable/index.md) and datatree/index.md, that's it has similar familiar sorting and filtering patterns. In addition,
 it borrows **filterMode** property from the tree API (described further). 
}}

##Custom Filtering 

Other components should be filtered with the dedicated **filter()** function that takes filtering value from the input area and shows only those data items that comply with it. 

Filtering can be implemented in two ways: 

**Using data template**

~~~js
webix.ui({
	rows:[ //firstly define input area and data object
		{
        	view:"toolbar",
        	elements:[{view:"text", 
        	id:"list_input"]
        },
        {
        	view:"list",
          	id:"list",
          	template:"#rank#. #title#",
          	select:true,
          	data:big_film_set
		}
    ]
});
 
$$("list_input").attachEvent("onTimedKeyPress",function(){ 
	var value = this.getValue().toLowerCase(); //input data is derived
	$$("list").filter(#title#, value);
}); //the titles are filtered 
~~~

The same pattern is observed with components featuring similar data templates ([dataview](desktop/dataview.md) and datatree/index.md).  
In the list above the template includes *rank* and *title* values for each film. More about data [templates](desktop/html_templates.md). 

**Using a function**

Filter() method can have a function as argument. It returns data values that comply with input text: 

~~~js
$$("list_input").attachEvent("onTimedKeyPress",function(){ 
	var value = this.getValue().toLowerCase(); //here it gets user input value
    $$("list").filter(function(obj){   //here it filters all titles from the dataset 
    return obj.title.toLowerCase().indexOf(value)==0; 
})
~~~
{{sample 05_list/10_filtering.html }}

**Peculiarities of Tree Filtering**

{{snippet
Tree Filtering
}}
~~~js
//html input field
<input type='text' placeholder="type filter criteria here" 
	style='width:250px; margin-left:20px' onkeypress="filter_tree()">
		
//filtering function
function filter_tree(){
	tree.filter("#value#", this.value);
}
        
// tree object
webix.ui({
	view:"tree",
	select:true,				
	data: smalltreedata
});	
~~~

The function performs filtering according to **#value#** values. It takes into account all the tree levels and displays results with the children of the filtered branches even if the children's
values don't comply with the filtering criterion. 

At the same time, you can change the filtering pattern with the help of the tree **filterMode** property with an object value.

~~~js
{
	view:"tree",
	filterMode:{
		showSubItems:false,
		openParents:false,
		level:3},
	...		
}
~~~

- **showSubItems** (boolean) -  defines whether the component should display children of the filtered items. 
- **openParents** (boolean) - defines whether the component should expand branches to show the found items.
- **level** (number) - sets the hierarchy to filter tree nodes (one-based numbering). The '0' value says to filter all nodes. 

{{sample 17_datatree/04_api/03_filter.html }}

{{sample 15_datatable/30_treetable/04_filter.html }}

**Filtering by Multiple Properties**

It's common knowledge that data management components can features more than one data template item per record. For instance, datatable record consists of several cells in different columns, dataview and list records 
contain several items, which is reflected in their data template. 

You can filter data in the component referring to either of its template values using one and the same input field.

~~~js
webix.ui({
	rows:[
    	{view:"list", id:"dlist", 
        template: "#rank#. #title#. #year#<br/>#category#",
        ..//list config
        },
      	{view:"text", id:"filter-list" //input for filtering
        }
    ]
})


$$("filter-list").attachEvent("onTimedKeypress", function(){
	var text = this.getValue().toString().toLowerCase();
	//after text entering - filter related grid
	$$("dlist").filter(function(obj){
		//filter by multiple properties
		var filter = [obj.title, obj.category, obj.year].join("|"); 
		filter = filter.toString().toLowerCase();
		return (filter.indexOf(text) != -1);
	});
});
~~~

{{sample 80_docs/multiple_property_filter.html}}

##Sorting 

Sorting is enabled by the **sort()** function that takes data item, sorting direction and sorting mode as parameters.

There are several types that define the way of sorting depending on the type of data:

- int;
- [date](datatable/sorting.md#dates);
- string;
- string_strict (case-sensitive 'string');
- [text](datatable/sorting.md#visible_text) (visible text including template);
- [custom sorting type](desktop/filter_sort.md#addingcustomsortingtype).

Two ways of sorting are available for data components:

- Sorting as component property. Data will be sorted during component initialization:

~~~js
webix.ui({
	view: "list",
    template:"#title# - #year#"
    sort:{
    	by:"#title#",
        dir:"asc",
        as:"string"
    }
});
~~~

- Sorting as a separate function. Data sorting will be triggered by any event you associate it with: 

~~~js
$$('chart').sort('#year#','desc');
$$('tree').sort('#value#', 'asc');
~~~

Read about more detailed description of the **sort** method in the [dedicated chapter of API Reference](api/datastore_sort.md)


##Adding Custom Sorting Type

You can define your own sorting type via the **sorting.as** property of the **webix.DataStore.prototype** object.
You need to specify a function, that will describe a new type of sorting as follows:

~~~js
webix.DataStore.prototype.sorting.as.sort_type = 
function(a,b){ return a > b ? 1 : -1 }
~~~

For example, let's set a new type "bylength" to sort data by the text length:

~~~js
webix.DataStore.prototype.sorting.as.bylength = 
function(a,b){ return a.length > b.length ? 1 : -1 }
~~~

To apply the newly created sorting type, you just need to set the type name as a value of the **as** parameter:

- while using sorting as component property:

~~~js
webix.ui({
	view: "list",
    template:"#title# - #year#"
    sort:{
        by:"#title#",
        dir:"asc",
        as:"bylength"
    }
});
~~~


- while using the "sort()" method:

~~~js
$$('chart').sort('#year#','desc',"bylength");
~~~

@complexity:2