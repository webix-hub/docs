Structure and Usage
===================

Webix Pivot Chart consists of two functional parts:

- Webix **chart** reflecting specified data properties and conditions:<br><br>

<img src="pivot/pivot_chart_01.png"/>

- [Configuration window](pivot_chart/structure.md#configurationwindow) (appears when the user clicks the 'Settings' icon):<br><br>

<img src="pivot/pivot_chart_settings.png"/>


Configuration Window
--------------------

The window reflects the current Pivot Chart structure and contains four sections. The elements inside sections are based on the data item's properties from the dataset and can be dragged to change Pivot Chart structure:

{{snippet
Sample data
}}
~~~js
[
	{"name": "China", "year": 2005, "continent": "Asia", "form": "Republic", 
	"gdp": 2256.919, "oil": 59.615, "balance": 134.098},
	//...
]
~~~

- **'Fields'** block presents all data properties of the dataset (such as name, year etc.) EXCEPT for those that are selected in the **Filters** and  **Group By** blocks.
- Fields dragged or initially set in the **Values** block define which data will be loaded to the chart. 
Each data property in the **Values** block presents an individual graph ([see details](pivot_chart/structure.md#dataoperations)).
- A field dragged or initially set in the **Group By** block defines a data property that **Values**'s properties will be grouped by. 
For example, if the user sets the "balance"  property as **Values**'s value (the 'sum' operation)  and the "year" property as **Group by**'s
value then the chart will display the total balance of all countries for each year. Note, only one data property can be specified in the **Group By** block. 
- Fields dragged or initially set in the **Filters** block define data properties that will be used as filters for the chart. 
For each data property in the **Filters** block, Pivot Chart creates an individual input in the header of the chart (nearby the 'Settings' button) ([see details](pivot_chart/structure.md#filteringoptions)).

**Balance among Sections**
{{note
You cannot drag one and the same element to different sections; instead, use each element either for **grouping** or for **filtering** or don't use it at all (it remains in **Fields**). 
However, **Values** section is more independent since elements dragged to it are still available in other sections except **Filters**.
 
}}

Data Operations
-----------------


Current data operations come together with values they are assigned to in the **Values** section. Right there they can be changed with a couple of clicks.

<img src="pivot/pivot_chart_values.png">

- **Sum** - sums all values of this property and shows the sum;
- **Max** - picks and shows the max value of this property;
- **Min** - picks and shows the min value of this property;
- **Count** - counts the number of occurrences of this property and shows it. 

In addition to the above-mentioned prebuilt operation types, you can as well [create a custom one](pivot_chart/configuration.md#operation).


Filtering Options
-------------------

<img src="pivot/pivot_chart_filter.png">

Webix Pivot Chart uses two filters:

- **text** - filtering is performed by symbols you type in the text field. It supports base **math comparison operators**, so you can type something like "**<** 100", "**>** 2.5" or "**=** 12".  
If there is no operator, a filter will use text match for filtering;
- **select** - filtering is performed by options that are automatically gathered from the dataset (all unique values of this property). For instance, if you choose *Continents*, then all unique continent names from the dataset 
become options.

Logarithmic scale
--------------------

When difference between compared values is significant, smaller values can be hardly recognizable on the chart. 
To prevent it and make all values available for analysis, you can use the logarithmic scale instead of the default linear one.
<br>To enable the logarithmic scale, check the "Logarithmic scale" checkbox in the configuration window.


<img src="pivot/pivot_chart_logarithmic.png">
