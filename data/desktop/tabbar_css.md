Tabbar CSS 
===========


<img src="image_maps/tabbar_css.png"/>

<table class="inline">
	<tr class="row0">
		<th class="col0 centeralign">  CSS class  </th><th class="col1 centeralign">  Element  </th>
	</tr>
	<tr class="row1">
		<td class="col0 leftalign"><strong>.webix_el_tabbar</strong>  </td><td class="col1">The whole Tabbar. 
        Since most of the time a number of ".webix_item_tabs" will be rendered on top of it, 
 the most often visible part of ".webix_el_tabbar" is the ".webix_tab_more_icon" at the end of the tab strip.</td>
	</tr>
	<tr class="row3">
		<td class="col0 leftalign"><strong>.webix_tab_more_icon</strong>  </td><td class="col1">Icon at the end of the tab strip when there are more tabs to display than fit horizontally.</td>
	</tr>
        <tr class="row1">
		<td class="col0 leftalign"><strong>.webix_item_tab</strong>  </td><td class="col1">A tab in the Tabbar.</td>
	</tr>
	<tr class="row2">
		<td class="col0 leftalign"><strong>.webix_item_tab.webix_selected</strong>  </td><td class="col1">The selected tab.</td>
	</tr>
	<tr class="row3">
		<td class="col0 leftalign"><strong>.webix_all_tabs</strong>  </td><td class="col1">All tabs in the Tabbar. Displayed on top of the ".webix_el_tabbar" and under ".webix_item_tab" and ".webix_tab_filler".</td>
	</tr>
	<tr class="row3">
		<td class="col0 leftalign"><strong>.webix_all_tabs.webixtype_bottom</strong>  </td><td class="col1">All tabs in the Tabbar of the "bottom" type</td>
	</tr>
	<tr class="row3">
		<td class="col0 leftalign"><strong>.webix_tab_filler</strong>  </td><td class="col1">Space between ".webix_item_tab"s and on the right and left ends of a top Tabbar.</td>
	</tr>
	<tr class="row3">
		<td class="col0 leftalign"><strong>.webix_before_all_tabs</strong>  </td><td class="col1">A div before ".webix_el_tabbar". By default 100% wide and 1px tall.</td>
	<tr class="row3">
		<td class="col0 leftalign"><strong>.webix_after_all_tabs</strong>  </td><td class="col1">A div after ".webix_el_tabbar", separating it from the content below. By default 100% wide and 6px tall.</td>
</table>

All the classes are applicable for both **top** and **bottom** Tabbar except for: 

- *.webix_all_tabs.webixtype_bottom* - class specific to bottom Tabbar only;
- *.webix_tab_filler* - appears in the bottom Tabbar only if total width of all tabs is less than available space. 

Read more about [Tabbar](desktop/tabbar.md) control.
