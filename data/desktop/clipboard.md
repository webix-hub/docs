Working with the clipboard
========================
Webix provides support for the clipboard operations in all data-containing components. For this purpose, the library supplies the api/refs/copypaste.md mixin. 

By default, the support is disabled. To enable it, set the api/copypaste_clipboard_config.md property to *true* :

{{snippet
Enabling the clipboard support
}}
~~~js
webix.ui({
    view:"list", 
    ...
    clipboard: true,
});
~~~
{{sample
	05_list/09_copypaste.html
}}

In 3 components this mixin is already included. These components are:

- datatable/index.md   (<i>has extended support. See [details](datatable/copying.md)</i>);
- datatree/index.md  (<i>has extended support. See [details](datatree/copying.md)</i>);
- desktop/list.md.

If you want to work with the clipboard in any other data-containing component, you should extend it with api/refs/copypaste.md class. For example, to add the support to DataView use the technique shown below:

~~~js
var webix.ui({
    view:"dataview", 
    id:"myview",
    ...
    clipboard: true,
});

webix.extend($$("myview"),webix.CopyPaste);
~~~




##Custom 'copy' function
To customize the way that the data will be stored in the clipboard (when the user presses CTRL+C) you should use the api/copypaste_templatecopy_config.md property. In that case, before transfering to the clipboard the copied data will be modified according to the specified template. 

{{note
To use the the api/copypaste_templatecopy_config.md property you need to set the api/copypaste_clipboard_config.md property to a value 'custom'.
}}

</br>
Let's take a simple example: you have a list that displays the names of your favourite films. Assume, in the clipboard besides the film title you want to store its year and rating. 

Then:

- Set the api/copypaste_clipboard_config.md property to the 'custom' value;
- Specify the api/copypaste_templatecopy_config.md property like this (as a parameter, the template function takes the data item object):

~~~js
var films_set = [
	{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790, rating:9.2},
	{ id:2, title:"The Godfather",            year:1972, votes:511495, rating:9.2},
	{ id:3, title:"The Godfather: Part II",   year:1974, votes:319352, rating:9.0},
	{ id:5, title:"My Fair Lady",             year:1964, votes:533848, rating:8.9}
];

webix.ui({
    container:"box",
	view:"list", 
    data:films_set,
    template:"#title#",
    clipboard: "custom",
    templateCopy: function(item) {
        return item.title+" (year: "+ item.year+", rating: "+item.rating+")";
    }
});
~~~
</br>

<img src='desktop/custom_copy_function.png'/>

{{sample
	05_list/09_copypaste.html
}}
##Custom 'paste' function
To customize the way that the data will be retrieved from the clipboard to a Webix component you should use the api/copypaste_onpaste_event.md event.

The event fires when the user presses Ctrl+V keys combination and as a parameter, the handler function takes the text stored in the clipboard.

{{note
To use the the api/copypaste_onpaste_event.md event you need to set the api/copypaste_clipboard_config.md property to a value 'custom'.
}}


~~~js
var films_set = [
	{ id:1, title:"The Shawshank Redemption", year:1994, votes:678790, rating:9.2},
	{ id:2, title:"The Godfather",            year:1972, votes:511495, rating:9.2},
	{ id:3, title:"The Godfather: Part II",   year:1974, votes:319352, rating:9.0},
	{ id:5, title:"My Fair Lady",             year:1964, votes:533848, rating:8.9}
];

webix.ui({
	view:"list", 
    id:"mylist",
	...
	clipboard: "custom"
});
$$("mylist").attachEvent("onPaste", function(text) {
	text = text.split(" , ");
				
	var sel = this.getSelectedId(true);
	for (var i = 0; i < sel.length; i++) {
		var item = this.getItem(sel[i]);
		item.title = text[0];
		item.year = text[1];
		item.votes = text[2];
		item.rating = text[3];
		this.refresh(sel[i]);
	}

});
~~~

{{sample
	05_list/09_copypaste.html
}}

##Clipboard Events

- **onPaste**  - fires when Ctrl+V shortcut is pressed:

~~~js
tree.attachEvent("onPaste", function(text) {
        webix.message("Node is pasted: " + text);
});
~~~

{{sample 17_datatree/19_copypaste/04_paste_custom.html }}

@complexity:2