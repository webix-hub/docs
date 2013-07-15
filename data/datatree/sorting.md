Sorting in the Tree
====================
Tree allows you to sort nodes on the client side. Note, along with the parent nodes, child nodes are sorted as well.

Data is sorted as strings and by levels, starting from the latest nesting level.

Common 
----------------------------
Sorting in Tree can be invoked by calling the sort method. The method can be called on some event or action, i.e. button click or page load.


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
If you want to apply a custom sorting behaviour, you should define the related logic in a function and  invoke this function in the sort method.

This function is called for each pair of adjacent values and return 1,-1 or 0:

- **1** - an object with the first value in pair must go before the second one;
- **-1** - the second object goes before the first one;
- **0** - the order of both objects doesn't change.


Let's assume you have a tree like this:

<img src="datatree/custom_sorting.png"/>


And want to sort only car makes and keep the childs as they are. As the default sorting affects all nodes you need to provide a custom logic. It may look as in:

{{snippet
Sorting the tree by one level
}}
~~~html
<input type='button' value='sort car makes' onclick='tree.sort(sortMakes)'>

<script>
function sortMakes(a,b){
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
Note, Tree sorts data by levels starting from the lastest nesting level, i.e. at first car models of each make are sorted, then car makes themselves.  

{{sample
	17_datatree/04_api/05_sort_custom.html
}}
