Migration to latest Webix version
=================================

Webix 3.2 -> 3.3
----------------

###Data Export to PDF


In version 3.3 the *header* property is introduced in [PDF export](desktop/export_pdf.md#customizingexporttopdf) config. 
It is used [to configure the look of header](desktop/export_pdf.md#stylingtheexporteddata) of an exported table.

To avoid ambiguity, the *header* and *headerImage* properties related to the document's header were renamed:

- *header* is replaced with *docHeader* 
- *headerImage* is replaced with *docHeaderImage*

###Changes in the webix.event helper 

The *context* parameter of the [webix.event](api/_event.md) helper was modified.
Earlier it indicated an object to which *this* keyword refers (master). Now it awaits a context object with *master*, *capture* and *id* properties.

###Changes in the collectValues method

The [collectValues](api/ui.datatable_collectvalues.md) method of the DataTable and TreeTable doesn't return an empty option any more.

The method is used by select filters of the above mentioned components to collect the array of options for them. 
Prior to 3.3 it returned the unique set of options plus an epmty option to clear the filter's value. 

Now its result doesn't include an empty option while the filters add this option themselves. 

Webix 3.1 -> 3.2
----------------

###Export API

Old export functionality of Datatable and Pivot is removed in version 3.2.

The methods exportToPDF() and exportToExcel() of Datatable and the methods toPDF() and toExcel() of Pivot are no longer available.
You should use common methods api/_topdf.md and api/_toexcel.md for these components instead:

~~~js
webix.toPDF($$("myPivot"));

webix.toExcel($$("myDatatable"));
~~~

###Loading Excel files into data components

The "excel" proxy was removed. 

Instead, the "binary" [proxy](desktop/server_proxy.md) object is used to load files like Excel into data components and the "excel" [datatype](desktop/data_types.md) 
is introduced for parsing Excel files. It is the default datatype for Excel Viewer. 

~~~js
webix.ui({
    view:"spreadsheet",
    url: "binary->../common/test.xlsx@Data[0-10]",
    datatype:"excel"
});
~~~

Webix 3.0 -> 3.1
----------------

### Form validation

Starting from version 3.1, form.validate() will not validate disabled fields. If you want to preserve the old behavior, use this command like next

~~~
form.validate({ disabled:true });
~~~



Webix 2.x -> 3.0
----------------


###Strict JSON parsing

Starting from the version 3.0 strict JSON parsing rules are applied. It means that Webix won't process invalid JSON data.

###Export API
Version 3.0 includes new export API. Old export functionality of datatable is deprecated and will be fully removed in version 3.2

###Serverside response for Uploader

The expected format of JSON string returned by the uploading script has changed.
Now the script should respond with "error" status to indicate that uploading ended with error:

~~~php
echo "{ status:'error' }";
~~~

Any other response, e.g. *"{status:'server'}"* means that uploading ended successfully.


Webix 2.2 -> 2.3
-----------------

###Parse format 

In version 2.2 the default [parseFormat](api/i18n_parseformat_other.md) was *"%Y-%m-%d"* while from version 2.3 it becomes *"%Y-%m-%d %H:%i"*. 

It can be altered [within current locale](desktop/localization.md) as: 

~~~js
webix.i18n.parseFormat = "%Y-%m-%d";
webix.i18n.setLocate();
~~~

### Sizing in layout

In Webix 2.2 layout height and width were including padding and margin
~~~
//in Webix 2.2 will result in 140px height ( 20 + 100 + 20)
//in Webix 2.3 will result in 100px height
webix.ui({
	view:"layout", padding:20, height:100, rows:[{}]
})
~~~

In webix 2.3 size of layout is a full size, that already includes padding and margin. The same code as above one will result in layout with 100px height. If you preffer the old behavior, you can move height settings in the inner view

~~~
//in both Webix 2.2 and Webix 2.3 will result in 140px height 
webix.ui({
	view:"layout", padding:20, rows:[{ height:100 }]
})
~~~



Webix 2.1 -> 2.2
-----------------

### Templates in datatable

In version 2.1 you could use "#value#" in the column's template to apply the same property that was defined as the column's id.

Version 2.2 will support this feature as well, but you need to use "#$value#" instead of the old syntax. It does affect only the "#value#" keyword, 
all other templates ("#some#") will work without any changes. 


### Ajax

ajax.header method was deprecated in favor of [ajax.headers](api/ajax_headers.md)

### Sizing

Starting from Webix 2.2, list, datataview and template view, width and height of container
will include the width of scrollbar. It means that the resulting view will take exactly 
the same size that was defined for it (previously, it was the defined as:"size + size of scrollbar").


Webix 1.x -> 2.0
--------------------

### Number formating

"decimalDelimeter" property in number format was changed to "decimalDelimiter"



DHTMLX Touch -> Webix 2.0
--------------------------

Please check [Migraton from DHTMLX Touch](migration_from_touch.md).

@index:

- migration_from_touch.md
