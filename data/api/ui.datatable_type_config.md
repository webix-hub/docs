type
=============


@short:used for configuring presentation of items
	

@type: object
@example:

//colors titles of odd rows in red, even - in green
grid = new webix.ui({
		view:"datatable",
        id:"table1",
        type:{
			title_color:function(obj,type){
                 var odd = $$("table1").getIndexById(obj.id)%2
                 return odd?"red":"green"
			}
		},
		columns:[{ id:"title", header:"Film title", 
          		template:"<span style='color:{common.title_color()}'>#title#</span>"}],
		...
});



@template:	api_config
@related:
	desktop/type.md
@descr:
The parameter is intended for defining functions which then can be used while setting the template for a column.

In the template the defined function can be accessed through **{common.[func_name]}**.


~~~js
grid = new webix.ui({
    container:"testA",
    view:"datatable",
    id:"table1",
    type:{
           title_color:function(obj,type){
                 var odd = $$("table1").getIndexById(obj.id)%2
                 return odd?"red":"green"
           },
           votes_color:function(obj,type){
                        return  (obj.votes > 350000?"green":"red")
           }
    },
    columns:[
           { id:"title", header:"Film title", 
           template:"<span style='color:{common.title_color()}'>#title#</span>"},
           { id:"votes", header:"Votes", 
           template:function(obj,type){return "<span style='color:"+type.votes_color(obj)+
           "'>"+obj.votes+"</span>"}}
    ]
});
~~~
   
