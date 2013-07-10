@link: api/datastore_filter.md

@params:
- callback		function		the callback function

@callback:
-obj    object    a data object

@example:
//filters by the 'text' data property. Presents just items with value "abc".

dtable.filter(function(obj){
	return obj.text.toString().indexOf("abc") != -1;
});

@descr:
### Alternative syntax

    
~~~js
dtable.filter('#text#',"abc");
~~~

where

- <i>'#text#'</i> - the template of data properties that need filtering. 
- <i>"abc"</i> - the filtering mask.