Custom Functor for Data Grouping
=================

Functor is a method that is applied to an item property in order to define the way it is presented in a group header. 

~~~js
[
	{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790},
	{ id:2, title:"The Godfather", year:1972, votes:511495},
	{ id:3, title:"The Godfather: Part II", year:1994, votes:319352},
	{ id:4, title:"The Good, the Bad and the Ugly", year:1972, votes:213030}
]
~~~

When data is grouped by year, we may want to learn total number of votes per year, or their maximim/minimal value, etc. It is **grouping functors** that are designed for this purpose. They are used
within **map** object of the [grouping function](desktop/grouping.md). 

~~~js
$group:{
	by:"year",
    map:{
    	votes:['votes', 'sum']	
    }   //'sum' is a functor to calculate votes total for each year
}
~~~

<img src="desktop/sum_functor.png">

{{sample 15_datatable/15_api/06_aggregation.html}}

Simplest operations are supplied by [prebuilt grouping functors](desktop/grouping.md#groupingfunctors) stored in the api/refs/groupmethods.md class.



However, you can a create custom functor to meet your needs.

Adding a New Functor
------------

Any function can become a grouping functor provided that you've given it the **unique name**, described the logic and added to the api/refs/groupmethods.md class. 

Such function takes two arguments:

- **prop** - the property to process;
- **data** - data object with items of this group.

There's no functor to find out the average value for item ptoperties, so let's call it **median** and add it. 

~~~js
webix.GroupMethods.median = function(prop, data){
				if (!data.length) return 0;
				var summ = 0;
				for (var i = data.length - 1; i >= 0; i--) {
					summ += prop(data[i])*1;
				};
				return summ/data.length;
			};
~~~

And apply the newly created functor referring to it by its name:

~~~js
$group:{
	by:"year",
    map:{
    	votes:['votes', 'median']	
    }   
}
~~~

{{sample 15_datatable/32_grouping/04_custom_aggregation.html}}

The functor can be as well defined **bypassing GroupMethods class** by setting a custom fucntion. 

~~~js
function getAverage(prop, data){
    		   //..the same as for 'median' above 
} 

$$("mychart").group({
		by:"year",
		map:{
			sales:["sales", getAverage]
		}
});
~~~

{{sample 08_chart/03_group/01_group.html}}

By the way, you can omit the functor yet set the way grouping criterion will be presented: 

~~~js
webix.ui({
	view:"treetable",
	columns:[ //default template for ungrouped items
		{ id:"title", template:"{common.icon()} #title#" }, 
	],
	scheme:{
		$group:{
			by:function(obj){ return Math.floor(obj.year/10); }, 
			map:{
				title:[function(obj){ 
					var min = obj.year - obj.year%10; 
					return min + " - "+ (min+10) 
				}]
			}
		}		
});	
~~~

<img src="desktop/grouped_datatree.png"/>

{{sample 15_datatable/32_grouping/01_static.html }} 

