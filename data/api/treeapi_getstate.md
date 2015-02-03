getState
=============

@short: returns the current state of the view

@returns:
- state	object	the state object

@example:
tree.getState();

@template:	api_method
@relatedapi:api/treeapi_setstate.md
@related:
	datatree/nodes_manipulations.md
@edition:pro
@descr:
The state object reflects UI configuration of the view.


<br>
For example, for Tree shown below:

<img src='api/getState_method_tree.png'/>

the state object will look as in:

~~~js
{
    open: ["1","root"],
	select:["1.2"],
}
~~~