onBeforeContextMenu
=============


@short:
	fires before the context menu is called in the item area

@params:
- id	   string		the id of the clicked item
- e		event		a native event object
- node		element		the target HTML element

@returns:

- result   bool    returning <i>false</i> will block the event


@example:
$$('list').attachEvent('onBeforeContextMenu', function(id, e, node){
     if (some_check(id)) 
          return false; //blocks the context menu
     else 
          return true;
});

@template:	api_event

@related:
	desktop/contextmenu.md
@relatedapi:
	api/mouseevents_onaftercontextmenu_event.md
@descr:


