unselect
=============



@short: cancels selection of the specified element
	

@params:
-row_id  id   the id of the row which should be unselected

@example:

@related:
	datatable/selection.md
@relatedapi:
    api/ui.datatable_select.md
	api/ui.datatable_selectrange.md
	api/ui.datatable_getselectedid.md
    api/ui.datatable_mapselection.md
    api/ui.datatable_clearselection.md

@template:	api_method
@defined:	ui.datatable	
@descr:

###Alternative syntax

The parameters of the method differ depending on the value the <a href="api/ui.datatable_select_config.md">select</a> parameter is set to.

The main description above relates to **select: 'row'**.

In case **select:'cell'**

~~~js
dtable.unselect(row_id, column_id);
~~~

- row_id -  (<i>string/int</i>) the row id of the cell which should be unselected
- column_id -  (<i>string/int</i>) the column id of the cell which should be unselected


In case **select:'column'**:

~~~js
dtable.unselect(column_id);
~~~

- column_id -  (<i>string/int</i>) the id of the column which should be unselected



