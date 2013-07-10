{{memo separate layer of ids}}

If component has such mixin, all their child-elements will store id in separate storage ( so there is no need to make them absolutly unique ). Sub-views will not be accessible by global $$ operator, instead of it you will need to use

~~~js
	//bad, will not work!
	//var comp = $$('sub_view');

	//good
	var comp = $$('myview').$$("sub_view")
~~~

Since it change behavior or child element, it has sense to use it only with container element

### Practical example

Mixin was used in top-layout of scheduler-touch, as result it possible to add custom views with any ids, without warryng if they conflict with inner ID's of scheduler or not, and in same time it possible to access all controls in the scheduler with simple ids. 


