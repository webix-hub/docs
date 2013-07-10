@link: api/ui.button_setvalue.md

@params:
- value		number 	a new value for the button

@relatedapi:
	api/link/ui.counter_getvalue.md

@example:
webix.ui({
	view:"counter",
    id:"counter1"
    label:"First age"
});
$$('counter1').setValue(30);
..
$$('counter1').getValue();// -> 30