Version 1.10
================

### Full list of changes and fixes

**New functionality**

- onSubmit event for Form ("enter" listener for "text"-based controls inside form)
- target for menu links
- column batches in datatable


**Updated functionality**

- each and eachChild iterators accepts "all" flag for TreeStore
- "property" styles in "flat" and "touch" skins
- textarea styles
- unsync API for backbone integration


**Fixes**

- not valid HTML for textarea control
- focus in empty form
- removeHotKey removes all hotkey handlers except of one specific
- webix.ui usage for cell replacement
- dynamic inputs can corrupt form's data
- double rendering in window
- changing month in main view (case of last day selected)
- month changing in case of last days selection (like 31 March than go to Feb)
- autosuggest in combo breaks after form.clean
- backbone integration and empty collection
- indeterminate checkbox styling and some other tree styles
- cancel validation for hidden form fields
- pager styling
- preselecting combo and richselect options in case of custom template for list
- options mapping
- options mapping
- carousel sizing (carousel was completely rebuilt: view-based, layout is inside)
