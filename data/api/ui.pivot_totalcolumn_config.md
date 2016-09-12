totalColumn
=============

@todo:
	check 


@short:
	calculates the total sum for each row

@type: string
@example:
webix.ui({
    view:"pivot",
    totalColumn:"sumOnly",
    //...
});

@template:	api_config
@descr:
The "sumOnly" value of the *totalColumn* property forces the summing function to process only rows that contain sums already.


@related:
pivot/configuration.md#sumcountersforcolumnsandrows

@relatedapi:
- api/ui.pivot_footer_config.md