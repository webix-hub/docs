Working with Data
====================

Searching items
-------------

It's possible to search necessary files and folders in File Manager. You can search items by entering a letter or a letter combination in the Search control.

The following methods are used to organize search of files/folders:


The <a href="file_manager/api_reference.md#getsearchdata">getSearchData()</a> method gets an array of items (files, folders) that contains text in their names

~~~js
var searchResults = fmanager.getSearchData(id,text);
~~~


The <a href="file_manager/api_reference.md#showresults">showSearchResults()</a> method searches text in the active folder and displays the results on the screen.

~~~js
fmanager.showSearchResults(text);
~~~


The <a href="file_manager/api_reference.md#hideresults">hideSearchResults()</a> method hides search results

~~~js
fmanager.showSearchResults();
~~~

Tab and Arrow Navigation
-----------------------

File Manager provides you with a handy keyboard navigation through the Tree and File views. 

You just need to define the **navigation** property to true in the config of Tree view.

- the Up arrow key - moves the selection up;
- the Down arrow key - moves the selection down;
- the Right arrow key - expands the selected tree node;
- the Left arrow key - collapses the selected tree node.

To switch between the Tree and Files view, use the **Tab** button and **Shift+Tab** combination, respectively.

To download a file, press the Enter button or double-click the necessary file.

