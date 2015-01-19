@link: api/datastore_count.md

@short: returns the number of currently visible items (counts both parent and child nodes)


@returns:
-	count	number	the number of visible (opened) items 

@example:
tree = new webix.ui({
	view:"tree",
	...
});
            
tree.count();

@template:	api_method
@descr: