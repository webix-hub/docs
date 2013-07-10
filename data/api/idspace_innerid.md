innerId
=============


@short:
	returns the unique inner ID of an item

@params:
- id		id		the ID of item


@returns:

id     id    the inner ID of item
	

@example:


@template:	api_method
@defined:	IdSpace	
@descr:

The method will be to the point when you use the same ID's for several nested components, e.g. you place 2 windows on page and put inside each of them list component. Both lists you are given the same ID: 'mylist'.

~~~js
webix.ui({
  view:"window",
  id:"win1",
  body:{
        view:"list", 
        id:"mylist",
        ...
  }
  ...
});

webix.ui({
  view:"window",
  id:"win2",
  body:{
        view:"list", 
        id:"mylist",
        ...
  }
  ...
});
~~~

So, when you need to refer to one of this lists, you should use:

~~~js
// for example, to refresh list from the second window
$$('win2').$$('mylist').refresh();
~~~

innerId() allows to shorten this referring:
~~~js
realID=$$('win2').innerId('mylist');
//
$$('realID').refresh();
~~~


