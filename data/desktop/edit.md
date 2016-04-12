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

With **[datatable](datatable/index.md)** you should include the **editor** property into a column object. 

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

{{editor http://webix.com/snippet/bb877d8c	Opening Multiple Editors}}

##Editing Other UI-Related Components {#other}

To enable edit mode with other ui-related components, you should create a **prototype object** on their base and [extend](desktop/extend.md) them with editability. Then they will get the
above mentioned functionality.

For instance, to edit ui-related [list](desktop/list.md), create an editable prototype for it first and give it name to your taste:

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

{{editor http://webix.com/snippet/0c88a08d	List Editing}}

Take notice of the **editValue** property here. It defines the dataset item from the template since each record in [list](desktop/list.md) and similar components 
has a template with several values from the initial data source. Study the nature of template-making [here](desktop/html_templates.md).

{{note
Note that editing allows for on-page changes only and doesn't presuppose automatic data saving into the dataset. To actually save data you should initialize [webix.DataProcessor](desktop/dataprocessor.md) for the edited component.
}}

##Editing Methods {#api}

There's a collection of methods to enable and control editing. 

Generally, you can switch any data item to the editable state with the **edit()** method that requires item ID as parameter:

~~~js
editlist.edit(7);
~~~

To open editor in the datatable cell you need to specify row and column ID-s. However, it's recommended to use *editRow*, *editColumn* and *editCell* functions. 
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

Editing via a Form
----------------------------------

###Form and Component Binding

Webix components can be bound to each other to ensure select-based **synchronous changing** of their **data**. For instance, a simple function can be used to bind a form to a grid, 
which allows to edit datatable data:

- clicking the component item will trigger form filling;
- then you edit data in the form;
- form [saving] will send changed data back to the component. 

~~~js
$$('form1').bind('datatable1');
~~~

{{editor http://webix.com/snippet/e76708c1	Editors.Bind Form}}

Note that **name** attributes of form fields coincide with **properties (fields)** of the data used for the edited component while the component can be [non-editable](api/editability_editable_config.md) itself. 
You can [study data binding separately](desktop/data_binding.md).

###Related Form for an Editable Component

Webix editing API allows to attach a form  without data binding as well. Unlike binding, it works only for [editable](api/editability_editable_config.md) components.

First of all, you need to define the related form inside a master component with the help of [form](api/editability_form_config.md) property:

~~~js
	view:"datatable", 
	editable:true,
	form:'myform' //ID or object of related form/popup
~~~

A form should be defined separately, either in [layout](desktop/layout.md) or in [popup](desktop/popup.md). 

~~~js
view:"form",
id:"myform",
elements:[...]  

//or
view:"popup", 
id:"myform",
body:{
    view:"form", elements:[...]
   }

~~~

Note that: 

- ID or object attached to a component by the **form** property should point to either a form, or a popup in which the form lies;
- In case of a **popup**, it can be initialized hidden so that it will be shown only when editing starts (when you click data item in master component). 


###Related Articles

- [Data Update](desktop/update.md) - the alternative method of item editing
- [Data Editors](desktop/editing.md) 

@complexity:2