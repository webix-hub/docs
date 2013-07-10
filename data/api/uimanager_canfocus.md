canFocus
=============


@short: checks whether the view can be focused
	

@params: 
- id	id		the id of the view in question


@returns:
	result		bool    <i>true</i> if the specified view can take focus. Otherwise, <i>false</i>
	

@example: webix.UIManager.canFocus($$('books'));

@relatedapi: 
	api/link/ui.scrollview_isvisible.md
    api/link/ui.scrollview_isenabled.md


@template:	api_method

@descr: The function helps single out currently disabled and hidden views on the page. They cannot take focus and should be enabled (shown back) to acquire focusing ability. 


