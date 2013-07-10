@link: api/atomrender_template_config.md

@example:
webix.ui({
	view:"datatable",
	pager:{
		template: "{common.prev()}{common.pages()}{common.next()}"
		size:10,
		group:5
	}
});

@related:
	desktop/paging.md
    desktop/html_templates.md
@relatedsample:
	25_pager/04_template.html
@descr:

Pager template may include the same elements as ordinary template:

- standard **text**;
- **pager data elements** (e.g. '#limit#' to display the total number of pages);
- common **icons**:
	- *{common.prev()}* - 'less-than' sign, directs to previous page;
	- *{common.first()}* - double 'less-than' sign, directs to the first page;
	- *{common.next()}* - 'greater-than' sign, directs to the next page;
	- *{common.last()}* - double 'greater-than' sign, directs to the last page;
	- *{common.page()}* - displays the number of the current page;
	- *{common.pages()}* - displays a set of numbered squares.

~~~js
template: "{common.prev()}{common.next()}<div class='paging_text1'>
		Page {common.page()} from #limit#</div>"
~~~