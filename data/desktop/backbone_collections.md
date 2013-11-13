Backbone Collections
==============

While Webix [components](desktop/components.md) have their own logic to load and save data, you can also use Backbone Collection as data source, and handle loading and saving in Backbone's way. 

### Data Loading

First, we need to create a Backbone collection and add data to it:

~~~js
FilmRecord = Backbone.Model.extend({});
FilmList = Backbone.Collection.extend({
	model: FilmRecord,
	url:"./common/data.json"
});

films = new FilmList();
films.fetch(); //getting collection data
~~~

Each data component has [sync](api/link/dataloader_sync.md) method that can be used to load data from a Backbone Collection. 

There can be several methods to add data from a Backbone collection to a Webix view.  It depends on how you init the view. 

{{snippet
By direct rendering into the needed node
}}
~~~js         
var list = $(".app1_here").webix_list({
	template:"#title#", select:true
});

list.sync(films);
~~~

{{sample 30_backbone/03_load_collection.html }}

{{snippet
By creating a Backbone view that houses this component
}}
~~~js
MyView = WebixView.extend({
	config:{ view:"list", id:"mylist", width:200,
			template:"#title#", select:true 
    },
    afterRender:function(){
		this.getChild("mylist").sync(this.options.collection); // syncing after rendering
	}
});
						
new MyView({
	el: ".app1_here",
	collection: films //defining collection as view option
}).render();
~~~

{{sample 30_backbone/05_views_models.html }}


After executing the [sync](api/link/dataloader_sync.md) command any changes to the *"films"* collection will be reflected in the [list](desktop/list.md).
Also, any changes, done by list API ([adding](api/link/ui.list_add.md), [deleting](api/link/ui.list_remove.md), [editing](api/link/ui.list_updateitem.md)) will be reflected in a Backbone collection as well. 

### Data Saving

Nevetheless, changes in the component don't trigger saving to the Backbone Collection on their own. You need to use additional Webix events that are handled to enable data saving:

- **webix:add** & **webix:change** - fire when a new item is added or an item is updated in the view (here:list);
- **webix:remove** - fires when a record is removed from the view. 

~~~js
//films is Backbone collection with FilmRecord model
films.on("webix:add webix:change", function(model){ //no delimiter between events! 
	model.save();
});
films.on("webix:remove", function(model){
	model.destroy();
});
~~~

{{sample 30_backbone/04_save_collection.html }}


### Loading data in Form

Not all Webix components can work with Backbone Collections directly. Components that represent only one model can't use sync API, so instead of it you can use [parse](api/link/dataloader_parse.md) method to load data to them:

~~~js
$$("form").parse( films.first().toJSON());
~~~

This command loads data from the model into Webix [form](dekstop/form.md), but any changes in the form or in the model are not reflected or saved. 

###Adding extra methods to Collections

Backbone collection can be extended to have as many various methods as you need. These are test methods that change collection data:

~~~js
FilmRecord = Backbone.Model.extend({}); 

FilmList = Backbone.Collection.extend({
	//basic properties
	model: FilmRecord,
	url:"./common/data.json",

	//necessary for test buttons only
	addSample:function(){
		this.add(new FilmRecord({ //adds new record to collection
			title:"New Record"
		}));
	},
	deleteFirst:function(){ //removes first record from collection
		this.remove(this.first().cid);
	}
});
~~~

This is how these functions are triggered in the app:

~~~html
<input type="button" value="Add" onclick='films.addSample()'>
<input type="button" value="Delete first" onclick='films.deleteFirst()'>
~~~

{{sample 30_backbone/04_save_collection.html }}

