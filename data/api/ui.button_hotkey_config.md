hotkey
=============


@short: sets a hotkey that triggers button clicking
	

@type: string
@example:
{ view:"button", label:"Login" , click: doOnClick, hotkey: "enter" }

@relatedsample:
-13_form/02_api/12_hotkey.html
@related:
- desktop/controls.md#button
- desktop/uimanager.md
@relatedapi:
-api/refs/ui.button.md
@template:	api_config
@descr:

It's also possible to set combinations of keys joined by '+' or '-' sign.

~~~js
{ view:"button", label:"Login" , click: doOnClick, hotkey: "enter+shift" }
~~~


