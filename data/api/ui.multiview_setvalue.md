setValue
=============


@short: defines which view need to be shown in the multiview
	

@params:

toshow		id		id of view to show

@example:

$$("mview").setValue("some_view");


@template:	api_method
@descr:

Command is equal to view.show

~~~js
	$$("mview").setValue("some_view");
    //is equal to 
    $$("some_view").show();
~~~

