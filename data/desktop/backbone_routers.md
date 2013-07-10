Working with Backbone Routers
===========================

##History API

The most important locations in the app have permalinks for users to easily navigate between them. Earlier these links were defined with the help of hash fragments like *#page*, but 
with the arrival of history API such links can be defined as standard url-s (*/page*). 

BackboneJS framework features the special **Backbone.Routes** class to enable this functionality and allow for easy navigation between app parts while connecting these parts to user actions and events. 

##BackBone Router

Take that you have a list and a template and you want to manipulate list items. List data is taken from Backbone Collection that contains a dedicated model. See how is was without navigation in the 
[corresponding chapter](desktop/backbone_crud.md)

Now, let's create a **Backbone Router**. 

The new Router contains **possible routes** within the app and possible actions that are triggered once the navigation operation is performed: 

~~~js
var routes = new (Backbone.Router.extend({
			routes:{
				"":"index", 
				"borgs/:id":"details"
			},
			details:function(id){
				$$("listA").select(id);
				$$("details_tab").show();
				$$("details").parse(borgs.get(id).attributes);
			},
			index:function(){
				$$("list_tab").show();
			}
	}));
~~~

####Comments: 

Within this app two routes are possible, each of which is explained in corresponding sections of the Router Object:

- the default one, the **index view**, the front page of the app. It is called 'list_tab' and loads initially. 
- the route that will open the component with the **"details"** ID. The link depends on the list item you select on the front page (**borgs/1, borgs/2**, etc). When you go by this link, *'detils_tab'* is shown and there
appear properties of a list item you've selected. 

##Navigation 

To start navigation, you should define it start point during page load, after your application has finished creating all of its routers. 

Here navigation starts as soon as Collection has grabbed all the data from the datasource. 

~~~js
borgs.fetch({  //var borgs = new BorgList(); - our Backbone Collection Object
		success:function(){
		Backbone.history.start();		
			}
});
~~~

Navigation between app parts is enabled on user actions: 

1 . When a list item is selected, you go to **bord/id** page, the ID being taken from the list item: 

~~~js
$$("listA").attachEvent("onAfterSelect", function(id){
					routes.navigate("borgs/"+id, {trigger:true})
				});
~~~

2 . When you click a **Back** button, the app goes back to the front page:

~~~js
{ view:"button", label:"Back", click:function(){ routes.navigate("", {trigger:true}); }},
~~~

As far as you can see, **navigate();** function has two arguments: 

- link location to set the desired URL;
- *trigger:true* property to call the route function and update the URL.

{{sample 30_backbone/04_routes.html}}

###Related Articles: 

- [Backbone Integration](desktop/backbone.md)
- [Working with Backbone Collections](desktop/backbone_collections.md)
- [CRUD Operation with Backbone Integration](desktop/backbone_crud.md)