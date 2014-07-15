Styling
=======
You can use CSS in conjunction with DataTable content to achieve the desired look-and-feel. 
This article will help you to cover support of <a href="http://webix.com/widget/datatable/" title="css datatable component">cascading style sheets (CSS) in DataTable</a>.

You can fine-tune the style of:

1. [A whole table](#awholetable);
2. [Columns](#columns);
3. [Rows](#rows);
4. [Cells](#cells);
5. [The header](#theheader).

A whole table
---------------------------
To apply some style to a whole table you can use the [css](api/link/ui.datatable_css_config.md) parameter. As the value of the parameter you must specify the name of the appropriate css class.

<img src="datatable/styling_whole_table.png"></img>

{{snippet
Styling the whole table
}}
~~~html
<style>
	.my_style .webix_hcell{
		background:#009966;
		color:white;
		font-weight:bold;

	}
	.my_style .webix_column{
		font-style:italic;
		background:#ddFFdd;
	}
    .my_style .webix_column > div{
        border-color:#ddd;
    }

</style>
 
<script>
webix.ui({
	view:"datatable",
	css:"my_style",
	...
})
</script>
~~~

{{sample 15_datatable/21_styling/01_basic.html }}


Columns
---------------------
For applying some style to a specific column, you should specify **css** attribute within [columns](api/ui.datatable_columns_config.md) parameter while configuring the column.

As the value of the attribute you can specify:

- the name of the appropriate css class;
- an object containing the css properties.

<img src="datatable/styling_a_column.png"></img>

{{snippet
Styling of a single column
}}
~~~html
<style>
	.my_style {
		font-weight:bold;
		color:#B51454;
	}
</style>
 
<script>
webix.ui({
	view:"datatable",		
	columns:[
    	// a separate css class
		{ id:"title", header:"Film title", css:"my_style" },
        // an object with css properties
		{ id:"votes", header:"Votes",      css:{"text-align":"right"}}
    ],
...
})
</script>
~~~

{{sample 15_datatable/21_styling/02_column_styling.html }}

Rows
---------------------
Generally, to apply some style to a specific row, you may use the **$change** key of the api/link/ui.datatable_scheme_config.md parameter. The key is a function that runs each time data is changed 
in the table. As a parameter, the function takes the data item object.

<img src="datatable/styling_a_row.png"></img>

{{snippet General styling of rows}}

~~~js
<style>
	.my_style{
		background-color:#FFAAAA;
	}
</style>

<script>
webix.ui({
	view:"datatable",		
    scheme:{
		$change:function(item){
			if (item.year > 1980)
				item.$css = "highlight";
		}
	},
	columns:[
		{ id:"title", header:"Film title"},
        { id:"votes", header:"Votes"}
    ],
...
})
</script>
~~~

If you specify data directly inside the DataTable constructor, you have one more way to set the desired style for a row:

- set parameter **rowCss** to value **#css#**;
- use **$css** attribute inside the [data](api/link/ui.datatable_data_config.md) parameter to set the desired style.

{{note
We don't recommend to dynamically change attributes with the **'$'** prefix (e.g. $css, $cellCss). Please, use the api/ui.datatable_addcellcss.md, api/ui.datatable_addrowcss.md methods instead.
}}

{{snippet
Setting rows style directly in the dataset
}}

~~~js
<style>
	.my_style{
		background-color:#FFAAAA;
	}
</style>

<script>
grid = new webix.ui({
		view:"datatable",
		rowCss:"#css#",
		columns:[
			{ id:"title",	header:"Film title"},
			{ id:"votes",	header:"Votes"}
		],
		data:[
			{ id:1,
			  $css:"my_style",
			  title:"The Shawshank Redemption",
  		      votes:678790
            },
			{ id:2,
			  $css:{ "text-align":"right" },
			  title:"The Godfather",
			  votes:511495,
			}
		],
...
});	
</script>
~~~

{{sample 15_datatable/21_styling/04_rows_styling.html }}

Cells
-----------------------------------------

Generally, to apply some style to specific cells in a column, you should use the **cssFormat** attribute inside the [columns](api/ui.datatable_columns_config.md) parameter. The attribute sets a function that will define 
how cells of the column must be coloured. As a parameter, the function takes the cell value.

<img src="datatable/styling_a_cell.png"></img>

{{snippet
General styling of cells
}}

~~~js
function mark_votes(value, config){
	if (value > 400000)
		return { "text-align":"right" };
	return value;
}

grid = new webix.ui({
	view:"datatable",
	columns:[
		{ id:"title",	header:"Film title"},
		{ id:"votes",	header:"Votes",   cssFormat:mark_votes }
	],
    ...
})	
~~~
If you specify data directly inside the DataTable constructor, you have one more way to set the desired style for a cell - property **$cellCss**:

{{note
We don't recommend to dynamically change attributes with the **'$'** prefix (e.g. $css, $cellCss). Please, use the api/ui.datatable_addcellcss.md, api/ui.datatable_addrowcss.md methods instead.
}}


{{snippet
Setting cells style directly in the dataset
}}

~~~js
<style>
	.my_style{
		background-color:#FFAAAA;
	}
</style>

<script>
grid = new webix.ui({
	view:"datatable",
	columns:[
		{ id:"title",	header:"Film title"},
		{ id:"votes",	header:"Votes"}
	],
	data:[
		{ id:1,
		  title:"The Shawshank Redemption",
  		  votes:678790,
          $cellCss:{
			  votes:"highlight"
		  }
		},
		{ id:2,
		  title:"The Godfather",
		  votes:511495, 
          $cellCss:{
              votes:{ "text-align":"right" }
		  }
        }
	],
...
})
</script>
~~~

{{sample 15_datatable/21_styling/03_cell_styling.html }}

The header
------------------------------------------
To set style for a specific cell of the header you should use the following technique:

<img src="datatable/styling_the_header.png"></img>

{{snippet
General styling of the header
}}
~~~js
<style>
	.my_style{
		background-color:#FFAAAA;
	}
</style>

<script>
grid = new webix.ui({
		view:"datatable",
		columns:[
			{ id:"title",	header:{ text:"Film title", css:{ "background":"#AFA"}} },
			{ id:"votes",	header:{ text:"Votes",      css:"my_style"} }
		]
...
})
</script>
~~~

{{sample 15_datatable/21_styling/05_header_styling.html }}

CSS maps
-------------------------------------------------------------

<img src="datatable/css_image_map.png"></img>


<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		CSS image maps
	</caption>
	<thead>
	<tr>
		<th align="left">
			<strong>CSS class</strong>
		</th>
		<th align="left">
			<strong>Description</strong>
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><b>.webix_dtable</b></td>
		<td>container with DataTable</td>
	</tr>
	<tr>
		<td><b>.webix_ss_header</b></td>
		<td>container with the header</td>
	</tr>
	<tr>
		<td><b>.webix_ss_header .webix_hcell</b></td>
		<td>a cell of the header</td>
	</tr>
    <tr>
		<td><b>.webix_ss_header .webix_first</b></td>
		<td>the first cell of the header</td>
	</tr>
    <tr>
		<td><b>.webix_ss_header .webix_last</b></td>
		<td>the last cell of the header</td>
	</tr>
	<tr>
		<td><b>.webix_ss_footer<b></td>
		<td>container with the footer</td>
	</tr>
	<tr>
		<td><b>.webix_ss_footer .webix_hcell<b></td>
		<td>a cell of the footer</td>
	</tr>
    <tr>
		<td><b>.webix_ss_footer .webix_first<b></td>
		<td>the first cell of the footer</td>
	</tr>
    <tr>
		<td><b>.webix_ss_footer .webix_last<b></td>
		<td>the last cell of the footer</td>
	</tr>
	<tr>
		<td><b>.webix_ss_body<b></td>
		<td>container with the table body</td>
	</tr>
	<tr>
		<td><b>.webix_column<b></td>
		<td>a column of the table</td>
	</tr>
	<tr>
		<td><b>.webix_column .webix_last<b></td>
		<td>the last column of the table</td>
	</tr>
    <tr>
		<td><b>.webix_column .webix_first<b></td>
		<td>the first column of the table</td>
	</tr>
	<tr>
		<td><b>.webix_column .webix_cell<b></td>
		<td> a cell of the column </td>
	</tr>
	</tbody>
</table>

@keyword:
	css, styling, style