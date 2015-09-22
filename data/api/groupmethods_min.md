min
=============


@short:
	gets the minimum value of a property

@params:
- property	string 		a data property
- data		object		a dataset with items of a group



@example:

$$("mychart").group({
		by:"year",
		map:{
			sales:["sales","min"]
		}
});
//displays the minimum "sales" value for each year

@template:	api_method
@related:
	desktop/grouping.md
    desktop/custom_functor.md
@relatedsample:
	08_chart/03_api/01_group.html
@descr:

