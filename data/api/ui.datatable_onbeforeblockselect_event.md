onBeforeBlockSelect
=============

@short: event occurs before block selection
	

@params:

- start    cellId     id of start cell
- end      cellId     id of the end cell
- isFinal       boolean     is selection still in progress or finalized

@example:

$$("dt").attachEvent("onBeforeBlockSelect", function(start, end, isFinal){
    return true;
});

@template:	api_event
@descr:

return false to block selection

it possible to modify start and end object to modify result of blockselection

@seolinktop: [web development library](https://webix.com)
@seolink: [html5 datatable](https://webix.com/widget/datatable/)