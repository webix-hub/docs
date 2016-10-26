onCellChange
=============


@short:
	fires when a cell is changed

@params:

- row			number			the row id
- column		number			the column id 
- value			string			the value of the cell


@example:
$$("ssheet").attachEvent("onCellChange", function(row, column, value){
    // some code here
});

@template:	api_event
@descr:

@relatedsample:
65_spreadsheet/02_api/05_events.html

@related:
spreadsheet/handling_events.md