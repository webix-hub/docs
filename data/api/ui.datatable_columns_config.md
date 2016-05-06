columns
=============


@short:configures columns of the table
	

@type: array
@example:
webix.ui({
	view:"datatable",
	...
	columns:[
		{ id:"rank",	header:{ text:"#", rowspan:2}, width:50, css:"rank"},
		{ id:"title",	header:["Film title", {text:"Second line", colspan:3}]},
		{ id:"year",	header:["Year",""],	width:80},
		{ id:"votes",	header:["Votes",""], width:100}
	]
});



@template:	api_config

@related:
		datatable/columns_configuration.md
@relatedsample:
		15_datatable/12_header_footer/03_multiline.html
		15_datatable/20_templates/04_numbers.html
		15_datatable/20_templates/07_pre_processing.html

@descr:
Each object in the array specifies a single column. An object can take the following attributes:

<table class="webixdoc_links">
	<tbody>
    	<tr>
			<td class="webixdoc_links0"><b>adjust</b></td>
			<td>(<i>boolean, string</i>) adjusts the width of the column to fit the related content size.<br>
            The following values are possible: 
            <ul>
            <li><b>"data"</b> - adjusts column width to the content of the widest item in it</li>
			<li><b>"header"</b> - adjusts column width to its header content</li>
			<li><b>true</b> - searches for the widest item among data and header(s) and adjusts column width to its content</li>
            </ul>
            </td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>css</b></td>
			<td>(<i>string</i>) the name of a css class that will be applied to the column</td>
		</tr>
        <tr>
			<td class="webixdoc_links0" style="vertical-align: top;"><b>cssFormat</b></td>
			<td>(<i>function</i>) sets a function that takes a data property value as a parameter and returns object with css properties ( or the name of a css class) that will be applied to a cell
            with the related value.<br>The parameters are as follows:
            	<ul>
    			<li><b>cell value</b></li>
    			<li><b>row item object</b>( all values for the current row )</li> 
    			<li><b>row id</b></li>
    			<li><b>column id</b></li>
                </ul>
            </td>
		</tr>
        <tr>
        	<td class="webixdoc_links0" style="vertical-align: top;"> <b>editor</b></td>
            <td style="vertical-align: top;">
            	(<i>string</i>) the type of the column editors. The attribute can take only one of a predefined set of values.<br> The predefined values are:
				<ul>
					<li><b>"text"</b> -   a single line text editor</li>
					<li><b>"inline-text"</b> - a custom text editor </li>
                    <li><b>"select"</b> - a dropdown list </li>
                    <li> <a href="desktop/editing.md">and 9 more</a> </li>
				</ul>
			</td>
		</tr>
        <tr>
        	<td class="webixdoc_links0" style="vertical-align: top;"> <b>editAction</b></td>
            <td style="vertical-align: top;">
            	(<i>string</i>) the type of an action that would open datatable cell for editing.<br> The predefined values are:
				<ul>
					<li><b>"click"</b> - (default)  a single mouse click</li>
					<li><b>"dblclick"</b> - a double mouse click </li>
                    <li><b>"custom"</b> - allows adding any custom action to open the cell (descibed separately) </li>
				</ul>
			</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>fillspace</b> </td>
			<td>(<i>boolean, number</i>) forces the column to widen for filling the unused table space.<br><br>            	In case of numeric values other than 1 the columns will distribute the available space proportionally according to the numbers.  
            </td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>format</b></td>
			<td>(<i>function</i>) the <a href="datatable/columns_configuration.md#dataformats">format</a> of data presentation</td>
		</tr>
        <tr>
			<td class="webixdoc_links0" style="vertical-align: top;"> <b>footer</b></td>
			<td style="vertical-align: top;">
				(<i>string, array</i>) specifies the footer of the column. As an array, the footer can contain both string and object values.
				<br> <br> Object values can have the following attributes:
				<ul>
					<li><b>text</b> -  <i>(string)</i> the text label of the column footer</li>
					<li><b>content</b> -  <i>('textFilter', 'selectFilter' or 'summColumn')</i> the built-in filter or counter </li>
					<li><b>colspan</b> -  <i>(number)</i> the number of rows a cell should span</li>
					<li><b>rowspan</b> -  <i>(number)</i> the number of columns a cell should span</li>
				</ul>
			</td>
		</tr>
        <tr>
			<td class="webixdoc_links0" style="vertical-align: top;"> <b>header</b></td>
			<td style="vertical-align: top;">
				(<i>string, array</i>) specifies the header of the column. As an array, the header can contain both string and object values.
				<br> <br> Object values can have the following attributes:
				<ul>
					<li><b>text</b> -  <i>(string)</i> the text label of the column</li>
					<li><b>content</b> -  <i>('textFilter', 'selectFilter' or 'summColumn')</i> the built-in filter or counter </li>
					<li><b>colspan</b> -  <i>(number)</i> the number of rows a cell should span</li>
					<li><b>rowspan</b> -  <i>(number)</i> the number of columns a cell should span</li>
				</ul>
			</td>
		</tr>
         <tr>
        	<td class="webixdoc_links0" style="vertical-align: top;"> <b>hidden</b></td>
            <td style="vertical-align: top;">
            	(<i>boolean</i>) hides a column initially
			</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"> <b>id</b> </td>
			<td>(<i>string</i>) the id of the column</td>
		</tr>
        <tr>
        	<td class="webixdoc_links0" style="vertical-align: top;"> <b>liveEdit</b></td>
            <td style="vertical-align: top;">
            	(<i>bool</i>) sets on-the-go updating for the same data property used in different columns and edited in one of them
			</td>
		</tr>
		<tr>
			<td class="webixdoc_links0"><b>math</b></td>
			<td>(<i>string</i>) the math formula that applies to all cells of the column</td>
		</tr>
		<tr>
			<td class="webixdoc_links0" style="vertical-align: top;"><b>sort</b> </td>
			<td style="vertical-align: top;">
				(<i>string, function</i>) enables sorting for the column (triggered by a single click on the header) and assigns one of predefined sorting types or the name of a sorting function.
				<br><br>
				As a string the attribute can take only one of a predefined set of values.<br> The predefined values are:
				<ul>
					<li><b>"int"</b></li>
					<li><b>"date"</b></li>
					<li><b>"string"</b></li>
					<li><b>"string_strict" (case-sensitive 'string')</b></li>
				</ul>
			</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>template</b></td>
			<td>(<i>string, function</i>) the data template</td>
		</tr>
        <tr>
			<td class="webixdoc_links0"><b>width</b></td>
			<td>(<i>number</i>)  the width of the column</td>
		</tr>
</tbody>
</table>


