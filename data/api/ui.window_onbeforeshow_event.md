onBeforeShow
=============
@short:
	fires right after show() method is called for the window (popup) and before the window is shown


@params:


@example: 

some.attachEvent("onBeforeShow", function(){
    //... some code here ... 
});

@template:	api_event
@related:
	- desktop/window.md
    - desktop/popup.md
    - desktop/contextmenu.md
    - desktop/context.md
    
@relatedapi:
api/link/ui.window_show.md

@descr:
 The event takes all parameters passed to api/link/ui.window_show.md method.
 Return false to block popup displaying.