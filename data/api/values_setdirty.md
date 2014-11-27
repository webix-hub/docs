setDirty
=============


@short: marks the form as the one with changed values and vice versa

@params:
* mark	boolean		if true, marks the form dirty	

@example:

form.setDirty();

@relatedapi:
	api/values_isdirty.md
@related:
	desktop/form_tasks.md

@template:	api_method
@descr:

When used **with a parameter** the method marks the form dirty while 'clean' and 'dirty' value remain the same: 

- api/values_getcleanvalues.md will return the initial form values;
- api/values_getdirtyvalues.md will return a set of changed values;
- api/values_isdirty.md will return *true*. 

When used **without a parameter** the method removed the 'dirty' mark, if any, and maked 'dirty' values 'clean':  

- api/values_getcleanvalues.md will return a set of changed values;
- api/values_getdirtyvalues.md will return empty object, as form is consireded unchanged now;
- api/values_isdirty.md will return *false*. 