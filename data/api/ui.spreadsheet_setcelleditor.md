setCellEditor
=============


@todo:
	check 

@short:
	adds an editor to a cell

@params:

- x				number		the row id
- y				number		the column id
- editor		object		an object with editor parameters



@example:
$$("ssheet").setCellEditor(x,y,editor);


@template:	api_method
@descr:

The editor object has the following properties:

- editor - (string) the editor type
- options - (object) the range with editor options