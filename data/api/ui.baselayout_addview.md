addView
=============


@short:
	add new view to layout or multiview

@params:

- view		object		configuration of new view
* index		number			index, at which new view will be added

@returns:
- view		view		new view object

@example:

//adds template as third cell to some existing layout
$$("somelayout").addView({ template:"New one" }, 2);

@template:	api_method
@relatedapi:
	api/ui.baselayout_removeview.md
@related:
	desktop/dynamic_layout.md
@descr:


