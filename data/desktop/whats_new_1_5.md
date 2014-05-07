Version 1.5
==============

### Improved support for mobile devices
- new skin for mobile UI ([demo](http://webix.com/demos.touch.html))
- functionality of desktop UI adapted to touch events and gestures

### Improvments in DataTable
- adjustRowHeight method added to datatable ( autodetects and applies the correct row height )
- fillspace can be used for multiple columns ( pecent based sizing in datatable ) 
- richselect can be used as editor in the datatable
- checkboxes can have checkValue and uncheckValue options
 
### Improvments in Angular and Backbone 

- [angular] webix-ui is compatible with ng-repeat
- [angular] webix-data works for options in combo and select
- [angular] init through angular directive links event handlers to the current scope

- [backbone] handling of reset event
- [backbone] handling of models with getters
- [backbone] WebixView is compatible with backbone 1.1
- [backbone] using sync with already loaded collection


### Full list of changes and fixes

#### New functionality 
- ability to define form as editor
- activeTitle option for the tree (open/close an item on click)
- adjustRowHeight method
- checkValue and uncheckValue for checkbox
- checkValue and uncheckValue for checkbox and radio editors in the grid
- className correctly processed while parsing data from the html
- getItemNode method
- global hotkeys for edit operations and window closing
- htmlbutton button type
- minWidth setting for grid's column
- onValueSuggest event for the suggest control
- retina support for canvas
- richselect editor for the grid 
- webix.once method


#### Updated functionality 
- $formElement deprecated 
- a bit better visual position for showItem
- ability to toggle accordion items in any modes
- backbone integration - reset event and getter usage
- button and inputs styling for font-awesome
- cssFormat can be a string with name of function
- editCell in datatable can be called without column id
- fillspace can be used on multiple columns with different weights
- function names can be resolved in custom scope
- getSelection -> getSelectedId
- idColumn to csv abd jsarray data drivers
- init through angular directive links method to the current scope
- look of tabbar in clouds skin
- selectFilter in datatable sorts options by default
- suggest can use complex popups
- support for multiline rows in datatable
- tab navigation works for grid without active editor
- webix-data can be used to define the select options
- webixEvent and webixData works for object init (angular)
- window closing and modality

#### Fixes
- slider for touch
- autoscroll and autoopen during dnd
- autosizing of templates
- backbone view must return this
- calling ungroup on clearAll
- carousel resize after changing structure
- combo editor do not work with config.options
- datatable selection (multiselect was always applyed)
- dblclick doesn't work in cell selection mode
- debug file throws an error while generation error message for empty data set
- deleting selected row in treetable may cause auto-loading attempt
- disabled buttons in IE8
- form with scroll  still  uses maxHeight
- fullScreen for latest devices
- getItemNode for datatable
- getSelectedId doesn't work when plain id requested
- grouplist width
- icon font on old mobile devices
- icons in Touch skin
- incorrect $scope for child views
- incorrect processing text nodes in xml
- incorrect rendering of touch scroll for datatable in Chrome Mobile
- invalid uid generation code
- item styling for the the selected state
- menu vertical align
- named types for treetable
- named types in datatable
- ng-repeat and webix json integration
- onChange event in text inputs
- onRotate was called on window resize
- options collections and backbone 1.1
- overflow for label
- parsing long text content from xml in FF
- regression in angular init
- regression in getSelectedId
- regression in webixElements (angular)
- regression in window position
- resizing of templates and onload handler in iframe
- richselect icon
- selection mode affects the id to string conversion
- solution for 4K text node Firefox limitation
- styling of disabled elements in IE
- sync ignores configuration parameter
- sync with backbone ignores already loaded data
- tabbar do not self adjust after active tab change
- text-based validation rules not recognized
- using calendar suggest for text inputs
- using js code literals in xml config
- view throws an error if angular provides non collection as a data
- webix_security flag not set correctly for the connector calls