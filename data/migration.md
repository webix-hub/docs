Migration to latest Webix version
=================================

Webix 2.1 -> 2.3
-----------------

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
