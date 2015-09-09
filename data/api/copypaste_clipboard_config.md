clipboard
=============


@short:enables/disables clipboard support
	

@type: boolean,string
@values:
- modify (true)
- insert
- custom
- false

@example:
tree = new webix.ui({
    view:"tree",
    ...
    clipboard:"insert"
});

@related:
	datatree/copying.md
    desktop/clipboard.md
@relatedsample:
	17_datatree/19_copypaste/01_copy.html
    05_list/09_copypaste.html
@template:	api_config
@descr:

If cliboard  is defined as *"custom"*, you need to specify [onPaste](api/copypaste_onpaste_event.md) behavior attached to the same-name event. 


