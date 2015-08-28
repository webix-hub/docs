Operations with Chart Data
==============

##Getting an Item's Value

{{snippet
Getting the value of **year** property
}}
~~~js

			$$("chart").attachEvent("onItemClick", function(id){
            id = this.getItem(id).year;
            alert(id);
        });
~~~

{{sample 08_chart/08_dynamic/02_events.html }}
##Adding Items


While adding an item, make use of the **add()** method and state new data as an object and position of the new item:

~~~js
 var counter = 12;
        function addNew () {
            $$("barChart").add({
                year:"'"+counter, 
                sales:"some_value"
            });
            counter++;
        }
~~~

Additionally, you can define a **counter** that sets the starting position of the new items to observe dataset integrity. 

##Item Deletion

To delete an item you should pass its ID into the **remove()** function (zero-base numbering) or make use of **first()** and **last()** methods to delete first and last items from the dataset. 

~~~js
$$("barChart").remove(4); // the 5th item will be removed

function deleteFirst(){
            $$("barChart").remove($$("barChart").getFirstId());
        }
~~~

{{sample 08_chart/08_dynamic/01_add.html }}

Study the [corresponding chapter of the manual](desktop/add_delete.md) to learn more about adding and deleting of items. 

##Sort Data

Here you use a **sort()** method that takes property from the initial dataset and sorting manner (ascending or descending) as parameters. 

~~~js
$$('chart').sort('#year#','desc');
~~~

{{sample 08_chart/08_dynamic/03_sorting.html }}

[**Sort** method in API Reference](api/datastore_sort.md)

##Filter Data

As a rule, **filter()** method takes a function as parameter. In the function you specify the data you want to be filtered. 

{{snippet
Make the chart show you only sales exceeding 50. 
}}
~~~js
function filter1(){
    $$('chart').filter(function(obj){
        return obj.sales >50;
    });
}
~~~

{{sample 08_chart/08_dynamic/04_filtering.html }}

[Rules of Data Filtering](desktop/filter_sort.md)
