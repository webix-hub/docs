Controls to Switch Between View Cells 
=============================================

There are two buttons to switch between [multiview](desktop/multiview.md) cells at your disposal - [tabbar](desktop/controls.md#tabbar) and [segmented](desktop/controls.md#segmented). 

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


Both of them are integral buttons that can contain as many options as you need. It is the option values that are connected to the IDs of multiview cells, which enables switching. 

The difference between the buttons lies in their design. See [Controls Guide](desktop/controls.md#segmented) to learn more about them. 

In case of three views you should make three switching possibilities, i.e put three elements into the **options** array of either of the stated controls. Make sure that option 
IDs correspond to the **IDs** of the view cells. It ensures that every time you click on the necessary tab/button segment, the view changes to the 
corresponding one.

{{note
Note that you don't need to attach "switching" functions to the tabs. Everything is done automatically as soon as you set the *multiview* 
parameter to a *true* value. 
}}


~~~js
webix.ui({ 
	rows:[
		{ cells:[ {id:"listView", ... }, 
     		 {id:"formView", ... }, 
             {id:"emptyView", ... }]
    	},
		{ view:"tabbar", value: 'listView', multiview:true, 
			options: [
           		{value: 'List', id: 'listView'},
           		{value: 'Form', id: 'formView'},
           		{value: 'Empty', id: 'emptyView'}
             ]
		}
    ]
});
~~~

{{sample 02_toolbar/02_tabbar.html }}

The **initially visible tab** is set by the tabbar/segmented value property that contains the ID of the necessary tab. 

###Related Articles

- [Tabview Functionality](desktop/tabview.md)
- [Functions to Control Switching](desktop/show_switching.md)