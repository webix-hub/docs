Operations with Chart Data
==============

##Getting Item Value

You can get the value of any item in the following way:

{{snippet
Getting value of the year property
}}
~~~js
$$("chart").attachEvent("onItemClick", function(id){
	id = this.getItem(id).year;
	alert(id);
});
~~~

{{sample 08_chart/08_dynamic/02_events.html }}

##Adding Items

While adding an item, make use of the api/link/ui.chart_add.md method and state new data as an object and position of the new item:

~~~js
var counter = 12;
	function addNew () {
		$$("barChart").add({
			year:"'"+counter, 
			sales:"some_value"
		});
	counter++;
}
~~~

Additionally, you can define a **counter** that sets the starting position of the new items to observe dataset integrity. 

##Deleting Items

To delete an item or several items, you should pass the id of the item (or an array of items' ids) into the api/link/ui.chart_remove.md function.

~~~js
$$("barChart").remove("item_id"); // to delete a single item
 
$$("barChart").remove(["idA","idB","idC","idD"]); // to delete multiple items
~~~

You can also delete first and last items from the dataset as follows:

- get the id of the first/last item using the related methods: api/link/ui.chart_getfirstid.md or api/link/ui.chart_getlastid.md 
- apply the api/link/ui.chart_remove.md method

~~~js
function deleteFirst(){
	$$("barChart").remove($$("barChart").getFirstId());
}
~~~

{{sample 08_chart/08_dynamic/01_add.html }}

Study the [corresponding chapter of the manual](desktop/add_delete.md) to learn more about adding and deleting of items. 

##Sorting Data

Here you use the api/link/ui.chart_sort.md method that takes property from the initial dataset and the sorting manner (ascending or descending) as parameters. 

~~~js
$$('chart').sort('#year#','desc');
~~~

{{sample 08_chart/08_dynamic/03_sorting.html }}


##Filtering Data

As a rule, the api/link/ui.chart_filter.md method takes a function as parameter. In the function you specify the data you want to be filtered. 

{{snippet
Make the chart show you only sales exceeding 50. 
}}
~~~js
function filter1(){
    $$('chart').filter(function(obj){
        return obj.sales >50;
    });
}
~~~

{{sample 08_chart/08_dynamic/04_filtering.html }}

{{note
Rules of data filtering and sorting are described in the [related article](desktop/filter_sort.md).
}}
