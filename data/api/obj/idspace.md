{{memo separate layer of ids}}

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
