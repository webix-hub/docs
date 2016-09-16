Working with Sheets
=====================

Hiding/Showing Headers and Gridlines
------------------------------------

###Hiding Headers

The headers of rows and columns of a sheet can be hidden with the help of the api/ui.spreadsheet_hideheaders.md method.

<img src="spreadsheet/hidden_headers.png">

You should pass the necessary state of headers as a parameter:

~~~js
// hide headers
$$("ssheet").hideHeaders(true);
// show headers
$$("ssheet").hideHeaders(false);
~~~

{{sample 65_spreadsheet/02_api/04_borders_headers.html}}

###Hiding Gridlines

There's also a possibility to hide the lines of the SpreadSheet grid.

<img src="spreadsheet/hidden_gridlines.png">

Use the hideGridlines() method for this purpose.
The method takes the boolean parameter *state* as a parameter:

~~~js
// hide grid lines
$$("ssheet").hideBorders(true);
// show grid lines
$$("ssheet").hideBorders(false);
~~~

{{sample 65_spreadsheet/02_api/04_borders_headers.html}}