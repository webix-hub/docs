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
- <a href="#onfolderselect">onFolderSelect</a> - fires on selecting a folder in the Tree view
- <a href="#onbeforedrag">onBeforeDrag</a> - fires before drag-n-drop has started
- <a href="#onbeforedragin">onBeforeDragIn</a> - fires before a dragged item is moved over the droppable area
- <a href="#onbeforedrop">onBeforeDrop</a> - fires before a dragged item is released over the droppable area
- <a href="#onafterdrop">onAfterDrop</a> - fires after drag-n-drop has been finished
- <a href="#onbeforedelete">onBeforeDeleteFile</a> - fires before an item is deleted
- <a href="#onafterdelete">onAfterDeleteFile</a> - fires after a file has been deleted
- <a href="#onbeforecreate">onBeforeCreate</a> - fires before a new folder has been created
- <a href="#onaftercreate">onAfterCreate</a> - fires after a new folder has been created
- <a href="#onbeforeupload">onBeforeUpload</a> - fires before a file upload dialog opens 
- <a href="#onbeforeedit">onBeforeEdit</a> - fires when the Rename action is chosen in the popup menu
- <a href="#onbeforeeditstop">onBeforeEditStop</a> - fires before editing is finished 
- <a href="#onaftereditstop">onAfterEditStop</a> - fires after the editor is closed
- <a href="#onbeforecopy">onBeforeCopy</a> - fires before an item has been copied
- <a href="#onbeforecut">onBeforeCut</a> - fires before an item has been cut
- <a href="#onbeforepaste">onBeforePaste</a> - fires before an item has been pasted
- <a href="#onerrorresponse">onErrorResponse</a> - fires if an error has occured during some operation
- <a href="#onviewinit">onViewInit</a> - fires during the initialization of an object with the mode configuration



###<span id='onbeforerun'>onBeforeRun</span> 

fires before a selected file is downloaded

~~~js
$$("fmanager").attachEvent("onBeforeRun",function(id){
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

returns:

{bool} if an event handler returns false, onBeforeRun handler will not be called.

{{sample
64_file_manager/02_events/02_download.html
}}

###<span id='onfolderselect'>onFolderSelect</span> 

fires on selecting a folder in the Tree view

~~~js
$$("fmanager").attachEvent("onFolderSelect",function(id){
	// your code
});
~~~

params:

- id - {string} the id of the selected folder 

{{sample
64_file_manager/02_events/01_selection.html
}}

###<span id='onbeforedrag'>onBeforeDrag</span> 

fires before drag-n-drop has started

~~~js
$$("fmanager").attachEvent("onBeforeDrag",function(context,ev){
	// your code
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

returns:

{bool} returning false will prevent dragging of the element

{{sample
64_file_manager/02_events/03_drag.html
}}

###<span id='onbeforedragin'>onBeforeDragIn</span>

fires before a dragged item is moved over the droppable area

~~~js
$$("fmanager").attachEvent("onBeforeDragIn",function(context,ev){
	// your code
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

returns:

{bool} returning false will prevent dropping of the element

{{sample
64_file_manager/02_events/03_drag.html
}}

###<span id='onbeforedrop'>onBeforeDrop</span> 

fires before a dragged item is released over the droppable area

~~~js
$$("fmanager").attachEvent("onBeforeDrop",function(context,ev){
	// your code
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

returns:

{bool} returning false will prevent further drag-and-drop processing

{{sample
64_file_manager/02_events/03_drag.html
}}

###<span id='onafterdrop'>onAfterDrop</span> 

fires after drag-n-drop has been finished

~~~js       
$$("fmanager").attachEvent("onAfterDrop",function(context,ev){
	// your code
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

{{sample
64_file_manager/02_events/03_drag.html
}}

###<span id='onbeforedelete'>onBeforeDeleteFile</span> 

fires before an item is deleted

~~~js       
$$("fmanager").attachEvent("onBeforeDeleteFile",function(id){
	// your code
	return true;
});
~~~

params:

- id - {string} the id of the item to delete

returns:

- {bool} - returning false will prevent deleting

###<span id='onafterdelete'>onAfterDeleteFile</span> 

fires after a file has been deleted

~~~js       
$$("fmanager").attachEvent("onAfterDeleteFile",function(){
	// your code
	return true;
});
~~~

###<span id='onbeforecreate'>onBeforeCreate</span> 

fires before a new folder has been created

~~~js       
$$("fmanager").attachEvent("onBeforeCreate",function(id){
	// your code
	return true;
});
~~~

params:

- id - {string} the id of the created item

returns:

- {bool} - returning false will prevent creating


###<span id='onaftercreate'>onAfterCreate</span> 

fires after a new folder has been created

~~~js       
$$("fmanager").attachEvent("onAfterCreate",function(){
	// your code
	return true;
});
~~~


###<span id='onbeforeupload'>onBeforeUpload</span> 

fires before a file upload dialog opens 

~~~js       
$$("fmanager").attachEvent("onBeforeUpload",function(id){
	// your code
	return true;
});
~~~

params:

- id - {string} the id of the uploaded item

returns:

- {bool} - returning false will prevent uploading




###<span id='onbeforeedit'>onBeforeEdit</span> 

fires when the Rename action is chosen in the popup menu

~~~js
$$("fmanager").attachEvent("onBeforeEdit",function(id){
    // your code 
	return true;
});
~~~

params:

- id - {string} the id of the edited item   

returns:

- {bool} if an event handler returns false, onBeforeEdit handler will not be called.

{{sample
64_file_manager/02_events/04_rename.html
}}


###<span id='onbeforeeditstop'>onBeforeEditStop</span> 

fires before editing is finished

~~~js
$$("fmanager").attachEvent("onBeforeEditStop",function(id,state,editor,view){
	var newValue = state.value
    if(...){
        return false;
    }
	return true;
});
~~~

params:

- id - {string} the id of the edited item
- state - {object} contains two properties:
    - old - the old value
    - value - a new value 
- editor - {object} editor object
- view - {string} the view where editing occurs

returns:

- {bool} returning false will prevent editing

{{sample
64_file_manager/02_events/04_rename.html
}}


###<span id='onaftereditstop'>onAfterEditStop</span> 

fires after the edtor is closed

~~~js
$$("fmanager").attachEvent("onAfterEditStop",function(id,state,editor,view){
	// your code
	return true;
});
~~~

params:


- id - {string} the id of the edited item
- state - {object} contains two properties:
    - old - the old value
    - value - a new value 
- editor - {object} editor object
- view - {string} the view where editing occurs

{{sample
64_file_manager/02_events/04_rename.html
}}


###<span id='onbeforecopy'>onBeforeCopy</span> 

fires before an item has been marked for copying

~~~js
$$("fmanager").attachEvent("onBeforeCopy", function(ids){
	// your code
	return true;
});
~~~

params:

- ids - {string} the ids of the copied items

returns:

- {bool} returning false will prevent copying

{{sample
64_file_manager/02_events/05_copy.html
}}


###<span id='onbeforecut'>onBeforeCut</span> 

fires before an item has been marked for cutting

~~~js
$$("files").attachEvent("onBeforeCut", function(ids){
	// your code
	return true;
});
~~~

params:

- ids - {string} the ids of the copied items

returns:

- {bool} returning false will prevent cutting operation

{{sample
64_file_manager/02_events/05_copy.html
}}


###<span id='onbeforepaste'>onBeforePaste</span> 

fires before an item has been pasted

~~~js
$$("fmanager").attachEvent("onBeforePaste", function(ids){
	// your code
	return true;
});
~~~

params:

- ids - {string} the ids of the pasted items

returns:

- {bool} returning false will prevent pasting

{{sample
64_file_manager/02_events/05_copy.html
}}


###<span id='onerrorresponse'>onErrorResponse</span> 

fires if an error has occured during some operation

~~~js
$$("files").attachEvent("onErrorResponse", function(requestData,response){
	var action = requestData.action;
    // your code
	return true;
});
~~~

params:

- requestData - {object} the data sent with the request
- response - {string} the server response

{{sample
64_file_manager/02_events/06_error.html
}}


###<span id='onviewinit'>onViewInit</span> 

fires during the initialization of an object with the mode configuration

~~~js
$$("fmanager").attachEvent("onViewInit": function(id, config){
	// disable multi-selection for "table" and "files" views
	if (id == "table" || id == "files"){
		config.select = true;
	}
});
~~~

params:

- id - {string} the view id
- config - {object} the object with view configuration

{{sample
64_file_manager/03_customization/01_views_configuration.html
}}