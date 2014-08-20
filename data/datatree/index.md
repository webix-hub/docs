Tree
====================


Tree is a pure JavaScript component for building various tree hierarchies. <br>
It's a powerful and customizable tool with lots of features: support for XML, JSON data sources, static and dynamic loading, multitree drag-and-drop, inline editing, optional checkboxes, state saving, 
filtering, sorting, copying etc. 

<i>Confused where to start? Read article 'datatree/quick_start.md' to kick things off.</i>

<br>

<img style="display:block; margin-left:auto;margin-right:auto;" src="desktop/tree.png"/>



<table  style='border-left:none !important;' cellspacing="0" cellpadding="5" border="0">
	<tbody>
	<tr>
		<td  class='topics'>
		    <h4 id='ui'>
		        Managing data
		    </h4>
		    <ul id="design_sublist">
            	<li>datatree/loading_data.md</li>
				<li>datatree/selection.md</li>
				<li>datatree/editing.md</li>
            	<li>datatree/filtering.md</li>
				<li>datatree/sorting.md</li>
            </ul>
		</td>
		<td class='topic_description' onclick="displaySubList(event,'data')">Teaches you how to treat data in the tree to present the desired set of items.</td>
	</tr>
	<tr>
		<td class='topics'>
		    <h4>
		        Nodes manipulations
		    </h4>
		    <ul id="data_sublist" >
				<li><a href="datatree/nodes_manipulations.md#addingnodes">Adding nodes</a></li>
				<li><a href="datatree/nodes_manipulations.md#deletingnodes">Deleting nodes</a></li>
                <li><a href="datatree/nodes_manipulations.md#expandingcollapsingbranches">Expanding/collapsing branches</a></li>
                <li><a href="datatree/nodes_manipulations.md#updatingthetree">Updating the tree</a></li>
				<li><a href="datatree/nodes_manipulations.md#savingthestateofnodes">Saving the tree state</a></li>
            </ul>
        </td>
		<td class='topic_description' onclick="displaySubList(event,'data')">Says about means you've got to manipulate with the tree branches and leaves: CRUD operations, tree state storage, etc.</td>
	</tr>
	<tr>
		<td class='topics' onclick="displaySubList(event,this.id)">
		    <h4>
		        Look-and-feel
		    </h4>
		    <ul id="manipulations_sublist">
				<li><a href="datatree/node_templates.md">Nodes templates</a></li>
                <li><a href="desktop/active_content.md">Adding Active Elements to Nodes</a></li>
				<li><a href="datatree/styling.md">Styling</a></li>
				<li><a href="datatree/checkboxes.md">Checkboxes in Tree</a></li>
            </ul>
        </td>
		<td class='topic_description' onclick="displaySubList(event,'manipulations')">Covers techniques for fine-tuning the tree appearance: use of data templates, adding checkboxes, icons, lines to items, redefining the default CSS classes, etc.</td>
	</tr>
	<tr>
    	<td id="operations" class='topics' onclick="displaySubList( this.id)">
    	    <h4>
    	        Others
    	    </h4>
    	    <ul id="operations_sublist">
            	<li><a href="datatree/copying.md">Copy-pasting data</a></li>
				<li><a href="datatree/dnd_support.md">Drag-and-drop</a></li>
				<li><a href="datatree/events_handling.md">Events handling</a></li>
            </ul>
        </td>
        <td class='topic_description' onclick="displaySubList('operations')">Describes the remaining procedures related to the tree but not mentioned in the chapters above: work with the clipboard, support for internal/external dnd and handling events.</td>
    </tr>
	</tbody>
</table>



@index:

- datatree/quick_start.md
- datatree/getting_value.md
- datatree/loading_data.md
- datatree/nodes_manipulations.md
- datatree/selection.md
- datatree/node_templates.md
- datatree/checkboxes.md
- datatree/sorting.md
- datatree/filtering.md
- datatree/editing.md
- datatree/copying.md
- datatree/styling.md
- datatree/dnd_support.md
- datatree/events_handling.md