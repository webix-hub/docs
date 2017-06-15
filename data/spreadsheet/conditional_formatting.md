Conditional Cells Formatting
==============================

You can specify particular conditions for cell formatting based on comparison of a cell value with entered values.

<img src="spreadsheet/conditional_formatting_popup.png">

Formatting can be applied to a selected range of cells as well.

<img src="spreadsheet/conditional_formatting_result.png">

Each condition for a cell formatting consists of 5 parameters:

- the row id
- the column id
- the operator of comparison
- the number to compare the cell value with
- the [CSS style](spreadsheet/conditional_formatting.md#howtostorecssstylesusedinconditions) that will be applied to the cell if its value complies with the condition 

The ways of specifying conditions for cells' formatting are described in the section 
[Conditional Formatting API](spreadsheet/conditional_formatting.md#conditionalformattingapi).

{{sample 65_spreadsheet/01_basic/08_conditional_styles.html}}

##How to store CSS styles used in conditions

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

Then, place all the necessary condition styles into the *conditionStyle* config. 
It is an array that contains a set of styles that will be applied to a cell, if it's value corresponds to a particular condition.

Each element of the array presents an object with two properties:

- name - (string) the name of the condition style
- css - (string) the name of the corresponding CSS style

~~~js
conditionStyle:[
	{name: 'bold', css: "custom_bold"},
	{name: 'italic', css: "custom_italic"},
	{name: 'red', css: "custom_color"},
	{name: 'highlight', css: "custom_bgcolor"},
	{name: 'green', css: "custom_less"}
]
~~~


##Conditional Formatting API

You can set conditions for cells' formatting directly in a data source.

For this purpose, use the *conditions* collection of the data object. You can specify a set of conditions in one array:

~~~js
data.conditions = [
	[3,6,">",100,"custom_bgcolor"],
	[3,7,"<",1000,"custom_less"]
];
~~~

The *conditions* collection also allows you to manage cells formatting: 

- add formatting to 

###Add formatting to a cell

You can add formatting to cell by using the **conditions.add()** method. The method takes five parameters:

- rowId - (number) the row id
- columnId - (number) the column id
- condition - (string) the condition that will be applied to the cell value 
- value - (number) the value to compare the cell value with
- style - (string) the style that will be applied to the cell, if its value meets the condition

~~~js
$$("ssheet").conditions.add(3,6,">",100,"custom_bgcolor");
~~~

###Delete formatting from a cell

To remove the applied formatting from a particular cell, use the **conditions.remove()** method. You need to pass two parameters to it:

- rowId - (number) the row id
- columnId - (number) the column id 

~~~js
$$("ssheet").conditions.remove(rowId,columnId);
~~~

###Get the conditions of cell formatting 

It is possible to get the conditions according to which formatting was applied to a cell.
For this, pass the row id and the column id of a cell into the **conditions.get()** method:

The method will return an array with three elements:

- condition - (string) the applied condition
- value - (number) the value that the cell value was compared with
- style - (string) the style applied to the cell

~~~js
var cellStyle = $$("ssheet").conditions.get(3,6); //->[">",100,"custom_bgcolor"]
~~~


###Clear all formatting

You can clear formatting from all cells in the spreadsheet. Use the **conditions.clear()** method for this purpose:

~~~js
$$("ssheet").conditions.clear();
~~~

{{sample 65_spreadsheet/02_api/14_conditional.html}}

@metadescr: This page describes how you can use conditional formatting for changing the appearance of a particular SpreadSheet cell according to its value using the CSS styles.
@doctitle: Conditional formatting of the SpreadSheet widget cells using CSS.








@seolinktop: [web ui framework](https://webix.com)
@seolink: [spreadsheet javascript library](https://webix.com/spreadsheet/)