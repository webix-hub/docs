onAfterSelect
=============


@short:
	fires after item was selected

@params:
- id		id		the id of an item

@example: 

some.attachEvent("onAfterSelect", function (id) {
  // ... some code here ...
});

@template:	api_event
@defined:	SelectionModel
@relatedapi:
	api/selectionmodel_onbeforeselect_event.md
@related: 
	desktop/selection.md

@descr:

If multiselect mode is enabled, the event will fire only when additional items are selected with Ctrl+click, while passing the ID of a recently selected item.
The event wil not fire when the selection is extended via Shift+click.

It is safer to use the api/selectionmodel_onselectchange_event.md event, which catches all selection state changes in the component,
combined with the api/selectionmodel_getselectedid.md method.
