Adding and Deleting Tabs / Segments on the Go
=============

[Tabbar](desktop/controls.md#tabbar) and [Segmented Button](desktop/controls.md#segmented) resemble each other in the way they features tabs (segmented) in frames of one and the same control. 
The tabs are defined by **options** property while later on each option can be connected with a separate view or trigger the predefined function. 

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Switch controls
	</caption>
	<tbody>
	<tr>
		<td> <code> view:"segmented" </code> </td>
		<td style="text-align:center;"><img src="desktop/switch_segmented.png"/></td>
	</tr>
	<tr>
		<td> <code> view:"tabbar" </code> </td>
		<td style="text-align:center;"><img src="desktop/switch_tabbar.png"/></td>
	</tr>
    <tr>
		<td> <code> view:"tabbar", multiview:true </code> </td>
		<td style="text-align:center;"><img src="desktop/switch_tabbar_02.png"/></td>
	</tr>
	</tbody>
</table>

These controls allow adding and deleting of the tabs and segments (for the tabbar and segmented respectively) on the go with the help of the following functions: 

- **addOption()** - takes **ID** and text **value** of the new tab/segment as parameters. A true 'flag' can be added if you want the newly added option to be active; 
- **removeOption()** - takes the ID of the necessary tab/segment as an argument. 

Adding function can ba attached to a [list](desktop/list.md), where item [selection](desktop/selection.md) opens a tab and shows detailed into about this item in the [bound](desktop/data_binding.md) 
template area. 

{{snippet
Adding
}}
~~~js
{view:"tabbar", id:"tabs", options:[],..} //tabbar init with empty "options" array

function open_new_tab(id){
			var item = $$('list1').getItem(id);
			$$('tabs').addOption(item.id, item.title, true);
			};
~~~

{{snippet
Deletion
}}
~~~js
function del_tab(){
			var tab_id = $$("tabs").getValue(); //getting the ID of the active tab
			$$("tabs").removeOption(tab_id);
            }
            
~~~

{{sample 02_toolbar/19_tabs_on_the_go.html}}

Notice that in the attached sample tabbar isn't used for view switching. It just highlights list info in the dedicated template. 