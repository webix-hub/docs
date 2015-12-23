scheme
=============


@short:
	sets hash of default values for properties

@params:
- config		object		hash of default values

@example:
$$('list').data.scheme({
	name:"unknown", 
	sex:"male",
	age:"30"
});

$$('list').add({
	id:1,
	name:"Alex"
});

// will add a record: name:Alex, sex:male, age:30

@template:	api_method
@related: 
	desktop/data_scheme.md
@relatedsample:
	08_chart/03_api/01_group.html
    05_list/04_list_grouping.html
@defined:	DataStore	
@descr:



