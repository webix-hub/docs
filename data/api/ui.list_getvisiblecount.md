getVisibleCount
=============


@short:
	returns the number of items that can be seen with the current view height

@returns:
- count		number		the count of visible items	

@example:

var count = $$("mylist").getVisibleCount();

@template:	api_method
@related:
	desktop/data_object.md
@descr:

{{note
The method will not work for list with variable item height.
}}

~~~js
webix.ui({
	view:"mylist",
    type:{ height:"auto" }
});
var count = $$("mylist").getVisibleCount(); //NaN
~~~




@seolinktop: [best ui framework](https://webix.com)
@seolink: [object list javascript](https://webix.com/widget/list/)