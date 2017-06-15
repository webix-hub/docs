Integration
==========================
In this chapter you will see how to integrate DataTable with jQuery.

jQuery integration
------------------------
DataTable can be easy integrated with jQuery.

We want to show you 2 most 'interesting' situations of such integration:

1. Initializing of a standard DataTable;
2. Creating DataTable from an HTML table.


###Initializing jQuery DataTable
A standard  DataTable using jQuery can be initialized as follows:

{{snippet
Integration with jQuery
}}
~~~js
<div id="box" class="cont"></div>
...

$(".cont").webix_datatable({
	columns:[{...}],
	select:"cell",
	data:some_data
});

~~~

**Related Sample**: [JQuery DataTable](https://github.com/webix-hub/webix-jquery/blob/master/samples/05_datatable.html)

###Creating DataTable from an HTML table
To turn an HTML table into DataTable you should call method **datatable()** for it:

{{snippet
Creating DataTable from an HTML table
}}
~~~html
<table>
		<tr>
			<td width="40">id</td>
			...
		</tr>
		...
</table>

<script>
$("table").webix_datatable();
</script>
~~~

**Related Sample**: [jQuery.Turning HTML Tables into DataTables](https://github.com/webix-hub/webix-jquery/blob/master/samples/06_htmltable.html)






@seolinktop: [open source html5 framework](https://webix.com)
@seolink: [datatable](https://webix.com/widget/datatable/)