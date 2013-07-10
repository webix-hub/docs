any
=============
@short: gets a random property value from a group
	

@params:
- property	string 		a data property
- data		object		a dataset with items of a group


@example:
$$("mychart").group({
		by:"year",
		map:{
			sales:["sales","any"]
		}
});
//or with the same result
$$("mychart").group({
		by:"year",
		map:{
			sales:["sales"]
		}
});

@template:	api_method
@descr:
Generally, the functor gets the value of the first item but it's not mandatory.

{{note
Note, the same effect of grouping will be achieved if you omit the functor at all. 
}}
<br>

**Let's assume, you have the following data set initially:**

~~~html
initial_data = [
	{id:1, sales:262, year:2003, company:"Company 3"},
	{id:2, sales:527, year:1998, company:"Company 1"},
	{id:3, sales:629, year:2006, company:"Company 3"},
	{id:4, sales:403, year:2008, company:"Company 2"},
	{id:5, sales:377, year:2006, company:"Company 2"}
]
~~~

**You group the data like this:**

~~~js
$$("mychart").group({
	by:"company",
	map:{
		sales:["sales", "sum"],
		year:["year", "any"]
	}
});
~~~

**And get a new data set:**

~~~html
new_data= [
	{id: "Company 1", sales: 527,  year: 1998}
	{id: "Company 2", sales: 780,  year: 2008}
	{id: "Company 3", sales: 891,  year: 2003}
];
~~~

@related:
	desktop/grouping.md
    desktop/custom_functor.md
@relatedsample:
	08_chart/03_group/01_group.html


