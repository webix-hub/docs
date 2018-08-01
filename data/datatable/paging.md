Paging with Datatable
==========

DataTable supports paging over the items in the data source. You enable and configure paging through the [pager](api/link/ui.datatable_pager_config.md) parameter. 

<img src="datatable/paging.png"></img>

Paging doesn't depend on the way you load data into DataTable: static or dynamic, external data file or database table. In the most common case of data being dynamically loaded from a URL, Webix will make requests to that URL with [extra query parameters](desktop__plain_dynamic_loading.html) specifying which records to load.

Datatable can display direction controls (that provide forward and backward navigation) as well as numeric controls that allow the user to move to a specific page. Generally, you should just specify parameter [pager](api/link/ui.datatable_pager_config.md) with the required attributes.

{{snippet
  Basic pager configuration
}}

~~~js
grid = new webix.ui({
	view:"datatable",
	...
	pager:{
		container:"paging_here", // the container to place the pager controls into
		size:100, // the number of records per a page
		group:5   // the number of pages in the pager
	}
})
~~~
{{sample 15_datatable/19_paging/01_static.html }}

Pager controls
---------------------

If you set the [pager](api/link/ui.datatable_pager_config.md) parameter, DataTable automatically adds controls for page navigation.  You can customize those controls by specifying a certain template for them.

<img src="datatable/paging_templates.png"></img>

The template is set by the **template** attribute of the [pager](api/link/ui.datatable_pager_config.md) parameter and can contain the following values:

1. **{common.first()}**  - the button to move to the first page.
2. **{common.prev()}**  -  the button  to move to the previous page.
3. **{common.next()}**  - the button to move to the next page.
4. **{common.last()}** - the button to move to the last page.
5. **{common.pages()}**  - numeric controls to move to a specific page.


Depending on what you want to display on the paging area, add the related items to your template.

{{snippet	
	Using templates in pager	
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	pager:{
		template:"{common.prev()} {common.pages()} {common.next()}",
		container:"paging_here",
		size:10,
		group:5
	}
});
~~~
{{sample 15_datatable/19_paging/05_templates.html }}

Generally, using the mentioned values, you can set the following combinations for DataTable:

- Numeric (default) 
- Next/Previous
- Next/Previous/First/Last
- Numeric/First/Last
- Numeric/Next/Previous/First/Last

The first combination is set by default. Other available ones can be achieved with the help of templates (see the table below).
<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Pager controls combinations
	</caption>
	<thead>
	<tr>
		<th>
			Mode
		</th>
		<th>
			Image
		</th>
		<th>
			Related template
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Numeric</td>
		<td><img src="datatable/default_mode.png"/></td>
		<td>default mode, doesn't require specifying a separate template</td>
	</tr>
	<tr>
		<td> Next/Previous</td>
		<td><img src="datatable/next_previous.png"/></td>
		<td> <code>template:" {common.prev()} {common.next()} " </code> </td>
	</tr>
	<tr>
		<td> First/Previous/Next/Last</td>
		<td><img src="datatable/first_prev_next_last.png"/></td>
		<td> <code> template:" {common.first()} {common.prev()} {common.next()} {common.last()}" </code> </td>
	</tr>
	<tr>
		<td> Numeric/First/Last</td>
		<td><img src="datatable/numeric_first_last.png"/></td>
		<td> <code> template:" {common.prev()} {common.pages()} {common.next()}" </code> </td>
	</tr>
	<tr>
		<td> Numeric/Next/Previous/First/Last	</td>
		<td><img src="datatable/numfirst_prev_next_last.png"/></td>
		<td> <code> template:" {common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()}" </code> </td>
	</tr>
	</tbody>
</table>

Customizing pager labels
--------------------------

You can set some text instead of arrows for the Next, Previous, First and Last buttons.

<img src="datatable/paging_localization.png"></img>

{{snippet
  Specifying custom labels for pager controls
}}
~~~js
webix.locale.pager = {
	first: "First", // the first button
    last: "Last", // the last button
    next: "Next", // the next button
    prev: "Prev"  // the previous button
};

grid = new webix.ui({
	view:"datatable",
	...
	pager:{
		template:"{common.first()} {common.prev()} {common.pages()} 
           		{common.next()} {common.last()}",
		container:"paging_here",
        size:10,
        group:5
	}
})
~~~

It's not obligatory to redefine all the mentioned buttons at once, you can redefine just a part of them. In this case, **webix.locale.pager** will contain just the required buttons.

{{sample 15_datatable/19_paging/07_localization.html }}


The size of a page
-----------------------
The size of a page is a number of items to display at once on a page. This number is set by the **size** attribute:

{{snippet
  Setting the number of records on a page
}}
~~~js
pager:{
	size:100,  // the number of records on a page
	...
}
~~~
Multiple pagers on a page
--------------------------
Several pagers can be on one and the same page.  

<img src="datatable/paging_many_pagers.png"></img>

To add an additional pager to a page you should call method [clone()](api/ui.pager_clone.md) and
set there configuration of your new pager using the same attributes you use while defining the [pager](api/link/ui.datatable_pager_config.md) parameter:


{{snippet
	Specifying 2 pagers on a page
}}
~~~js
grid = new webix.ui({
	view:"datatable",
	...
	pager:{..}
});

grid.getPager().clone({
    container:"paging_here",
    size:10,
    group:5
});
~~~
{{sample 15_datatable/19_paging/04_many_pagers.html }}

@keyword:
	paging, big dataset

@seolinktop: [web development library](https://webix.com)
@seolink: [datagrid javascript](https://webix.com/widget/datatable/)
