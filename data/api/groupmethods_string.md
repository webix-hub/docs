string
=============

@short:adds a custom property to data items
	

@params:
- property	string 		a data property
- data		object		a dataset with items of the group


@example:
$$("mychart").group({
	by:"company",
	map:{
		sales:["sales", "sum"],
		state:["grouped", "string"]
	}
});

@template:	api_method
@descr:
**Let's assume, we have the following data set initially:**

~~~html
initial_data = [
	{id:1, sales:262, year:2003, company:"Company 3"},
	{id:2, sales:527, year:1998, company:"Company 1"},
	{id:3, sales:629, year:2006, company:"Company 3"},
	{id:4, sales:403, year:2008, company:"Company 2"},
	{id:5, sales:377, year:2006, company:"Company 2"}
]
~~~

**We group the data like this:**

~~~js
$$("mychart").group({
	by:"company",
	map:{
		sales:["sales", "sum"],
		state:["grouped", "string"]
	}
});
~~~

**And get a new data set:**

~~~html
new_data= [
	{id: "Company 1", sales: 527,  state: "grouped"}
	{id: "Company 2", sales: 780,  state: "grouped"}
	{id: "Company 3", sales: 891,  state: "grouped"}
];
~~~

@related:
	desktop/grouping.md
    desktop/custom_functor.md
@relatedsample:
	08_chart/03_group/01_group.html