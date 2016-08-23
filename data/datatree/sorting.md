Sorting in Tree
====================
Tree allows you to sort nodes on the client side. Note, along with the parent nodes, child nodes are sorted as well.

Data is sorted as strings and by levels, starting from the latest nesting level.

Common 
----------------------------
Sorting in Tree can be invoked by calling the api/link/ui.tree_sort.md method. The method can be called on some event or action, i.e. button click or page load.


{{snippet
Sorting Tree on button click
}}
~~~html
<input type='button' onclick='tree.sort("#value#", "asc");'>
 
<script type="text/javascript" charset="utf-8">
	tree = webix.ui({ view:'tree', ...})
</script>
~~~

{{sample
	17_datatree/04_api/02_sort.html
}}


Custom sorting functions
-----------------------------
If you want to apply a custom sorting behavior, you should define the related logic in a function and  invoke this function in the api/link/ui.tree_sort.md method.

This function is called for each pair of adjacent values and return 1,-1 or 0:

- **1** - an object with the first value in pair must go before the second one;
- **-1** - the second object goes before the first one;
- **0** - the order of both objects doesn't change.


Let's assume you have a tree like this:

<img src="datatree/custom_sorting.png"/>


And want to sort only car makers and keep the children as they are. As the default sorting affects all nodes you need to provide a custom logic. It may look as in:

{{snippet
Sorting the tree by one level
}}
~~~html
<input type='button' value='sort car makers' onclick='tree.sort(sortMakers)'>

<script>
function sortMakers(a,b){
		if (a.$level == 2)
        {
        	a = a.value;
        	b = b.value;
            return a>b?1:(a<b?-1:0);
        }
        else{
        	return 0;
        }
}
...
</script>
~~~

Note, Tree sorts data by levels starting from the latest nesting level, i.e. at first car models of each maker are sorted, then car makers themselves.  

{{sample
	17_datatree/04_api/05_sort_custom.html
}}

@spellcheck:api
