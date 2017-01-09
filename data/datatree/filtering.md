Filtering in Tree
====================

Tree allows you to filter nodes on the client side. 

Filtering in Tree can be invoked by calling the *filter* method. The method can be called on some event or action, e.g. button click or page load.


{{snippet
Sorting Tree on a button click
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

Filtering Modes
------------------------------------

The library provides special property **filterMode** to define how the tree items will be filtered. 

The **filterMode** property is an object that can contain 3 attributes:

- **showSubItems** - (*boolean*) defines whether the tree should display children of the filtered items (*true*) 
(even if they don't match the filtering condition). The default value is *true*. 
- **openParents** - (*boolean*) - defines whether parents of the filtered items should be expanded (even if they don't match 
the filtering condition) so that user can effortlessly see the result of filtering. *True* by default. 
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

For example, we have three trees presented in the image below. Let's apply different filtering modes for each of them.

<img src="datatree/filtering_modes.png">

Thus, we will use the following settings for each tree:

1) default - filtering on all levels, children are displayed <br>
2) filtering on all levels, children aren't displayed (strict mode) <br>
3) filtering items on the second levels only, children aren't displayed <br>

Now, let's filter the tree by the *Skoda* item. The result is given in the image below:

<img src="datatree/filtering_modes2.png">



Custom Filtering Function
---------------------------------------

For example, if you add an input and a button to the page and want to filter Tree by clicking on it, your code may look like this:

{{snippet
Custom filtering function
}}
~~~html
<input type="text"><input type="button" value='filter' onclick='filterText(this);'>
 
<script>
    function filterText(node){
        var text = node.previousSibling.value;
        if (!text) return tree.filter();
 
        tree.filter(function(obj){  // tree is a Tree instance
            return obj.year == text;
        })
    }
</script>
~~~

@spellcheck:api