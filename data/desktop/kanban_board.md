Kanban Board
==============

Webix Kanban board is a tool that is intended for viewing work in progress and controlling the flow of work.  
With this widget your team will be aware of what each of the members should be working on. 

Webix Kanban board is rather flexible and can have any number of columns and rows. It's also easily customizable via HTML Templates.
Fully written in JavaScript and CSS this component can be integrated in any web application or web page.

<br>
<img src="kanban/kanban_front.png"/>


<table  style='border-left:none !important;' cellspacing="0" cellpadding="5" border="0">
	<tbody>
	<tr>
		<td id="design" class='topics'>
		    <h4 id='ui' onclick="displaySubList('design')">
		        Configuring Kanban
		    </h4>
		    <ul id="design_sublist">
                <li>kanban/kanban_init.md</li>
                <li>kanban/loading_data.md</li>
                <li>kanban/templates.md</li>
                <li>kanban/configuration.md</li>
            </ul>
		</td>
		<td class='topic_description' onclick="displaySubList('design')"></td>
	</tr>
    <tr>
		<td id="design" class='topics'>
		    <h4 id='ui' onclick="displaySubList('design')">
		        Working with Kanban
		    </h4>
		    <ul id="design_sublist">
                <li>kanban/adding_items.md</li>
                <li>kanban/work_with_data.md</li>
                <li>kanban/events.md</li>
                <li>kanban/api_reference.md</li>
                <li>kanban/howto.md</li>
            </ul>
		</td>
		<td class='topic_description' onclick="displaySubList('design')"></td>
	</tr>
	</tbody>
</table>

@index:
- kanban/kanban_init.md
- kanban/loading_data.md
- kanban/templates.md
- kanban/configuration.md
- kanban/adding_items.md
- kanban/work_with_data.md
- kanban/events.md
- kanban/api_reference.md
- kanban/howto.md