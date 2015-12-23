setContent
=============


@short: attaches html container to the template
	

@params:
- node      any          HTML node, or ID of html element that need to be attached


@example:
//assuming that we have <div id="a12">Content</div>
$$("mytemplate").setContent( document.getElementById("a12") );
//or
$$("mytemplate").setContent( "a12");


@template:	api_method
@descr:


Works similar to the api/ui.template_content_config.md property