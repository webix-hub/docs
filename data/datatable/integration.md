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

{{sample 15_datatable/17_jquery/01_jquery.html }}

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

{{sample 15_datatable/17_jquery/03_htmltable.html }}


