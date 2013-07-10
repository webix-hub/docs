getPopupView
=============

@short: returns an object of the dedicated popup view


@returns:

-obj   object   the popup object of the component with a built-in popup. 
	

@example:

$$("my_richselect").getPopupView();

@relatedsample:
	98_docs/getpopup.html
@related:
	desktop/controls.md#combo


@template:	api_method
@descr:
The components that features a popup window of its own (the one that isn't initialized directly) are as follows:

- [combo box](desktop/controls.md#combo);
- [richselect](desktop/controls.md#richselect);
- [datepicker](desktop/controls.md#datepicker);
- [suggest list](desktop/suggest.md).

The use of these functions allows defining select options for a combo box and richselect outside their 
constructors, load or parse data into them as well as sync them to some component data or Datacollection object.

template

~~~js
webix.ui({rows:[
		{view:"list",
        template:"#rank#. #title#",
        data: small_film_set,
        ... },
        {view:"richselect", options:[]}
        ]
   })
$$("my_richselect").getPopupView().define("template", "#rank#. #title#" );
$$("my_richselect").getPopupView().sync($$("list1"));
~~~