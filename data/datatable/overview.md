DataTable Overview
===========

<a href="http://webix.com/widget/datatable/" title="webix datatable widget">DataTable</a> is a pure JavaScript component that provides professional look-and-feel and convenient programming model
 for displaying data in a scrollable and sortable table. It's a powerful yet easy-to-use  control that 
 supports different data sources (xml, json, csv, jsarray, html tables) and has various possibilities 
 (filtering, sorting, pagination, resizing, styling, copying etc.) still being  very fast handling 
 thousands of records (dynamic loading).

Main features
-----------------

<dl>
<dt><a href="datatable/supported_data_types.md">1. Supported data formats: xml, json, jsarray, csv</a></dt>
<dd>Developers can use their favorite formats to specify data. All popular data formats are supported.</dd>
<br>
<dt><a href="datatable/loading_data.md#static_html_table">2. Initializing from an HTML table</a></dt>
<dd>Any HTML table can be turned into DataTable by a single command. </dd>
<br>
<dt><a href="api/refs/ui.datatable.md">3. Linkable tables</a></dt>
<dd>This feature allows developers to create multiple DataTable instances on a page and easily implement various relationships through APIs.</dd>
<br>
<dt><a href="desktop/serverside.md">4. Simple integration with server side </a></dt>
<dd>Simple integration with any server side solution, such as PHP, .NET, Java.</dd>
<br>
<dt><a href="api/refs/ui.datatable.md">5. Full API support</a></dt>
<dd>A full range of API with the detailed descriptions is available.</dd>
<br>
<dt><a href="datatable/internationalization.md">6. Support for internationalization</a></dt>
<dd>Support for internationalization allows applications be translated and modified into local versions for thousands of languages.</dd>
<br>
<dt><a href="datatable/columns_configuration.md">7. Flexible columns </a></dt>
<dd>Each column in DataTable is configured individually: width, height, color etc.</dd>
<br>
<dt><a href="datatable/headers_footers.md">8. Complex headers and footers</a></dt>
<dd>The header(footer) can be presented as a single or multi line (the number of sublevels is unlimited) and contain almost any content: text, an image, an html input, a link, a built-in filter, colspans, rowspans.</dd>
<br>
<dt><a href="datatable/selection.md">9. Different selection modes</a></dt>
<dd>You can set 7 different modes specifying how data will be selected by:  cell, row, column, multi cell, multi row, multi column, block.</dd>
<br>
<dt><a href="datatable/styling.md">10. Styling with standard css</a></dt>
<dd>You can use CSS in conjunction with DataTable content to achieve the desired look-and-feel. Css can be applied to the whole table or to a specific column, row, cell.</dd>
<br>
<dt><a href="datatable/sizing.md#resizing">11. Resizable columns and rows </a></dt>
<dd>Columns width or rows height can be changed by dragging the related border.</dd>
<br>
<dt><a href="datatable/copying.md">12. Copying to/from clipboard</a></dt>
<dd>By common CTRL+C/CTRL+V keyboard shortcuts data can be copied to some other application for further processing or moved within one or several DataTables.</dd>
<br>
<dt><a href="datatable/filtering.md">13. On-the-fly filtering</a></dt>
<dd>The library offers abundant possibilities of filtering, starting from built-in filters (text and select) and ending with fully custom filtering logic.</dd>
<br>
<dt><a href="datatable/sorting.md">14. Sorting a column by clicking the header with data type detection</a></dt>
<dd>This feature allows users to sort data (according to one of 4 predefined sorting types: integer, date, string and string_strict) by a single clicking the header. Custom sorting rule can be defined as well.</dd>
<br>
<dt><a href="datatable/paging.md">15. Variable length and localizable pagination</a></dt>
<dd>One or several pagers can be added to the app to display data page by page. Data will not be retrieved from server side until the related page is opened. The number of rows per page, templates for navigation controls are set up. </dd>
<br>
<dt><a href="datatable/frozen_columns.md">16. Fixed one or more left (right) columns when table is scrolled horizontally</a></dt>
<dd>The library provides the 'split' mode that allows you to have the table separated into two parts: 'fixed' and 'scrolled'.</dd>
<br>
<dt><a href="datatable/columns_configuration.md#hidingshowingcolumns">17. Possibility to show or hide columns</a></dt>
<dd>Any column in the table can be hidden (showed) programmatically.</dd>
<br>
<dt><a href="datatable/formulas.md">18. Math formulas for cells</a></dt>
<dd>Developers have an opportunity to load data that are stored as mathematical expressions. DataTable parses, evaluates such expressions and presents result in the related cells. </dd>
<br>
<dt><a href="datatable/sizing.md#scrolling">19. Scrolling options for table viewport</a></dt>
<dd>When your viewport is less than a page you can enable vertical(horizontal) scrolling to be able to see the hidden info. You also have the possibility to enable scrolling by whole rows.</dd>
<br>
<dt><a href="datatable/sizing.md#settingthefixedsize">20. Possibility to set different heights for rows and different widths for columns</a></dt>
<dd>You can set different widths(heights) for columns(rows). Set values will be saved regardless of any other enabled size parameters. </dd>
<br>
<dt><a href="datatable/export.md">21. Export to PDF, Excel</a></dt>
<dd>DataTable can be exported to PDF, Excel for further processing. Besides, you can define how the table will look in the document after it is exported by configuring various server side options.</dd>
<br>
<dt><a href="datatable/integration.md">22. Integration with the Webix 3 library</a></dt>
<dd>The library can be integrated with three Webix 3 components: WebixLayout, WebixGrid and WebixMenu.</dd>
<br>
<dt><a href="datatable/integration.md#jqueryintegration">23. Integration with jQuery</a></dt>
<dd>DataTable is integrated with jQuery that allows you to follow the main mantra of the jQuery library while developing - running with the least amount of configuration.</dd>
<br>
<dt><a href="datatable/loading_data.md#loadingbigdatasetsdynamic">24. Dynamically fetching the rows from the server when the table is scrolled up and down</a></dt>
<dd>Working with large datasets, developer can load data dynamically to reduce complexity and improve performance. Polling interval and the number of loaded records are controlled.</dd>
<br>
<dt><a href="datatable/events_handling.md">25. Callbacks for all events: load, sorting, etc. </a></dt>
<dd>Numerous events lets you handle any action or proceeding that can happen in the app.</dd>
</dl> 




