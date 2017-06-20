Smart Printing of Widgets
=========================

With Webix you have a nice possibility to print widgets or parts of interfaces with the help of compact and elegant API.

{{note Please ensure that **webix.css** file is included for all media or at least contains *media:print*. No media will also do (see below)}}

~~~html
<link rel="stylesheet" href="../../codebase/webix.css" type="text/css" charset="utf-8">
~~~


Basic Principles
-----------------

Printing abilities are available via the [print()](api/_print.md) method which is common for all Webix widgets.
The method takes as parameters:

- **view** - (*object|id*) the object or id of the view to print 
- **options** - (*object*) a set of printing options that define the appearance of the printed view 

~~~js
// view id
webix.print($$("datatable1")); 
// view obj
webix.print("datatable1");
~~~

{{sample 35_print/10_datatable.html}}


Printing Options
-------------------------

You can easily configure printing settings by passing an object with necessary options as a second parameter of the **print()** method.
There are common options for all widgets and specific options for data components.

###Common options for all widgets

- **paper** - (*string*) paper size. Possible values are "a3", "a4" (default), "letter"
- **mode** - (*string*) page orientation. Possible values are "portrait" (default), "landscape"
- **margin**  - (*number*|*object*) margin for printed pages, can be of two types: 
	- *number* - to set the same margin from all sides
	- *object* - with any of the properties: *top*, *right*, *bottom*, *left* containing number to set margins separately
- **docHeader** - (*string*) document header on the first page before the printed view (independent of the browser print header)
- **docFooter** - (*string*) document footer on the last page after the printed view (independent of the browser print header)

~~~js
webix.print($$("mytable"), {mode:"landscape"});
~~~

{{sample 35_print/11_wide_datatable.html}}

###Extended options for data components

**For all data components**
 
- **scroll** - (*boolean*) if *true*, prints only a visible part of a scrolled component. False by default.

{{sample 35_print/06_dataview.html}}
 
**Specific for DataTable, DataView and X-List** 
 
- **fit** - (*string*) adjusts printed component either to the page width ("page", default), or to the component width ("data"). 

{{sample 35_print/05_list_x.html}}
 
**Specific for DataTable and SpreadSheet**
 
- **header** - (*boolean*) renders header for datatable, if exists
	- *true* (default for datatable)
	- *false* (default for spreadsheet)
- **skiprows** - (*boolean*) skips empty rows within the datatable. False by default
- **borderless** - (*boolean*) removes borders for datatable cells. False by default
- **trim** - (*boolean*) removes empty rows and columns on the edges of datatable. 
	- *true* (default for spreadsheet),
	- *false* (default for datatable) 

**Specific for DataTable only**

- **footer** - (*boolean*) renders footer for datatable, if exists. True by default

**Specific for SpreadSheet only**
 
- **data** - (*string*) defines which data to print 
	- "all" - all data from all sheets
	- "current" - all data from the current sheet (default)
	- "selection" - selected data from the current sheet
- **sheetnames** - (*boolean*) renders name of sheets for each table. True by default.

SpreadSheet is equipped with the printing user interface out of the box. Read more about it in the related [SpreadSheet documentation](spreadsheet/printing.md).
 
Configuring Printing Environment
------------------------------

It is possible to specify the desired paper margins for printing by taking into account the rules described below.

We assume that the default **ppi** (pixel per inch) ratio is equal to 96 and the default paper margins take 75% of ppi. 
If you need to define other values for margins, you can change the corresponding *env* variables:  

~~~js
webix.env.printPPI = 96;
webix.env.printMargin = 96*0.75;
~~~

Also, margins can be set via the [printing options](desktop/printing.md#printingoptions). The priority is given to margins set via options. 

