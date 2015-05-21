Migration to latest Webix version
=================================

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
