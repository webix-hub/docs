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

- start - (number) id of the item that starts the range, or value of the property that is defined in the api/ui.rangechart_frameid_config.md parameter
- sindex - (number) index of the item that starts the range 
- end - (number) id of the item that ends the range, or value of the property that is defined in the api/ui.rangechart_frameid_config.md parameter
- eindex - (number) index of the item that ends the range 

~~~js
{
	start: 30,
    sindex:29,
	end: 40,
    eindex:39    
}
~~~

@relatedapi:
api/ui.rangechart_setframerange.md

@edition:pro