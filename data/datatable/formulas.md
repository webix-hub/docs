Math Operations
==========
DataTable gives you an opportunity to load data stored as mathematical expressions. DataTable parses, evaluates such expressions and 
presents result in the related cells. 

Common (storing data as formulas)
--------------------------------
To start parse data as mathematical expressions  - just set parameter [math](api/ui.datatable_math_config.md) to *true* (by default, it's disabled).<br> Columns are specified as usual.


<img src='datatable/formulas.png'/>

{{snippet
Activating math support and parsing data as math expressions
}}
~~~js
var budget = [
	...
	{id:4, name:"France", rev:"1229000", exp:"1445000", dif:"=[:3,:2]-[:3,:3]",
    date:"2009"}
];

grid = new webix.ui({
	view:"datatable",
    container:"box",
	columns:[
    	{ id:"id",   header:"#"},
		{ id:"name", header:"Country"},
		{ id:"rev",  header:"Revenue"},
		{ id:"exp",  header:"Expenditures"},
		{ id:"dif",  header:"Deficit/surplus"},
		{ id:"date", header:"Date"}
	],
	math: true, //this parameter enables math support
	data: budget
})
~~~

{{sample 15_datatable/08_math/01_basic.html }}

**Syntax:**

1. Formula must start from the '=' sign.
2. Within formulas can be used:

	- basic mathematical operators, which are: +, -, /, *, (, );
	- cell referencies;
    - custom functions.

You can refer to a cell in 2 ways:

- **[id, field]** - takes the value from the specified field of an item with the specified id.
~~~js
var data = [
	{ id:1, num1:"67000", num2:"15000", difference:"=[1,num1]-[1,num2]"},
	{ id:2, num1:"56000", num2:"11000", difference:"=[2,num1]-[2,num2]"},
	{ id:3, num1:"45300", num2:"10000", difference:"=[3,num1]-[3,num2]"}
];
~~~
- **[:row_ind, :col_ind]** - the indices of the row and column (zero-based numbering).<br>
~~~js
var data = [
	{ id:1, num1:"67000", num2:"15000", difference:"=[:0,:1]-[:0,:2]"},
	{ id:2, num1:"56000", num2:"11000", difference:"=[:1,:1]-[:1,:2]"},
	{ id:3, num1:"45300", num2:"10000", difference:"=[:2,:1]-[:2,:2]"}
];
~~~

You can also combine 2 variants and use **[id, :col_ind]** or **[:row_ind, field]**.

~~~js
var data = [
	{ id:1, num1:"67000", num2:"15000", difference:"=[:0,num1]-[:0,num2]"},
	{ id:2, num1:"56000", num2:"11000", difference:"=[:1,num1]-[:1,num2]"},
	{ id:3, num1:"45300", num2:"10000", difference:"=[:2,num1]-[:2,num2]"}
];
~~~

You can call any **custom function** within a formula in case provided operations are not enough:

~~~js
function mysum(a, b){ return a+b };
...
{ id:3, difference"=mysum([:0, :1], [:0,:2]) + 1 - [:0, :3]" }
~~~



Assigning formulas while columns configuration
-----------------------------------------------
To apply some formula to a column you may also use attribute **math** while column configuring. Any formula that will be set as the value of this attribute will be applied to the entire column.

{{snippet
Specifying formulas while columns configuring
}}
~~~js
var budget = [
	...
	{ id:4, name:"France ", rev:"1229000", exp:"1445000", date:"2009"}
];
grid = new webix.ui({
	view:"datatable",
    container:"box",
	columns:[
    	{ id:"id",   header:"#"},
		{ id:"name", header:"Country"},
		{ id:"rev",  header:"Revenue"},
		{ id:"exp",  header:"Expenditures"},
		{ id:"dif",  header:"Deficit/surplus", math:"[$r,:2] - [$r,exp]"},
		{ id:"date", header:"Date"}
	],
	math: true, //this parameter enables math support
	data: budget
})
~~~


{{sample 15_datatable/08_math/03_column_math.html }}

**Syntax:**

1. Formula is written without the '=' sign.
2. The **$r** keyword refers to the current row id.
3. The **$c** keyword refers to the name of the current column.
4. Within formulas can be used:

	- basic mathematical operators, which are: : +, -, /, *, (, ).
	- cell referencies;
    - custom functions.

You can refer to a cell in 2 ways:

- **[id, field]** - takes the value from the specified field of an item with the specified id (*see usage examples above*).
- **[:row_ind, :col_ind]** - the indices of the row and column (zero-based numbering).<br>
You can also combine 2 variants and use **[id, :col_ind]** or **[:row_ind, field]**.

You can call any **custom function** within a formula in case provided operations are not enough:

~~~js
function mysum(a, b){ return a+b };
...
{ id:"dif", header:"", math:"mysum([$r,:2] - [$r,exp]) + 1 - [$r, :3]" }
~~~
	

Sum counter
----------------------------------------------
To get the total value of some column you can use the **summColumn** counter (instead of a math formula), created especially for this need.<br>
The counter is added to the footer of a column (can't be used in the header).

~~~js
columns:[
    { id:"title", header:"Film title"},
    { id:"year",  header:"Year"},
    { id:"votes", header:"Votes", footer:{content:"summColumn"}}
]
~~~

Editing Formulas Directly in Datatable
--------------------

Math formulas are editable directly in the datatable provided that:

- **editMath** property  is set to **true** value;
- datatable is **editable** itself;
- the column where math is used features "text" editor;
- **editAction** is specified;

~~~js
view:"datatable",
columns:[
	{ id:"diff", header: "Math", math:"[$r,:2] - [$r,exp]", editor:"text"},
],  
math: true,
editable:true,
editAction:"click",
editMath:true
~~~

When this property is omitted, you can still open the editor for the calculated cell value and see the result of the formula in the editor input. However, changes won't be saved, since math features higher priority. 

@keyword:
	formula, math, calculate, counter