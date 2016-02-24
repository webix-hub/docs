setFrameRange
=============

@short:
	sets the data range for the frame

@params:

- range 	object	object with range parameters

@example:
rangechart.setFrameRange({
 	start:30, 
 	end:40
});


@template:	api_method
@descr:

The parameters of the range object are the following:

- start - (number) id of the item that starts the range, or value of the property that is defined in the api/ui.rangechart_frameid_config.md parameter
- sindex - (number) index of the item that starts the range 
- end - (number) id of the item that ends the range, or value of the property that is defined in the api/ui.rangechart_frameid_config.md parameter
- eindex - (number) index of the item that ends the range 

You can also set either only ids or only indexes as parameters:

~~~js
rangechart.setFrameRange({
	sindex:29, 
    eindex:39
});
~~~

Notice that the priority of ids is higher than that of indexes. It means that in case difference between their values is great, the position of data range will be counted 
using the ids values.

@relatedapi:
api/ui.rangechart_getframerange.md