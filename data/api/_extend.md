extend
=============


@short: merges the contents of 2 objects together into the first object
	

@params:
- target		object		the object to extend. It receives the new properties
- source		object		an object that contains properties to merge in
* overwrite		boolean		if the value is <i>true</i>, the same properties will be overwritten by the values of the source object

@returns:
- target	object		the target object with the new properties

@example:

var obj1 = {name:"flower", type:"rose", colors: ['red','pink','white','yellow']}
var obj2 = {name:"flower", type:"tulip" }

webix.extend(obj2,obj1); 
// -> obj2 = {name:"flower", type:"tulip", colors: ['red','pink','white','yellow']}


obj2.type = 'camomile';
obj2.type // -> 'camomile'
obj1.type // -> 'rose'


obj2.colors[0] = 'blue';
obj2.colors // -> ['blue','pink','white','yellow']
obj1.colors // -> ['blue','pink','white','yellow']


obj1 = {name:"flower", type:"rose", colors: ['red','pink','white','yellow']  }
obj2 = {name:"flower", type:"tulip" }

webix.extend(obj2,obj1, true); 
// -> obj2 = {name:"flower", type:"rose", colors: ['red','pink','white','yellow']}


@relatedapi: api/_clone.md, api/_copy.md
@template:	api_method
@descr:


