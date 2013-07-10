selectRange
=============


@short: selects the specified range of elements
	

@params:

- row_id  	id    the id of the first selected row in the selection range
- end_row_id  	id    the id of the last selected row in the selection range


@example:

@related:
	datatable/selection.md
@relatedapi:
	api/ui.datatable_select.md
	api/ui.datatable_getselectedid.md
    api/ui.datatable_getselection.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_unselect.md
    api/ui.datatable_clearselection.md

@template:	api_method
@defined:	ui.datatable	
@descr:

###Alternative syntax

The parameters of the method differ depending on the value the <a href="api/ui.datatable_select_config.md">select</a> parameter is set to.

The main description above relates to **select: 'row'**.

In case **select:'cell'**

~~~js
dtable.selectRange(row_id, column_id, end_row_id, end_column_id);
~~~

- row_id -  (<i>string/int</i>)  the row id of the first selected cell in the selection range
- column_id -  (<i>string/int</i>) the column id of the first selected cell in the selection range
- end_row_id -  (<i>string/int</i>)  the row id of the last selected cell in the selection range
- end_column_id -  (<i>string/int</i>) the column id of the last selected cell in the selection range

In case **select:'column'**:

~~~js
dtable.selectRange(column_id, end_column_id);
~~~

- column_id -  (<i>string/int</i>) the id of the first selected column in the selection range
- end_column_id -  (<i>string/int</i>) the id of the last selected column in the selection range
