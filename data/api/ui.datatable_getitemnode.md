@link: api/renderstack_getitemnode.md

@descr:

[Datatable](api/refs/ui.datatable.md) and [treetable](api/refs/ui.treetable.md)
specificity: 

- item ID as number - the method returns HTML element of the first cell in a row with this ID:

~~~js
$$("mydatatable").getItemNode(2);
~~~

- item ID as object that contains *data item ID* and *column ID* - the method returns
HTML element of a cell with these row and column IDs:

~~~js
$$("mydatatable").getItemNode({ row: 2, column:"title"});
~~~

@seolinktop: [web control library](https://webix.com)
@seolink: [datagrid in html5](https://webix.com/widget/datatable/)