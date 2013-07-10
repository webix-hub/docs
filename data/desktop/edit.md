Editing Data Items
=====================

Library components have similar editing patterns yet some peculiarities should be taken into account. Hence, there exist two groups: 

- [Editing Datatable and Treetable](#datatable)
- [Editing Other UI-Related Components](#other)


Generally, a set of properties in the component's constructor enable on-the-go editing with its items. At the same time, [programmatic editing](#api) is as well possible.

For these needs take the following steps during component initialization:

- set the **editable** property to the true state;
- define **editor** type. 
- define **editAction** (single or double mouseclick, or keyboard action).  

With **[datatable](datatable/index.md)** you should inclide the **editor** property into a column object. 

{{note
Data **editors** and **edit actions** are described [here](desktop/editing.md);
}}

##Datatable and Treetable Editing {#datatable}

By default, only [datatable](datatable/index.md) and [treetable](desktop/treetable.md) feature built-in editing ability.

**Editable** and **editAction** are included into the component object while **editor** is set for each column separately. 

~~~js
webix.ready(function(){
		webix.ui({
		view:"datatable",
		columns:[
			{ id:"rank", editor:"text", header:""},
			{ ...},
			{ ...}
		],	
		editable:true,
		editaction:"click",
		data: small_wide_film_set //data from external js-file
			});
~~~

{{sample 15_datatable/04_editing/03_multiple_editors.html }}

##Editing Other UI-Related Components {#other}

To enable edit mode with other ui-related components, you should create a **prototype object** on their base and [extend](desktop/extend.md) them with editability. Then they will get the
above mentioned functionality.

For instance, to edit ui-related [list](desktop/list.md), create an editable protptyoe for it first and give it name to your taste:

~~~js
		webix.protoUI({
		name:"editlist" // or "edittree", "dataview-edit" in case you work with them
		}, webix.EditAbility, webix.ui.list);
~~~

And proceed with the list object initialization. Note that view is called "editlist" value instead of "list," since it's the name of the newly create object from the code above:  

~~~js
webix.ui({
		container:"listA",
		view:"editlist",
		template:"#rank#. #title#",
		editable:true,
		editor:"text",
		editValue:"title", 
		data:big_film_set
			});
~~~

{{sample 05_list/05_editable.html }}

Take notice of the **editValue** property here. It defines the dataset item from the template since each record in [list](desktop/list.md) and similar components 
has a template with several values from the initial data source. Study the nature of template-making [here](desktop/html_templates.md).

{{note
Note that editing allows for on-page changes only and doesn't presuppose automatic data saving into the dataset. To actually save data you should init [webix.DataProcessor](desktop/dataprocessor.md) for the edited component.
}}

##Editing Methods {#api}

There's a collection of methods to enable and control editing. 

Generally, you can switch any data item to the editable state with the **edit()** method that requires item ID as parameter

~~~js
editlist.edit(7);
~~~

To open editor in the datatable cell you need to specify row and column ID-s in casse of However, it's recommended to use *editRow*, *editColumn* and *editCell* functions. 
See the [datatable API](api/link/ui.datatable_edit.md) for details. 

~~~js
datatable.edit({
        row:2,
        column:"title"
});
~~~

In addition, the following methods are applicable:

- **editNext**() - closes the currently opened editor and opens editor in the next editable item. 
- **editStop()** - closes all opened editors. Data is automatically saved;
- **editCancel()** - cancel editing and closes all opened editors. Data isn't saved. 
- **editFocus()** - enables editing in the editor in focus (the method is helpful for several active editors on the page).

Check editing methods in the [API reference](api/editability_edit.md).


###Related Articles

- [Data Update](desktop/update.md) - the alternative method of item editing
- [Data Editors](desktop/editing.md) 

@complexity:2