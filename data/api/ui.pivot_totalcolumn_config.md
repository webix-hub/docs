totalColumn
=============

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

@relatedsample:
61_pivot/03_table_api/01_total_column.html

@seolinktop: [web ui framework](https://webix.com)
@seolink: [javascript pivot table](https://webix.com/pivot/)