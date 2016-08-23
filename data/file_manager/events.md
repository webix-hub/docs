Handling Events with File Manager
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

Groups of Supported Events
------------------------

The File Manager API includes the following groups of events:

1) Action Handling Events

- <a href="#onbeforecreate">onBeforeCreateFolder</a> - fires before a new folder has been created
- <a href="#onbeforedelete">onBeforeDeleteFile</a> - fires before an item is deleted
- <a href="#onbeforeedit">onBeforeEditFile</a> - fires when the Rename action is chosen in the popup menu
- <a href="#onbeforecopy">onBeforeMarkCopy</a> - fires before an item has been copied
- <a href="#onbeforecut">onBeforeMarkCut</a> - fires before an item has been cut
- <a href="#onbeforepaste">onBeforePasteFile</a> - fires before an item has been pasted
- <a href="#onbeforeupload">onBeforeUploadFile</a> - fires on the "upload" action click 

2) Drag-n-drop Events

- <a href="#onafterdrop">onAfterDrop</a> - fires after drag-n-drop has been finished
- <a href="#onbeforedrag">onBeforeDrag</a> - fires before drag-n-drop has started
- <a href="#onbeforedragin">onBeforeDragIn</a> - fires before a dragged item is moved over the droppable area
- <a href="#onbeforedrop">onBeforeDrop</a> - fires before a dragged item is released over the droppable area

3) Editing Events


- <a href="#onaftereditstop">onAfterEditStop</a> - fires after the editor is closed
- <a href="#onbeforeeditstop">onBeforeEditStop</a> - fires before editing is finished 


4) Tree-related Events

- <a href="#onafterhidetree">onAfterHideTree</a> - fires after the tree has been hidden
- <a href="#onaftershowtree">onAfterShowTree</a> - fires after the tree has been shown
- <a href="#onbeforehidetree">onBeforeHideTree</a> - fires before the tree is hidden
- <a href="#onbeforeshowtree">onBeforeShowTree</a> - fires before the tree is expanded

5) Navigation Events

- <a href="#onafterleveldown">onAfterLevelDown</a> - fires after selection has been moved to the child folder
- <a href="#onbeforeleveldown">onBeforeLevelDown</a> - fires before selection is moved to the child folder


6)  Other Events

- <a href="#onafterrun">onAfterRun</a> - fires after a selected file has been downloaded
- <a href="#onbeforerun">onBeforeRun</a> - fires on file double-click or on enter click
- <a href="#onerrorresponse">onErrorResponse</a> - fires if an error has occurred during some operation
- <a href="#onfolderselect">onFolderSelect</a> - fires on selecting a folder in the Tree view
- <a href="#onhidesearchresults">onHideSearchResults</a> - fires when search results were hidden
- <a href="#onitemrename">onItemRename</a> - fires when an item is renamed
- <a href="#onsuccessresponse">onSuccessResponse</a> - fires on successful save response
- <a href="#onviewinit">onViewInit</a> - fires during the initialization of an object with the mode configuration





Events' Details
--------------------


###<span id='onbeforecopy'>onBeforeMarkCopy</span> 

fires before an item has been marked for copying

~~~js
$$("fmanager").attachEvent("onBeforeMarkCopy", function(ids){
	// your code
	return true;
});
~~~

params:

- ids - {string} the ids of the copied items

returns:

- {bool}-  returning false will prevent copying

{{sample
64_file_manager/02_events/05_copy.html
}}

###<span id='onbeforecreate'>onBeforeCreateFolder</span> 

fires before a new folder has been created

~~~js       
$$("fmanager").attachEvent("onBeforeCreateFolder",function(id){
	// your code
	return true;
});
~~~

params:

- id - {string} the id of the target folder/file (where a new folder is going to be created)

returns:

- {bool} - returning false will prevent creating


###<span id='onbeforecut'>onBeforeMarkCut</span> 

fires before an item has been marked for cutting

~~~js
$$("files").attachEvent("onBeforeMarkCut", function(ids){
	// your code
	return true;
});
~~~

params:

- ids - {string} the ids of the copied items

returns:

- {bool} - returning false will prevent cutting operation

{{sample
64_file_manager/02_events/05_copy.html
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


###<span id='onbeforeedit'>onBeforeEditFile</span> 

fires when the Rename action is chosen in the popup menu

~~~js
$$("fmanager").attachEvent("onBeforeEditFile",function(id){
    // your code 
	return true;
});
~~~

params:

- id - {string} the id of the edited item   

returns:

- {bool} - if an event handler returns false, onBeforeEditFile handler will not be called.

{{sample
64_file_manager/02_events/04_rename.html
}}



###<span id='onbeforepaste'>onBeforePasteFile</span> 

fires before an item has been pasted

~~~js
$$("fmanager").attachEvent("onBeforePasteFile", function(id){
	// your code
	return true;
});
~~~

params:

- id - {string} the id of the target folder

returns:

- {bool} - returning false will prevent pasting

{{sample
64_file_manager/02_events/05_copy.html
}}



###<span id='onbeforeupload'>onBeforeUploadFile</span> 

fires on "upload" action click  

~~~js       
$$("fmanager").attachEvent("onBeforeUploadFile",function(targetId){
	// your code
	return true;
});
~~~

params:

- targetId - {string} the id of the folder where a new file will be uploaded

returns:

- {bool} - returning false will prevent opening the upload file dialog


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

- {bool} - returning false will prevent dragging of the element

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

- {bool} - returning false will prevent dropping of the element

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

- {bool} - returning false will prevent further drag-and-drop processing

{{sample
64_file_manager/02_events/03_drag.html
}}

###<span id='onaftereditstop'>onAfterEditStop</span> 

fires after the editor is closed

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

- {bool} - returning false will prevent editing

{{sample
64_file_manager/02_events/04_rename.html
}}

###<span id='onerrorresponse'>onErrorResponse</span> 

fires if an error has occurred during some operation

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

- {bool} - if an event handler returns false, onBeforeRun handler will not be called.

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


###<span id='onafterhidetree'>onAfterHideTree</span> 

fires after the tree has been hidden

~~~js
fmanager.attachEvent("onAfterHideTree", function(){
    // some code
});
~~~


###<span id='onafterleveldown'>onAfterLevelDown</span> 

fires after selection has been moved to the child folder

~~~js
fmanager.attachEvent("onAfterLevelDown", function(id){
    // some code
});
~~~

params:

- id - {string}	the new selected folder id


###<span id='onafterrun'>onAfterRun</span>

fires after a selected file has been downloaded

~~~js
fmanager.attachEvent("onAfterRun",function(id){
    // some code
});
~~~

params:

- id - {string}	the id of the downloaded item


###<span id='onaftershowtree'>onAfterShowTree</span>

fires after the tree has been shown

~~~js
fmanager.attachEvent("onAfterShowTree", function(){
    // some code 
});
~~~


###<span id='onbeforehidetree'>onBeforeHideTree</span>

fires before the tree is hidden

~~~js
fmanager.attachEvent("onBeforeHideTree", function(){
    // some code
    return true;
});
~~~

returns:

- {bool} - returning false will prevent tree collapsing


###<span id='onbeforeleveldown'>onBeforeLevelDown</span>

fires before selection is moved to the child folder

~~~js
fmanager.attachEvent("onBeforeLevelDown", function(){
    // some code
});
~~~

params:

- id - {string}	the new selected folder id

returns:

- {bool} - returning false will prevent the operation



###<span id='onbeforeshowtree'>onBeforeShowTree</span>

fires before the tree is expanded

~~~js
fmanager.attachEvent("onBeforeShowTree", function(){
    // some code
    return true;
});
~~~

returns:

- {bool} - returning false will prevent tree expanding



###<span id='onhidesearchresults'>onHideSearchResults</span>

fires when search results were hidden

~~~js
fmanager.attachEvent("onHideSearchResults", function(){
    // some code
});
~~~

###<span id='onitemrename'>onItemRename</span>

fires when an item is renamed

~~~js
fmanager.attachEvent("onItemRename", function (id) {
    // some code
});
~~~

params:

- id - {string}	the item id

###<span id='onsuccessresponse'>onSuccessResponse</span>

fires on successful save response

~~~js
fmanager.attachEvent("onSuccessResponse", function(request, response){
    // your code here
});
~~~

params:

- request - {object} a JSON object with request parameters
- response - {object} a JSON object with response