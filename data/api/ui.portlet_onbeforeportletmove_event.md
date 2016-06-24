onBeforePortletMove
=============

@short:
	fires before a portlet is moved

@params:

- source		object			the original parent layout
- parent		object			a new parent layout
- active		object			(also <i>this</i>) a portlet to move
- target		object			a target view (highlighted, will be placed beside the <i>active</i> one within the <i>parent</i> layout)
- mode			string			drag direction relative to the <i>target</i>

@example:
webix.attachEvent("onBeforePortletMove", function(source,parent,active,target,mode){ 
	// some code here
})

@template:	api_event
@descr:
Pay attention that the event is attached globally - webix.attachEvent( ).

@relatedapi:
- api/ui.portlet_onafterportletmove_event.md