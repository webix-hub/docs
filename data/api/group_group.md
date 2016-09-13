group
=============



@short:
	groups data by the specified data property

@params:
- config	object		an object with grouping parameters 
- mode		boolean		defines whether the component should be re-rendered after grouping (<i>true</i> by default)


@example:
myview.group({
	by:"company", // 'company' is the name of a data property
	map:{
		sales:["sales","sum"]
	}	
});



@template:	api_method
@defined:	Group	
@related:
	desktop/grouping.md
@relatedapi:
	api/group_ungroup.md
	api/dataloader_scheme_config.md
@relatedsample:
	08_chart/03_api/01_group.html
@descr:
{{note
The method is called for each data item.
}}

The **config** object has 2 properties:

- **by** – a data property according to which items will be united in groups 

- **map** – an object that specifies new data properties that the items in a group will have. Properties are specified
by an array. 
The first element of this array is the name of a property from original data, 
the second one – the functor that will be applied to all values of the property (set by the first element) in the group.<br>
Grouping provides the following functors:

  - api/groupmethods_sum.md – gets the sum of values in a group;
  - api/groupmethods_max.md – gets the maximum value in a group;
  - api/groupmethods_min.md - gets the minimum value in a group;
  - api/groupmethods_count.md - gets the number of items in a group;
  - api/groupmethods_any.md - gets a random property value from a group;
  - api/groupmethods_string.md - adds a custom data property to group items.<br>  
It’s possible to define custom functor. Read on the topic in the related article - 'desktop/custom_functor.md'.

<br>

To group data initially (just after data has been loaded) you may use the api/dataloader_scheme_config.md parameter, to be accurate, its **$group** key.


~~~js
webix.ui({
	view:"chart",
	...
	scheme:{
		$group:{
			by:"company", // 'company' is the name of a data property
			map:{
				sales:["sales","sum"],
                state:["grouped","string"]
			}	
		}
	}
});
~~~
