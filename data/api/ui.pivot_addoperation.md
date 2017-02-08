addOperation
=============

@short:
	adds a custom data operation

@params:

- name				string			the operation's name
- function			function		the function which will be called for each cell in the column with this operation
- options			object			object with operation options: <i>leavesOnly</i> or <i>ids</i> properties (see details)


@example:

grida.addOperation("avr", function(data) {
	var sum = 0;
	for (var i = 0; i < data.length; i++) {
		if( data[i] )
		sum += window.parseFloat(data[i], 10);
	}
	return data.length?(sum/data.length):0;
}, {leavesOnly: true});


@template:	api_method
@descr:

The **function** parameter takes an array with values of child cells. 

The **leavesOnly** option takes a boolean value. If set to *true*, the operation function will take only values of leaves child rows (rows that do not have sub-rows).

The **ids** option takes a boolean value. If the property is set to *true*, the operation function will take ids of 
ungrouped data items as the 4th parameter.

@related:
pivot/configuration.md#definingoperationsondata

@relatedsample:
61_pivot/03_table_api/02_adding_operation.html
61_pivot/03_table_api/04_weighted_average.html