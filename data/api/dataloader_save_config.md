save
====


@short:
	defines URLs for data saving

@type: string
@example:

webix.ui({
  id: "mylist",
  view: "list",
  load: "data.php",
  save: "save.php"
});


@template:	api_config
@related: 
	desktop/dataprocessor.md
    desktop/serverside.md
@descr:


If the property is set, the component will create a [DataProcessor](desktop/dataprocessor.md) instance,
and initialize it with the defined URL.

If you need to get the DataProcessor, you can use:
~~~
var view = $$("myview");
var dp = webix.dp(view);  // the dataprocessor that was assigned to the view
~~~

To use a server-side connector, you can initialize `save` as follows:

~~~
webix.ui({
  view: "list",
  load: "data.php",
  save: "connector->save.php"
})
~~~
