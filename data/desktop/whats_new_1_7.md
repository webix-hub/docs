Version 1.7
==============

{{note 

### Breaking changes in API

datatable.locate method returns object with "row" and "column" properties, in previous version result object has "row" and "col" properties respectfully.

}}


### Default skin
Default skin changed to flat ( you still can use the old skin by using skins/air.css )  
Compact skin changed to flat theme as well ( old one renamed to skins/aircompact.css )  


### Improvments in API
- text sorting mode for datatable
- autoheight property for "property" view
- ability to edit math formulas in the datatable
- "touch" mode for multiselect


### Full list of changes and fixes

#### New functionality 

- "text" sorting mode for datatable
- autoheight for "property" view
- editMath option for datatable
- keyPressTimeout option for the suggest
- multiselect="touch" for all data components
- new compact skin
- placeholder for richselect and datapicker
- touch-multiselect mode



#### Updated functionality 

- pager styling
- placeholder for richselect and datepicker
- folder codebse/imgs to codebase/fonts
- datatable.locate returns different data structure
- new skin based samples
- tree and treetable can render hierarchy from db starting from any level
- webix.message.keyboard disables all text input for modal boxes



#### Fixes

- adjustHeaders in case of colspans or rowspans
- ajax error for destroyed views
- combo autocomplete after moving focus to the different control
- cssFormat adds garbage to css string
- custom checkbox and custom radio clicks in iframes
- customScroll in datatable and removeView
- datafeed works only with strings
- dataprocessor with connector as proxy can send empty request to a server side02:43 PM
- drag-n-drop in latest FireFox
- export of treetable data to pdf and excel
- filter values lost after column resize
- freezing when focus target can't be found
- getChildViews in accordion
- getItemNode in case of split
- isDirty status and named buttons
- layout resize fix (maxlength should be checked before its usage in object)
- minHeight and inner content auto-sizing
- multi-level form validation
- native event absent in onDrop handlers
- popup close delay is too big on desktop
- refreshColumns doesn't work correctly without first parameter
- regression in hierarchical data parsing from XML
- removeView for named field in form
- render calls for inputs in hidden views
- rendering of hidden select and combo
- rendering of layout with all cells hidden
- resizing in form nested in accordion
- richselect and combo in IE8
- suggest box render self in case of empty suggest list
- uploader demo
- Web Fonts bug in Google Chrome
- window positioning for windows with "move" property


