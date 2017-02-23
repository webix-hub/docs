$compareValue
=============


@short:
	compares the old value of the control with the one that is going to be set

@type: function




@template:	api_config
@descr:

The function is called automatically by the api/ui.button_setvalue.md method when a new value is being set for a control. 

The function's parameters include: 

- *oldvalue*	- the current value of the control
- *value*	 - the value that is going to be set

The function returns *true* for equal values and *false* for non-equal ones.  

Not supposed for direct calls.

@relatedapi:

api/ui.button_setvalue.md
api/ui.button_$preparevalue_other.md