print
=============


@todo:
	check and complete
@short:
	prints a view according to the specified settings

@params:

- view 				object, id		the object or id of the view to print
- options			object			a set of printing options, see the list below 


@example:
//view obj or view id
webix.print($$("datatable1")); 
webix.print("datatable1");
 
//with options
webix.print($$("datatable1"), {mode:"landscape"});



@template:	api_method
@descr:

<h3>Common printing options</h3> (for all widgets)

- **paper** - (*string*) paper size. Possible values are "a3", "a4" (default), "letter"
- **mode** - (*string*) orientation. Possible values are "portrait" (default), "landscape"
- **margin**  -  margin for printed pages, can be of two types: 
	- *number* to set the same margin from all sides
	- *object* with any of the properties: *top*, *right*, *bottom*, *left* containing number to set margins separately
- **docHeader** - (*string*) document header on the first page before the printed view (independent of the browser print header)
- **docFooter** - (*string*) document footer on the last page after the printed view (independent of the browser print header)

There are also additional properties that vary depending on the component.

<h3>For data components</h3>
 
- **scroll** - (*boolean*) if *true*, prints only a visible part of a scrolled component. False by default.
 
<h3>For datatable, dataview, spreadsheet, X-list</h3> 
 
- **fit** - (*string*) adjusts printed component either to page width ("page", default), or to the component width ("data"). 
 
<h3>For datatable and spreadsheet</h3>
 
- **header** - (*boolean*) renders header for datatable, if exists
	- *true* (default for datatable)
	- *false* (default for spreadsheet)
- **skiprows** - (*boolean*) skips empty rows within the datatable. False by default
- **borderless** - (*boolean*) removes borders for datatable cells. False by default
- **trim** - (*boolean*) removes empty rows and columns on the edges of datatable. 
	- *true* (default for spreadsheet),
	- *false* (default for datatable)
 
<h3>For datatable only</h3>
 
- **footer** - (*boolean*) renders footer for datatable, if exists. True by default
 
<h3>For spreadsheet only</h3>
 
- **data** - (*string*) defines which data to print 
	- "all" - all data from all sheets
	- "current" - all data from the current sheet (default)
	- "selection" - selected data from current sheet
- **sheetnames** - (*boolean*) renders name of sheets for each table. True by default.
