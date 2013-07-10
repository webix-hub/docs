bind
=============

@short: specifies the <i>this</i> pointer for a function
	

@params:
- func 	function  a function for which you want to specify the <i>this</i> pointer
- thisObject  object  an object that <i>this</i> will point to

@returns:
- func  function  a function you pass as the 1st parameter

@example:
myStore.attachEvent("onStoreUpdated",webix.bind(this.render,this));

@template:	api_method
@descr:


