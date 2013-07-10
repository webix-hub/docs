Backbone Collections
==============

Backbone Collection is a set of Models. Model-View pattern was described [a step earlier](desktop/backbone.md).

During Collection initialization we refer to the Model it contains and specify its location on server (Models within the colleciton will construct their own url-s). 

~~~js
var Borglist = Backbone.Collection.Extend({
	model: BorgItem;
    url: '.../common/data.json' 
  		});
        
var borgs = new Borglist(); // instance of the Borglist Collection 

borgs.bind('all', app.render, app); 
// collection is bound to views (app) and for any triggered event the view is re-rendered
~~~

View is compiled of several views, each of which is inited according to the following pattern (notice that here we don't specify the DOM element for the view like we did it earlier)

~~~js
var BorgView = Backbone.View.extend({
					template:_.template("<h3><%= name %></h3><li>Size: <%= size %></li><li>Age: <%= age %></li>"),
					render:function(){
						var html = this.template(this.model.toJSON());
						$(this.el).html(html);
					}
				});
~~~

The views are populated with collection data. Each new instance of the Borgview is populated with data from the model and is added to the previous instance. 

~~~js
var BorgsView = Backbone.View.extend({
					el:$$("center").$view, //DOM element with ID 'center'
					render:function(){
						this.collection.forEach(function(borg){
							var view = new BorgView({model:borg});
								view.render();
							this.$el.append(view.el)
						}, this);
					}
				});

var app = new Borgsview({collection:borgs}); //collection for the view is 'BorgList'

app.render(); // the view is rendered
~~~
{{sample 30_backbone/02_list.html }}
 
###Related Articles:
 
 - [CRUD Operations with Backbone Integration](desktop/backbone_crud.md)
 - [Working with Backbone Routers](desktop/backbone_routers.md)