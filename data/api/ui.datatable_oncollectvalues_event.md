onCollectValues
=============

@short:
	fires after datatable has collected options

@params:

- id		string			the id of the column
- data		object			the object that contains options

@example:
datatable.attachEvent("onCollectValues", function(id, data){
	if (data.values[0].value == "")
	data.values[0].value = "Select something";
});

@template:	api_event
@descr:


@relatedsample:
15_datatable/03_filtering/13_options_customizing.html