Frozen Rows in DataTable
=================

You can "freeze" several rows at the top of datatable, to make them always visible.<br>
In such a mode, the "frozen" upper part is fixed and the lower part is movable and can be scrolled vertically. 

<img style="display:block; margin-left:auto;margin-right:auto;" src="datatable/frozen_rows.png"/>


In order to "freeze" rows, you should apply the api/ui.datatable_topsplit_config.md parameter and set the number of rows as its value.

~~~js
webix.ui({
    view:"datatable",
    ...
    topSplit:2, // 2 rows will be frozen at the top 
});
~~~

{{sample 60_pro/01_datatable/09_frozen_rows/01_init.html}}


Freezing rows dynamically
--------------------

If you want to freeze another row and put it into the top unscrollable block,
you should make use of the api/ui.datatable_freezerow.md method. You need to pass two parameters to it:

- id - (number/string) - the row id
- state - (boolean) - true, to allow row moving to the "frozen" block

~~~js
$$("grid").freezeRow(id, true);
~~~

<img src="datatable/add_frozen_row.png">


If you decide to unfreeze some of the rows, use the same method with **false** as the second parameter:

~~~js
$$("grid").freezeRow(id, false);
~~~

{{sample 60_pro/01_datatable/09_frozen_rows/03_api.html}}


Sorting and filtering with frozen rows
-------------------------------------

Frozen rows ignore sorting and filtering applied to the datatable. 
It means that while you sort or filter data in a datatable, data of these rows won't be taken into account.

<img src="datatable/frozen_sort_filt.png">

{{sample 60_pro/01_datatable/09_frozen_rows/02_sort_filter.html}}

Styling frozen rows appearance
----------------------

You can easily customize the look of the frozen rows block. 
Each row in the frozen state has the **webix_topcell** CSS class. You can redefine the necessary attributes inside of it.

~~~css
<style>
.webix_topcell {
    background: #e7f6ff;
}
</style>
~~~

In the above example we've redefined the background color of all cells in the frozen rows. The result looks like this:

<img src="datatable/frozen_styling.png">

You can also change the style of rows selection in the following way:

~~~css
<style>
.webix_cell.webix_topcell.webix_row_select{
    background: #6d89d8;
}
</style>
~~~

<img src="datatable/frozen_custom_selection.png">

{{sample 60_pro/01_datatable/09_frozen_rows/03_api.html}}

@edition:pro