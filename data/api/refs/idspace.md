IdSpace 
=============

{{memo Separate layer of ids. }}

If the component has this mixin, all its child elements will store their ids in a separate namespace (so there is no need to make them absolutely unique). Sub-views will not be accessible by the global `$$` operator. Instead, you will need to address them via their parent view:

~~~js
	// bad, will not work!
	// var comp = $$('sub_view');

	// good
	var comp = $$('myview').$$('sub_view')
~~~

Since it changes the behavior of the child element, it only makes sense to use the mixin with container elements.

### Example

The mixin was used in the top-level layout of desktop/mobile_scheduler/md. As a result, it is possible to add custom views with any ids, without worrying that they might conflict with inner ids of 'scheduler'. At the same time, it is possible to access all controls in the scheduler via simple ids. 



<div class='h2'>Methods</div>

{{api
- api/idspace_innerid.md - returns the inner ID of an item by its public (real) ID
- api/idspace_ui.md - allows creating new ui, the id of which will be locked in the parent id space
}}





<div class='h2'>Other</div>


{{api
- api/idspace_$$_other.md - locates sub-item by id
}}


@index:
- api/refs/idspace_methods.md
- api/refs/idspace_others.md

