Grouping Data Items
===========

Grouping Types
---------------

Grouping data in Webix components can be obligatory and optional, static and dynamic. 

**Obligatory grouping**

Grouping is a must-have feature for components that present data hierarchically yet are populated with non-hierarchical (inline) dataset. 

Such components are subject to initial static grouping. Each group features a group header(parent branch) that can be opened to show the group members. 

- [grouplist](desktop/grouplist.md);
- [tree](datatree/index.md);
- [treetable](desktop/treetable.md).

When they are fed with hierarchical data grouping is not necessary. Read more about [data types](desktop/data_types.md). 

**Optinal grouping**

Data can be groupped if you need to present data united by some criterion.

- [chart](desktop/chart.md);
- [datatable](datatable/index.md). 

With these componnents you can see only the result of grouping. 

{{note
In case of inline dataset:

- the initial grouping for [list](desktop/list.md) makes it [grouplist](desktop/grouplist.md);
- the initial grouping for [datatable](datatable/index.md) makes it [treetable](desktop/treetable.md). Still, datatable can be dynamically grouped. 

However, they are separate components - **groulist** and **treetable** - and should be created with their own names. 
}}

**Static/Initial grouping**

Grouping criteria are set **during component init** by the **$group** key of the **[scheme](desktop/data_scheme.md)** object. Necessary for the components with obligatory grouping. 

~~~js
webix.ui({
	view:"tree", 
	scheme:{
		$group:"year"
	}
});
~~~

{{sample 17_datatree/01_loading/07_load_group.html}}

**Dynamic grouping**

Grouping is defined by a function applied to the component.

~~~js
$$("mytree").group("year");
~~~

To **cancel grouping**, make use of the opposide method. 

~~~js
$$("mychart").ungroup();
~~~

Setting Grouping Pattern 
-----------

Syntax for **group()** method and **$group** object property is the same - you need to specify here the grouping critetion as:

- **data item;**
- **function;**
- **object.**

###Data Item

String that points to the property from the initial dataset;

~~~js
//static mode
tree = webix.ui({
	view:"tree", 
    scheme:{
    	$group:"year"
    }
});

//dynamic mode
tree.group("title");
~~~

###Function

The function is applied to data object and returns grouping criterion(-a);

~~~js
scheme:{
	$group:function(obj){
		return obj.year + ..;
	}
}
~~~

{{sample 05_list/04_list_grouping.html }}

###Object 

An object with properties defining grouping criterion and grouping pattern:

- **by** (must-have) - set the grouping criterion either as *string* or as *function*. 
- **map** - an object that redefines values to display in the current [template](desktop/html_templates.md). Here math **functors** are applied to the specified properties of group members. 
- **footer** (for treetable) - defines template for extra table line that displays common property of group members.
- **row** (for datatable and treetable) - defines template for the whole row regardless of initial columns. 

~~~js
//static mode
webix.ui({
	view:"chart",
	scheme:{
		$group:{
			by:"year", 
            map:{...}
		}
	}
});

//dynamic mode
grida.group({
	by:"year",
    map:{...}
});

~~~

If you use only **by** property in the group object, it is the same as if you define criterion with a data item or function. Hence, the following definitions are **equal**:

~~~js
$group:"year"

$group: function(obj){ return obj.year;}

$group:{ by:"year" }

$group:{
	by: function(obj){ return obj.year }
}
~~~

The function can be of any complexity:

~~~js
by: function(obj){ return Math.floor(obj.year/10); }
~~~

{{sample 15_datatable/32_grouping/01_static.html}}


Grouping Functors
---------------------------

Grouping functors are used within **map** and **footer** that redefine templates. 

~~~js
$group:{
	by:"year", 
    map:{
    	property(template):['property', functor] 
    }   //or property:[function (obj){...}]
}
~~~

**Grouping functors:**

- **any** to show all values for this property; the same effect will be set if you **omit functor** at all. 
- **sum** to calculate and show total sum of the values;
- **max** to pick the maximum  value of the property;
- **min** to pick the minimum value of the property;
- **count** to calculate the number of items in each group;
- **string** to show property name as a string rather than its value. For *{year:1994}*, the word "year" witll be displayed in the component. 
- **custom functor** for other math operations. 

Learn more about [grouping functors](desktop/custom_functor.md). 


Templates for Groups and Items
--------------------

By default, component items display object **value** which is:

- **value** property of the datasource;
- value from the dataset defined by [template](desktop/html_templates.md);
- value of an array element (if data comes in JSArray);

For items that display a **group headers** (parent branches), value is the one defined by **by** criterion:

<img src="desktop/tree_grouping.png" />

~~~js
webix.ui({
	view:"tree",
	scheme:{
		$group:{
			by:"year" // group header value
        }
	},
    data: [  //default value
    { id:1, value:"The Shawshank Redemption", year:1994, votes:678790, rating:9.2, rank:1}, {...}]
});
~~~

{{sample 17_datatree/01_loading/07_load_group.html }}

If a component has a template that sets other property as value for its items, you need to define **map** to redefine this value during grouping: 

~~~
webix.ui({
	view:"tree",
	template:'{common.icon()} {common.folder()}#title#',
	scheme:{
		$group:{
			by:"year",
			map:{
				title:['year', 'any']
			}
		}
    }
});
~~~

Initially, template allows showing only titles. Map tells that group **title** is **year** and makes year the value to show.

{{note
Each component has its own peculiarities concerning templates in a grouped mode. Study them below. 

In addition, you can chanage data to display by defining a function for the **["onGroupCreated"](#groupingevent)** event.
}}

###Datatable and Treetable Specificity

For datatable and treetable data templates are set by column IDs or column template or both. 

Yet, in grouped mode, the grids won't show data for those columns which templates are not set either by template function or by map.

Map can redefine more than one property. 

~~~js
map:{
	votes:["votes", "sum"], //"votes" values will be summed 
	title:["year"] //title will take year values
}
~~~

{{sample 15_datatable/32_grouping/03_aggregation.html }}

Function templates allow for setting different presentation ways for group items and group headers.

- **obj.$group** - stores item state (whether it is a group item or group header )
- **obj.$level** - stores hierarchy level with upper being 1. 

The two snippets are equal: 

~~~js
template: function(){
	if(obj.$group) return ...; //for group headers
    return ... //for group items
}


template: function(){
	if(obj.$level==1) return ...; //for group headers
    return ... //for group items
}
~~~

Treetable with map defined: 

~~~js
columns:[
	{ id:"title", template:function(obj, common){
			if (obj.$group) return common.treetable(obj, common) + obj.title;
			return obj.title;
			}
	}
],
scheme: {
	$group:{
    	by: "year",
        map:{
			title:["year"] //year is 'obj.title' for group header
		}
    }
}
~~~

{{sample 15_datatable/32_grouping/03_aggregation.html}}

Treetable with unset map:

~~~js
columns:[
	{ id:"title", template:function(obj, common){
		if (obj.$level == 1) return common.treetable(obj, common) + obj.value;
		return obj.title;
		}
	}
],
scheme:{
	$group:"year" //year is obj.value for group header
}
~~~

{{sample 15_datatable/32_grouping/01_static.html}}


####Row Templates and Additional Rows

**Row template**

Row property within grouping object sets group header template for the whole row regardless of grid columns. 

~~~js
grida.group({
	by:"year",
	map:{
		"year":["year",  "any"],
		"votes":["votes", "sum"]
	},
	row:function(obj){
		return "Year "+obj.year+", total votes: "+webix.i18n.numberFormat(obj.votes);
	}
});
~~~

{{sample 15_datatable/15_api/08_aggregation_line.html}}

**Group Footer**

Group footer display common value for all the members of this group, e.g. total sum, max or min value, etc. 

<img src="desktop/group_footer.png">

Footers are defined in the same way as **map** and includes the chosen **property** treated with a functor and a template for the **footer row**. 

~~~js
grida.group({
	by:...,
    map:{...},
	footer:{
		votes:["votes", "sum"],
		row:function(obj ){ return "<span style='float:right;'>Total: "+webix.i18n.numberFormat(obj.votes)+"</span>"; }
	}
}); 
~~~

{{sample 15_datatable/32_grouping/06_extra_lines.html}}

###Chart Specificity

For grouped chart grouped items and group headers correspond to each of its axes

- X-axis values display grouping criterion (introduced by **by**); 
- Y-axis values display the chosen values of group items treated with a functor. 

For instance, if you need to display sells of each company, you should group all sales values by company while calculating the sum for each company. 

~~~js
webix.ui({
	view:"chart",
    value:"#sales#", //default template for Y axis
    scheme:{
		$group({
			by:"company", //template for X axis
			map:{
				sales:["sales","sum"] 
			} //Y axis template now shows sum of all sales for each year
		})
    }
})
~~~

<img src="desktop/chart_grouping.png"/>

{{editor http://webix.com/snippet/0323c09f	Chart Grouping}}

The first element in the map is a data item property while the second one is a **functor** applied to all the values of this property. 

###Grouplist Specificity:

Grouplist features ites own properties: 

- **templateItem** - to set template for items in a group;
- **templateGroup/templateBack** - to set template for group header. 

See [grouplist](desktop/grouplist.md) article for details. 


Grouping Events {#groupingevent}
-------------------

- **onGroupCreated** - fires when grouping is applied to the component and takes the following parameters: 
	- **id** - ID of the group header (parent branch);
    - **value** - value of the grouping criterion;
    - **data** - component data object;
- **onGroupFooter** - fires when grouping is applied to the component and a footer for each group is provided. 

~~~js
webix.ui({
	view:"treetable",
	on:{
		"data->onGroupCreated":function(id, value, data){
			this.item(id).value = "Year "+value;
		}
	}
});

grida.group({
	by:"year" //obj.value = year
});
~~~

<img src="desktop/group_event.png">

{{sample 15_datatable/32_grouping/05_grouping_event.html}} 

@index:
  - desktop/custom_functor.md