Customizing Pivot Chart
=======================

Changing Pivot Structure
--------------------

The Pivot structure selected in the Popup can be customized with the help of the api/ui.pivot_onbeforeapply_event.md event. 

The event is fired on the "Apply" button click and its handler takes the structure object with chosen  "filters", "values", "groupBy" as a parameter.

For example, you can specify header sorting before applying the selected structure:

~~~js
webix.ui({
    view: "pivot",
    on:{
        onBeforeApply: function(structure){
            var filters = structure.filters;
            // modify filters array
            // ...
        }
    }
});
~~~


Popup Customization
---------------------

You can set the size of the popup with Pivot configuration with the help of the api/ui.pivot_popup_config.md object:

~~~js
webix.ui({
    view:"pivot",
    popup:{
        width:800, 
        height:600
    }
});
~~~

###Accessing Popup

The api/ui.pivot_onpopup_event.md event fires after a popup for configuring Pivot is created. The handler function takes one parameter:

- popup - (object) the popup object

~~~js
pivot.attachEvent("onPopup", function(popup){
	// your code
});
~~~

###"Fields" sorting

The "Fields" list can be sorted by applying ["$sort" scheme](http://docs.webix.com/desktop__data_scheme.html#sortkey). 
The ascending order is default. So, you can define only "text" as a keyword: 

~~~js
webix.ui({
	view: "pivot",
	on:{
		onPopup: function(popup){
			popup.$$("fields").define("scheme",{
				$sort: {
					by: "text"
				}
			});
		}
	}
});
~~~


<h3 id="innerview">Adding and modifing inner views of Pivot popup</h3>

You can customize a view configuration and add a new one into a layout with the help of the api/ui.pivot_onviewinit_event.md event of pivot's popup.


**A search field for fields list**

The “Fields” list and its header are located in the “fieldsLayout” inner view of the Pivot popup. 

To add a search field, you need to insert its configuration into the “rows” collection of the layout. 
The configuration will contain the api/ui.view_ontimedkeypress_event.md event handler for the list filtering

~~~js
webix.ui({
	id: "pivot",
	view: "pivot",
	popup:{
		on:{
			onViewInit: function(name, config){
				if(name == "fieldsLayout"){
					var searchConfig = {
						view: "search",
						on:{
							onTimedKeyPress: function(){
								var list, text,win;
                                win= $$("pivot").getConfigWindow();
								list = win.$$("fields");
								text = this.getValue();
								list.filter("name", text);
							}
						}
					};
					config.rows.splice(1,0,searchConfig);
				}    
			}
		}
	},
	...
});
~~~


{{sample 61_pivot/05_table_customization/02_popup.html}}

**Groups of fields**

The "Fields" list can be splitted into multiple groups by replacing the “list" view with the “unitlist” one. 

In the example below “balance”, “gdp” and “oil” will be placed into the “number” group, other fields - into the “text” group.

~~~js
var valueFields = {"balance":1,"gdp":1, "oil": 1};

webix.ui({
	id: "pivot",
	view: "pivot",
	popup:{
		on:{
			onViewInit: function(name, config){
				if(name == "fields"){
					config.view = "unitlist";
					config.uniteBy = function(item){
						return valueFields[item.text]?"Number":"Text";
					};
				}
			}
		}
	},
	...
});
~~~

{{sample 61_pivot/05_table_customization/03_fields_groups.html}}


