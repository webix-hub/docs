order
=============


@short: returns an array of IDs of the displayable items
	

@type:array

@example:
var items = $$("myList").data.order

@template:	api_config
@relatedapi:api/DataStore_pull_other.md
@descr:
Beware, that the property returns only displayable items not the entire DataStore collection.

~~~js
var listData = [
		{id: "1", name: "Emma",     age: 62},
		{id: "2", name: "Emily",    age: 43},
		{id: "3", name: "Madison",  age: 33},
		{id: "4", name: "Mia",      age: 52},
		{id: "5", name: "Olivia",   age: 40}
];

webix.ui({
		view:"list",
		id:"myList",
		template:"#name#"
});
$$("myList").parse(listData,"json");
~~~

~~~js
$$("myList").data.order; //-> [1, 2, 3, 4, 5]

$$("myList").filter(function(obj){ return obj.age > 50;});
$$("myList").data.order; //-> [1, 4]

~~~
