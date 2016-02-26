IdSpace 
=============

{{memo Separate layer of ids. }}

If a component has such a mixin, all his child-elements will store their ids in a separate storage (so there is no need to make them absolutely unique).
Sub-views will not be accessible by the global $$ operator, instead of it you will need to use:

~~~js
	//bad, will not work!
	//var comp = $$('sub_view');

	//good
	var comp = $$('myview').$$("sub_view")
~~~

Since it changes the behavior or the child element, it makes sense to use it only with container elements.

### Practical example

The mixin was used in the top-layout of scheduler-touch, as a result it is possible to add custom views with any ids, without worrying whether 
they conflict with inner ID's of scheduler or not, and at the same time it's possible to access all controls in the scheduler with simple ids. 





<div class='h2'>Methods</div>

{{api
- api/idspace_innerid.md - returns the unique inner ID of an item
- api/idspace_ui.md - allows to create new ui, which isd will be locked in parent id space
}}





<div class='h2'>Other</div>


{{api
- api/idspace_$$_other.md - locates sub-item by id
}}


@index:
- api/refs/idspace_methods.md
- api/refs/idspace_others.md

