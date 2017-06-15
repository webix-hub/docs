registerFilter
=============


@short: registers a filter element
	

@params:
- object			HTMLElement, object		node in case of HTML input or the control's object
- config			object					the hash of settings
- controller		object					the controller object


@example:
// registering HTML input as a filter
grid.registerFilter(document.getElementById("myfilter"), 
	{ columnId:"title" }, 
	{
		getValue:function(object){
			return object.value;
		},
		setValue:function(object, value){
			object.value = value;
		}
	}
);

// registering List as a filter 
grid.registerFilter(
  $$("myfilter"),	// is stored as 'list' parameter in 'getValue'
  { columnId:"year" },	// a column to filter
  {
    getValue:function(list){
      var selection = list.getSelectedId();
      var item = list.getItem(selection)
      var filterValue = item.filter;
      return function(year){
        return year > filterValue 
      }
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






@seolinktop: [mvc library](https://webix.com)
@seolink: [javascript datagrid library](https://webix.com/widget/datatable/)