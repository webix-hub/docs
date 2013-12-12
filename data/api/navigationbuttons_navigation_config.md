navigation
=============


@short:
	defines navigation parameters

@type: object
@example:
webix.ui({
	view:"carousel",
	...
	navigation:{
    	items: false,
        type: "side"
	}
})
@template:	api_config
@defined:	ui.chart	
@related:
	desktop/carousel.md
@relatedsample:
	26_carousel/02_types.html
@descr:
The available attributes of the property are:
<table class="webixdoc_links">
	<tbody>
		<tr>
			<td class="webixdoc_links0"> <b>items</b> </td>
			<td>(<i>boolean</i>) enables navigation items (by default, <i>true</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>buttons</b></td>
			<td>(<i>boolean</i>) enables "previos" and "next" arrow buttons (by default, <i>true</i>)</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>type</b></td>
			<td>(<i>string</i>) defines navigation styling (by default, <i>corner</i>)</td>
		</tr>
</tbody>
</table>


