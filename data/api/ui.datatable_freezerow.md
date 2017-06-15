freezeRow
=============

@short:
	fixes a row at the top of the datatable "on the fly"

@params:

- id		number,string	optional, the row id
- state		boolean			optional, true - to move a row to the "frozen" block, false - to unfreeze a row


@example:

$$("grid").freezeRow(id, true);

@template:	api_method
@descr:
Note, if you don't pass any parameters to the method, all frozen rows will be unfrozen.

@related:
datatable/frozen_rows.md

@edition:pro

@seolinktop: [open source html5 framework](https://webix.com)
@seolink: [javascript datatables](https://webix.com/widget/datatable/)