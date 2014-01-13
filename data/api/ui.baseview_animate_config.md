animate
=============


@short:
	defines or disables view change animation.  

@type: bool,object
@example:
webix.ui({
        view:"multiview",
        cells:[{ ... }],
        animate:{type:"flip", subtype:"vertical"}
})

@template:	api_config
@defined:	ui.baseview	
@relatedsample:
	25_pager/09_animate_types_datatable.html
    80_docs/multiview_animation.html
@related:
	desktop/animation.md
@descr:

###Disabling animation
To totally disable animation, set the parameter to the *false* value:

~~~js
webix.ui({
	view:"multiview",
	animate:false,
    ...
})
~~~

### Object properties
As an object, the parameter takes 3 properties:

  * **direction** - the animation direction (optional). 
  	* *left*, *right*, *top*, *bottom*	
  * **type** - the type of animation. The default value - *'slide'*. 
    * *slide*, *flip*
  * **subtype** - the subtype of animation. The default value - *'together'*.
	 * if *<b>type:slide</b>* 
    	* *together*, *in*, *out*
  	 * if *<b>type:flip</b>* 
     	* *horizontal*, *vertical*


