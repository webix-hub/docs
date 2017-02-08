Disabling/Enabling Components 
===============

webix UI library allows temporarily disabling functionality of some component. It remains visible yet becomes dim, and neither of it's elements works.

The functions to disable and enable components are as follows: 

~~~js
$$("cell").enable();
...
$$("cell").disable();
~~~

{{sample 19_api/01_disable.html }}

When can it be useful?

- For instance, you have a [DataView](desktop/dataview.md) and a [form](desktop/form.md) and want to disable a form until an item from the 
DataView nearby is selected. 

- Or you want to temporarily disable a component until server operation is performed (e.g. data saving) in order that users can't click buttons 
and make selection. 

To check whether the component is enabled or disabled now, use the appropriate method: 

~~~js
$$('cell').isEnabled(); //returns boolean values
~~~


@complexity:1