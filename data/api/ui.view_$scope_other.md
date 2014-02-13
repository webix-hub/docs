$scope
=============


@short: scope for resolving event and method names
	

@type: object

@example:

some.$scope = {
   action:function(){ alert("works"); }
};
some.attachEvent("onItemClick", "action");

@template:	api_config
@descr:

When event name or click handler defined as string name, component will check is the handler with such name
exists in the $scope object first, and only after that will try to locate the global handler with the same name. 
