Backbone Collections
==============

While Webix components has their own logic to load and save data, you can use Backbone Collection as source of data, and handle loading and saving in Backbone's way. 
There is no any special requirement, andy Backbone Collection can be used as a source of data for Webix Component. 


### Data loading

Each data component has "sync" method, which can be used to load data from Backbone Collection

~~~js
//creating colleciton 
FilmRecord = Backbone.Model.extend({});
FilmList = Backbone.Collection.extend({
	model: FilmRecord,
	url:"./common/data.json"
});

films = new FilmList();
films.fetch();
            
//createing Webix List
var list = $(".app1_here").webix_list({
	template:"#title#", select:true
});
//loading data from collection in to the list
list.sync(films);
~~~

{{sample 30_backbone/03_load_collection.html }}


After sync command any changes to the films collection will be reflected in the list.
Also, any changes, done by list API ( adding, deleting, editing ) will be reflected in collection as well. 


### Data Saving

While changes in component will be reflected in collection, they will not trigger data saving on their own. Instead of that Webix adds additional events, which can be handled to enable data saving

~~~js
films.on("webix:add webix:change", function(model){
	model.save();
});
films.on("webix:remove", function(model){
				model.destroy();
			});
~~~

{{sample 30_backbone/04_save_collection.html }}


### Loading data in Form

Not all components can work with Collections directly. Components that represent only one model can't use sync API, instead of it you can use "parse" API to load data in them

~~~js
$$("form").parse( films.first().toJSON() );
~~~

This command loads data from the model in the form, but any changes in form or in model will not be reflected or saved. 