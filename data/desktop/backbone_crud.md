CRUD Operation with Backbone Integration
====================

You can create, read, update and delete items straightly from the Backbone collections as well as sync these collections with webix components. 

##CRUD Operations

CRUD operations are included into the Collection object that contains a reference to the Model, the datasource and methods for this collection: 

~~~js
BorgItem = Backbone.Model.extend({}); //Model initialization
				
BorgList = Backbone.Collection.extend({
		model:BorgItem,
		url:"./common/data.json",

		addSample:function(){
			this.add(new BorgItem({ id:webix.uid(), name:"New Borg", size:1, age:4 })); 
					},
		deleteSample:function(){
			this.remove(this.at(0));
					},
		changeName:function(){
			this.get($$("listA").getSelectedId()).set("name", "NextGen Borg");
					}
				});
~~~

####Commennts 

- all operations are performed on the Borglist collection, which is indicated by **this** reference;
- function **addSample** creates a new Model instance with four properties (id, name, age and size). **webix.ui** is the library built-in function to generate ID for a successive item;
- function **deleteSample** removes an item from *this* collection that stands on the first position (zero-based numbering); 
- function **changeName** - gets the Model from the **listA** selected item and sets the new value for the **name** property.

##Data Syncing 

Furthermore, these operations can be performed within standard [webix components](desktop/components.md) where we render collections to with the help of data syncing. 

~~~js
webix.ui({
	rows:[
    {view:"list", id:"listA"},
    {view:"template, id: "details"}
    ]
});
				
borgs = new BorgList();

$$("listA").sync(borgs); //list and template are synced with Backbone Collection
$$("details").sync(borgs);
~~~

##Data Binding 

Within Backbone framework you can bind two components making one of them the datasource for another: 

First, make the template empty: 

~~~js
{	
	view:"template, 
    template: #name#, #size#, #age#,
    id: "details",
	data:{ $empty:true }
}
~~~

Then, on list item selection, find the item in the Backbone BorgsList collection (borgs) and get its properties (attributes) by ID. Next, parse them to the **details** template. 

The event **'OnAterSelect'** helps bind the two components. More about Event Handling [here](desktop/event_handling.md). 

~~~js
$$("listA").attachEvent("onAfterSelect", function(id){
			$$("details").parse(borgs.get(id).attributes);
			});
            
~~~

{{sample 30_backbone/03_data.html }}

###Related Articles

- [webix UI Components](desktop/components.md)
- [webix Data Binduing and Syncing](desktop/data_binding.md)
- [Backbone Integration](desktop/backbone.md)
- [Working with Backbone Collections](desktop/backbone_collections.md)
- [Working with Backbone Routers](desktop/backbone_routers.md)