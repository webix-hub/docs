clone
=============


@short: makes a shallow copy of an object
	

@params:
- source		object		the source (passed) object


@returns:
- copy			object		the copy of the source object	

@example:
var obj1 = {name:"flower", type:"rose", colors: ['red','pink','white','yellow']  }
var obj2 = webix.clone(obj1);

obj1.type = 'tulip';

obj1.type // -> 'tulip'
obj2.type // -> 'tulip'

obj2.colors // -> ['red'] Warning! It's a shallow copy


@relatedapi: api/_copy.md, api/_extend.md
@template:	api_method
@descr:



