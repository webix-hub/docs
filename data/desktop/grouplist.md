Grouplist
===============

##API Reference

- [Methods, parameters and events](api__refs__ui.grouplist.html)
- [Samples](http://docs.webix.com/samples/05_list/index.html)

##Overview

Ui-related grouplist inherits from list and allows presenting data in groups. Data grouping is **hierarchical**, which means that any group item can start its
own group. Hence, this component supports only XML and JSON [data formats](desktop/data_types.md) since they can arrange data in a hierarchical way. 

<img style="display:block; margin-left:auto;margin-right:auto;"  src="desktop/grouplist.png"/>


##Initialization

~~~js
webix.ui({
	view:"grouplist", 
	data:...
});
~~~

{{sample 05_list/03_group_list.html }}

##Working with Grouplist

####Rendering data in grouplist - template peculiarities. 



1 . **Single-value hierarchical dataset:**

~~~js
{id:"root", value:"Films data", open:true, data:[
		{ id:"1", open:true, value:"The Shawshank Redemption", data:[
			{ id:"1.1", value:"Part 1" },
			{ id:"1.2", value:"Part 2", data:[
				{ id:"1.2.1", value:"Page 1" },
				{ id:"1.2.2", value:"Page 2" },
			]},
			{ id:"1.3", value:"Part 3" }
		]},
		{ id:"2", open:true, value:"The Godfather", data:[
			{ id:"2.1", value:"Part 1" },
			{ id:"2.2", value:"Part 2" }
		]}
	]}
~~~

Here we have two branches coming out from the root one, each of which having its own branches.

- text values to display are stored in the **value** property;
- for similar datasets we don't need **template** to define which data to display, as there's only one value per item;
- data for a lower hierarchical level in stored in the **data** object;
- initially expanded branches are defined by **open** property with *true* value. 

2 . **Multiple-value non-hierarchical dataset:**

Far more often you'll need to display different data values on each level, which means that you'll need to set **template**
as well as **grouping pattern** yourself. 

~~~js
{"id":1,"title":"The Shawshank Redemption","year":"1994","rank":"1"},
{"id":2,"title":"The Godfather","year":"1972", "rank":"2"},
{"id":3,"title":"The Godfather: Part II","year":"1974","rank":"3"}
~~~

Grouplist templating differs from that of other data-containing components. There're three properties to observe hierarchy: 

- **templateItem** - defined data that will be presented in the normal data record (that is at the end of hierarchical ladder);
- **templateGroup** - defines data that will be presented in group header in the collapsed state;
- **templateBack**- defines data that will be presented in group header in the expanded state;
- **templateCopy** - not connected with data rendering yet defines the pattern according to which data is copied to clipboard. 

Each grouping item features the **$count** property that stores the number of items in the group it forms. 

~~~js
	$$('grouplist1').getItem(id).$count; 
~~~

Initial data grouping and (optionally) sorting can be set by [data scheme](desktop/data_scheme.md) with corresponding flags. 

~~~js
webix.ui({
	view:"grouplist",
    data:...,
    templateBack: "Year #value# <br> Results:#$count#",
	templateGroup:" Year #value#",
	templateItem:"#rank#. #title#",
    scheme:{
		$group:function(obj){
				return obj.year; //data is grouped by "year"
		},
		$sort:{ by:"value", dir:"desc" } //sorting by displayed values
	},                               //"year" or "rank" depending on heirarchy level
   	...
});
~~~

{{sample 05_list/04_list_grouping.html }}

To learn more about [rendering data through templates](desktop/html_templates.md), [data grouping](desktop/grouping.md) and [data sorting](desktop/filter_sort.md), consult related articles.

####Getting Parent and Child Items

Grouplist API features the [getOpenState()](api/ui.grouplist_getopenstate.md) method to **retrieve IDs** of the items from the **currently opened branches**, both parent items IDs and that of its children. 

~~~js
var state = $$('grouplist1').getOpenState();
if(state){
    result = JSON.stringify(state);
    webix.message(result);
    }
};
~~~

The methods returns IDs of all the opened parents items (according to hierarchy ladder) as well as IDs of items belonging to the curretly opened branch. 

Thus, the return object contains parent ID array and children array:

{{snippet
Hierarchical dataset state
}}
~~~js
{ 
    "parents":["root","1","1.2"],
    "branch":["1.2.1","1.2.2"] 
}
~~~

{{sample 80_docs/grouplist_openstate.html}}

###Working with Grouplist
- desktop/data_object.md
- [Data Loading](desktop/data_loading.md). 
- [Defining Data Template](desktop/html_templates.md).
- [Adding/Deleting Items](desktop/add_delete.md).
- [Editing Data](desktop/edit.md).
- [Data Filtering and Sorting](desktop/filter_sort.md)
- [Selection](desktop/selection.md)
- [Paging](desktop/paging.md)
- [Adding Active Elements to Grouplist Items](desktop/active_content.md)
- desktop/export_png.md
- desktop/data_components_export.md

{{note
Note that there's no built-in possibility to edit data with grouplist. You should create a prototype editlist object beforehand.
}}



##Related Articles

- [Sizing Components](desktop/dimensions.md)
- [Resizing](desktop/resizing.md)
- [Redefinition of the Components](desktop/redefinition.md)
- [List](desktop/list.md)
- [Unitlist](desktop/unitlist.md)
- [X-list](desktop/xlist.md)
- [Grouplist CSS Image Map](desktop/grouplist_css.md)

