addOperation
=============

@short:
	adds a custom data operation

@params:

- name				string			the operation's name
- function			function		the function which will be called for each cell in the column with this operation
- options			object			object with operation options, currently there's just the leavesOnly property (see details)


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

The **leavesOnly** option takes a boolean value. If set to true, the operation function will take only values of leaves child rows (rows that do not have sub-rows).