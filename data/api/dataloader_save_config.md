save
=============


@short:
	defines urls for datasaving

@type: string
@example:

webix.ui({
  id:"mylist",
  view:"list", 
  load:"data.php",
  save:"save.php"
})


@template:	api_config
@related: 
	desktop/dataprocessor.md
    desktop/serverside.md
@descr:


If property defines, component will create a DataProcessor instance,
and init it on defined url.

If you need to get dataprocessor you can use 
~~~
var view = $$("myview");
var dp = webix.dp(view); // dataprocessor which was assigned to the view
~~~

If you wish to use it with server side connector, you can use init as 

~~~
webix.ui({
  view:"list", 
  load:"data.php",
  save:"connector->save.php"
})
~~~