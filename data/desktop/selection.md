Selection
===================

##Built-in Selection

###Single-Item Selection

To enable selection you should include **select** property into the component constructor and set its value to *true* (or 1). 

<img src="tutorials/simple_dataview.png"/>

~~~js
     webix.ui({
			view:"dataview",
            select:1, //enables select mode
            ...//config
		});
~~~

{{sample 06_dataview/04_manipulations/02_selection.html }}

The items will be selected on mouse click.

###Selection of Multiple Items

- To enable selection of several items clicked in succession with **'Ctrl'** key pressed, you should switch the component to the **multiselect** mode. 
- To enable multiselection by clicking items (or tapping them on **touch** devices) you should additionally switch to **"touch"** variation of multiselection. 


####Dataview, List and Tree Multiselection

{{snippet
"Ctrl"+click mutliselection
}}
~~~js
webix.ui({
	view:"list",
    select:"multiselect",
    ..// config
})
~~~

{{snippet
"Touch" mutliselection
}}
~~~js
webix.ui({
	view:"list",
    select:"multiselect",
    multiselect:"touch"
    ..// config
})
~~~

####Datatable and Treetable Multiselection


{{snippet
"Ctrl"+click mutliselection
}}
~~~js
webix.ui({
	view:"datatable",
    multiselect:true,
    select:'cell', //multiple seelction of cells
    ...// config
})
~~~

{{snippet
"Touch" mutliselection
}}
~~~js
webix.ui({
	view:"datatable",
    multiselect:"touch", 
    select:'cell',
    ...// config
})
~~~

Moreover, components that present hierarchical data (datatree/index.md and [treetable](desktop/treetable.md)) feature the **level** multiselection pattern. If set, it allows multiple selection of items 
within one and the same tree branch, the items belonging to one and the same hierarchy level. 

~~~js
webix.ui({
	view:"tree",
    select:true,
    multiselect:"level", // in addition to the enabled selection
    ....//tree config

})
~~~

{{sample 17_datatree/04_api/04_multi_select.html }}


{{note
Datatable and treetable feature more selection modes that are described in the [datatable documentation](datatable/selection.md). 
}}

##Selection methods

You can select items with the help of selection methods triggered by various events;

- **select**( *IDs, [non_modal, continue]* ) function selects the specified items. Check [selection API](api/selectionmodel_select.md) for details.

If you don't pass any parameter into the function, all items will be selected. 

You can select the first and the last item from the dataset without specifying their IDs. In this case, you should additionally apply **first()** and 
**last()** methods to the component. 

~~~js
$$('datalist').select($$('datalist').getFirstId();) //selects the first data item in the list

$$('dataview').select(4); //the cell containing item with ID = 4 will be selected
$$('dataview').select([2,3,4]); the items with IDs equalling to 2, 3 and 4
~~~

- **selectAll()** function equalls to select(); with no parameters and highlights all the items at once;
- **unselect()** and **unselectAll()** - the functions work  similar to the above mentioned and deselect items according to the same principles;
- **isSelected(int)** - the function checks whether the item with this ID is selected. Returns *true* or *false*;
- **getSelectedId()**  - the function doesn't take any parameters. It returns the ID of a selected item or an array of IDs in case of multiselect mode. 

##Keyboard navigation

Keyboard navigation can be used for the component with enabled selection.

~~~js
webix.ui({
	view:"list",
    select:true,
    navigation:true
});
~~~

{{sample 15_datatable/05_selection/09_navigation.html}}

{{note
Note than not all data components support navigation by default. Then **KeysNavigation** module should be added manually.
}}

~~~js
webix.ui({
	view:'dataview', id:"dataview1", select:true, navigation:true
});

webix.extend($$('dataview1'), webix.KeysNavigation);
~~~

The code above adds navigation only to this instance of a Dataview, still it's possible to provide the functionality for all dataviews in the app.  
For more details, refer to [Component Extending](desktop/desktop/extend.md#extendedfunctionality) article.

@complexity:1