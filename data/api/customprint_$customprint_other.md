$customPrint
=============

@todo:
	check 


@short:
	generates custom HTML to print instead of the widget's HTML and invokes printing 

@type:function

@example:

$$("$datatable1").$customPrint(options, htmlOnly){
	// view options
    return true;
};

@template:	api_config
@descr:

The method takes the parameters below:

- **options** - (*array*) print options to be applied. The full list is given [in the related article]()
- **htmlOnly** - (*boolean*) returns custom HTML and doesn't invoke printing. *False* by default


