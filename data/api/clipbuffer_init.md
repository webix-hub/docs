init
=============


@short: inits clipboard buffer
	

@example:

webix.clipbuffer.init();


@template:	api_method
@descr:

After initialization clipbuffer will monitor key events, and after ctrl-v will fire onPaste event for
currently active component ( which can be catched by attachEvent method for related component )

