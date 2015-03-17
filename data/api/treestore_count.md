count
=============
@short: returns the number of currently visible items (counts both parent and child nodes)


@returns:
- count		number		the number of visible (opened) items 

@example:
tree = new webix.ui({
	view:"tree",
	...
});
            
tree.data.count();//-> 8
//or simply
tree.count();//-> 8

@template:	api_method
@descr:


<img src="api/treestore_count_method.png"/>