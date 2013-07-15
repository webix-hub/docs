Filtering in the Tree
====================
Tree allows you to filter nodes on the client side. 


Filtering is Tree can be invoked by calling the filter method. The method can be called on some event or action, i.e. button click or page load.



{{snippet
Sorting Tree on button click
}}
~~~html
<input type='button' onkeypress='tree.filter("#value#", this.value);'>
 
<script type="text/javascript" charset="utf-8">
	tree = webix.ui({ view:'tree', ...})
</script>
~~~

{{sample
	17_datatree/04_api/03_filter.html
}}

Filtering modes
------------------------------------
The library provides special property **filterMode** to define how the tree items will be filtered. 

The **filterMode** property is an object that can contain 2 attributes:

- **showSubItems** - (*boolean*) defines whether the tree must display childs of the filtered items (*true*) 
or the filtered items would be displayed as childs of the root node (*false*). The default value - *true*. 
- **level**  - (*number*) sets the nesting level to filter items from (one-based numbering). 

{{snippet
Using the filterMode parameter
}}

~~~js
webix.ui({
	view:"tree", 
    filterMode:{
		showSubItems:false,
        level:2
	}
});
~~~
{{sample
	17_datatree/04_api/03_filter.html
}}
<br>

<img src="datatree/filtering_modes(showSubItems).png" />

Custom filtering function
---------------------------------------
For example, if you add an input and button to the page and want to filter Tree by clicking on it, you code may look like this:

{{snippet
Custom filtering function
}}
~~~html
<input type="text"><input type="button" value='filter' onclick='filterText(this);'>
 
<script>
    function filterText(node){
        var text = node.previousSibling.value;
        if (!text) return tree.filter();
 
        tree.filter(function(obj){  //tree is a Tree instance
            return obj.year == text;
        })
    }
</script>
~~~