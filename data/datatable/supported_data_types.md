Examples of data formats
=========================

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Initial data
	</caption>
	<thead>
	<tr>
		<th align="left">
			Country
		</th>
		<th align="left">
			Population
		</th>
		<th align="left">
			Estimate
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>China</td>
		<td>1 341 990 000</td>
		<td>2011</td>
	</tr>
	<tr>
		<td>India</td>
		<td>1 193 290 000</td>
		<td>2011</td>
	</tr>
	<tr>
		<td>United States </td>
		<td>311 960 000</td>
		<td>2011</td>
	</tr>
	<tr>
		<td>Indonesia </td>
		<td>237 556 363</td>
		<td>2010</td>
	</tr>
	</tbody>
</table>

XML
---------------------------------------------------------
~~~js
<?xml version="1.0" encoding="UTF-8"?>
<data>
  <item id="1">
	<country> China </country>
	<population> 1 341 990 000 </population>
    <year> 2011 </year>
  </item>
  ...
  <item id="4">
	<country>  Indonesia </country>
	<population> 237 556 363 </population>
    <year> 2010 </year>
  </item>
</data>
~~~

you are not limited to the above xml format,
check datatable/data_mapping.md for instruction how any xml file can be loaded in the datatable. 

JSON
----------------------------------------------------------------
~~~js
[
	{ id:"1", country: "China", population: "1 341 990 000", year: "2011" },
	{ id:"2", country: "India", population: "1 193 290 000", year: "2011" },
	{ id:"3", country: "United States", population: "311 960 000", year: "2011" },
	{ id:"4", country: "Indonesia", population: "237 556 363", year: "2010" }
]
~~~

JSArray
---------------------------------------------------------------------

~~~js
[
	[ "China", "1 341 990 000", "2011" ],
	[ "India", "1 193 290 000", "2011"],
	[ "United States", "311 960 000", "2011"],
	[ "Indonesia", "237 556 363", "2010"]
]
~~~

CSV 
-----------------------------------------------------------------------------
~~~js
China, 1 341 990 000, 2011
India, 1 193 290 000, 2011
United States, 311 960 000, 2011
Indonesia, 237 556 363, 2010
~~~

@keyword:
	data, format, type