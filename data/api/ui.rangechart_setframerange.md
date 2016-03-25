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

It is possible to specify in the data range either ids or indexes of the starting and the ending data items of the range. 

What is more, you can set the id of the starting item and the index of the ending one and vice versa. The important thing is that there are always should be one starting value 
and one ending value of the range. Thus, you can set the range as:

~~~js
rangechart.setFrameRange({
	start:30, 
    eindex:39
});
~~~

Notice that the priority of ids is higher than that of indexes. It means that in case difference between their values is great, the position of data range will be counted 
using the ids values.

@relatedapi:
api/ui.rangechart_getframerange.md