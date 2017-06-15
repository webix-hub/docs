filterMap
=============

@short: specifies fields for filtering (see the details)
	

@type: object
@example:
webix.ui({
    view: "pivot",
	filterMap: {
 		date: "$date"
	}
});

@template:	api_config
@descr:
Pivot data will be filtered by the mapped fields instead of the defined fields.

@related:
pivot/filters.md#changingfieldforfiltering

@relatedsample:
61_pivot/06_filters/03_datepicker.html

@seolinktop: [javascript component library](https://webix.com)
@seolink: [javascript pivot](https://webix.com/pivot/)