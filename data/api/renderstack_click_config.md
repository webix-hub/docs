click
=============


@short: sets an action happening on a button click
	

@type: string,function
@example:
{ view:"button", value: "Submit", click:function(){....} }

@template:	api_config
@related:
	desktop/event_handling.md
@relatedapi:
	api/mouseevents_onitemclick_event.md
@descr:

The **click** property may have the function as value as well as the name of this fucntion. 

~~~js
{ view:"button", value: "Submit", click:filter_tree}

function filter_tree(){
	$$("tree1").filter("#value#",this.getValue()
});
~~~

The property is used with a JS [button](desktop/) only, while other components have **"onItemClick"** inner event to respond to this mouse action. 

