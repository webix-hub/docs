Localizing SpreadSheet
=======================

You can easily localize SpreadSheet, by defining all the necessary language settings.

It's possible to localize the following properties:

- labels on the instruments panel
- tooltips for instruments

Labels and tooltips of SpreadSheet instruments' are stored in the **webix.i18n.spreadsheet** object:

~~~js
webix.i18n.spreadsheet = {
	    labels: {
	        // formats
	        common: "Common",
	        currency: "Currency",
	        number: "Number",
	        percent: "Percent",
	        // titles
	        "undo": "Undo/Redo",
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
	        // conditions
	        "condition": "Condition",
	        "conditional-value": "Value",
	        "conditional-style": "Style",
	        // ranges
	        "range": "Range",
	        "range-title": "Named Ranges",
	        "range-name": "Name",
	        "range-cells": "Range",
	        // images
	        "image-or": "or",
	        "image-preview": "No image",
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
	        // confirm
	        "ok": "OK"
	    },
	    tooltips: {
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
	        "hide-borders": "Hide/show borders",
	        "hide-headers": "Hide/show headers",
	        "freeze-columns": "Freeze/unfreeze columns",
	        "add-range": "Set name for the selected range",
	        "conditional": "Conditional formatting"
	    },
	    menus: {
	        "add_row": "Insert Row",
	        "del_row": "Delete Row",
	        "show_row": "Show Row",
	        "hide_row": "Hide Row",
	        "add_column": "Insert Column",
	        "del_column": "Delete Column",
	        "show_column": "Show Column",
	        "hide_column": "Hide Column"
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
webix.i18n.locales['ru-RU'].spreadsheet = {
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
webix.i18n.setLocale('ru-RU');
~~~

{{sample
65_spreadsheet/02_api/03_localization.html
}}

@spellcheck:api
