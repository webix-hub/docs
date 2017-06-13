Advanced Configuration of Popup Selectors
=========================

[Combo](desktop/combo.md), [richselect](desktop/richselect.md), [multiselect](desktop/multiselect.md) and [multicombo](desktop/multicombo.md) controls can be highly customized
because they are comprised of the following components: 

- Webix [text](desktop/text.md)  input that can be either editable (for combos) or non-editable (for selects);
- Webix [list](desktop/list.md) from which templating and loading rules, item sizes and look-and-feel are taken;
- Webix [popup](desktop/popup.md) from which popup size and behavior are taken. 

The combination of list and popup is called **suggest list** (described in detail [separately](desktop/suggest.md)).
Here we will have a look at extra configuration possibilities of suggest-based controls.

##Advanced Configuration

Normally, we define select options as array or data source: 

{{snippet
Short notation
}}
~~~js
{ view:"combo", options:[..data..] }
//or
{ view:"combo", options:"mydata.php"}
~~~

A suggest list of a default type will be attached. It will feature default **template**, **size** and **filtering**(for editable inputs). 
If you need to customize these things, you should use the extended configuration. 

{{snippet
Extended notation
}}
~~~js
{ view:"combo", options:{
	view:"suggest", //optional
    filter:function(item, value){ ...},
    body:{ //list configuration
    	view:"list", //optional
    	data:[..data..],
        template:"#value#",
        yCount:7
    }
}}
~~~

{{sample 13_form/01_controls/11_combo_advanced.html}}

As you can see, **options** attribute can be used as object that houses [suggest](desktop/suggest.md) configuration and [list](desktop/list.md) settings in its *body*.

##Changing Option Template

Option data may contain any properties instead of (in addition to) default *id-value* pairs (still, **id** attribute is mandatory). 

~~~js
{ view:"combo",  value:2, options:{
    template:"#name#",
    data:[
       { id:1, name:"Banana" },
       { id:2, name:"Papaya" }
]}
~~~

Extra text or HTML can be added: 

~~~js
{ view:"combo",  value:2, options:{
    template:"Extra #value#",
    data:[
       { id:1, value:"Banana" },
       { id:2, value:"Papaya" }
]}
~~~

Options data may as well contain **multi-line text** with html tags. In this case, the height of a parent component (here:toolbar) should be increased:

~~~js
{ view:"richselect",
  options:[
	{ id:1, value:"Some long multi line content <ul><li>item1 <li> item 2</ul>"}, 
	{ id:2, value:"Papaya"  }
]}
~~~

{{sample 02_toolbar/20_richselect.html}} 

##Changing Filtering Pattern

When a custom template is used for a combo box filtering should be redefined as well, since by default combo popup is filtered by **value** property. 

**Options** attribute houses configuration of a [suggest list](desktop/suggest.md) in use while its **body** attribute houses a popup list:

~~~js
view:"combo", value:1, options:{
    filter:function(item, value){
    	if(item.name.toString().toLowerCase().indexOf(value.toLowerCase())===0)
             return true;
        return false;
    },
    body:{
        template:"#name#",
		data:[
           { id:1, name:"Banana"},
           { id:2, name:"Papaya"}
        ]
    }
}
~~~

Filtering is applied only in case the suggest list is combined with editable inputs - [combo](desktop/combo.md) and [multicombo](desktop/multicombo.md).

##Server-Side Options

The easiest way to load options from server is to set a link to the necessary script right in the **options** attribute: 

~~~js
view:"richselect", value:"2", options: "server/data.json"
~~~

For extra customization, see below how to define options dynamically.

##Getting Popup and List objects

The controls feature special API to work with their parts:

~~~js
var popup = richselect.getPopup(); //popup object
var list = richselect.getPopup().getList(); // list object
~~~

##Defining Options Dynamically

####Defining options data through the control: 

Options can be redefined like [any other property](desktop/redefinition.md):

~~~js
combo.define("options", [ {id:1, value:"Apple"}, {id:2, value:"Banana"} ]);
combo.refresh();
~~~

####Parsing options into a popup list

Options are parsed to popup list under Webix [data loading](desktop/data_loading.md#parse) rules: 

~~~js
var list = $$("combo1").getPopup().getList();
var new_options = [
      { id:1, name:"Germany"},
      { id:2, name:"Great Britain"}
];
list.clearAll();
list.parse(new_options);
~~~

Options can be [loaded by Ajax](helpers/ajax_operations.md) as well:

~~~js
webix.ajax().get("server/data.php", function(text, data){
	var options = data.json();
    
    var list = $$("combo1").getPopup().getList();
	list.clearAll();
	list.parse(new_options);
});
~~~

####Loading options into a popup list

Options are loaded to popup list under Webix [data loading](desktop/data_loading.md) rules: 

~~~js
var list = $$("richselect2").getPopup().getList();
list.clearAll();
list.load("server/data.json");
~~~

##Syncing Options with a DataCollection

Options list can be synchronized with either other component data or [Datacollection](desktop/nonui_objects.md) data: 

~~~js
// pushes the specified data into richselect popup 
$$("my_richselect").getPopup().getList().sync($$("list1")); 
~~~

{{sample 80_docs/getpopup.html }}

Data syncing is described in the [related article](desktop/data_binding.md#syncingdataoftwocomponents).

##Attaching Events within a Suggest List

You can attach functions to list under the common [Events Handling](desktop/event_handling.md) pattern:

~~~js
view:"combo", value:1, options:{
    body:{
        data:[
           { id:1, value:"Banana"},
           { id:2, value:"Papaya"},
           { id:3, value:"Apple"}
        ],
        on:{
           'onItemClick':function(id){
               webix.message("Clicked: "+this.getItem(id).value);
            }
        }
   }
~~~

Still, to catch changes in the combo/richselect, it's better to use the related [onChange](api/link/ui.combo_onchange_event.md) event.

##Sizing and Positioning

The dimensions of a popup list as well as its position in relation to a master control can be customized via **suggest/options** configuration object. 

~~~js
view:"combo", options:{
	fitMaster:false,
    body:{
    	yCount:7
    }
}
~~~

Read more about it in the [corresponding documentation article](desktop/suggest.md#sizingandpositioning).

##Changing Suggest Type

{{note
Be careful while experimenting with this feature - suggest lists differ in functionality. 
}}

By default, multiple-choice controls, e.g. [multiselect](desktop/multiselect.md) use a [checksuggest](api/refs/ui.checksuggest.md) for storing options: 

<img src="desktop/multiselect.png"/>

~~~js
{ view:"multiselect", options:[
	{ id:1, value:"Alex Brown" },
	{ id:2, value:"Dan Simons" }
]}    
~~~

If you want to use a [multisuggest](api/refs/ui.multisuggest.md) for these needs, use extended configuration and specify **view name**:

<img src="desktop/multisuggest_in_multiselect.png">

~~~js
{ view:"multiselect",  options:{
	button:true,
    buttonText:"Approve", //"Select" by default
	view:"multisuggest",
	data:[
		{ id:1, value:"Alex Brown" },
		{ id:2, value:"Dan Simons" }						
	]
}}    
~~~

{{sample 60_pro/02_form/02_multiselect.html}}

Read more about [advanced suggest lists](desktop/suggest.md#advancedsuggestlists).





