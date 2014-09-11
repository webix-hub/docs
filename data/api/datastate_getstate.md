getState
=============
@short: returns the current state of the view
	



@returns:
- state	object	the state object

@example:
grid.getState();

@template:	api_method
@descr:


@relatedapi:api/datastate_setstate.md
@related:
	desktop/datastate_state.md
@relatedsample:
	60_pro/06_tree/01_basic.html

@descr:
The state object reflects inner UI configuration of the view.

<br>
For example, for DataTable shown below:

<img src='api/state_image.png'/>

the state object will look as in:

~~~js
{
	filter:{
    	title:"Go"
    },
    ids: ["rank","title","year","votes"],
	select:[{
    	column:"title",
        id:3,
        row:3
    }],
	size:[50,200,80,100],
	sort:{
    	dir: "desc"
		id: "title"
	}
}
~~~

@edition:pro