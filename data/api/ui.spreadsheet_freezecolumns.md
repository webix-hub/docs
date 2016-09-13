freezeColumns
=============


@todo:
	check 

@short:
	fixes the specified amount of columns "on the fly", starting from the very left one

@params:

- columns		number		the amount of columns to freeze, starting from 0 (zero)



@example:
$$("ssheet").freezeColumns(2);


@template:	api_method
@descr:
If the parameter isn't passed, the method unfreezes the frozen columns, if there are any

@relatedsample:
02_api/04_borders_headers.html