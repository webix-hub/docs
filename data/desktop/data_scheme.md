Defining Data Scheme
=============

Data scheme defines schemes for data processing, the default actions for loaded, updated, serialized as well as grouped and sorted. 

Object scheme is defined as in the **scheme** property. Generally, it allows you to set a default scheme for data records of DataStore. So, 
in cases when you add an empty record to DataStore, the record will be populated with the values set by the scheme.

Any changes you apply through data scheme are directly applied to datastore items.
~~~js
var list1 = webix.ui({
    view:"list",
    ...
    scheme:{
        name:"Unknown",
        age:16
    }
});

list1.add({}); //adds { name:"Unknown", age:16} record

~~~

**Add()** is the method of the [DataStore](api/refs/datastore.md) component.So, we use the [data](api/atomdataloader_data_config.md) property to access it. 

In addition, there are 6 special keys you can use within the property:

- **$init** - runs when data is initially being loaded to the component + while reloading data for new DataStore items + when the [add](api/datastore_add.md) method is called;
- **$update** - runs for existing items while reloading data (for new items **$init** runs) + when the [update](api/datastore_updateitem.md) method is called;
- **$save** - runs when saving to server is triggered in any of the ways;
- **$change** - runs each time data in the table is changed (i.e. loaded,added,updated,deleted). Note, the key runs when either the **$init** or the **$update** key runs; 
- **$serialize** - runs when the [serialize](api/datastore_serialize.md) method is called;
- **$group** - the object with grouping parameters. Passed to the [group](api/group_group.md) function that automatically runs when data is initially being loaded to the component;
- **$sort** - the object with sorting parameters. Passed to the [sort](api/datastore_sort.md) method that automatically runs when data is initially being loaded to the component.

Below you can find examples of using each of the keys.

##$init key

####Input parameters

The **$init** function accepts 1 parameter - the **data item object**.

And called:

- for each data item, while initial data loading;
- for newly-added items, while data reloading;
- for the specified item, when the [add](api/datastore_add.md) method is called.

####Usage example

Let's assume, you want to populate a combo with data from some database field, e.g. from the field with name 'categories'.
To make the combo recognize the field values as options, the combo should get data as 'text'/'value' pairs.

And here the $init key will come in useful:

~~~js
webix.ui({
	view:"list", 
	layout:"x",
	scheme:{
		$init:function(obj){
			if (obj.year>=2000) obj.$css = "newtime";
			if (obj.year<=1970) obj.$css = "oldtime";
		}
	},
	...
});			
~~~

{{sample 05_list/08_xlist.html}}

##$update key

####Input parameters

The **$update** function accepts 1 parameter - the data item object.

And called:

- for each data item, while initial data loading;
- for updated items, while data reloading;
- for the specified item, when the [update](api/datastore_updateitem.md) method is called.

####Usage example

Let's assume, in your database table you have a field with the name *'update_date'* where store the date of the last item update. To have the field values up to date, you can use the $update key and specify it as in:

~~~js
webix.ui({
    view:"list",
    ...
    scheme:{
        $update:function(obj){ 
            var today = new Date();
            obj.update_date = today.getDate();// 'update_date' is the name of data property
        }
    }
});
~~~

##$save key 

The **$save** function accepts 1 parameter - the data item object.

####input parameters

And called:

- each time new or changed data is send to server.

####Usage example 

In combination with **$init** key, **$save** gives you an ability to set loading and saving pattern for serverside data. 

For instance, you can [work with dates](desktop/working_with_dates.md) as **DateTime objects** on client side while storing them as **strings** on server. To avoid formatting after each operation, 
do it only on data loading and saving.

~~~js
webix.ui({
	view:"datatable",
	url:"data.php", //loading data
	save:"connector->data.php", //saving data
   	scheme:{
    	//turning strings into objects on loading
    	$init:function(obj){
			if(obj.birthday)
				obj.birthday = webix.i18n.parseFormatDate(obj.birthday);
        },
        //turing objects back to strings on saving
		$save:function(obj){
			if(obj.birthday)
				obj.birthday = webix.i18n.parseFormatStr(obj.birthday)
   		}
   	},
    columns:[...]
});
~~~

##$change key

####Input parameters

The **$change** function accepts 1 parameter - the **data item object**.

And called:

- each time data is changed in the table.

####Usage example

Let's assume, you have a datatable with a list of films and want to color rows with films that less than 1980 year in green.
Here you can use the **$change** that will run each time data is changed and check whether the changed item(s) should be colored in green.

~~~js
webix.ui({
	view:"datatable",
    ...
    scheme:{
		$change:function(item){
			if (item.year > 1980)
				item.$css = { "color":"green" };
		}
	}
})	
~~~

{{sample 15_datatable/21_styling/04_rows_styling.html}}

##$serialize key

####Input parameters

The **$serialize** function accepts 1 parameter - the data item object.

And called:

- for each data item, when the [serialize](api/datastore_serialize.md) method is called. 

The $serialize key is the only key that must return some value while the $serialize function must return data item object that will go to the result serialized JSON object. 

####Usage example

Let's assume, in the database you store date values as Date() objects. But on the client you want to operate with such data as with strings. In this case, you can specify the **$serialize** key and call the 
[serialize](api/datastore_serialize.md) method to get data in the required format:

~~~js
var mylist = webix.ui({
    view:"list",
    ...
    scheme:{
        $serialize: function(obj){
            return {name: obj.name, date: dhx.i18n.dateFormatStr(obj.date)};
        }
    }
)};

 
var items = mylist.data.serialize(); 
//serialize() is the method of the DataStore component.
//That's we use the [data](api/atomdataloader_data_config.md) property to access it.
~~~

{{note
Note, the method accepts a DataStore item and generally, changes made through the function change DataStore dataset.The example above shows how to get formatted data without changing the DataStore object.
}}

##$group key

####Input parameters

The **$group** function accepts 1 parameter - so-called group object that has 2 properties:

- **by** – a data property according which items will be united in groups;
- **map** – an object that defines properties of the items in the group;

Properties are specified by an array. The first element of this array is a template with a property from original data, the second one – the functor that will be 
applied to all values of the property (set by the first element) in the group.Grouping provides the following functors:
- **sum** – gets the sum of the values;
- **max** – gets the maximum value in the group;
- **min** - gets the minimum value in the group.

It’s possible to define custom functor. Read on the topic in the related article - [Custom Functor for Data Grouping in Charts](desktop/custom_functor.md).

The **$group** function is called:

- for each data item, while initial data loading

The function doesn't run when you programatically call the [group](api/group_group.md) method. 

####Usage example

Let's take the following example: you've got the sales information over the last years in several companies and want to show total sales per companies in a chart. So, you need to get objects of the same 
companies and sum up their sales. Grouping helps to resolve this problem.

~~~js
webix.ui({
    view:"chart",
    ...
    scheme:{
        $group:{
            by:"#company#", // 'company' is the name of data property
            map:{
                sales:["#sales#","sum"]
            }   
        }
    }
});
~~~

{{sample 08_chart/03_api/01_group.html}}

##$sort key

####Input parameters

The **$sort** function accepts 1 parameter - so-called sorting object that has 3 properties:

- **by** - a template according which items will be sorted by,
- **dir** - the sorting direction: “asc” or “dsc”,
- **as** - the sorting method
  - *'int'*
  - *'string'*
  - *'string_strict'* (case-sensitive “string”)
  - or custom.
    
A **custom sorting method** is defined by a function. This function is called for each pair of adjacent values and returns 1,-1 or 0:
- **1** - the object with the first value in pair must go before the second one
-  **-1** - the second object goes before the first
- **0** - the objects are equal 

The $sort function is called:

- for each data item, while initial data loading.

The function doesn't run when you programatically call the [sort](api/datastore_sort.md) method.

####Usage example

Let's assume, you need to sort data by time property that consists of minutes and seconds divided by ”:”. Through such an example, we can show both use of the **$sort** key and how to define a custom sorting method:

~~~js
webix.ui({
    view:"chart",
    ...
    scheme:{
        $sort:{
            by:"#time#",
            dir:"asc",
            as: sortTime
        }
    }
});
 
function sortTime(a,b){
    a = a.split(":");
    b = b.split(":");
    if(a[0] > b[0]) return 1;
    else if(a[0] < b[0]) return -1;
    else{
        if(a[1] > b[1]) return 1;
        else if(a[1] < b[1]) return -1;
        return 0;
    }
}
~~~

@complexity:2