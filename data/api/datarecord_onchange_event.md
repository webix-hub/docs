onChange
=============


@short:fires when the user changes the value of the DataRecord object
	

@params:
-	data	object	the data object

@example:
var data = new webix.DataRecord({
		id:"data",
		name:"Anna Gretim",
		title:"Ms."
});
$$("myForm").bind(data);
...

data.attachEvent("onChange", function(obj){
		alert("Your new object is: "+ obj.title + obj.name);
});

@template:	api_event


	
@descr:


