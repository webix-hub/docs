onChange
=============


@short: fires when the user changes the value of the DataValue object
	

@params:
-	data	object	the data object

@example:
var data = new webix.DataValue({});
data.setValue("Anna");

$$("myForm").bind(data);
...

data.attachEvent("onChange", function(obj){
		alert("Your new name is: "+ obj.name);
});

@template:	api_event


	
@descr:



