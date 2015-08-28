Version 1.6
==============

{{note 

### Breaking changes in DataProcessor

Parameters of onBeforeSync, onAfterSync was changed  
onError event replaced with two new events - onBeforeSaveError and onAfterSaveError

}}

### Improved support for mobile devices
- win8 touch support
- drag-n-drop on touch devices


### Improvements in Server side integrations
- full support of REST API
- data in components can be updated from server side
- client side code can't be broken by server side errors anymore
- ability to set custom headers for server side calls

### UI components
- better memory cleaning after component destruction
- improved API for complex forms


### Full list of changes and fixes

#### New functionality 

- multiview.config.fitBiggest option
- win8 touch support
- drag-n-drop on touch devices

##### 1.5.1

- columns.options accepts url of data feed
- combo and richselect: setting value on list load
- datastore importData
- getDirtyValues and getCleanValues methods
- getFormView
- live edit functionality
- locate method for chart (required for dblclick event handling)
- math operations in treetable
- onBeforeAjax event
- onBeforeDateSelect/onAfterDateSelect events to calendar
- onColumnResize and onRowResize events
- relatedView and relatedAction attributes
- required and validateEvent attributes for form elements
- sort:"server" in datatable
- unbind and unsync, correct destruction of synced and binded elements




#### Updated functionality 

- disabled tap iOS7 highlighting
- addCss and removeCss attempts to set styles directly in DOM without full repainting
- error handling by dataprocessor, better support of REST mode
- "move" command attempts to make changes directly in DOM without full repainting
- special handling for dnd in case of mobile webkit
- updating data in the client side component after saving
- webix.env.mouse contains names of pointer events for current devicePM
- xml data feeds for suggests

##### 1.5.1

- all layout components can use events
- destructor correctly removes the related views
- function resolving can work with both "someMethod" and "someMethod()" notations
- getColumnConfig returns config for hidden columns
- setColumnWidth uses column id as parameter, not column index




#### Fixes
- branch deleting in dyn. loading mode webix-hub/tracker#84
- config options and html template during parsing from html markup
- data reordering in datatable in case of mobile webkit
- destructed views not removed from auto-resize list
- destructing suggest if a master control of this suggest is destructed
- detection of Win Phones
- disabled styling in case of labelPosition="top"
- focus in inline editor after component repainting
- inline editors and correct edit state in datatable
- layout resizing on touch devices
- min value for slider
- scrollview doesn't adjust itself after inner content change in case of touch
- styling of list during drag-n-drop
- styling of row during drag-n-drop
- tree editor position self incorrectly
- webix.DragControl on touch devices
- webix.html.pos in case of touch events

##### 1.5.1

- $scope not defined inside of window
- adding borderless element to layout through addView results in the incorrect sizing
- addView and removeView do not updated elements collection for rich formsPM
- after deleting view from the form its value still accessible through getValues
- camelCase parameters during initialization from HTML
- checkbox reacts on empty space clicks, #75
- clock icon
- custom scroll and disabled areas
- custom scroll doesn't react on addview command
- custom scroll in suggest boxes
- datatable blocks whole page mouse-wheel scroll
- delete dataprocessor on master view destruction
- dynamic loading for deep sub levels
- elementsConfig doesn't work for nested fieldset
- empty text in combo input; 
- fieldset breaks parentView chain
- form with scroll ignores height
- getChildViews for fieldset
- getFormView throws an error for element outside of form
- illegal comma removed
- invalid behavior for movable window and position:center
- invalid editor sizes after column or row resizing
- isDirty doesn't work for the fresh form
- isolate property and multiview, #79
- popup zIndex was not increased on show
- regression in popup editors
- regression in richselect related to after-loading value
- regression in xml-xhtml data parsing
- submenu that is not based on menu
- unnecessary custom scroll in datatable
- window sizing ignores min-width for the inner content
