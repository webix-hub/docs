onGroupCreated
=============


@short: fires when grouping is applied to the component
	

@params:
- id	number		 ID of the group header (parent branch);
- value	 string	 	value of the grouping criterion;
- data		object		 component data object;
@example:
webix.ui({
	view:"treetable",
	on:{
		"data->onGroupCreated":function(id, value, data){
			this.item(id).value = "Year "+value;
		}
	}
});

grida.group({
	by:"year" //obj.value = year
});

@template:	api_event
@related:
	desktop/grouping.md
@relatedsample: 
	15_datatable/32_grouping/05_grouping_event.html
@descr:


