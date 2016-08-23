Structure and Usage
====================

Webix Pivot consists of two functional parts:

- Webix **datatable** with configurable columns, rows and filters;
<img src="pivot/pivot_dtable.png">

Pay attention to the **[click to configure]** area of the datatable upper left corner. It is highlighted each time you mouse over it while clicking this area will make a **configuration window** show up.

- Configuration **window**.  
<img src="pivot/pivot_window.png">

The window reflects current Pivot [structure](pivot/initialization.md#struct) and contains five sections. 
The elements inside sections are based on the **data item properties** from the dataset and can be dragged to change Pivot structure:

{{snippet
Sample data
}}
~~~js
[
  {"name": "China", "year": 2005, "continent": "Asia", "form": "Republic", 
  "gdp": 2256.919, "oil": 59.615, "balance": 134.098},
  ...
]
~~~

- **Fields** contain all data properties (such as *name*, *year*, *continent*, *form*, etc. from the sample dataset) EXCEPT for those in Rows, Columns or Filters. 
- Fields dragged or initially set to **Columns** area define the **x-scale** of Pivot, namely the upper headers of the datatable;
- Fields dragged or initially set to **Rows** define the y-scale of Pivot, namely the treetable to the left;
- Fields dragged or initially set to **Values** define which data will be loaded as well as set the lowest row of datatable headers;
- Fields dragged or initially set to **Filters** define data properties that will be used as filters for the datatable.

**Balance among Sections**
{{note
You cannot drag one and the same element to different sections; instead, use each element either for setting a **row**, or a **column** or for **filtering** or don't use it at all (it remains in **Fields**). 
However, **Values** section is more independent since elements dragged to it are still available in other sections except **Filters**.
 
}}

Data Operations
--------------

Current data operations come together with values they are assigned to in the **Values** section. Right there they can be changed with a couple of clicks.

<img src="pivot/pivot_data_operations.png">

- **Sum** - sums all values of this property and shows the sum;
- **Max** - picks and shows the max value of this property;
- **Min** - picks and shows the min value of this property;
- **Count** - counts the number of occurrences of this property and shows it. 

In addition to the above-mentioned prebuilt operation types, you can as well [create a custom one](pivot/configuration.md#operation).

Filtering Options
-------------------

<img src="pivot/pivot_filters.png">

Webix Pivot uses two filters:

- **text** - filtering is performed by symbols you type in the text field. It supports base **math comparison operators**, so you can type something like "**<** 100", "**>** 2.5" or "**=** 12".  
If there is no operator, a filter will use text match for filtering;
- **select** - filtering is performed by options that are automatically gathered from the dataset (all unique values of this property). 
For instance, if you choose *Continents*, all unique continent names from the dataset become options.
