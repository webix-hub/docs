sort
=============


@short:
	sorts datastore

@params:
- by		string		the name(s) of property(ies) by which data will be sorted
* dir		string		the sorting direction, "asc" by default 
* as		string		the type of data, "string" by default

@example:
data.sort("price", "asc");

@related:
	datatable/sorting.md#programmaticsorting
    desktop/filter_sort.md
    datatree/sorting.md
@relatedsample:
	15_datatable/02_sorting/03_sort_api.html
	
    
@template:	api_method
@descr:

### Usage examples

The method **sort** can be used with different count of parameters.

The most common use case of the **sort** method is using the first parameter as the name of a property:

~~~js
//sorts by name value; ascendant; sorted values as strings
data.sort("#name#","asc","string");
//sorts by price value; descendant; sorted values as numbers
data.sort("#price#","desc","int");
~~~

{{note The property name should be included into sharps. }}


Instead of default sorting types, you can use your own method ( can be used for complex data types ):


~~~js
function sort_by_length(data1, data2){
    return data1.length>data2.length ? 1:-1;
}

data.sort("#name#","asc",sort_by_length);
~~~

Possible return values of this function are 0,1,-1. 

- 1 means that the first object is greater than the second object;
- -1 means that the first object is less than the second object;
-  0 means that 2 objects are equal.


If you need to access multiple properties of an object during sorting
or you need to have some complex sorting logic, use a function as
the first parameter.

~~~js
function my_sorting(a,b){
    //a, b - data objects
    return a.Version > b.Version ? 1 : -1;
}
data.sort(my_sorting, "desc"); //3rd parameter will be ignored
~~~

### Alternative syntax

You can use a hash of sorting settings as the first parameter of the **sort** method:
~~~js
data.sort({
    as:"string",
    dir:"desc",
    by:"#Package#"
});
~~~



### Sorting directions

Possible values for the second parameter of the **sort** method is string which represents sorting direction:

- "asc"  - for ascending sorting
- "desc" - for descending sorting

### Sorting types

The third parameter of the **sort** method is a string which represents the desired sorting mode: 

- int - compares numeric values;
- [date](datatable/sorting.md#dates) - compares dates;
- string - compares string values;
- string_strict- case-sensitive "string";
- [text](datatable/sorting.md#visible_text)- compares visible item text (including template);
- server- issues a server side request for a sorted dataset;
- raw - basic sorter with simple comparison (a>b and vice versa);
- or, you can set a [custom sorting type](desktop/filter_sort.md#addingcustomsortingtype).
