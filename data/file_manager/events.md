Handling Events
===============

Attaching Event Handler
-----------------------

The user can add any user-defined handler to any of the available events. To do this, the user can use the api/link/ui.vscroll_attachevent.md method with the following parameters:

- evName - name of the event;
- evHandler - user-defined event handler.
 
~~~js
webix.attachEvent(evName, evHandler);
~~~

Several handlers can be attached to one and the same event, and all of them will be executed.
The names of the events are case-insensitive.

Detaching Event Handler
---------------------

There is a simple way of removing an event-handler:

~~~js
webix.detachEvent(id); // unique id of the event handler
~~~

List of supported events
------------------------

You can find the list of available events below:


- <a href="#onbeforerun">onBeforeRun</a> - fires on file double-click or on enter click
- <a href="#onbeforedrag">onBeforeDrag</a> - fires before drag-n-drop has started
- <a href="#onbeforedragin">onBeforeDragIn</a> - fires before a dragged item is moved over the droppable area
- <a href="#onbeforedrop">onBeforeDrop</a> - fires before a dragged item is released over the droppable area
- <a href="#onafterdrop">onAfterDrop</a> - fires after drag-n-drop has been finished
- <a href="#onbeforeedit">onBeforeEdit</a> - fires when the Rename action is chosen in the popup menu
- <a href="#onbeforeeditstop">onBeforeEditStop</a> - fires before editing is finished 
- <a href="#onaftereditstop">onAfterEditStop</a> - fires after the edtor is closed
- <a href="#onbeforecopy">onBeforeCopy</a> - fires before an item has been copied
- <a href="#onbeforecut">onBeforeCut</a> - fires before an item has been cut
- <a href="#onbeforepaste">onBeforePaste</a> - fires before an item has been pasted
- <a href="#onerrorresponse">onErrorResponse</a> - fires if an error has occured during some operation
- <a href="#onviewinit">onViewInit</a> - fires during the initialization of an object with the mode configuration



###<span id='onbeforerun'>onBeforeRun</span> 

fires before a selected file is downloaded

~~~js
$$("files").attachEvent("onBeforeRun",function(id){
	webix.confirm({
		text:"Do you want to download this file?",
		ok:"Yes",
		cancel:"No",
		callback:function(result){
			if(result)
				$$("files").download(id);
		}
	});
	return false;
});
~~~

params:

- id - {string} the id of the downloaded item 


###<span id='onbeforedrag'>onBeforeDrag</span> 

fires before drag-n-drop has started

~~~js
$$("files").attachEvent("onBeforeDrag",function(context,ev){
	webix.message("Drag-n-drop started: "+context.start);
	return true;
});
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which DnD started
- ev - {event object} a native event object


###<span id='onbeforedragin'>onBeforeDragIn</span>

fires before a dragged item is moved over the droppable area

~~~js
$$("files").attachEvent("onBeforeDragIn",function(context,ev){
	webix.message("Drag in "+context.target);
	return true;
});
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which DnD started
- ev - {event object} a native event object


###<span id='onbeforedrop'>onBeforeDrop</span> 

fires before a dragged item is released over the droppable area

~~~js
$$("files").attachEvent("onBeforeDrop",function(context,ev){
	webix.message(context.source+" will be dropped to "+context.target);
	return true;
});
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which DnD started
- ev - {event object} a native event object


###<span id='onafterdrop'>onAfterDrop</span> 

fires after drag-n-drop has been finished

~~~js       
$$("files").attachEvent("onAfterDrop",function(context,ev){
	webix.message("Drop "+context.source+" to "+context.target);
	return true;
});
~~~

params:

- context - {object} drag-n-drop context object with a set of properties:
 - from - the source object,
 - to - the target object,
 - source - the ID of the dragged item(s),
 - target - the ID of the drop target, null for drop on empty space,
 - start - the ID from which DnD started
- ev - {event object} a native event object


###<span id='onbeforeedit'>onBeforeEdit</span> 

fires when the Rename action is chosen in the popup menu

~~~js
$$("files").attachEvent("onBeforeEdit",function(ids){
	webix.message("Edit started: "+ids[0]);
	return true;
});
~~~

params:

- ids - {string} 


###<span id='onbeforeeditstop'>onBeforeEditStop</span> 

fires before editing is finished

~~~js
$$("files").attachEvent("onBeforeEditStop",function(id,state,editor,view){
	webix.message("New value: "+state.value);
	return true;
});
~~~

params:

- id - {string} the id of the edited item
- state - {} 
- editor - {}
- view - {string} the view where editing occurs



###<span id='onaftereditstop'>onAfterEditStop</span> 

fires after the edtor is closed

~~~js
$$("files").attachEvent("onAfterEditStop",function(id,state,editor,view){
	webix.message("Editor closed: "+ id);
	return true;
});
~~~

params:


- id - {string} the id of the edited item
- state - {} 
- editor - {}
- view - {string} the view where editing occurs


###<span id='onbeforecopy'>onBeforeCopy</span> 

fires before an item has been copied

~~~js
$$("files").attachEvent("onBeforeCopy", function(ids){
	webix.message("Copy: "+ids.join(", "));
	return true;
});
~~~

params:

- ids - {string} the ids of the copied items


###<span id='onbeforecut'>onBeforeCut</span> 

fires before an item has been cut

~~~js
$$("files").attachEvent("onBeforeCut", function(ids){
	webix.message("Cut: "+ids.join(", "));
	return true;
});
~~~

params:

- ids - {string} the ids of the copied items


###<span id='onbeforepaste'>onBeforePaste</span> 

fires before an item has been pasted

~~~js
$$("files").attachEvent("onBeforePaste", function(ids){
	webix.message("Paste: "+ids[0]);
	return true;
});
~~~

params:

- ids - {string} the ids of the pasted items


###<span id='onerrorresponse'>onErrorResponse</span> 

fires if an error has occured during some operation

~~~js
$$("files").attachEvent("onErrorResponse", function(requestData,response){
	webix.message({
    	type: "error",text:"Error occured in '"+requestData.action+"' operation"
    });
	return true;
});
~~~

params:

- requestData - {object} the data sent with the request
- response - {string} the server response


###<span id='onviewinit'>onViewInit</span> 

fires during the initialization of an object with the mode configuration

~~~js
$$("files").attachEvent("onViewInit": function(name, config){
	//mode configuration object
}
~~~

params:

- name - {string} the mode'sname
- config - {function} the function that specifies the mode's configuration
