Migration to latest Webix version
=================================


Webix 2.1 -> 2.2
-----------------

### Templates in datatable

In version 2.1 you can use "#value#" in the column's template to use the same property as was defined by column's id. Version 2.2 will support this feature as well, but you need to use "#$value#" instead of the old syntax. It does affect only "#value#" keyword, all other templates ("#some#") will work without any changes. 

### Sizing

Starting from Webix 2.2 for list, datataview and template view, width and height of container will include width of scrollbar. It means that result view will take exactly the same size as was defined ( previouly it was defined size + size of scrollbar )



Webix 1.x -> 2.0
--------------------

### Number formating

"decimalDelimeter" property in number format was changed to "decimalDelimiter"



DHTMLX Touch -> Webix 2.0
--------------------------

Please check this article migration_from_touch.md

@index:

- migration_from_touch.md