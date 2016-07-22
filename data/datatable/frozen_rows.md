Frozen Rows in DataTable
=================

This type of split mode "freezes" datatable rows. It means that with this mode enabled, a datatable will be splitted into two parts:
the top fixed part and the bottom scrollable part.

The "frozen" upper part contains several top rows of the datatable. The lower part is movable and can be scrolled vertically. 

<img style="display:block; margin-left:auto;margin-right:auto;" src="datatable/frozen_rows.png"/>


In order to "freeze" rows, you should apply the **topSplit** parameter and set the number of rows as its value.

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

Let's suppose that you have a block of frozen rows at the top of a datatable and want to add some other row to this block, like this: 

<img src="datatable/add_frozen_row.png">

In such a case you can make use of the **freezeRow()** method. You need to pass two parameters to it:

- id - (number/string) - the row id
- state - (boolean) - to allow row moving to the "frozen" block

~~~js
$$("grid").freezeRow(id, true);
~~~

If you decide to unfreeze some of the rows in the fixed top block, use the same method with **false** as the second parameter:

~~~js
$$("grid").freezeRow(id, false);
~~~

{{sample 60_pro/01_datatable/09_frozen_rows/03_api.html}}


Sorting and filtering with frozen rows
-------------------------------------

If there are frozen rows in a datatable, they ignore sorting and filtering applied to it. 
It means that while you sort or filter data in a datatable, these rows will be omitted and their values won't be taken into account.

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

{{sample 60_pro/01_datatable/09_frozen_rows/03_api.html}}