$customPrint
=============

@short:
	generates custom HTML to print instead of the widget's HTML and invokes printing 

@type:function


@example:

var html = $$("$datatable1").$customPrint({
	mode:"portrait", 
    size:{ width: 11.7, height: 16.5 }
}, true);

@template:	api_config
@descr:

The method takes the following parameters:

- **options** - (*object*) print options to be applied. The full list is given [in the related article]()
- **htmlOnly** - (*boolean*) if true, returns custom HTML and doesn't invoke printing. *False* by default


Now Datatable, Dataview, X List and Spreadsheet components use this method. We don't recommended to call it directly,
but with its help you can provide custom logic for printing your custom components, if needed. 


