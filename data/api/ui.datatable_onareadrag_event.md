onAreaDrag
=============

@short:
	fires when area selection is started

@params:

- start			object					the id object of the left top cell, contains two properties: the row id and the column id
- end			object					the id object of the right cell, contains two properties: the row id and the column id
- ev			Event object			a native event object

@example:
$$('dtable').attachEvent("onAreaDrag", function(start, end, ev){
   // some code here
});

@template:	api_event
@descr:



@seolinktop: [javascript ui components library](https://webix.com)
@seolink: [javascript datagrid](https://webix.com/widget/datatable/)