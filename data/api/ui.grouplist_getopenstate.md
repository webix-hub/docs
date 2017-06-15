getOpenState
=============

@short: gets IDs of items taking part in the current group opening

@returns:
- open state 	 object		object containing an array all parents to this level and an array of items from the currently opened group
	

@example:

webix.ui({
	view:"grouplist",
    data:[ //hierarchical JSON dataset
    	{id:"root", value:"Films data", open:true, data:[
			{ id:"1", open:true, value:"The Shawshank Redemption", data:[
				{ id:"1.1", value:"Part 1" },
				{ id:"1.2", value:"Part 2", data:[
					{ id:"1.2.1", value:"Page 1" },
             		{ id:"1.2.2", value:"Page 1" }
					]},
				{ id:"1.3", value:"Part 3" }
			]},
			{ id:"2", open:true, value:"The Godfather", data:[
				{ id:"2.1", value:"Part 1" }
			]}
		]}
});


var state = $$('grouplist1').getOpenState();
if(state){
	result = JSON.stringify(state);
	webix.message(result);
	}
};

/* 
If you open the "root" branch, there go to "1" and then open the "1.2"
{ 
	"parents":["root","1","1.2"],
 	"branch":["1.2.1","1.2.2"] 
}
*/



@template:	api_method
@related:
	desktop/grouplist.md
@relatedsample:
	80_docs/grouplist_openstate.html
@descr:

The return object contains two properties:

- **parents** (array )- ID of the all parents (parents of the currently opened group from lower ot upper level); 
- **branch** (array)- IDs of the items from the currently opened group. 

On the **upper level** with all the groups closed, "parents" will be **empty**. 

In case you use [non-hierarchical data](desktop/data_types.md) and form groups(parents) on the go during component init, they take
**automatically generated IDs**. 


~~~js
{
	"parents":["1363185715932"], <- auto ID
	"branch":[125,169,184,189]
}
~~~

If needed each of the array can be accessed  as well as attributes of each data item:

~~~js
function get_children(){
			var state = $$('group').getOpenState().branch; //gets only children
			titles = [];
			for (var i=0; i<state.length; i++){	
				var id = state[i];
				var title = $$('group').getItem(id).title;
			    titles.push(title);
			}
			alert(titles.join(",\n")); //get all the titles of the children

		};
~~~


@seolinktop: [web ui framework](https://webix.com)
@seolink: [javascript library list](https://webix.com/widget/list/)