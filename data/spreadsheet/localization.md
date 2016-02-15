Localizing SpreadSheet
=======================

You can easily localize SpreadSheet, by defining all the necessary language settings.

It's possible to localize the following properties:

- labels on the instruments panel
- tooltips for instruments

Labels and tooltips of SpreadSheet instruments' are stored in the **webix.i18n.spreadsheet** object:

~~~js
webix.i18n.spreadsheet = {
	"labels": {
		// formats
		"common": "Common",
		"currency": "Currency",
		"number": "Number",
		"percent": "Percent",
		// titles
		"undo": "Undo/Redo",
		"font": "Font",
		"text": "Text",
		"cell": "Cell",
		"align": "Align",
		"format": "Format"
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
    	"format": "Format",
    	"font-weight": "Bold",
    	"font-style": "Italic",
    	"text-decoration": "Underline"
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
