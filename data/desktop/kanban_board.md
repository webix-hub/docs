Kanban Board
==============

Webix Kanban board is a tool that is intended for viewing work in progress and controlling the flow of work.  
With this widget your team will be aware of what each of the members should be working on. 

Webix Kanban board is flexible and can have any number of columns and rows. It's also fully customizable via HTML Templates.
Fully written in JavaScript and CSS this component can be integrated in any web application or web page.

<br>
<img src="kanban/kanban_front.png"/>


<table  style='border-left:none !important;' cellspacing="0" cellpadding="5" border="0">
	<tbody>
	<tr>
		<td id="design" class='topics'>
		    <h4 id='ui' onclick="displaySubList('design')">
		        Main
		    </h4>
		    <ul id="design_sublist">
                <li>kanban/kanban_init.md</li>
                <li>kanban/templates.md</li>
                <li>kanban/adding_items.md</li>
                <li>kanban/work_with_data.md</li>
                <li>kanban/configuration.md</li>
                <li>kanban/events.md</li>
            </ul>
		</td>
		<td class='topic_description' onclick="displaySubList('design')"></td>
	</tr>
	<tr>
		<td id="data" class='topics' onclick="displaySubList(event, this.id)">
		    <h4>
		        Other
		    </h4>
		    <ul id="data_sublist" >
                    <li></li>
                    <li></li>                   
            </ul>
        </td>
		<td class='topic_description' onclick="displaySubList(event,'data')"></td>
	</tr>
	</tbody>
</table>

@index:
- kanban/kanban_init.md
- kanban/templates.md
- kanban/adding_items.md
- kanban/work_with_data.md
- kanban/configuration.md
- kanban/events.md