push
=============


@short: add new state to the history
	

@params:
- view	string	id of related view 
- url	string	in-page url for new state
- value	any		any related data	

@example:

webix.history.push("mytabs", "tabs/details" "details");

@template:	api_method

@related:
	desktop/history_track.md
@descr:


When refreshing page, the component for which history record stored will be called like

~~~js
$$(view).setValue(value);
~~~