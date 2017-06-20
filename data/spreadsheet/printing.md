SpreadSheet Printing Interface
======================

You can print the results of your work in the Webix SpreadSheet. This functionality is provided out of the box. 

There are two ways to activate printing:

- click the "Print" button which is located in the [File section](spreadsheet/customization.md#file) of the Toolbar

<img src="spreadsheet/print_button.png">

- use the "Ctrl+P" keys combination

Both these actions envoke the dialog window that provides you with the available printing settings.

{{sample 65_spreadsheet/01_basic/02_all_buttons.html}}

Before Print Dialog Appearance
--------------------

The before print dialog looks as follows:

<img style="display:block; margin-left:auto;margin-right:auto;" src="spreadsheet/beforeprint_dialog.png">

Let's have a look at the contents of the before printing dialog:

There are three sections: General Settings, Paper Size and Layout.

The **General Settings** section allows you to specify the following settings:

- define which data to print 
	- *Current sheet* - all data from the current sheet (set by default)
	- *All sheets* - all data from all sheets	
	- *Selected cells* - selected data from the current sheet
- specify additional parameters of printing
	- *Show sheet names* - render name of sheets for each table (enabled by default)
	- *Hide gridlines* - remove borders of datatable cells (disabled by default)
	- *Skip empty rows* - skip empty rows within the datatable (disabled by default)
	- *Hide margins*  -   hide margins for printed pages (set them to 0)
    
The **Paper Size** section lets you define the desired size paper size for printing: "letter", "a4" (default) or "a3".

The **Layout** section allows setting the layout configuration:

- adjust the width of the printed view
	- *Page width* - to the page width (default) 
    - *Actual size* - to the component width   
- specify the page orientation
	- *Portrait* - the "portrait" orientation
    - *Landscape* - the "landscape" orientation (default)

Localizing Before Print Dialog
----------------------------

You can fully localize labels in the dialog via the i18n object. See the printing-related labels below:

~~~js
webix.i18n.spreadsheet = { 
	"labels": {
    	...
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
	}
} 
~~~

Read more on SpreadSheet localiztion in the [related article](spreadsheet/localization.md).

