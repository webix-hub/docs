registerFilter
=============


@short: registers a filter element
	

@params:
- node		HTMLElement		the html node of the filter
- config	object		the hash of settings
- obj		object		the controller object


@example:
grid.registerFilter(document.getElementById("myfilter"), 
		{ columnId:"title" }, 
		{
			getValue:function(node){
				return node.value;
			},
			setValue:function(node, value){
				node.value = value;
			}
		}
);

@template:	api_method

@relatedapi:
	api/link/ui.datatable_filter.md
    api/ui.datatable_filterbyall.md
    api/ui.datatable_getfilter.md
@related:
	datatable/filtering.md
@relatedsample:
	15_datatable/03_filtering/06_custom_built.html
	
@descr:

In the above mentioned sample: 

- the input with *'myfilter'* ID becomes filter for a datatable column with *'title'* ID;
- the getValue method of the newly created filter gets the value from its HTML node and sets it as filtering parameter. 




