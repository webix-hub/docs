getList
=============


@short: returns list view of the control
	

@returns:

- list     view     list view

@example:

webix.ui({ view:"richselect", id:"r1", options:[]});
$$("r1").getList().load("data.php");


@template:	api_method
@descr:

It is a shorthand alternative to the this.getPopup().getList();