getState
=============
@short:retrieves the current state of the specified view
	
@params:
- id	string	the view id	
- 	childs		bool		defines whether the state object besides configuration of the specified view should contain configuration of its childs. By default - <i>false</i>
@returns:
- state	object	the state object


@example:
webix.UIManager.getState("mylayout", true);

@template:	api_method

@relatedapi:
	api/UIManager_setState.md
    api/refs/datastate.md

@descr:
The state object reflects UI configuration of the specified view.

And it looks as in:

~~~js
{
	gravity: 1
	height: 0 //returns 0 if the property isn't specified
	id: "myview"
	width: 0
}
~~~
<br>
The get/setState methods of the api/refs/uimanager.md class is similar to the same-name methods from the api/refs/datastate.md class.

The difference lies in the following: the api/refs/uimanager.md methods allows you to save and restore outer visual scheme (layout) of the specified view (that allows restoring general view structure) while  the api/refs/datastate.md methods save ans restore the information about inner configuration of the view (selection, sorting direction etc.).