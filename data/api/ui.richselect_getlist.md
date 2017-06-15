getList
=============


@short: returns list view of the control
	

@returns:

- list     WebixListView     list view

@example:

webix.ui({ view:"richselect", id:"r1", options:[]});
$$("r1").getList().load("data.php");


@template:	api_method
@descr:

It is a shorthand alternative to the this.getPopup().getList();

@seolinktop: [mvc library](https://webix.com)
@seolink: [list ui](https://webix.com/widget/list/)