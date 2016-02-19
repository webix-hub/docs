getFrameRange
=============

@short:
	returns the object of the data range selected in the frame

@params:


@returns:

- range			object			the object of the data range selected in the frame			


@example:

rangechart.getFrameRange();

@template:	api_method
@descr:
the parameters of the returned object are:

- start - (number) specified or generated id of the item that starts the range, or the property that is defined in the api/ui.rangechart_frameid_config.md parameter
- end - (number) specified or generated id of the item that ends the range, or the property that is defined in the api/ui.rangechart_frameid_config.md parameter

~~~js
{
	start: 30,
	end: 40
}
~~~