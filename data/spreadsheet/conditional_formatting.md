Conditional Cells Formatting
==============================

You can specify particular conditions for cell formatting based on comparison of a cell value with entered values.
Formatting can be applied to a selected range of cells as well.

<img src="spreadsheet/conditional_formatting_result.png">

A condition for a cell presents an array which consists of 5 elements:

- the row id
- the column id
- the operator of comparison
- the number to compare the cell value with
- the CSS style that will be applied to the cell if its value complies with the condition (see the details below)

For example: 

~~~js
 [3,6,">",100,"custom_bgcolor"],
~~~

###How to store CSS styles used in conditions

Firstly, you need to specify all the CSS styles you want to use for conditional formatting in the *style* section of your page:

~~~css
<style>
	.custom_bold {
  		font-weight: bold;
    }
    .custom_color {
        color: red
    }
    .custom_bgcolor {
        background: #f9cb9c;
    }
    ...
</style>
~~~

Then, place all the necessary condition styles into the *conditionStyle* object:

~~~js
conditionStyle:[
	{name: 'bold', css: "custom_bold"},
	{name: 'italic', css: "custom_italic"},
	{name: 'red', css: "custom_color"},
	{name: 'highlight', css: "custom_bgcolor"},
	{name: 'green', css: "custom_less"}
]
~~~

###Applying Conditional Formatting

There are two ways of setting conditions for a cell value:

1) directly in a data source

For this purpose, use the *conditions* collection of the data object. You can specify a set of conditions in one array:

~~~js
data.conditions = [
	[3,6,">",100,"custom_bgcolor"],
	[3,7,"<",1000,"custom_less"]
];
~~~

Use the *conditions* collection to manage cells formatting:

####Add formatting to a cell

- spreadsheet.conditions.add ([number rowId, number columnId, string condition, number value, string style])

####Delete formatting from a cell

- spreadsheet.conditions.remove(number rowId, number columnId)

#### Get the formatting of a cell

- spreadsheet.conditions.get(number rowId, number columnId)

####Clear all formatting

- spreadsheet.conditions.clear()

2) by setting conditions in a popup called by the "Conditional Format" button

The button calling a popup for setting conditional styles is called "conditional-format".

<img src="spreadsheet/buttons/conditional_format_button.png">

It is specified in the "Styles" block of the *buttons* configuration object:

~~~js
buttons:{
	"undo": ["undo", "redo"],
	"text": ["font-weight", "font-style", "text-decoration", "color"],
	"cell": ["background", "borders", "span"],
	"format": ["format"],
	"Styles": ["conditional-format"]
}
~~~

In the appearing popup you can specify up to 3 conditions at once. Pay attention that if the cell value meets several conditions,
the style of the condition that goes last will be applied to this cell. 

For a condition you need to specify:

- the operator of comparison
- the number to compare the cell value with
- the CSS style that will be applied to the cell

<img src="spreadsheet/conditional_formatting_popup.png">

To remove conditional formatting, the Remove format button should be used.

<img src="spreadsheet/buttons/conditional_format_remove_button.png">


{{sample 65_spreadsheet/01_basic/09_conditional.html}}



