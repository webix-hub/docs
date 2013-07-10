sum
=============


@short:
	gets the sum of property values 

@params:
- property	string 		a data property
- data		object		a dataset with items of a group


@example:

$$("mychart").group({
		by:"year",
		map:{
			sales:["sales","sum"]
		}
});
//displays the total sales for each year

@template:	api_method
@related:
	desktop/grouping.md
    desktop/custom_functor.md
@relatedsample:
	08_chart/03_group/01_group.html
@descr:

