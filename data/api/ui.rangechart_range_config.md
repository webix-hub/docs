range
=============

@short:
	data range that should be selected in the frame

@params:
- start - (number) id of the item that starts the range, or value of the property that is defined in the api/ui.rangechart_frameid_config.md parameter
- sindex - (number) index of the item that starts the range 
- end - (number) id of the item that ends the range, or value of the property that is defined in the api/ui.rangechart_frameid_config.md parameter
- eindex - (number) index of the item that ends the range 

@type: object
@example:
range:{ start:30, end:40 }

@template:	api_config
@descr:

It is possible to specify in the data range either ids or indexes of the starting and the ending data items of the range. 

~~~js
range:{ sindex:29, eindex:49 }
~~~

What is more, you can set the id of the starting item and the index of the ending one and vice versa. The important thing is that there are always should be one starting value 
and one ending value of the range. Thus, you can set the range as:

~~~js
range:{ sindex:29, end:50 }
~~~

or like this:

~~~js
range:{ start:30, eindex:49 }
~~~