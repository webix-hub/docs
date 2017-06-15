getUnits
=============

@short: returns unit values 


@returns:
- unit values	array	JS array of unit values	arranged in alphabetical order

@example:
var units = $$('list').getUnits(); // ->[1, C, M, T]

@template:	api_method
@relatedapi:
	api/ui.unitlist_uniteby_config.md
	api/ui.unitlist_getunitlist.md
@relatedsample:
	80_docs/unit_items.html
@related:
	desktop/unitlist.md
@descr:
The method returns the unit criterion you set by the **uniteBy** property:

~~~js
uniteBy:function(obj){
            return obj.title.substr(0,1); //first letters of item titles
        }
~~~



@seolinktop: [web development library](https://webix.com)
@seolink: [javascript library list](https://webix.com/widget/list/)