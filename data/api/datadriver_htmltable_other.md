htmltable
=============


@short:the parser for HTML tables.
	

@type:object

@example:
//..body part
<table id="films">
...
</table>

..//script part
dtable.data.driver = webix.DataDriver.htmltable;
dtable.parse("films");
// it is the same as
dtable.parse("films", "htmltable");
@template:	api_config
@relatedsample:
	15_datatable/01_loading/04_html.html
@related:
	desktop/data_types.md
@defined:	DataDriver	
@descr:

The object contains methods and properties for correct processing HTML tables.
