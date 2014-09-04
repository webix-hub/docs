Advanced Configuration of Popup Selectors
=========================

[Combo](desktop/controls.md#combo), [richselect](desktop/controls.md#richselect) and [multiselect](desktop/controls.md#multiselect) popup can be highly customized. 

The only thing you should remember that it is comprised of the following components: 

- from Webix [list](desktop/list.md) it takes templating and loading rules, item sizes and look-and-feel. 
- from Webix [popup](desktop/popup.md) it takes popup size and behaviour. 

The combination is called **suggest list** that is described in detail [separately](desktop/suggest.md).

{{note
All the functionality described below is shown in this sample:
}}
{{sample 13_form/01_controls/11_combo_advanced.html}}

##Changing 'options' structure and template

Option data may contain any properies instead of/in addition to default *id-value* pairs (still, **id** attribute is mandatory). 

**Options** attribute is used in another way - it houses list configuration, dataset and template to render this dataset properly:

~~~js
view:"combo",  value:2, options:{
    template:"#name#",
    data:[
       { id:1, name:"Banana"   },
       { id:2, name:"Papai"   },
       { id:3, name:"Apple" }
]
~~~

The same can be used for default options, moreover, extra text or HTML can be added: 

~~~js
view:"combo",  value:2, options:{
    template:"Extra #value#",
    data:[
       { id:1, value:"Banana"   },
       { id:2, value:"Papai"   },
       { id:3, value:"Apple" }
]
~~~

Options data may as well contain **multi-line text** with html tags. In this case, the height of a parent component (here:toolbar) should be increased:

~~~js
view:"richselect",
options:[
	{ id:1, value:"Here can be some long multi line content <ul><li>item1 <li> item 2</ul>"}, 
	{ id:2, value:"Papai"  }
]
~~~

{{sample 02_toolbar/20_richselect.html}} 

##Changing Filtering Pattern (combo only)

When a custom template is used for a combo box, filtering should be redefined as well, since by default combo popup is filtered by **value** property. 

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
           { id:2, name:"Papai"}
        ]
    }
}
~~~

##Serverside Options

The easiest way to load options from server is to set a link to the necessary script right in the **options** attribute: 

~~~js
view:"richselect", value:"2", options: "server/data.json"
~~~

For extra customization, see below how to define options dynamically.

##Getting Popup and List objects

The controls feature special Api to work with their parts:

~~~js
var popup = richselect.getPopup(); //popup object
var list = richselect.getPopup().getList(); // list object
~~~

[Combo box Api reference](api/refs/ui.combo.md)

[Richselect Api reference](api/refs/ui.richselect.md)

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

##Syncing options with a DataCollection

Options list can be synchronized with either other component data or [Datacollection](desktop/nonui_objects.md) data: 

~~~js
$$("my_combo").getPopup().getList().sync($$("list1")); //pushes this data into combo popup 
~~~

{{sample 80_docs/getpopup.html }}

Data syncing is described in the [related article](desktop/data_binding.md#syncingdataoftwocomponents).

##Attaching events to a popup list 

You can attach functions to list under the common [Events Handling](desktop/event_handling) pattern:

~~~js
view:"combo", value:1, options:{
    body:{
        data:[
           { id:1, value:"Banana"},
           { id:2, value:"Papai"},
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

##Sizing/positioning of a popup list

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

