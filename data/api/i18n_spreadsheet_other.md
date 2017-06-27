spreadsheet
=============

@short:
	default locales for Spreadsheet labels and tooltips

@type:object

@example:
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
        ...
    },
    "tooltips": {
        "color": "Font color",
        "background": "Background color",
        "font-family": "Font family",
        "font-size": "Font size",
        "text-align": "Horizontal align",
        ...
    },
    "menus":{
        "remove-sheet": "Remove sheet",
        "rename-sheet": "Rename sheet",
        "file": "File",
        "new": "New",
        "new-sheet": "New sheet"
        ...
    }   
};

webix.i18n.setLocale();

@template:	api_config
@descr:
See the full content of the locale file in the [corresponding article on SpreadSheet localization](spreadsheet/localization.md).

@related:
spreadsheet/localization.md

@relatedapi:
	api/i18n_setlocale.md



@seolinktop: [js framework](https://webix.com)
@seolink: [spreadsheet javascript library](https://webix.com/spreadsheet/)