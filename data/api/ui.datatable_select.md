select
=============

@short: selects the specified element 
	

@params:

- row_id    		id     				the row id
- preserve  	boolean   	sets whether the previous selection should be saved

@example:

@related:
	datatable/selection.md
@relatedapi:
	api/ui.datatable_selectrange.md
	api/ui.datatable_getselectedid.md
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
dtable.select(row_id, column_id, preserve);
~~~

- row_id -  (<i>string/int</i>) the row id
- column_id -  (<i>string/int</i>) the column id
- preserve -  (<i>bool</i>)   sets whether the previous selection should be saved


In case **select:'column'**:

~~~js
dtable.select(row_id, column_id, preserve);
~~~

- column_id -  (<i>string/int</i>) the column id
- preserve -  (<i>bool</i>)   sets whether the previous selection should be saved

