Working with Filters
======================

Operations with Filters
--------------------

You can add filters and manipulate them through the **filters** collection of Pivot and PivotChart.

###Adding a new filter

To add a new filter, you should use the *filters.add()* method. It takes two parameters:

- name - (string) the view name of the filter control
- isSelect - (boolean) optional, indicates whether the added filter is a select control (needed for automatic options definition)

~~~js
$$("pivot").filters.add("multiselect", true);
$$("pivot").filters.add("datepicker");
~~~

###Getting a collection of filters

To get a collection of filters, use the *filters.get()* method:

~~~js
var filters = $$("pivot").filters.get();//->["datepicker","multicombo","select","text"]
~~~

###Removing filters

To remove existing filters, use the *filters.remove()* method:

~~~js
$$("pivot").filters.remove("datepicker");
~~~

{{sample 61_pivot/06_filters/02_add_filter.html}}


Changing Field for Filtering 
-----------------------------

Sometimes, we need to use different values for filtering. 
For example, if you use a date filter that returns timestamp values and you want to display formatted date values in Pivot. 
In such a case, you can put a pair of a formatted and a “timestamp” fields into the *filterMap* collection of Pivot (PivotChart). 

A new data property can be added directly to datasource or with the help of [scheme $init](desktop/data_scheme.md#initkey). 
Properties of data items that begin with “$” are not added into the “Fields” list.


~~~js
webix.ui({
    view: "pivot",
    scheme:{
    	$init: function(item){
        	item.$date = webix.i18n.parseFormatDate(item.date).valueOf();
		}
    },
    structure: {
		filters:[{name: "date", type: "datepicker"}],
   		...
    },
    filterMap: {
		date: "$date"
    }
});
~~~

{{sample 61_pivot/06_filters/03_datepicker.html}}

Changing Parent of Pivot Filters
-------------------------

Pivot fires the api/ui.pivot_onviewinit_event.md event on filters initialization. 
The event handler allows you to change filters configuration and initialize filters in a different parent view.

In the following example elements of the “filters” toolbar are placed into the “pivotFilters” rows layout: 

~~~js
webix.ui({
	id: "pivot",
	view: "pivot",
	on:{
		onViewInit: function(name, config){
			if(name == "filters" && $$("pivotFilters"))
				webix.ui(config.elements, $$("pivotFilters"));
			config.elements = false;
		}
	},
	...
});
~~~

{{sample 61_pivot/06_filters/01_outer_filters.html}}
