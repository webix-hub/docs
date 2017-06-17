Localizing SpreadSheet
=======================

You can easily localize SpreadSheet, by defining all the necessary language settings.

It's possible to localize the following properties:

- labels on the instruments panel
- tooltips for instruments
- names of the menu items

The labels of SpreadSheet buttons, menu items and tooltips are stored in the **webix.i18n.spreadsheet** object:

~~~js
webix.i18n.spreadsheet = {
	"labels": {
		// formats
		"common": "Common",
		"currency": "Currency",
		"number": "Number",
		"percent": "Percent",
        
		// titles
		"undo-redo": "Undo/Redo",
		"font": "Font",
		"text": "Text",
		"cell": "Cell",
		"align": "Align",
		"format": "Number",
		"column": "Column",
		"borders": "Borders",
		"px": "px",
		"apply": "Apply",
        
		// popups and dialogs
		"cancel": "Cancel",
		"save": "Save",
        
		// multisheets
		"sheet": "Sheet",
        
		// conditions
		"conditional-format": "Conditional Format",
		"condition": "Condition",
		"conditional-value": "Value",
		"conditional-style": "Style",
        
		// ranges
		"range": "Range",
		"range-title": "Named ranges",
		"range-name": "Name",
		"range-cells": "Range",
        
		// images
		"image-or": "or",
		"image-title": "Add image",
		"image-upload": "Select file for upload",
		"image-url": "URL (e.g. http://*)",
        
		// sparklines
		"sparkline-title": "Add sparkline",
		"sparkline-type": "Type",
		"sparkline-range": "Range",
		"sparkline-color": "Color",
		"sparkline-positive": "Positive",
		"sparkline-negative": "Negative",
        
		// custom format
		"format-title": "Set format",
		"format-pattern": "Format pattern",
        
		// dropdown            
		"dropdown-title": "Add dropdown",
		"dropdown-range": "Range",
        
		// confirm
		"ok": "OK",
        
		// import/export
		"import-title": "Import",
		"import-not-support": "Sorry, your browser does not support import",
		"export-title": "Export",
		"export-name": "Name of xslx file",
        
		// add link
		"link-title": "Add Link",
		"link-name": "Text",
		"link-url": "URL",
        
		// images
		"image": "Image",
		"graph": "Graph",
        
		// conditional format labels
		"display": "Display",
		"value": "Value",
        
		// confirm messages
		"range-remove-confirm":"Are you sure you want to remove the range permanently?",
		"sheet-remove-confirm":"Are you sure you want to remove the sheet permanently?",
		"error-range": "The range is incorrect!",
        
		// print
		"print": "Print",
		"print-title": "Before you print..",
		"print-settings": "General settings",
		"print-paper": "Paper size",
		"print-layout": "Layout",
		"current-sheet": "Current sheet",
		"all-sheets": "All sheets",
		"selection": "Selected cells",
		"borderless": "Hide gridlines",
		"sheet-names": "Show sheet names",
		"skip-rows": "Skip empty rows",
		"margin": "Hide margins",
		"page-letter": "Letter",
		"page-a4": "A4 (210x297mm)",
		"page-a3": "A3 (297x420mm)",
		"page-width": "Page width",
		"page-actual": "Actual Size",
		"page-portrait": "Portrait",
		"page-landscape": "Landscape"
		},
        
	"tooltips": {
		"color": "Font color",
		"background": "Background color",
		"font-family": "Font family",
		"font-size": "Font size",
		"text-align": "Horizontal align",
		"vertical-align": "Vertical align",
		"borders": "Borders",
		"borders-no": "Clear borders",
		"borders-left": "Left border",
		"borders-top": "Top border",
		"borders-right": "Right border",
		"borders-bottom": "Bottom border",
		"borders-all": "All borders",
		"borders-outer": "Outer borders",
		"borders-top-bottom": "Top and bottom borders",
		"borders-color": "Border color",
		"align-left": "Left align",
		"align-center": "Center align",
		"align-right": "Right align",
		"align-top": "Top align",
		"align-middle": "Middle align",
		"align-bottom": "Bottom align",
		"span": "Merge",
		"wrap": "Text wrap",
		"undo": "Undo",
		"redo": "Redo",
		"format": "Number format",
		"font-weight": "Bold",
		"font-style": "Italic",
		"text-decoration": "Underline",
		"hide-gridlines": "Hide/show gridlines",
		"hide-headers": "Hide/show headers",
		"freeze-columns": "Freeze/unfreeze columns",
		"add-range": "Set name for the selected range",
		"conditional": "Conditional formatting",
		"add-sheet": "Add Sheet",
		"lock-cell": "Lock/unlock cell",
		"clear-styles": "Clear styles",
		"add-link": "Add link",
		"row": "Rows",
		"column": "Columns",
		"sheet": "Sheet"
	},
		
	"menus": {
		"remove-sheet": "Remove sheet",
		"rename-sheet": "Rename sheet",
		"file": "File",
		"new": "New",
		"new-sheet": "New sheet",
		"excel-import": "Import from Excel",
		"excel-export": "Export to Excel",
		"sheet": "Sheets",
		"copy-sheet": "Copy to new sheet",
		"edit": "Edit",
		"undo": "Undo",
		"redo": "Redo",
		"columns": "Columns",
		"insert-column": "Insert column",
		"delete-column": "Delete column",
		"show-column": "Show column",
		"hide-column": "Hide column",
		"rows": "Rows",
		"insert-row": "Insert row",
		"delete-row": "Delete row",
		"show-row": "Show row",
		"hide-row": "Hide row",
		"insert": "Insert",
		"conditional-format": "Conditional format",
		"clear-styles": "Clear styles",
		"add-image": "Image",
		"add-sparkline": "Graph",
		"data": "Data",
		"add-link": "Add link",
		"add-range": "Named ranges",
		"sort": "Sort",
		"sort-asc": "Sort A to Z",
		"sort-desc": "Sort Z to A",
		"create-filter": "Create filter",
		"view": "View",
		"freeze-columns": "Freeze/unfreeze columns",
		"freeze-rows": "Freeze/unfreeze rows",
		"hide-gridlines": "Hide/show gridlines",
		"hide-headers": "Hide/show headers",
		"add-dropdown": "Add dropdown",
		"custom-format": "Custom format",
		"lock-cell": "Lock/unlock cell",
		"print": "Print"
	}
};
~~~

To apply a custom locale, you can follow one of the two ways: 

1) redefine default labels and tooltips according to your locale directly in the **webix.i18n.spreadsheet** object; 

2) set a certain locale as described below:

- include the chosen locale library into your page:

~~~html
<script src="../../../codebase/i18n/ru.js" type="text/javascript"></script>
~~~

- define 'spreadsheet' labels and tooltips in the **webix.i18n.locales[localeName]** object:

~~~js
webix.i18n.locales["ru-RU"].spreadsheet = {
    "labels":{
       "common": "Общий",
	   "currency": "Валюта",
       ...
    },
	"tooltips":{
       "color": "Цвет текста",
       ...
    }
	
};
~~~

- apply the created locale with the help of the api/i18n_setlocale.md method:

~~~js
webix.i18n.setLocale("ru-RU");
~~~

{{sample
65_spreadsheet/01_basic/06_localization.html
}}

@spellcheck:api
