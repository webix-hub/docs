Version 1.0.1
==============


### New functionality

- layouts are correctly shown when they are zoomed by a browser
- selectFilter can show data from the attached collections
- better strategy for x-layout rendering
- API calls against hidden items in menu
- init from html|xml markup improved
- dataprocessor can have different urls for different action
- value attribute for tabview
- getTopParentView method added for all views 
- getPopup method added to the datepicker
- setHTML method added to the label
- setValue and getValue methods added to the multiview


### Fixes

- invalid size and focus of popup editors
- toggle button ignores inputWidth settings
- regression in treetable checkbox behavior
- regression in datatable markup parsing
- conflict between data and content properties of template
- row markers are not removed during clearAll
- mulitiview with no animation
- chart rendering in multiview (no animation case)
- label position in pie chart
- validation and htmlform control
- incorrect column autosizing in case of hidden container
- native selection during cell resize
- hideItem throws an error for menu's item which was already hidden
- incorrect handling of custom popups in editors
- sizing of scrollview was broken
- window ignores y parameter of show command
- dnd in tree as child