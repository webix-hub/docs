copy
=============

@short: makes a deep copy of an object
	

@params:
- source		object		the source (passed) object

@returns:
- copy			object		the copy of the source object

@example:

var obj1 = {name:"flower", type:"rose", colors: ['red','pink','white','yellow']  }
var obj2 = webix.copy(obj1);


obj1.type = 'tulip';

obj1.type // -> 'tulip'
obj2.type // -> 'rose'

obj2.colors // -> ['red','pink','white','yellow']


@relatedapi:api/_clone.md, api/_extend.md
@related: desktop/extend.md#copying
@template:	api_method
@descr:

Doesn't work for structures with inner loops.  

