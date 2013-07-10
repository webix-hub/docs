removeCellCss
=============

@short:
	remove css class from the cell of datatable

@params:
- id	string		row id
- name	string		column name
- css_name	string		name of css class to remove


@example:

$$("mytable").removeCellCss(152, "year", "some_style");

@template:	api_method
@descr:


@relatedapi:
	api/ui.datatable_addCellCss.md
	api/ui.datatable_addRowCss.md
	api/ui.datatable_removeRowCss.md
    
@related:
	datatable/styling.md