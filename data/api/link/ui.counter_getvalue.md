@link: api/ui.button_getvalue.md

@returns:
- value	number	the current value of the control

@example:
webix.ui({
	view:"counter",
    id:"counter1"
    label:"First age"
});
$$('counter1').setValue(30);
..
$$('counter1').getValue();// -> 30

@relatedapi:
	api/link/ui.counter_setvalue.md
 