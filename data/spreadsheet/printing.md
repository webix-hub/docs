SpreadSheet Printing Interface
======================

You can print the results of your work in the Webix SpreadSheet. This functionality is provided out of the box. 

There are two ways to activate printing. You can either click [the "Print" button](spreadsheet/customization.md)  which is located in File section of the Toolbar 
or use the "Ctrl+P" keys combination. Both these actions envoke the dialog window that provides you with the available printing settings.


<img style="display:block; margin-left:auto;margin-right:auto;" src="spreadsheet/beforeprint_dialog.png">



- **data** - (*string*) defines which data to print 
	- "all" - all data from all sheets
	- "current" - all data from the current sheet (default)
	- "selection" - selected data from the current sheet
- **sheetnames** - (*boolean*) renders name of sheets for each table. True by default.
- **borderless** - (*boolean*) removes borders for datatable cells. False by default
- **skiprows** - (*boolean*) skips empty rows within the datatable. False by default 
- **margin**  -  (*number*|*object*) margin for printed pages, can be of two types: 
	- *number* - to set the same margin from all sides
	- *object* - with any of the properties: *top*, *right*, *bottom*, *left* containing number to set margins separately 
- **paper** - (*string*) paper size. Possible values are "a3", "a4" (default), "letter" 
- **fit** - (*string*) adjusts printed component either to the page width ("page", default), or to the component width ("data"). 
- **mode** - (*string*) page orientation. Possible values are "portrait" (default), "landscape"


All labels in the dialog are object to localization. You will find the all in the article spreadsheet/localization.md.


~~~js
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
~~~

