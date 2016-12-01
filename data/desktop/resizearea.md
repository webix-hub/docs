UI.Resizearea. Common Tips
======================
###Limiting the area available for resizing
By default, the area available for resizing is the whole viewport. To limit the area, 
you should initialize the component in a container with **style='position:relative'**


~~~html
<div id='mydiv' style='position:relative;width:600px; height:300px;border:1px solid;'></div>
~~~

~~~js
webix.event(document.getElementById("mydiv"),"mousedown",function(e){
			var resizeStick = new webix.ui.resizearea({
                    container:"mydiv",
                    dir:"y",
                    eventPos:e.pageY,
                    start:e.pageY-webix.html.offset(webix.toNode("mydiv")).y
			});
})
~~~

###DIVs created while resizing
While moving a **resizearea** object, 3 DIVs are created:


<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Vertical resizing
	</caption>
	<thead>
	<tr>
		<th>
			Container
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><pre>&ltdiv class="webix_resize_area"&gt&lt/div&gt</pre></td>
		<td>the area available for resizing</td>
	</tr>
	<tr>
		<td><pre>&ltdiv class="webix_resize_handle_y"&gt&lt/div&gt</pre></td>
		<td>the movable container</td>
	</tr>
	<tr>
		<td><pre>&ltdiv class="webix_resize_origin_y"&gt&lt/div&gt</pre></td>
		<td>the initial fixed container</td>
	</tr>
	</tbody>
</table>

<table class="list" cellspacing="0" cellpadding="5" border="0">
	<caption class="caption">
		<strong>Table 1 </strong>
		Horizontal resizing
	</caption>
	<thead>
	<tr>
		<th>
			Container
		</th>
		<th>
			Description
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><pre>&ltdiv class="webix_resize_area"&gt&lt/div&gt</pre></td>
		<td>the area available for resizing</td>
	</tr>
	<tr>
		<td><pre>&ltdiv class="webix_resize_handle_x"&gt&lt/div&gt</pre></td>
		<td>the movable container</td>
	</tr>
	<tr>
		<td><pre>&ltdiv class="webix_resize_origin_x"&gt&lt/div&gt</pre></td>
		<td>the initial fixed container</td>
	</tr>
	</tbody>
</table>


<img src="api/resizearea.png"></img>