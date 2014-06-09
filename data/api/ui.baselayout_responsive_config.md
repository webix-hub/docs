responsive
=============


@short: enables responsive mode for horizontal layout
	

@type: string
@example:
{ cols:[a,b,c], responsive:"hide" }


@template:	api_config
@descr:

When screen width is too small to fit all views, the leftmost one will be hidden or moved to different layout

~~~js
{
   id:"a1", rows:[
      { cols:[a,b,c], responsive:"a1" } //a1 - id of target layout
   ]
}
~~~

