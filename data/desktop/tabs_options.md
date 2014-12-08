Adding and Deleting Multiview Cells Dynamically
=============

Here two approaches are possible:

1 . If you are using **[multiview](desktop/multiview.md)** with a switching control (**[tabbar](desktop/controls.md#tabbar)** or 
**[segmented](desktop/controls.md#segmented)**) - you should treat multiview and a switching control separately. 
In other words you should **add** and **remove options** for tabbar (segmented button) and at the same time **add** and **remove views** for the multiview. 

2 . If you are using **[tabview](desktop/tabview.md)** (integral component that consists of a built-in multiview and tabbar) - note that it features dedicated methods 
to **add** and **remove views** together with the corresponding **tabs**. 

##Using Tabbar and Multiview

Both [Tabbar](desktop/controls.md#tabbar) and [Segmented Button](desktop/controls.md#segmented) feature separate parts - tabs or segments - that are defined by **options** property.  
Each of its options can be connected with a separate view or a separate click handler. 

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Switch controls
	</caption>
	<tbody>
	<tr>
		<td> <code> view:"segmented" </code> </td>
		<td style="text-align:center;"><img src="desktop/switch_segmented.png"/></td>
	</tr>
	<tr>
		<td> <code> view:"tabbar" </code> </td>
		<td style="text-align:center;"><img src="desktop/switch_tabbar.png"/></td>
	</tr>
	</tbody>
</table>

Tabs/segments can be added and deleted on the go with the help of the following methods: 

- **[addOption()](api/ui.segmented_addoption.md)** - adds a new tab/segment according to the provided configuration; 
- **[removeOption()](api/ui.segmented_removeoption.md)** - removes the tab/segment according ot the provided ID. 

Multiview cells can be added and deleted denamically by using: 

- **[addView()](api/link/ui.multiview_addview.md)** - adds view to layout (multiview is layout) according to the provided configuration;
- **[removeView()](api/link/ui.multiview_removeview.md)** - removed layout cell by the given ID.
 
{{snippet
Adding
}}
~~~js
rows:[
	{view:"tabbar", id:"tabs", multiview:true, options:[], ..}, //empty tabbar
	{view:"multiview", id:"views", cells:[
    	{template:"..."} //multiview should have at least one cell
    ]}
]    
...

function open_new_tab(id){	
	var item = $$('list1').getItem(id);
    
    //adding a new cell to multiview
    $$("views").addView({ view:"template", id:item.id, template:item.title});
    //adding option to the tabbar
	$$('tabs').addOption(item.id, item.title, true);
};
~~~

{{snippet
Deletion
}}
~~~js
function del_tab(){
	//getting the ID of the active tab
	var id = $$("tabs").getValue(); 
	
    //removing tabbar option
    $$("tabs").removeOption(id);
    
    //removing corresponding view
    $$("views").removeView(id);
}       
~~~

{{sample 02_toolbar/19_tabs_on_the_go.html}}

~~~note
The logic of view adding and removal can be studied in detail in the 
desktop/dynamic_layout.md#addingremovingviewsdynamically.
~~~

##Using Tabview

[Tabview](desktop/tabview.md) is a hybrid of a [multiview](desktop/multiview.md) and [tabbar](desktop/controls.md#tabbar).  
It features two methods that allow adding and removing cells together with corresponding tabs. 

Each combination of a tab and a cell is configured as: 

~~~js
{ header:"header_title", body:{ ..view config ..}
~~~

The same configuration is passed into the [addView()](api/link/ui.tabview_addview.md) method: 

~~~js
$$("tabview1").addView({
	header:"New Tab",
	body:{ //webix.uid() generates a random number
		template:"New content "+webix.uid()
	}
});
~~~

The tabview cell can be removed by [removeView()](api/link/ui.tabview_addview.md) method that required an ID if this cell: 

~~~js
var id = $$("tabview1").getValue(); //id of active cell
$$("tabview1").removeView(id);
~~~

{{sample 20_multiview/13_tabview_dynamic.html}}

##Built-in Tab 'Close' Button

Webix tabbar can be equipped with a 'Close' button: 

<img src="desktop/tabs_closable.png"/>

~~~js
//all tabs
{view:"tabbar", close:true, options:[]}

//some tabs
{view:"tabbar", options:[
	{id:1, value:"Tab 1", close:true},
    {id:2, value:"Tab 2"}
]}
~~~

If a closable tab is used in a **separate tabbar**, you should provide logic to remove the corresponding view. 

~~~js
tabbar.attachEvent("onOptionRemove", function(id, value){
    $$("multiview").removeView(id);
});
~~~

ID of the tab concides with ID of the view, normally. 

If a closable tab is used within a **tabview**, the corresponding tab will be removed from the app automatically. 


